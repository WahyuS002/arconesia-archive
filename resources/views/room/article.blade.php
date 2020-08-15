@extends('layouts.frontend')

@section('content')
    <!-- Vetical Space -->
    <div class="container h20"></div>

    <!-- POST -->
    <div class="container">
        <div class="row">
            <!--LEFT SIDE -->
            <div class="col-lg-9">
                <div class="container">
                    <div class="row">

                        <!-- CONTENT -->
                        <div class="col-lg-12">
                            <!-- TAGS -->
                            <p class="text-muted"> Nature \ Technology </p>
                            <!-- TAGS END -->

                            <!-- TITLE -->
                            <h3 class="card-title">Zero Gravity Cuisine: Reimagining the Experience of Space
                                Food</h3>
                            <!-- TITLE END -->
                            <hr>
                            <!-- ARTICLE DATE -->
                            <p class=" text-muted pr-1 text-right"
                                style="font-size: smaller; text-transform: uppercase;">
                                APRIL 15, 2019
                            </p>
                            <!-- ARTICLE DATE END -->

                            <div class="mb-5 mt-1" style="overflow: hidden;">
                                <!-- IMAGE -->
                                <img class="card-img-top bg-cover" src="{{ asset('frontend/images/mart7.jpeg') }}" alt="Card image cap">
                                <!-- IMAGE END -->
                                <hr>
                                <!-- BODY -->
                                <div>
                                    <br>
                                    <p class="card-text">
                                        This article is based on research currently being conducted by author Maggie
                                        Coblentz at the Rhode Island School of Design. The viewpoints in this article
                                        reflect those of Coblentz, and will be further explored in her thesis, currently
                                        in development, which examines the ways in which innovative food design can
                                        improve the health and happiness of astronauts on long-term missions.
                                    </p>
                                    <p class="card-text">
                                        It’s 2034, and after nearly a year of travel, a crew of NASA astronauts have
                                        entered low-Mars orbit. Here, they will perform research to learn more about
                                        what it will take for humans to land – and stay – on Mars. With this
                                        information, NASA will begin preparing for the final step in its decades-long
                                        endeavor: successful descent, landing, and extended resource use on Mars. If all
                                        goes according to plan, the astronauts will return to Earth in 2036.
                                    </p>
                                    <p class="card-text">
                                        Exciting as this may sound, there are still a multitude of challenges to be
                                        overcome before a mission to Mars is possible. Of course, there are the
                                        technical feats required to enter the planet’s orbit – not to mention the
                                        profound financial cost of such an endeavor. But there’s also another factor to
                                        consider, one that is often overlooked by those with big dreams of widespread
                                        space travel: astronaut happiness.
                                    </p>
                                    <br><br>
                                    <h5 class="card-title">
                                        Eating as Entertainment: Overcoming Boredom in Space
                                    </h5>
                                    <p>
                                        Boredom and depression are obstacles often faced by astronauts, particularly
                                        those on long missions – a detail that has not been ignored by those looking to
                                        Mars. Researchers are already studying the psychological and social effects of
                                        long space missions. The Hawai’i Space Exploration Analog and Simulation
                                        (HI-SEAS) Habitat, for example, is an analog habitat designed to mimic the
                                        conditions of a mission to Mars. Campaigns last 4-12 months and see crew members
                                        living together in close quarters and performing all the tasks associated with
                                        habitation on Mars.

                                        The first HI-SEAS study, conducted in 2013 for four months, focused on a
                                        specific aspect of astronaut wellbeing: eating. In addition to comparing the
                                        psychological and physiological benefits of two food systems, the study looked
                                        at the feasibility of using hydroponics on Mars. Based on his experiences,
                                        HI-SEAS crew commander Angelo Vermeulen reported a need for spices and herbs, as
                                        well as comfort foods and higher-protein options.
                                    </p>
                                    <br><br>
                                    <h5 class="card-title">
                                        The Challenges of Space Food
                                    </h5>
                                    <p>
                                        Some barriers to designing satisfying space food are better known than others.
                                        It might be obvious, for example, that a spacecraft must be equipped with enough
                                        non-perishable food items to feed a crew for the duration of their mission (plus
                                        emergency stores), or even that eating certain foods without the aid of gravity
                                        is difficult. But what about the other less-known challenges?

                                        For starters, reduced gravity affects the fluid distribution in an astronaut’s
                                        body upon arrival in space, leading to a change in taste perception, a temporary
                                        effect that could be reduced or altered by promoting interactions between
                                        different sensory modalities to improve taste perception. Additionally, while
                                        NASA’s current space food system offers some variability in menu items, the
                                        freeze-dried and pre-packaged MREs delivered in plastic bags do little to
                                        disrupt monotony or emulate the experience of preparing food and eating on
                                        Earth.
                                    </p>
                                </div>
                                <!-- BODY END -->
                            </div>
                        </div>
                        <!-- CONTENT END -->

                        <!-- Vetical Space -->
                        <div class="container h20"></div>


                        <!-- ADD COMMENT -->
                        <div class="container pb-5">
                            <h5 class="text-left pl-5 pr-5" style="font-size: smaller;"> LEAVE COMMENT </h5>
                            <hr>
                            <!-- COMMENT FORM -->
                            <form>
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="profile-comment"
                                            style="background-image: url({{ url('frontend/images/mart7.jpeg') }});">
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <!-- COMMENT TEXTAREA -->
                                        <textarea type="text-area" class="form-control smallerfont p-2"
                                            placeholder="ADD COMMENT" rows="1"></textarea>
                                        <!-- COMMENT TEXTAREA END -->
                                    </div>
                                    <div class="col-lg-2 text-right">
                                        <button type="submit"
                                            class=" text-center d-inline hbtn hb-fill-right bg-color1 pl-4 pr-4 smallerfont">COMMENT</button>
                                    </div>
                                </div>
                            </form>
                            <!-- COMMENT FORM END -->
                        </div>
                        <!-- ADD COMMENT END -->

                        <!-- COMMENT -->
                        <div class="container">
                            <h5 class="text-left pl-5 pr-5" style="font-size: smaller;"> 2 COMMENT </h5>
                            <hr>
                            <div class="mb-5">
                                <!-- PEOPLE COMMENT -->
                                <div class="row mb-3 pl-5">
                                    <div class="col-lg-1">
                                        <div class="profile-comment"
                                            style="background-image: url({{ url('frontend/images/mart5.jpeg') }});">
                                        </div>
                                    </div>
                                    <div class="col-lg-11">
                                        <p class="p-2 d-inline-block" style="font-weight: 900;">
                                            Joeby Ragpa
                                        </p>
                                        <p class="text-muted smallerfont p-2 d-inline-block"
                                            style="text-transform: uppercase;">
                                            August 6, 2016
                                        </p>
                                        <p class="smallerfont p-2">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex illum ducimus
                                            voluptatibus nulla inventore, quia ratione ea adipisci asperiores, non
                                            placeat dicta maxime accusantium voluptatum quis impedit cumque tenetur
                                            laudantium?
                                            <hr>
                                        </p>
                                    </div>

                                </div>
                                <!-- PEOPLE COMMENT END -->
                                <!-- PEOPLE COMMENT -->
                                <div class="row mb-3 pl-5">
                                    <div class="col-lg-1">
                                        <div class="profile-comment"
                                            style="background-image: url({{ url('frontend/images/mart5.jpeg') }});">
                                        </div>
                                    </div>
                                    <div class="col-lg-11">
                                        <p class="p-2 d-inline-block" style="font-weight: 900;">
                                            Joeby Ragpa
                                        </p>
                                        <p class="text-muted smallerfont p-2 d-inline-block"
                                            style="text-transform: uppercase;">
                                            August 6, 2016
                                        </p>
                                        <p class="smallerfont p-2">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex illum ducimus
                                            voluptatibus nulla inventore, quia ratione ea adipisci asperiores, non
                                            placeat dicta maxime accusantium voluptatum quis impedit cumque tenetur
                                            laudantium?
                                            <hr>
                                        </p>
                                    </div>
                                </div>
                                <!-- PEOPLE COMMENT END -->

                            </div>
                        </div>
                        <!-- COMMENT END -->

                        <!-- Vetical Space -->
                        <div class="container h20"></div>
                    </div>
                </div>
            </div>
            <!--LEFT SIDE END -->

            <!-- RIGHT SIDE -->
            <div class="col-lg-3 text-left">
                <div class="roomnav p-1">
                    <!-- Vetical Space -->
                    <div class="container h20"></div>

                    <!-- SOCIAL MEDIA LINKS -->
                    <div class="container-fluid ">
                        <h5>GIVE US A FOLLOW</h5>
                        <hr>
                        <br><br>
                        <a href="">
                            <p><i style="font-size: 1em;" class="pr-2 fa fa-facebook"></i> Facebook</p>
                            <br>
                        </a>
                        <a href="">
                            <p><i style="font-size: 1em;" class="pr-2 fa fa-instagram"></i> Instagram</p>
                            <br>
                        </a>
                        <a href="">
                            <p><i style="font-size: 1em;" class="pr-2 fa fa-twitter"></i> Twitter</p>
                            <br>
                        </a>
                        <br><br>
                    </div>
                    <!-- SOCIAL MEDIA LINKS END-->
                </div>


                <!-- AUTHOR -->
                <div class="container-fluid">
                    <h5 style="font-size: smaller;"> THE AUTHOR </h5>
                    <hr>
                    <!-- PROFILE IMAGES AUTHOR -->
                    <img class="card-img-top bg-cover" src="{{ asset('frontend/images/author.jpeg') }}">
                    <!-- PROFILE IMAGES END -->
                    <br><br>
                    <!-- AUTHOR NAME -->
                    <h5>Maggie Coblentz</h5>
                    <!-- AUTHOR NAME END -->
                    <hr>
                    <!-- AUTHOR DETAILS -->
                    <p>
                        Maggie Coblentz is a food designer pursuing a master’s in Industrial Design at the Rhode Island
                        School of Design. She is currently a researcher at Massachusetts Institute of Technology CoLab
                    </p>
                    <!-- AUTHOR DETAILS END-->
                    <br><br>
                </div>
                <!-- AUTHOR END -->
            </div>
            <!-- RIGHT SIDE END -->
        </div>
    </div>
    <!-- POST END -->

    <!-- REKOMENDASI -->
    <div class="container-fluid smaller">
        <h5 style="font-size: smaller;"> KEEP READING </h5>
        <hr>
        <div class="row">
            <!--REKOMENDASI CARD 1 -->
            <div class="col-lg-3">
                <a href="">
                    <div class="card mb-4 mt-1 warp" style="overflow: hidden;">
                        <a href=""><img class="card-img-top bg-cover" src="{{ asset('frontend/images/mart7.jpeg') }}" alt="Card image cap">
                            <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont">
                                READ
                            </h5>
                            <div class="card-body">
                                <!-- ARTICLE TITLE -->
                                <h5>Zero Gravity Cuisine: Reimagining the Experience of Space Food
                                </h5>
                                <!-- ARTICLE TITLE END -->

                                <!-- ARTICLE DATE -->
                                <p class=" text-muted pr-1 text-right"
                                    style="font-size: smaller; text-transform: uppercase;">
                                    APRIL 15, 2019
                                </p>
                                <!-- ARTICLE DATE END -->
                            </div>
                        </a>
                    </div>
                </a>
            </div>
            <!--REKOMENDASI CARD 1 END-->
            <!--REKOMENDASI CARD 1 -->
            <div class="col-lg-3">
                <a href="">
                    <div class="card mb-4 mt-1 warp" style="overflow: hidden;">
                        <a href=""><img class="card-img-top bg-cover" src="{{ asset('frontend/images/mart7.jpeg') }}" alt="Card image cap">
                            <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont">
                                READ
                            </h5>
                            <div class="card-body">
                                <!-- ARTICLE TITLE -->
                                <h5>Zero Gravity Cuisine: Reimagining the Experience of Space Food
                                </h5>
                                <!-- ARTICLE TITLE END -->

                                <!-- ARTICLE DATE -->
                                <p class=" text-muted pr-1 text-right"
                                    style="font-size: smaller; text-transform: uppercase;">
                                    APRIL 15, 2019
                                </p>
                                <!-- ARTICLE DATE END -->
                            </div>
                        </a>
                    </div>
                </a>
            </div>
            <!--REKOMENDASI CARD 1 END-->
            <!--REKOMENDASI CARD 1 -->
            <div class="col-lg-3">
                <a href="">
                    <div class="card mb-4 mt-1 warp" style="overflow: hidden;">
                        <a href=""><img class="card-img-top bg-cover" src="{{ asset('frontend/images/mart7.jpeg') }}" alt="Card image cap">
                            <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont">
                                READ
                            </h5>
                            <div class="card-body">
                                <!-- ARTICLE TITLE -->
                                <h5>Zero Gravity Cuisine: Reimagining the Experience of Space Food
                                </h5>
                                <!-- ARTICLE TITLE END -->

                                <!-- ARTICLE DATE -->
                                <p class=" text-muted pr-1 text-right"
                                    style="font-size: smaller; text-transform: uppercase;">
                                    APRIL 15, 2019
                                </p>
                                <!-- ARTICLE DATE END -->
                            </div>
                        </a>
                    </div>
                </a>
            </div>
            <!--REKOMENDASI CARD 1 END-->
            <!--REKOMENDASI CARD 1 -->
            <div class="col-lg-3">
                <a href="">
                    <div class="card mb-4 mt-1 warp" style="overflow: hidden;">
                        <a href=""><img class="card-img-top bg-cover" src="{{ asset('frontend/images/mart7.jpeg') }}" alt="Card image cap">
                            <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont">
                                READ
                            </h5>
                            <div class="card-body">
                                <!-- ARTICLE TITLE -->
                                <h5>Zero Gravity Cuisine: Reimagining the Experience of Space Food
                                </h5>
                                <!-- ARTICLE TITLE END -->

                                <!-- ARTICLE DATE -->
                                <p class=" text-muted pr-1 text-right"
                                    style="font-size: smaller; text-transform: uppercase;">
                                    APRIL 15, 2019
                                </p>
                                <!-- ARTICLE DATE END -->
                            </div>
                        </a>
                    </div>
                </a>
            </div>
            <!--REKOMENDASI CARD 1 END-->
        </div>
        <hr>
        <h5 class="text-right" style="font-size: smaller;"> KEEP READING </h5>
    </div>
    <!-- REKOMENDASI END -->


    <!-- Vetical Space -->
    <div class="container h20"></div>
@endsection