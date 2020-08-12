<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farmer;
use App\User;

class FarmerController extends Controller
{
    public function kyc()
    {
        return view('farm.kyc');
    }

    public function kycAbout()
    {
        return view('farm.kyc-about');
    }

    public function kycAboutStore(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;

        Farmer::updateOrCreate($data);

        return redirect()->route('kyc');
    }

    public function kycBank()
    {
        return view('farm.kyc-bank');
    }

    public function kycBankStore(Request $request)
    {
        $data = $request->except('_token');

        $uuid = auth()->user()->id;

        Farmer::updateOrCreate(['user_id' => $uuid], $data);

        return redirect()->route('kyc');
    }

    public function kycIdentity()
    {
        return view('farm.kyc-identity');
    }

    public function kycIdentityStore(Request $request)
    {
        $nama_foto_ktp = $request->file('foto_ktp')->getClientOriginalName();
        $nama_foto_kyc = $request->file('foto_kyc')->getClientOriginalName();

        $foto_ktp = $request->file('foto_ktp');
        $foto_kyc = $request->file('foto_kyc');

        $upload_ktp = $foto_ktp->storeAs("images/ktp", $nama_foto_ktp);
        $upload_kyc = $foto_kyc->storeAs("images/kyc", $nama_foto_kyc);

        $data = $request->except('_token');
        $data['foto_ktp'] = $upload_ktp;
        $data['foto_kyc'] = $upload_kyc;

        $uuid = auth()->user()->id;

        Farmer::updateOrCreate(['user_id' => $uuid], $data);

        $user = User::find($uuid);

        $user->is_kyc = 'waiting';
        $user->save();

        return redirect()->route('kyc');
    }
}
