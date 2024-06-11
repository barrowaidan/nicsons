@extends('components.weblayout')
    @section('content') 
    <!--Start Up side-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Services</h1>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Up side-->

    <!---->
    <section class="service-sec space" id="service-sec">
        <div class="container">
            <div class="row ser-gy-4">
                @if (!is_null($services))
                    @foreach ($services as $service)
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="service-box">
                                <div class="service-box_img"><img src="{{ asset('assets/img/'.$service->photo[0]->img_path)}}" alt="Service"></div>
                                <div class="service-box_content" data-bg-src="{{ asset('assets/img/service/pattern_1_1.svg')}}">
                                    <div class="service-box_icon"><img src="{{ asset('assets/img/icon/service_1_1.svg')}}" alt=""></div>
                                    <h3 class="service-box_title"><a href="{{ route('service_details', $service->id)}}">{{$service->name}}</a></h3>
                                    <p class="service-box_text title_text">{{$service->text}}</p><a
                                        href="{{ route('service_details', $service->id)}}" class="line-btn">Read more<i
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