@extends('components.weblayout')
    @section('content') 
    <!--Start Up side-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Team Details</h1>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li><a href="{{ route('about')}}">About</a></li>
                        <li>Member Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Up side-->

    <!--Start -->
    <section class="bg-white space">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-card_img mb-30"><img class="w-100" src="{{ asset('assets/img/'.$member->image)}}"
                            alt="team image"></div>
                    <div class="skill-card">
                        <h5 class="skill-card_title">Skills of Title</h5>
                        <div class="skill-feature">
                            <div class="progress-bar" data-percentage="90%">
                                <h4 class="progress-title-holder">Consulting <span class="progress-number-wrapper"><span
                                            class="progress-number-mark"><span class="percent"></span></span></span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-feature">
                            <div class="progress-bar" data-percentage="95%">
                                <h4 class="progress-title-holder">Communication <span
                                        class="progress-number-wrapper"><span class="progress-number-mark"><span
                                                class="percent"></span></span></span></h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-feature">
                            <div class="progress-bar" data-percentage="85%">
                                <h4 class="progress-title-holder">Management <span class="progress-number-wrapper"><span
                                            class="progress-number-mark"><span class="percent"></span></span></span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-card">
                        <div class="about-card_wrapp">
                            <div class="about-card_content">
                                <h5 class="about-card_title">{{$member->name}}</h5><span class="about-card_desig">{{$member->title->title}}</span>
                            </div>
                            <div class="themeholy-social team-social">
                                @foreach ($member->socialMedia as $media)
                                    <a href="{{$media->link}}"><i class="fab fa-{{$media->name}}"></i></a>
                                @endforeach
                            </div>
                        </div>
                        <p class="about-card_text">Content about the member</p>
                        <div class="about-card_box">
                            <div class="info-box_wrapper">
                                <div class="info-box">
                                    <div class="info-box_icon"><i><img src="{{ asset('assets/img/icon/phone-call.svg')}}" alt=""></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="info-box_title">Phone :</h4><a class="info-box_link"
                                            href="tel:{{$member->phone_no}}">{{$member->phone_no}}</a>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon"><i><img src="{{ asset('assets/img/icon/email_2.svg')}}" alt=""></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="info-box_title">Email address :</h4><a class="info-box_link"
                                            href="mailto:{{$member->phone_no}}">{{$member->email}}</a>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon"><i><img src="{{ asset('assets/img/icon/location_3.svg')}}" alt=""></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="info-box_title">Office :</h4><span class="info-box_text">{{$member->company->physical_address}}</span>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon"><i><img src="assets/img/icon/clock.svg" alt=""></i></div>
                                    <div class="media-body">
                                        <h4 class="info-box_title">Office Time :</h4><span class="info-box_text">{{$member->company->working_hours}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-contact mt-30">
                        <form action="https://themeholy.com/html/logistik/demo/mail.php" method="POST"
                            class="team-form ajax-contact">
                            <h3 class="fs-24 mb-20 mt-n1">Contact with Me</h3>
                            <div class="row">
                                <div class="form-group col-md-6"><input type="text" class="form-control" name="name"
                                        id="name" placeholder="Your Name"> <i class="fal fa-user"></i></div>
                                <div class="form-group col-md-6"><input type="email" class="form-control" name="email"
                                        id="email" placeholder="Email Address"> <i class="fal fa-envelope"></i></div>
                                <div class="form-group col-12"><input type="tel" class="form-control" name="number"
                                        id="number" placeholder="Phone Number"> <i class="fa-regular fa-phone"></i>
                                </div>
                                <div class="form-group col-12"><i class="fa-regular fa-comments"></i> <textarea
                                        name="message" id="message" cols="30" rows="3" class="form-control style3"
                                        placeholder=" Message"></textarea></div>
                                <div class="btn-group justify-content-center"><a href="#"
                                        class="themeholy-btn btn-fw justify-content-center">Submit Now<span
                                            class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End -->
@endsection