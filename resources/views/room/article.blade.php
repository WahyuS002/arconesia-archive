@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/jquery-comments/css/jquery-comments.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('plugins/jquery-comments/css/font-awesome.min.css') }}"> --}}
@endsection

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
                            <h3 class="card-title">{{ $post->title }}</h3>
                            <!-- TITLE END -->
                            <hr>
                            <!-- ARTICLE DATE -->
                            <p class=" text-muted pr-1 text-right"
                                style="font-size: smaller; text-transform: uppercase;">
                                {{ $post->created_at->diffForHumans() }}
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
                                    {!! $post->body !!}
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
                            <div id="comments-container"></div>                            
                        </div>
                        <!-- ADD COMMENT END -->

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

@section('js')
    <script type="text/javascript" src="{{ asset('plugins/jquery-comments/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery-comments/js/jquery-comments.js') }}"></script>

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#comments-container').comments({
            profilePictureURL: 'https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png',
            getComments: function(success, error) {                
                var commentsArray = [{
                id: 1,
                created: '2015-10-01',
                content: 'Lorem ipsum dolort sit amet',
                fullname: 'Simon Powell',
                upvote_count: 2,
                user_has_upvoted: false
                }];
                success(commentsArray);
            },
            postComment: function(commentJSON, success, error){
                $.ajax({                  
                    url: '/comment',
                    type: 'POST',
                    data: {
                        user_id: commentJSON.id,
                        post_id: commentJSON.id,
                        komentar: commentJSON.content,
                        tanggal: commentJSON.created,
                    },
                    success: success(commentJSON),
                    success: function(response){
                        alert('response')
                    }
                })
            }
        });
    </script>
@endsection