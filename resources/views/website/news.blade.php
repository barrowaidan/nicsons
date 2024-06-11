@extends('components.weblayout')
    @section('content') 
    <!--Start Up side-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">News</h1>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li>News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Up side-->
    
    <!-- Start-->
    <section class="themeholy-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    @if (!is_null($news))
                        @foreach ($news as $new)
                            <div class="themeholy-blog blog-single has-post-thumbnail">
                                <div class="blog-img"><a href="{{ route('new_details', $new->id)}}"><img src="{{ asset('assets/img/'.$new->photo[0]->img_path)}}"
                                            alt="Blog Image"></a></div>
                                <div class="blog-content">
                                    <div class="blog-meta"><a href="{{ route('new_details', $new->id)}}"><i class="fa-regular fa-user"></i>By-Admin</a> <a
                                            href="{{ route('new_details', $new->id)}}"><i class="fa-solid fa-calendar-days"></i>{{Setting::getDate($new->created_at)}}</a> <a
                                            href="{{ route('new_details', $new->id)}}"><i class="fa-regular fa-comments"></i>{{count($new->comments)}}</a></div>
                                    <h2 class="blog-title"><a href="{{ route('new_details', $new->id)}}">{{$new->name}}</a></h2>
                                    <p class="blog-text">{{$new->text}}</p>
                                    <div class="btn-group"><a href="{{ route('new_details', $new->id)}}" class="themeholy-btn">READ MORE<span
                                                class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a></div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="themeholy-pagination">
                        <ul>
                            <li><a href="#"><i class="fa-regular fa-angles-left"></i></a></li>
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#"><i class="fa-regular fa-angles-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <h3 class="widget_title">All Services<span class="shape"></span></h3>
                            <form class="search-form"><input type="text" placeholder="Search..."> <button
                                    type="submit"><i class="far fa-search"></i></button></form>
                        </div>
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories<span class="shape"></span></h3>
                            <ul>
                                @foreach ($services as $service)
                                    <li><a href="{{route('new_details', $service->id)}}">{{$service->name}}</a> <span>({{$service->id}})</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h3 class="widget_title">Recent Posts<span class="shape"></span></h3>
                            <div class="recent-post-wrap">
                                @foreach ($events as $event)
                                    <div class="recent-post">
                                        <div class="media-img"><a href="{{ route('new_details', $event->id)}}"><img
                                                    src="{{ asset('assets/img/'.$event->photo[0]->img_path)}}" alt="Blog Image"></a></div>
                                        <div class="media-body">
                                            <div class="recent-post-meta"><a href="{{ route('new_details', $event->id)}}"><i
                                                        class="fal fa-calendar-days"></i>{{Setting::getDate($event->created_at)}}</a></div>
                                            <h4 class="post-title"><a class="text-inherit tit" href="{{ route('new_details', $event->id)}}">{{$event->text}}</a></h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End-->
@endsection