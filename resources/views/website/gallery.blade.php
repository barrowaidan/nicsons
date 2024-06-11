@extends('components.weblayout')
    @section('content') 
    <!--Start Up side-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Gallery</h1>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Up side-->
    <!--Start -->
        <section class="space" id="portfolio-sec">
            <div class="container">
                <div class="row gy-4">
                    @foreach ($photos as $photo)
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="project-card style3">
                                <div class="project-img"><img src="{{ asset('assets/img/'.$photo->img_path)}}" alt="project image">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="btn-group mt-5 justify-content-center"><a href="portfolio-details.html"
                        class="themeholy-btn">Free Quote!<i class="fa-solid fa-arrow-up-right"></i></a></div>
            </div>
        </section>
    <!--End -->
@endsection