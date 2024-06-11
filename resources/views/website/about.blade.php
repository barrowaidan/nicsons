@extends('components.weblayout')
    @section('content') 
    <!--Start Up side-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Up side-->

    <!--Start Story-->
    <div class="about-sec space" id="about-sec" data-pos-for=".feature-sec" data-sec-pos="bottom-half">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="title-area mb-25"><span class="sub-title"><img src="{{ asset('assets/img/shape/title_left.svg')}}"
                                alt="shape">About Us</span>
                        <h2 class="sec-title">Provide Transportation Services Since 2023</h2>
                    </div>
                    <div class="img-box3 pe-xl-5">
                        <div class="img1"><img src="assets/img/normal/about_3.jpg" alt="About"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <p class="mt-35 mb-30">{{$company[0]->about_company}}</p>
                    <div class="profile-wrap">
                        <div class="about-profile style2">
                            <div class="avater"><img src="{{ asset('assets/img/normal/about_avater.jpg')}}" alt="avater"></div>
                            <div class="media-body">
                                <h6 class="title">{{$title[0]->Users[0]->name}}</h6><span class="desig">{{$title[0]->title}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="about-counter-wrap">
                        @if (!is_null($statistical))
                            @foreach ($statistical as $statistic)
                                <div class="about-counter">
                                    <div class="border-line" data-bg-src="{{ asset('assets/img/shape/line-2.svg')}}"></div>
                                    <div class="achive-about_icon"><img src="{{ asset('assets/img/'.$statistic->photo[0]->img_path)}}" alt="icon"></div>
                                    <div class="about-counter-content">
                                        <h2 class="counter-card_number"><span class="counter-number">{{$statistic->number}}</span>k</h2>
                                        <p class="counter-card_text">{{$statistic->text}}</p>
                                    </div>
                                </div>
                            @endforeach
                        
                        @endif
                    </div>
                    <div class="checklist">
                        <ul>
                            <li>
                                Provide company-wide visibility to capacity
                            </li>
                            <li>
                                Many desktop publishing packages
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Story-->
    
    <!--Start Mission&Vision&CoreValue -->
    <section class="feature-sec bg-smoke">
        <div class="container">
            <div class="col-lg-8 offset-lg-2">
                <div class="title-area text-center"><span class="sub-title"><img src="{{ asset('assets/img/shape/title_left.svg')}}"
                            alt="shape">Our Purpose</span>
                    <h2 class="sec-title">Mission, Vision and Core value</h2>
                </div>
            </div>
            <div class="row feature-grid-wrap">
                <div class="feature-grid">
                    <div class="feature-grid_icon"><img src="{{ asset('assets/img/icon/feature_2_1.png')}}" alt="icon"></div>
                    <div>
                        <h3 class="feature-grid_title">Mission</h3>
                        <p class="feature-grid_text">{{$company[0]->mission}}</p>
                    </div>
                </div>
                <div class="feature-grid">
                    <div class="feature-grid_icon"><img src="{{ asset('assets/img/icon/feature_2_2.png')}}" alt="icon"></div>
                    <div>
                        <h3 class="feature-grid_title">Vision</h3>
                        <p class="feature-grid_text">{{$company[0]->vision}}</p>
                    </div>
                </div>
                <div class="feature-grid">
                    <div class="feature-grid_icon"><img src="{{ asset('assets/img/icon/feature_2_3.png')}}" alt="icon"></div>
                    <div>
                        <h3 class="feature-grid_title">Core Value</h3>
                        <strong>Connection</strong>
                        <p class="feature-grid_text">{{$company[0]->connection}}</p>
                        <strong>Commitment</strong>
                        <p class="feature-grid_text">{{$company[0]->commitment}}</p>
                        <strong>Creativity</strong>
                        <p class="feature-grid_text">{{$company[0]->creativity}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Mission&Vision&CoreValue -->

    <div class="video-area-3 space" data-bg-src="{{ asset('assets/img/bg/video_bg_3.jpg')}}">
        <div class="container-fluid">
            <div class="video-content-box style2 text-center">
                <!--<a href="#" class="white-play-btn popup-video mb-40"><i class="fa-sharp fa-solid fa-play"></i></a>-->
                <h3 class="text-white">Nicsons Company Limited is committed to transport safety</h3>
            </div>
        </div>
    </div>
    <div class="choose-sec-2">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-5">
                    <div class="service-form-wrap">
                        <form action="" id="form_data" class="service-form ajax-contact">
                            @csrf
                            <h3 class="fs-24 mb-30 mt-n1 text-white">Request Your Services</h3>
                            <div class="row">
                                <div class="col-md-12 form-group"><input type="text" name="name" placeholder="Full Name"
                                        class="form-control"> <i class="fal fa-user"></i></div>
                                <div class="col-md-12 form-group"><input type="text" name="email" placeholder="Your Email"
                                        class="form-control"> <i class="fal fa-envelope"></i></div>
                                <div class="col-md-12 form-group"><input type="text" name="phone_no" placeholder="Phone_no"
                                        class="form-control"> <i class="fa-regular fa-number"></i></div>
                                <div class="col-md-12 form-group"><input type="text" name="weight" placeholder="Weight, Kg"
                                        class="form-control"> <i class="fa-regular fa-weight-scale"></i></div>
                                <div class="col-md-12 form-group"><input type="text" name="distance" placeholder="Distance, Km"
                                        class="form-control"> <i class="fa-regular fa-location-dot"></i></div>
                                <div class="form-group col-12">
                                    <select name="service" id="subject10"
                                        class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Select
                                            Service</option>
                                            @foreach ($services as $service)
                                                <option value="{{$service->id}}">{{$service->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="themeholy-btn blue-btn2">Submit!<span
                                        class="icon"><i
                                            class="fa-sharp fa-regular fa-paper-plane"></i></span>
                                </button>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
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
                <div class="col-xl-7">
                    <div class="overflow-hidden faq-sec bg-smoke">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="accordion-area accordion" id="faqAccordion">
                                        @php
                                            $i = 1;
                                        @endphp
                                        @if (!is_null($faqs))
                                            @foreach ($faqs as $faq)
                                                <div @if($i==1) class="accordion-card active" @else class="accordion-card" @endif>
                                                    <div class="accordion-header" @if($i==1) id="collapse-item-1" @else id="collapse-item-2" @endif><button
                                                    @if($i==1) class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1" @else class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2" @endif ><span class="text-theme"></span> {{$faq->question}}</button></div>
                                                    <div @if($i==1) id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion" @else id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion" @endif>
                                                        <div class="accordion-body">
                                                            <p class="faq-text">{{$faq->answer}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                    $i++;
                                                @endphp
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Start Our Team-->
    <section class="overflow-hidden space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><img src="{{ asset('assets/img/shape/title_left.svg')}}"
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
                                <div class="team-card-content" data-bg-src="{{ asset('assets/img/team/team_card_shape.png')}}">
                                    <div class="team-social">
                                        <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                                        <div class="themeholy-social">
                                            @if (count($member->socialMedia) > 0)
                                                @foreach ($member->socialMedia as $media)
                                                    <a target="_blank" href="{{$media->link}}">
                                                        <i class="fab fa-{{$media->name}}"></i>
                                                    </a> 
                                                @endforeach
                                            
                                            @endif
                                        </div>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="team-title box-title"><a href="{{ route('team_details', $member->id)}}">{{$member->name}}</a></h3>
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
    <!--End Our Team-->
@endsection