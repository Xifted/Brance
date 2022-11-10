<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>{{$data['data'][0]['fieldsValues']['seo_op_title']}}</title>
    <meta name="author" content="Brance">
    <meta name="description" content="{{$data['data'][0]['fieldsValues']['seo_op_description']}}"/>
    @php
        $keywords = [];
        foreach ($data['data'][0]['fieldsValues']['seo_keywords'] as $keyword)
        {
            $keywords[]=$keyword;
        }
    @endphp
    <meta name="keyword" content="{{implode(", ",$keywords)}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <!-- FAVICON FILES -->
    <!-- <link href="assets/images/icons/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="assets/images/icons/apple-touch-icon-120-precomposed.png" rel="apple-touch-icon" sizes="120x120">
<link href="assets/images/icons/apple-touch-icon-76-precomposed.png" rel="apple-touch-icon" sizes="76x76"> -->
    <link href="{{ asset('/images/icons/Brance-logos.ico') }}" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/fonts/iconfonts.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/color.css') }}">
</head>

<body>
    <div id="dtr-wrapper" class="clearfix">
        {{-- {{dd($data)}} --}}
        <!-- preloader starts -->
        @include('layouts.preloader')
        <!-- preloader ends -->

        <!-- Click to the top starts-->
        @include('layouts.top')
        <!-- Click to the top ends -->

        <!-- Responsive Header -->
        @include('layouts.navbar')
        <!-- Headedr End -->

        <!-- == main content area starts == -->
        <div id="dtr-main-content">

            <!-- hero section starts
================================================== -->
            <section id="home" class="dtr-section dtr-section-with-bg"
                style="background-image: url({{ $data['data'][0]['fieldsValues']['home_bg'] }});">

                <!-- overlay -->
                <div class="dtr-overlay dtr-overlay-blue"></div>
                <div class="container dtr-overlay-content hero-section-top-padding">
                    <!-- row starts -->
                    <div class="row d-flex align-items-center dtr-pt-100 dtr-pb-50">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6">
                            <h2 class="color-white">{{ $data['data'][0]['fieldsValues']['title'] }}</h2>
                            <p class="text-size-md dtr-mt-30 color-white">
                                {{ $data['data'][0]['fieldsValues']['description'] }}
                            </p>
                            <p>
                                <a href="#plans" class="dtr-btn btn-white dtr-scroll-link dtr-px-50 dtr-mt-20 dtr-mr-10">Get Started</a> 
                                <a href="#" class="dtr-btn dtr-px-50 dtr-mt-20">Request a demo</a>
                            </p>
                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6"><img src="{{ $data['data'][0]['fieldsValues']['home_img'] }}"
                                alt="image" class="dtr-mb-minus50 animated-img"></div>
                        <!-- column 2 ends -->

                    </div>
                    <!-- row ends -->
                </div>
                <div class="dtr-section-with-bg hero-svg-bg-absolute"
                    style="background-image: url(../images/landing3-hero.svg); width: 100%; height: 200px;"></div>
            </section>
            <!-- hero section ends
================================================== -->

            <!-- logo slider section starts
================================================== -->
            <section class="dtr-section dtr-md-mx-20 dtr-border-y border-grey dtr-py-50">

                <!-- row starts -->
                <div class="row">
                    <div class="col-12">
                        <div class="dtr-slick-slider dtr-logo-carousel">
                            <!-- logo 1 -->
                            @foreach($data ['data'] [0] ['fieldsValues'] ['slider'] as $slider)
                            <div> <img src="{{ $slider ['fieldsValues'] ['slider-img']}}" alt="image"> </div>
                            @endforeach
                            {{-- <!-- logo 2 -->
                            <div> <img src="{{ asset('/images/lang-2.png') }}" alt="image"> </div>
                            <!-- logo 3 -->
                            <div> <img src="{{ asset('/images/lang-3.png') }}" alt="image"> </div>
                            <!-- logo 4 -->
                            <div> <img src="{{ asset('/images/lang-4.png') }}" alt="image"> </div>
                            <!-- logo 5 -->
                            <div> <img src="{{ asset('/images/lang-5.png') }}" alt="image"> </div>
                            <!-- logo 6 -->
                            <div> <img src="{{ asset('/images/lang-6.png') }}" alt="image"> </div>
                            <!-- logo 7 -->
                            <div> <img src="{{ asset('/images/lang-4.png') }}" alt="image"> </div> --}}
                        </div>
                    </div>
                </div>
                <!-- row ends -->

            </section>
            <!-- logo slider section ends
================================================== -->
                
            <!-- section starts
================================================== -->
            <section id="features" class="dtr-section dtr-py-80">
                <div class="container">
                    @foreach ($data ['data'] [0] ['fieldsValues'] ['advantages'] as $advantages)
                    @if ($loop->iteration % 2 == 0)
                    <!-- row 2 starts -->
                    <div class="row dtr-my-80">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6 wow fadeInLeft" data-wow-delay="0.7s"> <img
                                src="{{$advantages ['fieldsValues']['img']}}" alt="image"> </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-5 offset-md-1 dtr-mt-20 wow fadeInLeft">
                            <h2 class="color-blue wow fadeInLeft" data-wow-delay="0.2s">
                                {{$advantages ['fieldsValues']['title']}}<br>{{$advantages ['fieldsValues']['title2']}}
                            </h2>
                            <p class="wow fadeInLeft" data-wow-delay="0.3s">
                                {{$advantages ['fieldsValues']['description']}}
                            </p>
                            <p class="wow fadeInLeft" data-wow-delay="0.3s">
                                {{$advantages ['fieldsValues']['description2']}}
                            </p>
                            <a href="#" class="dtr-btn btn-blue dtr-mt-20">Discover</a>
                        </div>
                        <!-- column 2 ends -->

                    </div>
                    <!-- row 2 ends -->
                    @else
                    <!-- row 1 starts -->
                    <div class="row">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-5 dtr-mt-20 wow fadeInRight">
                            <h2 class="color-blue wow fadeInRight" data-wow-delay="0.2s">
                            {{$advantages ['fieldsValues']['title']}}<br>{{$advantages ['fieldsValues']['title2']}}
                            </h2>
                            <p class="wow fadeInRight" data-wow-delay="0.3s">
                                {{$advantages ['fieldsValues']['description']}}
                            </p>
                            <p class="wow fadeInRight" data-wow-delay="0.3s">
                                {{$advantages ['fieldsValues']['description2']}}
                            </p>
                            <a href="#" class="dtr-btn btn-blue dtr-mt-20">Discover</a>
                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6 offset-md-1 dtr-sm-mt-30 wow fadeInRight" data-wow-delay="0.7s">
                            <img src="{{$advantages ['fieldsValues']['img']}}" alt="image">
                        </div>
                        <!-- column 2 ends -->

                    </div>
                    <!-- row 1 ends -->
                    @endif
                    @endforeach
{{-- 
                    

                    <!-- row 3 starts -->
                    <div class="row">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-5 dtr-mt-20 wow fadeInRight">
                            <h2 class="color-blue wow fadeInRight" data-wow-delay="0.2s"> <br>
                               </h2>
                            <p class="wow fadeInRight" data-wow-delay="0.3s"></p>
                            <p class="wow fadeInRight" data-wow-delay="0.3s"></p>
                            <a href="#" class="dtr-btn btn-blue dtr-mt-20">Discover</a>
                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6 offset-md-1 dtr-sm-mt-30 wow fadeInRight" data-wow-delay="0.7s">
                            <img src="{{ asset('/images/screen-3.png') }}" alt="image"> </div>
                        <!-- column 2 ends -->

                    </div>
                    <!-- row 3 ends --> --}}

                </div>
            </section>
            <!-- section ends
================================================== -->

            <!-- boxed feature section starts
================================================== -->
            <section class="dtr-section dtr-pt-100 dtr-pb-70 dtr-section-with-bg bg-light-blue-alt parallax"
                style="background-image: url(../images/section-bg1.png);">
                <div class="container">

                    <!-- row starts -->
                    <div class="row">
                        @foreach ($data ['data'] [0] ['fieldsValues'] ['services'] as $item)
                            <!-- column 1 starts -->
                        <div class="col-12 col-md-4 wow fadeInUp">

                            <!-- feature starts -->
                            <div class="dtr-feature dtr-feature-top feature-has-box feature-has-shadow dtr-rounded-corner-xl text-center bg-white">
                                <div class="dtr-feature-img"> 
                                    <img src="{{ $item ['fieldsValues'] ['icon'] }}" alt="image">
                                </div>
                                <div class="dtr-feature-content">
                                    <h3>{{ $item ['fieldsValues'] ['title'] }}</h3>
                                    <p class="text-size-lg">{{ $item ['fieldsValues'] ['title2'] }}</p>
                                    <p>{{ $item ['fieldsValues'] ['description'] }}</p>
                                    <a href="#" class="dtr-styled-link font-weight-600 color-blue">Learn More</a>
                                </div>
                            </div>
                            <!-- feature ends -->

                        </div>
                        <!-- column 1 ends -->
                        @endforeach
                        

                        {{-- <!-- column 2 starts -->
                        <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="0.3s">

                            <!-- feature starts -->
                            <div
                                class="dtr-feature dtr-feature-top feature-has-box feature-has-shadow dtr-rounded-corner-xl text-center bg-white">
                                <div class="dtr-feature-img"> <img src="{{ asset('/images/shape-icon2.png') }}"
                                        alt="image">
                                </div>
                                <div class="dtr-feature-content">
                                    <h3>Saasflix</h3>
                                    <p class="text-size-lg">secure</p>
                                    <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                                    <a href="#" class="dtr-styled-link font-weight-600 color-blue">Learn
                                        More</a>
                                </div>
                            </div>
                            <!-- feature ends -->

                        </div>
                        <!-- column 2 ends -->

                        <!-- column 3 starts -->
                        <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="0.6s">

                            <!-- feature starts -->
                            <div
                                class="dtr-feature dtr-feature-top feature-has-box feature-has-shadow dtr-rounded-corner-xl text-center bg-white">
                                <div class="dtr-feature-img"> <img src="{{ asset('/images/shape-icon3.png') }}"
                                        alt="image">
                                </div>
                                <div class="dtr-feature-content">
                                    <h3>Saasflix</h3>
                                    <p class="text-size-lg">Automate</p>
                                    <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                                    <a href="#" class="dtr-styled-link font-weight-600 color-blue">Learn
                                        More</a>
                                </div>
                            </div>
                            <!-- feature ends -->

                        </div>
                        <!-- column 3 ends --> --}}

                    </div>
                    <!-- row ends -->

                </div>
            </section>
            <!-- boxed feature section ends
================================================== -->

            <!-- video section starts
================================================== -->
            <section class="dtr-section dtr-py-100">
                <div class="container">

                    <!-- section intro row starts -->
                    <div class="row dtr-mb-50">
                        <div class="col-12 text-center">
                            <h2>Why is Brance different?</h2>
                            <div class="dtr-styled-divider divider-center bg-light-blue"></div>
                        </div>
                    </div>
                    <!-- section intro row ends -->

                    <!-- row starts -->
                    <div class="row d-flex align-items-center">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-5">
                            <div class="dtr-pr-40 dtr-sm-pr-0">
                                @foreach($data ['data'][0]['fieldsValues']['features'] as $features)
                                <!-- feature 1 starts -->
                                <div class="dtr-line-feature dtr-mb-10">
                                    <div class="dtr-line-feature-img-wrapper wow fadeInDown">
                                        <div class="dtr-line-feature-img bg-blue border-light-blue color-white">
                                            <i class="{!!$features ['fieldsValues']['icon']!!}"></i>
                                        </div>
                                    </div>
                                    <div class="dtr-vert-border border-light-blue"></div>
                                    <h4 class="dtr-line-feature-heading font-weight-600">{{$features ['fieldsValues']['title']}}</h4>
                                    <p>{{$features ['fieldsValues']['description']}}</p>
                                </div>
                                <!-- feature 1 ends -->
                                @endforeach
                                {{-- <!-- feature 2 starts -->
                                <div class="dtr-line-feature dtr-mb-10">
                                    <div class="dtr-line-feature-img-wrapper wow fadeInDown" data-wow-delay="0.3s">
                                        <div class="dtr-line-feature-img bg-blue border-light-blue color-white"><i
                                                class="icon-mail-bulk"></i></div>
                                    </div>
                                    <div class="dtr-vert-border border-light-blue"></div>
                                    <h4 class="dtr-line-feature-heading font-weight-600">Leading incremental database
                                    </h4>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                </div>
                                <!-- feature 2 ends -->

                                <!-- feature 3 starts -->
                                <div class="dtr-line-feature">
                                    <div class="dtr-line-feature-img-wrapper wow fadeInDown" data-wow-delay="0.6s">
                                        <div class="dtr-line-feature-img bg-blue border-light-blue color-white"><i
                                                class="icon-shipping-fast"></i></div>
                                    </div>
                                    <div class="dtr-vert-border border-light-blue"></div>
                                    <h4 class="dtr-line-feature-heading font-weight-600">Automated work flow</h4>
                                    <p>Similique sunt in culpa qui officia deserunt mollitia animi.</p>
                                </div>
                                <!-- feature 3 ends --> --}}

                            </div>
                        </div>
                        <!-- column 1 starts -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-7 dtr-md-mt-30">

                            <!-- video box starts -->
                            <div class="dtr-video-box">

                                <!-- image -->
                                <img src="{{ asset('/images/video-bg.jpg') }}" alt="image">

                                <!-- video button starts -->
                                <a class="dtr-video-popup dtr-video-button bg-blue color-white" data-autoplay="true"
                                    data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio"></a>
                                <!-- video button ends -->

                            </div>
                            <!-- video box ends -->

                        </div>
                        <!-- column 2 ends -->

                    </div>
                    <!-- row ends -->

                </div>
            </section>
            <!-- video section ends
================================================== -->

            <!-- pricing section ends
================================================== -->
            <section id="plans" class="dtr-section dtr-py-100 bg-light-blue-alt parallax"
                style="background-image: url(../images/section-bg2.png);">
                <div class="container">

                    <!-- section intro row starts -->
                    <div class="row dtr-mb-80">
                        <div class="col-12 text-center">
                            <h2>Plans and pricing</h2>
                            <p>Our pricing scales with you and your needs. Try it for free. No credit card required.</p>
                            <div class="dtr-styled-divider divider-center bg-light-blue"></div>
                        </div>
                    </div>
                    <!-- section intro row ends -->

                    <!-- row starts -->
                    <div class="row">
                        @foreach($data ['data'][0]['fieldsValues']['pricing'] as $key => $pricing)
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-4 
                        @if ($key == 1)
                            dtr-px-0 dtr-md-px-15
                        @elseif ($key == 2)
                            dtr-pl-0 dtr-md-pl-15 wow fadeInRight
                        @else
                            dtr-pr-0 dtr-md-pr-15 wow fadeInLeft
                        @endif
                        ">
                            <!-- pricing 1 starts -->
                            <div class="dtr-pricing {{$key == 1? 'pricing-focused bg-dark-blue': 'bg-light-blue'}}">
                                @if ($key == 1)
                                <div class="dtr-pricing-tagline-wrapper">
                                    <div class="dtr-pricing-tagline color-blue">Most Popular</div>
                                </div>
                                @else
                                
                                @endif
                                <div class="dtr-pricing-img">
                                    <img src="{{$pricing ['fieldsValues'] ['icon']}}" alt="image">
                                </div>
                                <h3 class="{{$key == 1? 'color-white' : ''}}">{{$pricing ['fieldsValues'] ['title']}}</h3>
                                <p class="dtr-price color-blue"><sup>Rp</sup>{{$pricing ['fieldsValues']['harga']}}</p>
                                <p class="dtr-m-0 {{$key == 1? 'color-white' : ''}}">per website</p>
                                <a href="#" class="dtr-btn {{$key == 1? 'btn-white' : 'btn-blue'}} dtr-my-30">Pesan Sekarang</a>
                                <p class="text-size-md font-weight-600 color-blue">Keunggulan : </p>
                                <ul class="dtr-list-block {{$key == 1? 'color-white' : ''}}">
                                    <li>{{$pricing ['fieldsValues'] ['desc-1']}}</li>
                                    <li>{{$pricing ['fieldsValues'] ['desc-2']}}</li>
                                    <li>{{$pricing ['fieldsValues'] ['desc-3']}}</li>
                                    <li>{{$pricing ['fieldsValues'] ['desc-4']}}</li>
                                    <li>{{$pricing ['fieldsValues'] ['desc-5']}}</li>
                                </ul>
                            </div>
                            <!-- pricing 1 ends -->

                        </div>
                        <!-- column 1 ends -->
                        @endforeach
                        {{-- <!-- column 2 starts -->
                        <div class="col-12 col-md-4 dtr-px-0 dtr-md-px-15">

                            <!-- pricing 2 starts -->
                            <div class="dtr-pricing pricing-focused bg-dark-blue">
                                <div class="dtr-pricing-tagline-wrapper">
                                    <div class="dtr-pricing-tagline color-blue">Most Popular</div>
                                </div>
                                <div class="dtr-pricing-img"><img src="{{ asset('/images/ptable-icon2.png') }}"
                                        alt="image">
                                </div>
                                <h3 class="color-white">Professional</h3>
                                <p class="dtr-price color-blue"><sup>$</sup>99</p>
                                <p class="dtr-m-0 color-white">per user /mo</p>
                                <a href="#" class="dtr-btn btn-white dtr-my-30">Signup for free</a>
                                <p class="text-size-md font-weight-600 color-blue">Free Forever</p>
                                <ul class="dtr-list-block color-white">
                                    <li>No credit card required</li>
                                    <li>Unlimited team members</li>
                                    <li>Unlimited cloud space</li>
                                    <li>6 months of record history</li>
                                    <li>Custom user interface</li>
                                </ul>
                            </div>
                            <!-- pricing 2 ends -->

                        </div>
                        <!-- column 2 ends -->

                        <!-- column 3 starts -->
                        <div class="col-12 col-md-4 dtr-pl-0 dtr-md-pl-15 wow fadeInRight">

                            <!-- pricing 3 starts -->
                            <div class="dtr-pricing bg-light-blue">
                                <div class="dtr-pricing-img"><img src="{{ asset('/images/ptable-icon3.png') }}"
                                        alt="image">
                                </div>
                                <h3>Premium</h3>
                                <p class="dtr-price color-blue"><sup>$</sup>199</p>
                                <p class="dtr-m-0">per user /mo</p>
                                <a href="#" class="dtr-btn btn-blue dtr-my-30">Signup for free</a>
                                <p class="text-size-md font-weight-600 color-blue">Free Forever</p>
                                <ul class="dtr-list-block">
                                    <li>No credit card required</li>
                                    <li>Unlimited team members</li>
                                    <li>Unlimited cloud space</li>
                                    <li>12 months of record history</li>
                                    <li>Custom user interface</li>
                                </ul>
                            </div>
                            <!-- pricing 3 ends -->

                        </div>
                        <!-- column 3 ends --> --}}

                    </div>
                    <!-- row ends -->

                </div>
            </section>
            <!-- pricing section ends
================================================== -->

            <!-- faq section starts
================================================== -->
            <section id="faq" class="dtr-section dtr-py-100">
                <div class="container">
                    <h3 class="color-blue dtr-mb-40">Frequently asked questions</h3>
                    <!-- row 1 starts -->
                    <div class="row">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6">

                            @foreach($data ['data'] [0] ['fieldsValues'] ['faq-left'] as $faqL)
                            <!-- faq item starts -->
                            <div class="faq-item">
                                <h4 class="faq-heading">{{$faqL ['fieldsValues'] ['question']}}</h4>
                                <div class="faq-content">{{$faqL ['fieldsValues'] ['answer']}}</div>
                            </div>
                            <!-- faq item ends -->
                            @endforeach
                            {{-- <!-- faq item starts -->
                            <div class="faq-item">
                                <h4 class="faq-heading">If I invite my suppliers or customers to Saasflix, do I have to
                                    pay for their accounts? </h4>
                                <div class="faq-content">It was popularised in the 1960s with the release of Letraset
                                    sheets containing Lorem Ipsum passages.</div>
                            </div>
                            <!-- faq item ends -->

                            <!-- faq item starts -->
                            <div class="faq-item dtr-mb-0">
                                <h4 class="faq-heading">What perks do I get for prepaying my subscription? </h4>
                                <div class="faq-content">Nam libero tempore, cum soluta nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod maxime placeat facere possimus. </div>
                            </div>
                            <!-- faq item ends --> --}}

                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6">
                            @foreach($data ['data'] [0] ['fieldsValues'] ['faq-right'] as $faqR)
                            <!-- faq item starts -->
                            <div class="faq-item">
                                <h4 class="faq-heading">{{$faqR ['fieldsValues'] ['question']}}</h4>
                                <div class="faq-content">{{$faqR ['fieldsValues'] ['answer']}}</div>
                            </div>
                            <!-- faq item ends -->
                            @endforeach

                            {{-- <!-- faq item starts -->
                            <div class="faq-item">
                                <h4 class="faq-heading">How can I obtain a copy of my data? </h4>
                                <div class="faq-content">There are many variations of passages of Lorem Ipsum
                                    available,
                                    but the majority have suffered alteration in some form, by injected humour. </div>
                            </div>
                            <!-- faq item ends -->

                            <!-- faq item starts -->
                            <div class="faq-item">
                                <h4 class="faq-heading">How safe is my data? </h4>
                                <div class="faq-content">Nor again is there anyone who loves or pursues or desires to
                                    obtain pain of itself, because it is pain, but because occasionally circumstances
                                    occur in which toil and pain can procure him some great pleasure. </div>
                            </div>
                            <!-- faq item ends --> --}}

                        </div>
                        <!-- column 2 ends -->

                    </div>
                    <!-- row 1 ends -->

                    <!-- row 2 starts -->
                    <div class="dtr-cta-box dtr-rounded-corner-xl dtr-shadow  dtr-mt-100 bg-white">
                        <div class="row d-flex">
                            <!-- column 1 starts -->
                            <div class="col-12 col-md-5 align-self-end"> <img
                                    src="{{ asset('/images/cta-img.png') }}" alt="image"> </div>
                            <!-- column 1 ends -->
                            <!-- column 2 starts -->
                            <div class="col-12 col-md-7 text-center dtr-py-50 dtr-px-60">
                                <h3 class="color-blue">Ada Keluhan?</h3>
                                <p class="text-size-md">Kami siap membantu anda.</p>
                                <a href="#" class="dtr-btn btn-blue dtr-mt-20">Customer Service</a>
                            </div>
                            <!-- column 2 ends -->

                        </div>
                    </div>
                    <!-- row 2 ends -->

                </div>
            </section>
            <!-- faq section ends
================================================== -->

            <!-- team section starts
================================================== -->
            <section id="teams" class="dtr-section dtr-py-100 bg-light-blue-alt parallax"
                style="background-image: url(../images/section-bg1.png);">
                <div class="container">

                    <!-- section intro row starts -->
                    <div class="row dtr-mb-50">
                        <div class="col-12 text-center">
                            <h2>Our Team</h2>
                            <div class="dtr-styled-divider divider-center bg-light-blue"></div>
                        </div>
                    </div>
                    <!-- section intro row ends -->

                    <!-- row starts -->
                    <div class="row">
                        @foreach($data ['data'] [0] ['fieldsValues'] ['teams'] as $teams)
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-4">

                            <!-- member 1 starts -->
                            <div class="dtr-team team-has-shadow text-center bg-white">
                                <div class="dtr-team-img"> <img src="{{ $teams ['fieldsValues'] ['img']}}"
                                        alt="image"> </div>
                                <div class="dtr-team-content">
                                    <div class="dtr-social-circle dtr-team-social-overlap">
                                        <ul class="dtr-social dtr-social-list">
                                            <li><a href="{{$teams ['fieldsValues']['twitter']}}" class="dtr-twitter" target="_blank"
                                                    title="twitter"></a>
                                            </li>
                                            <li><a href="{{$teams ['fieldsValues']['github']}}" class="dtr-github bg-green" target="_blank"
                                                    title="github"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="dtr-mb-5">{{$teams ['fieldsValues'] ['name']}}</h4>
                                    <p class="dtr-mb-5">{{$teams ['fieldsValues'] ['position']}}</p>
                                    <p>Brance</p>
                                </div>
                            </div>
                            <!-- member 1 ends -->
                            
                        </div>
                        <!-- column 1 ends -->
                        @endforeach
                        {{-- <!-- column 2 starts -->
                        <div class="col-12 col-md-4">

                            <!-- member 2 starts -->
                            <div class="dtr-team team-has-shadow text-center bg-white">
                                <div class="dtr-team-img"> <img src="{{ asset('/images/member-2.jpg') }}"
                                        alt="image"> </div>
                                <div class="dtr-team-content">
                                    <div class="dtr-social-circle dtr-team-social-overlap">
                                        <ul class="dtr-social dtr-social-list">
                                            <li><a href="#" class="dtr-twitter" target="_blank"
                                                    title="twitter"></a>
                                            </li>
                                            <li><a href="#" class="dtr-google" target="_blank"
                                                    title="facebook"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="dtr-mb-5">Anton McKay</h4>
                                    <p class="dtr-mb-5">Web Developer</p>
                                    <p>Saasflix Web Pro Apps</p>
                                </div>
                            </div>
                            <!-- member 2 ends -->

                        </div>
                        <!-- column 2 ends -->

                        <!-- column 3 starts -->
                        <div class="col-12 col-md-4">

                            <!-- member 3 starts -->
                            <div class="dtr-team team-has-shadow text-center bg-white">
                                <div class="dtr-team-img"> <img src="{{ asset('/images/member-3.jpg') }}"
                                        alt="image"> </div>
                                <div class="dtr-team-content">
                                    <div class="dtr-social-circle dtr-team-social-overlap">
                                        <ul class="dtr-social dtr-social-list">
                                            <li><a href="#" class="dtr-twitter" target="_blank"
                                                    title="twitter"></a>
                                            </li>
                                            <li><a href="#" class="dtr-google" target="_blank"
                                                    title="facebook"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="dtr-mb-5">Danny Stanton</h4>
                                    <p class="dtr-mb-5">Design Lead</p>
                                    <p>Adobe Suite Expert</p>
                                </div>
                            </div>
                            <!-- member 3 ends -->

                        </div>
                        <!-- column 3 ends --> --}}

                    </div>
                    <!-- row ends -->

                </div>
            </section>
            <!-- team section ends
================================================== -->

            <!-- tabs section starts
================================================== -->
            <section class="dtr-section dtr-py-100">
                <div class="container">

                    <!-- section intro row starts -->
                    <div class="row dtr-mb-30">
                        <div class="col-12 text-center">
                            <h2>How it works?</h2>
                            <p>Just 3 simple steps to start using Saasflix.</p>
                            <div class="dtr-styled-divider divider-center bg-light-blue"></div>
                        </div>
                    </div>
                    <!-- section intro row ends -->

                    <!-- tabs starts -->
                    <div class="row d-flex align-items-center dtr-features-tab">

                        <!-- left column starts -->
                        <div class="col-12 col-md-6">
                            <div class="tab-content" id="v-pills-tabContent">
                                @foreach($data ['data'][0]['fieldsValues']['steps-left'] as $key => $stepsL)
                                <!-- tab 1 -->
                                <div class="tab-pane fade show animated-img {{$key == 0? 'active' : ''}}" id="features-tab-{{$stepsL ['fieldsValues'] ['id']}}" role="tabpanel" aria-labelledby="features-tab-{{$stepsL ['fieldsValues'] ['id']}}-tab">
                                    <img src="{{ $stepsL ['fieldsValues'] ['img']}}" alt="image"> 
                                </div>
                                @endforeach
                                {{-- <!-- tab 2 -->
                                <div class="tab-pane fade animated-img" id="features-tab-2" role="tabpanel" aria-labelledby="features-tab-2-tab">
                                    <img src="{{ asset('/images/screen-2.png') }}" alt="image">
                                </div>
                                <!-- tab 3 -->
                                <div class="tab-pane fade animated-img" id="features-tab-3" role="tabpanel" aria-labelledby="features-tab-3-tab">
                                    <img src="{{ asset('/images/screen-3.png') }}" alt="image">
                                </div> --}}
                                
                            </div>
                        </div>
                        <!-- left column ends -->
                        
                        <!-- right (nav) column starts -->
                        <div class="col-12 col-md-6">
                            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                @foreach($data ['data'][0]['fieldsValues']['steps-right'] as $key => $stepsR)
                                <!-- tab 1 content starts -->
                                <a class="nav-link {{$key == 0? 'active' : ''}}" id="features-tab-{{$stepsR ['fieldsValues'] ['id']}}-tab" data-toggle="pill"
                                    href="#features-tab-{{$stepsR ['fieldsValues'] ['id']}}" role="tab" aria-controls="features-tab-{{$stepsR ['fieldsValues'] ['id']}}"
                                    aria-selected="false">
                                    <h4 class="font-weight-600">{{ $stepsR ['fieldsValues'] ['title']}}</h4>
                                    <p>{{ $stepsR ['fieldsValues'] ['description']}}</p>
                                </a>
                                <!-- tab 1 content ends -->
                                @endforeach
                                {{-- <!-- tab 2 content starts -->
                                <a class="nav-link" id="features-tab-2-tab" data-toggle="pill"
                                    href="#features-tab-2" role="tab" aria-controls="features-tab-2"
                                    aria-selected="true">
                                    <h4 class="font-weight-600">Build your flow</h4>
                                    <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                                </a>
                                <!-- tab 2 content ends -->

                                <!-- tab 3 content starts -->
                                <a class="nav-link" id="features-tab-3-tab" data-toggle="pill"
                                    href="#features-tab-3" role="tab" aria-controls="features-tab-3"
                                    aria-selected="false">
                                    <h4 class="font-weight-600">Aquire new users</h4>
                                    <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                                </a> --}}
                                <!-- tab 3 content ends -->

                            </div>
                        </div>
                        <!-- right (nav) column ends -->

                    </div>
                    <!-- tabs starts -->

                </div>
            </section>
            <!-- tabs section ends
================================================== -->

            <!-- testimonial section starts
================================================== -->
            <section id="reviews" class="dtr-section dtr-md-mx-20 dtr-py-100 bg-blue">

                <!-- heading-->
                <h3 class="text-center dtr-mb-50 color-white">Trusted by over 10,000 companies</h3>

                <!--===== testimonial slider starts =====-->
                <div class="dtr-slick-slider dtr-testimonial-style1 dtr-testimonial-boxed">
                    @foreach($data ['data'][0]['fieldsValues']['testimonial'] as $key => $testi)
                    <!--== slide 1 starts ==-->
                    <div class="dtr-testimonial dtr-rounded-corner-xl bg-white">

                        <!-- review text -->
                        <div class="dtr-testimonial-content">{{$testi ['fieldsValues']['testimonial']}}</div>
                        <!-- client info -->
                        <div class="dtr-client-info">
                            <div class="dtr-testimonial-user"> <img src="{{$testi ['fieldsValues']['img']}}"
                                    alt="image">
                            </div>
                            <div class="dtr-testimonial-user-info">
                                <h6 class="dtr-client-name">{{$testi ['fieldsValues']['name']}}</h6>
                                <span class="dtr-client-job">{{$testi ['fieldsValues']['job']}}</span>
                            </div>
                        </div>
                        <!-- client info ends -->
                    </div>
                    <!--== slide 1 ends ==-->
                    @endforeach
                    {{-- <!--== slide 2 starts ==-->
                    <div class="dtr-testimonial dtr-rounded-corner-xl bg-white">

                        <!-- review text -->
                        <div class="dtr-testimonial-content">“Giving a five star review was
                            the easiest thing I've done in a while.” </div>
                        <!-- client info -->
                        <div class="dtr-client-info">
                            <div class="dtr-testimonial-user"> <img src="{{ asset('/images/review-user2.png') }}"
                                    alt="image">
                            </div>
                            <div class="dtr-testimonial-user-info">
                                <h6 class="dtr-client-name">Mike Anderson</h6>
                                <span class="dtr-client-job">Project Admin, NY</span>
                            </div>
                        </div>
                        <!-- client info ends -->
                    </div>
                    <!--== slide 2 ends ==-->

                    <!--== slide 3 starts ==-->
                    <div class="dtr-testimonial dtr-rounded-corner-xl bg-white">

                        <!-- review text -->
                        <div class="dtr-testimonial-content">“I am using Saasflix app for more than 25 years.” </div>
                        <!-- client info -->
                        <div class="dtr-client-info">
                            <div class="dtr-testimonial-user"> <img src="{{ asset('/images/review-user1.png') }}"
                                    alt="image">
                            </div>
                            <div class="dtr-testimonial-user-info">
                                <h6 class="dtr-client-name">Steven Gray</h6>
                                <span class="dtr-client-job">Web Developer, Ohio</span>
                            </div>
                        </div>
                        <!-- client info ends -->
                    </div>
                    <!--== slide 3 ends ==-->

                    <!--== slide 4 starts ==-->
                    <div class="dtr-testimonial dtr-rounded-corner-xl bg-white">

                        <!-- review text -->
                        <div class="dtr-testimonial-content">“I am using Saasflix app for more than 25 years.” </div>
                        <!-- client info -->
                        <div class="dtr-client-info">
                            <div class="dtr-testimonial-user"> <img src="{{ asset('/images/review-user2.png') }}"
                                    alt="image">
                            </div>
                            <div class="dtr-testimonial-user-info">
                                <h6 class="dtr-client-name">Matt Weiner</h6>
                                <span class="dtr-client-job">UI Developer, Australia</span>
                            </div>
                        </div>
                        <!-- client info ends -->
                    </div>
                    <!--== slide 4 ends ==--> --}}

                </div>
                <!--===== testimonial slider ends =====-->

            </section>
            <!-- testimonial section ends
================================================== -->

            <!-- contact section starts
================================================== -->

            <section id="contact" class="dtr-section dtr-py-100">
                <div class="container">

                    <!-- section intro row starts -->
                    <div class="row dtr-mb-50">
                        <div class="col-12 text-center">
                            <h2 class="dtr-mb-5">Get in touch</h2>
                            <p>Contact us</p>
                            <div class="dtr-styled-divider divider-center bg-light-blue"></div>
                        </div>
                    </div>
                    <!-- section intro row ends -->

                    <!-- row starts -->
                <div class="row d-flex align-items-center"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6">
                        <h3>Let’s talk about everything! </h3>
                        <p class="text-size-lg">Have a project in mind<br>
                            or Business inquiry? Drop us a line.</p>
                        <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                    <!-- column 1 starts --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 dtr-md-mt-30">
                        <div class="dtr-box bg-light-blue-alt"> 
                            
                            <!-- form starts -->
                            <div class="dtr-form">
                                
                                <form id="contactform" method="post" action="/">
                                    @csrf
                                    <fieldset>
                                        <div class="dtr-form-row dtr-form-row-2col">
                                            <p class="dtr-form-column">
                                                <input name="name"  type="text" placeholder="Name" required>
                                            </p>
                                            <p class="dtr-form-column">
                                                <input id="phone" name="phone" type="tel" required>
                                            </p>
                                        </div>
                                        <p>
                                            <input name="email"  class="required email" type="text" placeholder="Email address" required>
                                        </p>
                                        <p class="antispam">Leave this empty: <br />
                                            <input name="url" />
                                        </p>
                                        <p>
                                            <textarea rows="6" name="pesan" id="pesan" class="required"  placeholder="Message" required></textarea>
                                        </p>
                                        <button class="dtr-btn btn-blue w-100" type="submit">Send Message</button>
                                        <div id="result"></div>
                                    </fieldset>
                                </form>
                            </div>
                            <!-- form ends --> 
                            
                        </div>
                    </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!-- row ends --> 
                
            </div>
        </section>
            <!-- contact section ends
================================================== -->

            <!-- footer section starts
================================================== -->
            @include('layouts.footer')
            <!-- footer section ends
================================================== -->

        </div>
        <!-- == main content area ends == -->

    </div>
    <!-- #dtr-wrapper ends -->

    <!-- JS FILES -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/plugins.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
</body>

</html>