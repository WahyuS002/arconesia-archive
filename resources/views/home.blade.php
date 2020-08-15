@extends('layouts.frontend')

@section('content')
    <!-- Jumbotron -->
    <div class="container-fluid smaller pb-5">
        <div class="container">
            <div class="row h100">
                <div class="col-lg-12 col-xl-6 p-5 mt-2" data-sal-duration="2000" data-sal-dalay="100"
                    data-sal-easing="ease-out-bounce" data-sal="slide-right">
                    <h1 data-sal-duration="2000" data-sal-dalay="100" data-sal-easing="ease-out-bounce"
                        class=" text-uppercase">Arco <br> nesia.</h1>
                    <br>
                    <h3>one stop platform for future agriculture in Indonesian</h3>
                    <hr>
                    <button type="button" class=" d-inline hbtn hb-fill-right bg-color1  pl-4 pr-4">LEARN
                        MORE</button>
                    <br>
                </div>
                <div class="col-lg-12 col-xl-6 h50 p-5">
                    <img class="card-img-top" style="height: 80vh;" src="{{ asset('frontend/images/7.svg') }}" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>

    <!-- Vetical Space -->
    <div class="container h20"></div>

    <!-- About Us -->
    <div class="container-fluid smaller h30  pb-5">
        <div class="container">
            <div class="row ">
                <h3 data-sal-duration="2000" data-sal-dalay="500" data-sal-easing="ease-out-bounce"
                    data-sal="slide-right" class="text-uppercase pt-5 pr-5 pl-5">Arconesia merupakan Platform yang
                    membantu petani
                    dalam
                    meningkatkan kemampuan
                    produksi, dengan prinsip-prinsip Agroekologi.</h3>
                <div class="col-xl-7 col-lg-12 p-5 mb-5" data-sal-duration="2000" data-sal-dalay="500"
                    data-sal-easing="ease-out-bounce" data-sal="slide-right">
                    <hr>
                    <p>Agroekologi adalah penerapan konsep dan prinsip ekologi melalui optimalisasi interaksi antara
                        tanaman, hewan, dan manusia yang berbasis pada pengetahuan tradisional demi menuju sistem
                        pertanian yang berkelanjutan.</p>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>* Kolaborasi</p>
                                <p>* Bagi Hasil, Hemat Biaya</p>
                                <p>* Ramah Lingkungan</p>
                            </div>
                            <div class="col-lg-6">
                                <p>* Panen Lebih Cepat</p>
                                <p>* Tahan perubahan iklim</p>
                                <p>* Terhubung dengan Marketplace</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    &nbsp; <button type="button" class="hbtn hb-fill-right bg-color1  pl-4 pr-4">ABOUT
                        US</button>
                </div>
                {{-- <div class="col-lg-12 col-xl-5 bg-cover mb-5 mt-5 h50" style="background-image: url(images/5.svg);"> --}}
                <div class="col-lg-12 col-xl-5 bg-cover mb-5 mt-5 h50" style="background-image:url({{url('frontend/images/5.svg')}})">
                </div>
            </div>
        </div>
    </div>

    <!-- Vetical Space -->
    <div class="container h20"></div>

    <!-- Mart -->
    <div class="container-fluid smaller h100  pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-xl-4 p-5 mb-2" data-sal-duration="2000" data-sal-dalay="100"
                    data-sal-easing="ease-out-bounce" data-sal="slide-right">
                    <h3 class="mb-5 text-uppercase">SELALU SEGAR,
                        LANGSUNG DARI LADANG</h3>
                    <p>
                        Komoditas-komuditas segar langsung dari petani dengan harga yang sangat wajar</p>
                    <hr>
                    <button type="button" class="hbtn hb-fill-right bg-color1  pl-4 pr-4"> GO TO MART</button>
                    <hr>
                    <br>
                </div>
                <div class="col-lg-12 col-xl-8 mb-5">
                    <div class="container">
                        <div class="row">
                            <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                                <a href="">
                                    <div class="bg-cover h35" style="background-image: url({{ url('frontend/images/mart1.jpeg') }});">               
                                    </div>
                                    <div class="overlay color4 justify-content-around d-flex flex-column text-center">
                                        <h5 class="hoverfont">Kopi</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                                <a href="">
                                    <div class="bg-cover h35" style="background-image: url({{ url('frontend/images/mart2.jpeg') }});">
                                    </div>
                                    <div class="overlay color4 justify-content-around d-flex flex-column text-center">
                                        <h5 class="hoverfont">Beras</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                                <a href="">
                                    <div class="bg-cover h35" style="background-image: url({{ url('frontend/images/mart3.jpeg') }});">
                                    </div>
                                    <div class="overlay color4 justify-content-around d-flex flex-column text-center">
                                        <h5 class="hoverfont">Bawang</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                                <a href="">
                                    <div class="bg-cover h35" style="background-image: url({{ url('frontend/images/mart4.jpeg') }});">
                                    </div>
                                    <div class="overlay color4 justify-content-around d-flex flex-column text-center">
                                        <h5 class="hoverfont">Cabai</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                                <a href="">
                                    <div class="bg-cover h35" style="background-image: url({{ url('frontend/images/mart5.jpeg') }});">
                                    </div>
                                    <div class="overlay color4 justify-content-around d-flex flex-column text-center">
                                        <h5 class="hoverfont">Jagung</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                                <a href="">
                                    <div class="bg-cover h35" style="background-image: url({{ url('frontend/images/mart6.jpeg') }});">
                                    </div>
                                    <div class="overlay color4 justify-content-around d-flex flex-column text-center">
                                        <h5 class="hoverfont">KACANG
                                        </h5>
                                    </div>
                                </a>
                            </div>
                            <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                                <a href="">
                                    <div class="bg-cover h35" style="background-image: url({{ url('frontend/images/mart7.jpeg') }});">
                                    </div>
                                    <div class="overlay color4 justify-content-around d-flex flex-column text-center">
                                        <h5 class="hoverfont">Kelapa</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                                <a href="">
                                    <div class="bg-cover h35" style="background-image: url({{ url('frontend/images/mart9.jpeg') }});">
                                    </div>
                                    <div
                                        class="overlay color4 p-4 justify-content-around d-flex flex-column text-center">
                                        <h5 class="hoverfont">Lihat lebih banyak</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Invest -->
    <div class="container-fluid smaller  pb-5">
        <div class="container">
            <div class="row mb-3 justify-content-center mt-5 h50">

                <div class="col-xl-6 col-lg-12 text-left" data-sal-duration="2000" data-sal-dalay="100"
                    data-sal-easing="ease-out-bounce" data-sal="slide-right">
                    <div class="p-4">
                        <h3 class="text-uppercase">Kami berkomitmen untuk mendampingi Petani dan
                            menyalurkan Bantuan
                            Pendanaan dari Investor.
                        </h3>
                        <br>
                        <br>
                        <p>Arconesia adalah tempat yang tepat untuk menumbuhkan uang anda dengan cara membantu para
                            petani dalam
                            memproduksi bahan makanan
                        </p>
                        <hr>
                        <button type="button" class="hbtn hb-fill-right bg-color1  pl-4 pr-4"> LIHAT LAHAN
                        </button>
                        <hr>
                        <br> <br>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12">
                    <div class="container-fluid">

                        <div class="card p-2">

                            <img class="card-img-top" style="height: 40vh;" src="{{ asset('frontend/images/6.svg') }}" alt="Card image cap">
                            <hr>
                            <br>
                            <div class="row  pb-3 pr-5 pl-5">
                                <div id="Indicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#Indicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#Indicators" data-slide-to="1"></li>
                                        <li data-target="#Indicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner mb-5">
                                        <div class="carousel-item active">
                                            <h5 style="text-transform: uppercase;">Pilih lahan yang
                                                ingin anda investasi
                                            </h5>
                                            <hr>
                                            <p>Lihat cerita setiap petani pertimbangkan apa yang mereka tawarkan dan
                                                tentukan pilhan anda
                                                <br><br>
                                            </p>
                                        </div>
                                        <div class="carousel-item">
                                            <h5 style="text-transform: uppercase;">Berinvestasi dan
                                                terima kontrak anda</h5>
                                            <hr>
                                            <p>Setelah menentukan pilihan, anda dapat melakukan pembayaran dan
                                                menerima
                                                kwitansi
                                                <br><br>
                                            </p>
                                        </div>
                                        <div class="carousel-item">
                                            <h5 style="text-transform: uppercase;">Terima dana dan
                                                keuntungan anda</h5>
                                            <hr>
                                            <p>Untuk setiap akhir masa produksi, kami akan mengirimkan dana dan
                                                keuntungan langsung ke rekening bank anda </p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Baris Cards Invest -->
    <div class="container smaller">
        <h3 class="text-muted text-right hoverfont">
            <span class="smallerfont color1" style="font-size: 0.5em;">sedang berjalaan</span>
            PROYEK PENDANAAN </h3>
        <hr>
        <div class="row">
            <!--INVEST CARD 1 -->
            <div class="col-lg-4">
                <a href="">
                    <div class="card mb-3 mt-1 warp" style="overflow: hidden;">
                        <img class="card-img-top bg-cover" src="{{ asset('frontend/images/invest1.jpg') }}" alt="Card image cap">
                        <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont">
                            INVEST
                        </h5>
                        <div class="card-body">
                            <div class="card-text">
                                <h5>Tumpang Sari Semangka Cabai 5 Ha 5 bln</h5>
                                <hr>
                                <p>
                                    <i class="fa fa-map-marker "></i> Kab. Seluma, Bengkulu
                                </p>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6"></div>
                                        <div class="col-lg-6">
                                            <p><span>21</span> Investor</p>
                                        </div>
                                    </div>
                                    <div class="row progress">
                                        <div class="progress-bar bg-color1" style="width:30%"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Progress :</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><b> 30% </b></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Tercapai :</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><b> Rp 20 jt </b></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Kebutuhan :</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><b> Rp 200 jt </b></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <a href="room.html"><button type="button"
                                                    class="hbtn hb-fill-right bg-color1 pl-4 pr-4">
                                                    INVEST
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!--INVEST CARD 1 END-->
            <!--INVEST CARD 2 -->
            <div class="col-lg-4">
                <a href="">
                    <div class="card mb-3 mt-1 warp" style="overflow: hidden;">
                        <img class="card-img-top bg-cover" src="{{ asset('frontend/images/invest2.jpg') }}" alt="Card image cap">
                        <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont">
                            INVEST
                        </h5>
                        <div class="card-body">
                            <div class="card-text">
                                <h5>Tumpang Sari Tomat Cabai 10 Ha 6 Bln</h5>
                                <hr>
                                <p>
                                    <i class="fa fa-map-marker "></i> Kab. Seluma, Bengkulu
                                </p>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6"></div>
                                        <div class="col-lg-6">
                                            <p><span>21</span> Investor</p>
                                        </div>
                                    </div>
                                    <div class="row progress">
                                        <div class="progress-bar bg-color1" style="width:50%"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Progress :</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><b> 50% </b></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Tercapai :</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><b> Rp 20 jt </b></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Kebutuhan :</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><b> Rp 200 jt </b></p>
                                        </div>
                                    </div>


                                    <hr>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <a href="room.html"><button type="button"
                                                    class="hbtn hb-fill-right bg-color1 pl-4 pr-4">
                                                    INVEST
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <!--INVEST CARD 2 END-->
            <!--INVEST CARD 3 -->
            <div class="col-lg-4">
                <a href="">
                    <div class="card mb-3 mt-1 warp" style="overflow: hidden;">
                        <img class="card-img-top bg-cover" src="{{ asset('frontend/images/invest3.jpeg') }}" alt="Card image cap">
                        <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont">
                            INVEST
                        </h5>
                        <div class="card-body">
                            <div class="card-text">
                                <h5>Tumpang Sari Melon Cabai 30 Ha 4 Bln</h5>

                                <hr>
                                <p>
                                    <i class="fa fa-map-marker "></i> Kab. Seluma, Bengkulu
                                </p>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6"></div>
                                        <div class="col-lg-6">
                                            <p><span>21</span> Investor</p>
                                        </div>
                                    </div>
                                    <div class="row progress">
                                        <div class="progress-bar bg-color1" style="width:90%"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Progress :</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><b> 90% </b></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Tercapai :</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><b> Rp 20 jt </b></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Kebutuhan :</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><b> Rp 200 jt </b></p>
                                        </div>
                                    </div>


                                    <hr>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <a href="room.html"><button type="button"
                                                    class="hbtn hb-fill-right bg-color1 pl-4 pr-4">
                                                    INVEST
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <!--INVEST CARD 3 END-->
        </div>
        <hr>
        <h3 class="text-muted text-left hoverfont">PROYEK PENDANAAN <span class="smallerfont color1"
                style="font-size: 0.5em;">sedang berjalaan</span></h3>
    </div>
    <!-- Baris Cards Invest END -->

    <!-- Vetical Space -->
    <div class="container h20"></div>

    <!-- Room -->
    <div class="container-fluid smaller mb-5 mt-5  pb-5">
        <div class="container">
            <!-- Room Preview Start -->
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="text-muted text-left smallerfont hoverfont">POSTINGAN ROOM <span
                            class="smallerfont color1" style="font-size: 0.5em;">TERBARU</span></h3>
                    <hr>
                    <!-- Start Post -->
                    <div class="card mb-3">
                        <a href="">
                            <div class="row no-gutters warp" style="overflow: hidden;">
                                <div class="col-md-5 m-3">
                                <img src="{{ asset('frontend/images/mart7.jpeg') }}" class="bg-cover card-img" style="object-fit: cover;"
                                        alt="images//mart7.jpeg">
                                    <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> READ MORE </h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">How you can keep alive wild animals for a long
                                            period.
                                        </h5>
                                        <!-- ARTICLE DATE -->
                                        <p class=" text-muted pr-1 text-right"
                                            style="font-size: smaller; text-transform: uppercase;">
                                            APRIL 15, 2019
                                        </p>
                                        <!-- ARTICLE DATE END -->
                                        <hr>
                                        <p class="card-text"> According to a survey the perceived higher cost of
                                            environmentally-friendly
                                            products
                                            is the major holdup to consumers going green.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Post -->
                    <!-- Start Post -->
                    <div class="card mb-3">
                        <a href="">
                            <div class="row no-gutters warp" style="overflow: hidden;">
                                <div class="col-md-5 m-3">
                                    <img src="{{ asset('frontend/images//mart7.jpeg') }}" class="bg-cover card-img" style="object-fit: cover;"
                                        alt="images//mart7.jpeg">
                                    <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> READ MORE </h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">How you can keep alive wild animals for a long
                                            period.
                                        </h5>
                                        <!-- ARTICLE DATE -->
                                        <p class=" text-muted pr-1 text-right"
                                            style="font-size: smaller; text-transform: uppercase;">
                                            APRIL 15, 2019
                                        </p>
                                        <!-- ARTICLE DATE END -->
                                        <hr>
                                        <p class="card-text"> According to a survey the perceived higher cost of
                                            environmentally-friendly
                                            products
                                            is the major holdup to consumers going green.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Post -->
                    <!-- Start Post -->
                    <div class="card mb-3">
                        <a href="">
                            <div class="row no-gutters warp" style="overflow: hidden;">
                                <div class="col-md-5 m-3">
                                    <img src="{{ asset('frontend/images//mart7.jpeg') }}" class="bg-cover card-img" style="object-fit: cover;"
                                        alt="images//mart7.jpeg">
                                    <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> READ MORE </h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">How you can keep alive wild animals for a long
                                            period.
                                        </h5>
                                        <!-- ARTICLE DATE -->
                                        <p class=" text-muted pr-1 text-right"
                                            style="font-size: smaller; text-transform: uppercase;">
                                            APRIL 15, 2019
                                        </p>
                                        <!-- ARTICLE DATE END -->
                                        <hr>
                                        <p class="card-text"> According to a survey the perceived higher cost of
                                            environmentally-friendly
                                            products
                                            is the major holdup to consumers going green.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Post -->

                </div>

                <div class="col-lg-4">
                    <h3 class="text-muted text-left smallerfont hoverfont">EVENTS <span class="smallerfont color1"
                            style="font-size: 0.5em;">Mendatang</span></h3>
                    <hr>
                    <div class="card mb-4 mt-1 warp" style="overflow: hidden;">
                        <a href=""><img class="card-img-top bg-cover"
                                src="https://gramotech.com/html/ecova/images/ep1.jpg" alt="Card image cap">
                            <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> READ MORE </h5>
                            <div class="card-body">
                                <h5>Forest Planting Campaign</h5>
                                <!-- ARTICLE DATE -->
                                <p class=" text-muted text-left" style="font-size: smaller; text-transform: uppercase;">
                                    29 August, 2019 &nbsp; &nbsp; 08:00 am - 01:00 pm
                                </p>
                                <!-- ARTICLE DATE END -->
                                <p class="card-text"> Green Gardendening Center, New York, USA</p>

                            </div>
                        </a>

                    </div>
                    <div class="card mb-4 mt-1 warp" style="overflow: hidden;">
                        <a href=""><img class="card-img-top bg-cover"
                                src="https://gramotech.com/html/ecova/images/ep2.jpg" alt="Card image cap">
                            <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> READ MORE </h5>
                            <div class="card-body">
                                <h5>Forest Planting Campaign</h5>
                                <!-- ARTICLE DATE -->
                                <p class=" text-muted text-left" style="font-size: smaller; text-transform: uppercase;">
                                    29 August, 2019 &nbsp; &nbsp; 08:00 am - 01:00 pm
                                </p>
                                <!-- ARTICLE DATE END -->
                                <p class="card-text"> Green Gardendening Center, New York, USA</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <!-- Room Preview End -->
            <hr>
            <h3 class="text-muted text-right smallerfont hoverfont">POSTINGAN ROOM <span class="smallerfont color1"
                    style="font-size: 0.5em;">TERBARU</span> & EVENTS <span class="smallerfont color1"
                    style="font-size: 0.5em;">MENDATANG</span> </h3>
        </div>
    </div>
    <!-- END ROOM -->


    <!-- Vetical Space -->
    <div class="container h20"></div>

    <!-- Gallery -->
    <div class="container-fluid smaller mt-5">
        <div class="container">
            <h3 class="text-muted text-right hoverfont">GALERI AKTIFITAS <span class="smallerfont color1"
                    style="font-size: 0.5em;">TERBARU</span> </h3>
            <hr>
            <div class="row">
                <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                    <a href="">
                        <div class="bg-cover h35"
                            style="background-image: url(https://gramotech.com/html/ecova/images/agallery1.jpg);">
                        </div>
                        <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> SEE MORE </h5>
                    </a>
                </div>
                <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                    <a href="">
                        <div class="bg-cover h35"
                            style="background-image: url(https://gramotech.com/html/ecova/images/agallery2.jpg);">
                        </div>
                        <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> SEE MORE </h5>
                    </a>
                </div>
                <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                    <a href="">
                        <div class="bg-cover h35"
                            style="background-image: url(https://gramotech.com/html/ecova/images/agallery3.jpg);">
                        </div>
                        <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> SEE MORE </h5>
                    </a>
                </div>
                <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                    <a href="">
                        <div class="bg-cover h35"
                            style="background-image: url(https://gramotech.com/html/ecova/images/agallery4.jpg);">
                        </div>
                        <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> SEE MORE </h5>
                    </a>
                </div>
                <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                    <a href="">
                        <div class="bg-cover h35"
                            style="background-image: url(https://gramotech.com/html/ecova/images/agallery5.jpg);">
                        </div>
                        <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> SEE MORE </h5>
                    </a>
                </div>
                <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                    <a href="">
                        <div class="bg-cover h35"
                            style="background-image: url(https://gramotech.com/html/ecova/images/agallery6.jpg);">
                        </div>
                        <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> SEE MORE </h5>
                    </a>
                </div>
                <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                    <a href="">
                        <div class="bg-cover h35"
                            style="background-image: url(https://gramotech.com/html/ecova/images/agallery7.jpg);">
                        </div>
                        <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> SEE MORE </h5>
                    </a>
                </div>
                <div class="p-1 col-sm-6 col-lg-3 warp" style="overflow: hidden;">
                    <a href="">
                        <div class="bg-cover h35"
                            style="background-image: url(https://gramotech.com/html/ecova/images/agallery8.jpg);">
                        </div>
                        <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont"> SEE MORE </h5>
                    </a>
                </div>
            </div>
            <hr>
            <h3 class="text-muted text-left hoverfont">GALLERY AKTIFITAS <span class="smallerfont color1"
                    style="font-size: 0.5em;">TERBARU</span> </h3>
        </div>
    </div>
    <!-- Vetical Space -->
    <div class="container h20"></div>
@endsection