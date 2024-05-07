@extends('layouts.app')

@section('title')
    Patient and Visitor Guide
@endsection

@section('styles')
    <style>
        .pb-2, .py-2 {
            padding-bottom: 0.5rem !important;
        }

        .mb-5 {
            margin-bottom: 3rem !important;
        }

        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
        .mt-4 {
            margin-top: 1.5rem !important;
        }
        /*
        .fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
        } */
        .ftco-animated {
            -webkit-animation-duration: .5s;
            animation-duration: .5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .w-100 {
            width: 100% !important;
        }

        .d-block {
            display: block !important;
        }

        .tabulation .nav-pills {
            width: 100%;
        }

        .text-left {
            text-align: left !important;
        }

        .nav-fill .nav-item {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            text-align: center;
        }

        @media (max-width: 1199.98px){
            .tabulation .nav-pills .nav-item .nav-link {
                font-size: 13px;
            }
        }
        .tabulation .nav-pills .nav-item .nav-link {
            border-radius: 0;
            font-weight: 500;
            font-size: 18px;
            line-height: 30px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid transparent;
            border-left: 1px solid transparent;
        }
        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #ffffff;;
            background-color: #007bff;
        }

        .nav-pills .nav-link {
            border-radius: 0.25rem;
        }

    </style>
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading  st-size-md" style="background-color: #3578f3;">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">Patient and Visitor Guide</h1>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <section class="ftco-section">
            <div class="container">
                <div class="row tabulation mt-4 ftco-animate fadeInUp ftco-animated">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-fill d-block w-100">
                            <li class="nav-item text-left">
                                <a class="nav-link d-flex align-items-centere py-4 active" data-toggle="tab" href="#step-1"><span class="flaticon-health flaticon mr-3"></span> <span >Step 1</span></a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#step-2"><span class="flaticon-health flaticon mr-3"></span> <span>Step 2</span></a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#step-3"><span class="flaticon-health flaticon mr-3"></span> <span>Step 3</span></a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#step-4"><span class="flaticon-health flaticon mr-3"></span> <span>Step 4</span></a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#step-5"><span class="flaticon-health flaticon mr-3"></span> <span>Step 5</span></a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link d-flex align-items-centerm py-4" data-toggle="tab" href="#step-6"><span class="flaticon-health flaticon mr-3"></span> <span>Step 6</span></a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link d-flex align-items-centerm py-4" data-toggle="tab" href="#step-7"><span class="flaticon-health flaticon mr-3"></span> <span>Step 7</span></a>
                            </li>
                        </ul>
                    </div>
                    <style>

                        .img {
                            background-size: cover;
                        }
                    </style>
                    <div class="col-md-9">
                        <div class="tab-content pt-4 pt-md-0 pl-md-3">
                            <div class="tab-pane container p-0 active" id="step-1">
                                <div class="row">
                                    <div class="col-md-5 img" style="background-image: url({{secure_asset('assets/img/hero-img.png')}});"></div>
                                    <div class="col-md-7 text pl-md-4">
                                        <h3><a href="#" >Step Title</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                        <ul>
                                            <li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
                                            <li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
                                            <li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
                                            <li><span class="fa fa-check"></span>She packed her seven versalia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container p-0 fade" id="step-2">
                                <div class="row">
                                    <div class="col-md-5 img" style="background-image: url({{secure_asset('assets/img/hero-img.png')}});"></div>
                                    <div class="col-md-7 text pl-md-4">
                                        <h3><a href="#">Step Title</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                        <ul>
                                            <li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
                                            <li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
                                            <li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
                                            <li><span class="fa fa-check"></span>She packed her seven versalia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container p-0 fade" id="step-3">
                                <div class="row">
                                    <div class="col-md-5 img" style="background-image: url({{secure_asset('assets/img/hero-img.png')}});"></div>
                                    <div class="col-md-7 text pl-md-4">
                                        <h3><a href="#">Step Title</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                        <ul>
                                            <li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
                                            <li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
                                            <li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
                                            <li><span class="fa fa-check"></span>She packed her seven versalia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container p-0 fade" id="step-4">
                                <div class="row">
                                    <div class="col-md-5 img" style="background-image: url({{secure_asset('assets/img/hero-img.png')}});"></div>
                                    <div class="col-md-7 text pl-md-4">
                                        <h3><a href="#">Step Title</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                        <ul>
                                            <li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
                                            <li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
                                            <li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
                                            <li><span class="fa fa-check"></span>She packed her seven versalia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container p-0 fade" id="step-5">
                                <div class="row">
                                    <div class="col-md-5 img" style="background-image: url({{secure_asset('assets/img/hero-img.png')}});"></div>
                                    <div class="col-md-7 text pl-md-4">
                                        <h3><a href="#">Step Title</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                        <ul>
                                            <li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
                                            <li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
                                            <li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
                                            <li><span class="fa fa-check"></span>She packed her seven versalia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container p-0 fade" id="step-6">
                                <div class="row">
                                    <div class="col-md-5 img" style="background-image: url({{secure_asset('assets/img/hero-img.png')}});"></div>
                                    <div class="col-md-7 text pl-md-4">
                                        <h3><a href="#">Step Title</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                        <ul>
                                            <li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
                                            <li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
                                            <li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
                                            <li><span class="fa fa-check"></span>She packed her seven versalia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container p-0 fade" id="step-7">
                                <div class="row">
                                    <div class="col-md-5 img" style="background-image: url({{secure_asset('assets/img/hero-img.png')}});"></div>
                                    <div class="col-md-7 text pl-md-4">
                                        <h3><a href="#">Step Title</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                        <ul>
                                            <li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
                                            <li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
                                            <li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
                                            <li><span class="fa fa-check"></span>She packed her seven versalia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="st-height-b40 st-height-lg-b40"></div>
    </div>
    <div class="st-height-b80 st-height-lg-b100"></div>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.nav-link').on('click', function(e){
                e.preventDefault(); // Prevent the default behavior of the anchor tag
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
                var target = $(this).attr('href');
                $('.tab-pane').removeClass('active show'); // Remove both active and show classes
                $(target).addClass('active show'); // Add active and show classes to the target tab pane
            });
        });
    </script>
@endsection
