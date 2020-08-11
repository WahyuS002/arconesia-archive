<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Farm;
use App\FarmGallery;

class FarmController extends Controller
{
    public function index()
    {
        return view('farm.index', compact('farms'));
    }

    public function create()
    {
        return view('farm.create');
    }

    public function store(Request $request)
    {
        Farm::create($request->all());

        session()->flash('status', 'added new farm');

        return redirect()->back();
    }

    public function kyc()
    {
        return view('farm.kyc');
    }

    public function kycAbout()
    {
        return view('farm.kyc-about');
    }

    public function kycBank()
    {
        return view('farm.kyc-bank');
    }

    public function kycIdentity()
    {
        return view('farm.kyc-identity');
    }
}
