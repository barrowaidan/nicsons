@extends('components.weblayout')
    @section('content') 

    <section class="themeholy-hero-wrapper hero-1" id="hero">
        <div class="heroSlider hero-slider-1">
            <div class="themeholy-hero-slide" data-bg-src="{{ asset('assets/img/hero/'.$company[0]->slide1)}}">
                <div class="container">
                    <div class="hero-style1"><span class="hero-subtitle"><img src="{{ asset('assets/img/shape/title_left.svg')}}"
                                alt="shape">We’re Provide best services</span>
                        <h1 class="hero-title">transport<span class="hero-big-title">For Everything</span></h1>
                        <p class="hero-text title_text">Nicsons provides extensive road freight services that span across Tanzania, with coverage extending to select all regions . Our land freight solutions are meticulously crafted to cater to the distinctive requirements of this expansive and diverse road network.
                            Our dedicated team of regional and local experts oversees every aspect of the overland operation, ensuring a seamless journey from origin to destination. We are well-versed in navigating the specific requirements of each country, guaranteeing a hassle-free experience for our customers.</p>
                        <div class="btn-group"><a href="{{ route('contact_us')}}" class="themeholy-btn">Free Quote!<span
                                    class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                            <div class="call-btn">
                                <!--<a href="https://www.youtube.com/watch?v=ADmQTw4qqTY" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                                <div class="media-body"><a href="https://www.youtube.com/watch?v=ADmQTw4qqTY"
                                        class="btn-title popup-video">Watch Video</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="themeholy-hero-slide" data-bg-src="{{ asset('assets/img/hero/'.$company[0]->slide2)}}">
                <div class="container">
                    <div class="hero-style1"><span class="hero-subtitle"><img src="{{ asset('assets/img/shape/title_left.svg')}}"
                                alt="shape">We’re Provide best services</span>
                        <h1 class="hero-title">World wide<span class="hero-big-title"> Best shipping</span></h1>
                        <p class="hero-text title_text">We offer exceptional shipping services to meet your needs. 
                            Choose from Express Shipping, Standard Shipping, Economy Shipping, or 
                            Same-Day Delivery for urgent shipments. Enjoy real-time tracking, priority handling, eco-friendly options, comprehensive insurance, and 24/7 support for a seamless and secure delivery experience.</p>
                        <div class="btn-group"><a href="{{ route('contact_us')}}" class="themeholy-btn">Free Quote!<span
                                    class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                            <div class="call-btn">
                                <!--<a href="https://www.youtube.com/watch?v=ADmQTw4qqTY" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                                <div class="media-body"><a href="https://www.youtube.com/watch?v=ADmQTw4qqTY"
                                        class="btn-title popup-video">Watch Video</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="themeholy-hero-slide" data-bg-src="{{ asset('assets/img/hero/'.$company[0]->slide3)}}">
                <div class="container">
                    <div class="hero-style1"><span class="hero-subtitle"><img src="{{ asset('assets/img/shape/title_left.svg')}}"
                                alt="shape">We’re Provide best services</span>
                        <h1 class="hero-title">Rail Freight<span class="hero-big-title"> and Logistics</span></h1>
                        <p class="hero-text title_text">Our rail freight and logistics services offer an efficient and reliable 
                            solution for your large-scale shipping needs. Rail freight provides a cost-effective and 
                            environmentally friendly option for transporting goods over long distances. Our logistics
                             team ensures seamless coordination, from pick-up to delivery, with real-time tracking and 
                             flexible scheduling to meet your requirements. With robust security measures and comprehensive 
                             support, we guarantee safe and timely delivery of your cargo.</p>
                        <div class="btn-group"><a href="{{ route('contact_us')}}" class="themeholy-btn">Free Quote!<span
                                    class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                            <div class="call-btn">
                                <!--<a href="https://www.youtube.com/watch?v=ADmQTw4qqTY" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                                <div class="media-body"><a href="https://www.youtube.com/watch?v=ADmQTw4qqTY"
                                        class="btn-title popup-video">Watch Video</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="indicator-number">
            <div class="indicator-wrapper">
                <div class="number-pagination">0<span class="pagingInfo1"></span></div>
                <div class="progress-wrapper">
                    <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span
                            class="slider__label sr-only"></span></div>
                </div>
                <div class="total-pagination">0<span class="pagingInfo2"></span></div>
            </div>
        </div>
    </section>
    

    
    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="img-box1 pe-xl-5">
                        <div class="img1"><img src="{{ asset('assets/img/normal/about_1.png')}}" alt="About"></div>
                        <div class="about-counter-wrapper">
                            <div class="about-content-3">
                                <div class="about-counter">
                                    <h2 class="counter-card_number"><span class="counter-number">25</span>+</h2>
                                    <p class="counter-card_text">Years Working Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="title-area mb-20"><span class="sub-title"><img src="{{ asset('assets/img/shape/title_left.svg')}}"
                                alt="shape">About Us</span>
                        <h2 class="sec-title">NICSONS COMPANY LIMITED</h2>
                    </div>
                    <p class="mb-25 title_text">
                    {{$company[0]->about_company}}
                    </p>
                    <div class="btn-group style2"><a href="{{route('about')}}" class="themeholy-btn">ABOUT MORE<span
                                class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                        <div class="about-profile">
                            <div class="about-avater"><img src="{{ asset('assets/img/shape/about-thumb_1.png')}}" alt="about"></div>
                        </div>
                    </div>
                    <div class="achive-about-wrap">
                        <div class="achive-about">
                            <div class="achive-about_icon"><img src="{{ asset('assets/img/icon/about_1_1.svg')}}" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="achive-about_title">Affordable Cost</h3>
                            </div>
                        </div>
                        <div class="achive-about">
                            <div class="achive-about_icon"><img src="{{ asset('assets/img/icon/about_1_2.svg')}}" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="achive-about_title">Shot Time Delivery</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="overflow-hidden service-sec bg-smoke space" id="service-sec"
        data-bg-src="{{ asset('assets/img/bg/service_bg_1.png')}}">
        <div class="container">
            <div class="title-area mt-n1 text-center"><span class="sub-title"><img src="{{ asset('assets/img/shape/title_left.svg')}}"
                        alt="shape">Our Services</span>
                <h2 class="sec-title">Specialist transportation services</h2>
            </div>
            <div class="row slider-shadow themeholy-carousel" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true">
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="service-box">
                            <div class="service-box_img"><img src="{{ asset('assets/img/'.$service->photo[0]->img_path)}}" alt="Service"></div>
                            <div class="service-box_content" data-bg-src="{{ asset('assets/img/service/pattern_1_1.svg')}}">
                                <div class="service-box_icon"><img src="{{ asset('assets/img/icon/service_2_1.svg')}}" alt=""></div>
                                <h3 class="box-title"><a href="{{ route('service_details', $service->id)}}">{{$service->name}}</a></h3>
                                <p class="title_text">{{$service->text}}
                                </p>
                                <a href="{{ route('service_details', $service->id)}}" class="line-btn">Read more<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="video-area bg-title space-top" data-bg-src="assets/img/bg/video_bg_1.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="title-area"><span class="sub-title"><img src="assets/img/shape/title_left.svg"
                                alt="shape">Request a Quote</span>
                        <h2 class="sec-title text-white">We Create Opportunity to Reach Potential</h2>
                    </div>
                    <div class="request-quote-wrapper">
                        <div class="nav nav-tabs request-quote-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-step1-tab" data-bs-toggle="tab" data-bs-target="#nav-step1" type="button">Request a quote</button>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                                <form action="" id="form_data">
                                    @csrf
                                    <div class="themeholy-request-form">
                                        <div class="row">
                                            <div class="col-md-6 form-group"><input type="text" name="name" placeholder="Full Name"
                                                    class="form-control"> <i class="fal fa-user"></i></div>
                                            <div class="col-md-6 form-group"><input type="text" name="email" placeholder="Your Email"
                                                    class="form-control"> <i class="fal fa-envelope"></i></div>
                                            <div class="col-md-6 form-group"><input type="text" name="phone_no" placeholder="Phone_no"
                                                    class="form-control"> <i class="fa-regular fa-location-dot"></i></div>
                                            <div class="col-md-6 form-group"><input type="text" name="weight" placeholder="Weight, Kg"
                                                    class="form-control"> <i class="fa-regular fa-weight-scale"></i></div>
                                            <div class="col-md-6 form-group"><input type="text" name="distance" placeholder="Distance, Km"
                                                    class="form-control"> <i class="fa-regular fa-location-dot"></i></div>
                                            <div class="form-group col-6">
                                                <select name="service" id="subject10"
                                                    class="form-select nice-select">
                                                    <option value="" disabled="disabled" selected="selected" hidden>Select
                                                        Service</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="themeholy-btn white-btn">Submit!<span
                                                    class="icon"><i
                                                        class="fa-sharp fa-regular fa-paper-plane"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                
                                <script>
                                    $(document).ready(function(){
                                        $('#form_data').submit(function(event) {
                                            event.preventDefault();
                                            var form = $(this).serialize();
                                            $.ajax({
                                                type:"post",
                                                url:"requests",
                                                data: form,
                                                success:function(response){
                                                    console.log(response)
                                                    alert(response.message);
                                                    window.location.reload();
                                                    },
                                                error:function(){
                                                    alert('something went wrong');
                                                }
                                            });
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="video-box1" data-bg-src="assets/img/normal/video_1.jpg"><img
                            src="assets/img/normal/video_1.jpg" alt="video"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="testimonial-area space-top">
        <div class="testi-box-wrapper">
            <div class="testi-box-img"><img src="assets/img/testimonial/testi_img.jpg" alt="Testmonial"></div>
            <div class="testi-box-slider">
                <div class="title-area"><span class="sub-title"><img src="assets/img/shape/title_left.svg"
                            alt="shape">Testimonial</span>
                    <h2 class="sec-title">What Client’s say about Our Services</h2>
                </div>
                <div class="row testi-slider themeholy-carousel" data-slide-show="3" data-lg-slide-show="2"
                    data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true">
                    @if (!is_null($testimonials))
                        @foreach ($testimonials as $testimonial)
                            <div class="ol-md-6 col-lg-4">
                                <div class="testi-grid">
                                    <div class="testi-overlay" data-bg-src="assets/img/testimonial/pattan.png"></div>
                                    <div class="testi-grid_wrapper">
                                    </div>
                                    <p class="testi-grid_text">{{'"'.$testimonial->text.'"'}}</p>
                                    <div class="testi-grid_profile">
                                        <div class="testi-grid_img"><img src="{{ asset('assets/img/'.$testimonial->photo[0]->img_path)}}"
                                                alt="Avater">
                                            <div class="testi-grid_icon"><i class="fas fa-quote-right"></i></div>
                                        </div>
                                        <div class="testi-grid_info">
                                            <h3 class="testi-grid_name">{{$testimonial->name}}</h3><span class="testi-grid_desig">{{$testimonial->title}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="shape-1 shape-mockup d-none d-xl-block" data-top="0%" data-left="-14%"><img
                src="assets/img/shape/testi_shape_1.jpg" alt="shape"></div>
        <div class="shape-2 shape-mockup rotate-x d-none d-xl-block" data-top="0%" data-right="-10%"><img
                src="assets/img/shape/globe.png" alt="shape"></div>
    </section>

    <section class="overflow-hidden space-extra-top" id="portfolio-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg-12 mb-n1">
                    <div class="title-area text-center"><span class="sub-title"><img
                                src="assets/img/shape/title_left.svg" alt="shape">portfolio</span>
                        <h2 class="sec-title">Our Recent Work Showcase</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row slider-shadow themeholy-carousel" id="projectSlide1" data-slide-show="3" data-lg-slide-show="3"
            data-md-slide-show="2" data-sm-slide-show="1">
            @if (!is_null($services))
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="project-card">
                            <div class="project-img" ><img src="{{ asset('assets/img/'.$service->photo[0]->img_path)}}" alt="project image" ></div>
                            <div class="project-content">
                                <h3 class="project-title"><a href="portfolio.html">{{$service->name}}</a></h3><a
                                    class="project-btn" href="{{ route('service_details', $service->id)}}"><i class="fa-regular fa-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>

    <section class="overflow-hidden space process-sec bg-smoke space" data-bg-src="assets/img/bg/map.png">
        <div class="container">
            <div class="process-line"><img src="assets/img/shape/line-3.svg" alt=""></div>
            <div class="title-area text-center"><span class="sub-title"><img src="assets/img/shape/title_left.svg"
                        alt="shape">Working Process</span>
                <h2 class="sec-title">Working Process for services</h2>
            </div>
            <div class="row gy-30 align-item-center">
                @php
                    $i = 1;
                @endphp
                @if (!is_null($working_process))
                    @foreach ($working_process as $process)
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="process-card">
                                <div class="process-card_icon"><img src="{{ asset('assets/img/'.$process->photo[0]->img_path)}}" alt="icon">
                                    <div class="process-card_number">{{'0'. $i++}}</div>
                                </div>
                                <h2 class="process-card_title box-title">{{$process->title}}</h2>
                                <p class="process-card_text">{{$process->text}}</p>
                            </div>
                        </div>
                    @endforeach
                
                @endif
            </div>
        </div>
    </section>

    <section class="overflow-hidden space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><img src="assets/img/shape/title_left.svg"
                        alt="shape">Experience Team</span>
                <h2 class="sec-title">Meet Our Amazing Team</h2>
            </div>
            <div class="row slider-shadow themeholy-carousel" data-slide-show="4" data-lg-slide-show="3"
                data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
                @if (!is_null($team))
                    @foreach ($team as $member)
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="themeholy-team team-card">
                                <div class="team-img"><img src="{{ asset('assets/img/'.$member->image)}}" alt="Team"></div>
                                <div class="team-card-content" data-bg-src="assets/img/team/team_card_shape.png">
                                    <div class="team-social">
                                        <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                                        <div class="themeholy-social">
                                            @foreach ($member->socialmedia as $socialmedia)
                                                <a target="_blank" href="{{$socialmedia->link}}"><i class="fab fa-{{$socialmedia->name}}"></i></a> 
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="team-title box-title"><a href="team-details.html">{{$member->name}}</a></h3>
                                        <span class="team-desig">{{$member->title->title}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <div class="space overflow-hidden customer-area" data-bg-src="assets/img/bg/customer_bg_1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="title-area text-center">
                        <h2 class="sec-title customer-title">24/7 customer support any time of the day or night</h2>
                    </div>
                    <div class="btn-group style3 text-center"><a href="about.html" class="themeholy-btn">Free
                            Quote!<span class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a> <a
                            href="contact.html" class="themeholy-btn blue-btn">Contact Us<i
                                class="fa-solid fa-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="counter-area" data-pos-for=".customer-area" data-sec-pos="top-half">
        <div class="container">
            <div class="counter-sec-space bg-theme2">
                <div class="row gy-40 justify-content-center">
                    @php
                        $i = 0;
                    @endphp
                    @if (!is_null($statistics))
                        @foreach ($statistics as $statistic)
                            <div class="col-sm-6 col-lg-3">
                                <div class="counter-card">
                                    <div class="border-line" data-bg-src="{{ asset('assets/img/shape/line.svg')}}"></div>
                                    <div class="counter-card_icon"><img src="{{ asset('assets/img/'.$statistic->photo[$i]->img_path)}}" alt=""></div>
                                    <h2 class="counter-card_number"><span class="counter-number">{{$statistic->number}}</span>+</h2>
                                    <p class="counter-card_text">{{$statistic->text}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    <section class="space" id="blog-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="title-area text-center text-lg-start"><span class="sub-title mt-n1"><img
                                src="assets/img/shape/title_left.svg" alt="shape">Blog & News</span>
                        <h2 class="sec-title">Latest Blog & News</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="btn-group"><a href="{{ route('news')}}" class="themeholy-btn">View All Posts<i
                                    class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow themeholy-carousel" id="blogSlide1" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                @if (!is_null($events))
                    @foreach ($events as $event)
                        <div class="col-md-6 col-xl-4">
                            <div class="blog-card">
                                <div class="blog-img"><img src="{{ asset('assets/img/'.$event->photo[0]->img_path)}}" alt="blog image" style="width:410px;height:270px;"></div>
                                <div class="blog-card_wrapper"><span class="blog-card_date">{!!Setting::getDayDate($event->created_at)['day']!!}</span> <span
                                        class="blog-card_month">{!!Setting::getDayDate($event->created_at)['month']!!}</span></div>
                                <div class="blog-card-content">
                                    <div class="blog-meta"><a href="{{ route('new_details', $event->id)}}"><i class="fa-regular fa-user"></i>By-Admin</a> <a
                                            href="{{ route('new_details', $event->id)}}"><i class="fa-regular fa-comments"></i>Comments {{count($event->comments)}}</a></div>
                                    <h3 class="blog-title box-title"><a href="{{ route('new_details', $event->id)}}">{{$event->text}}</a></h3><a href="{{ route('new_details', $event->id)}}" class="line-btn">Read More<i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection