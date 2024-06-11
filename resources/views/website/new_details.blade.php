@extends('components.weblayout')
    @section('content') 
    <!--Start Up side-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">New Details</h1>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li><a href="{{ route('news')}}">News</a></li>
                        <li>New Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Up side-->

    <!---->
    <section class="themeholy-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="themeholy-blog blog-single has-post-thumbnail">
                        <div class="blog-img themeholy-carousel" id="blogSlide3" data-slide-show="1" data-arrows="true">
                            <a href="blog-details.html"><img src="{{ asset('assets/img/blog/blog-s-2-1.jpg')}}"
                                    alt="Blog Image"></a><a href="blog-details.html"><img
                                    src="{{ asset('assets/img/blog/blog-s-2-2.jpg')}}" alt="Blog Image"></a><a
                                href="blog-details.html"><img src="{{ asset('assets/img/blog/blog-s-2-3.jpg')}}" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog.html"><i class="fa-regular fa-user"></i>By-Admin</a> <a
                                    href="blog.html"><i class="fa-light fa-calendar-days"></i>02 March, 2023</a> <a
                                    href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(3)</a></div>
                            <h2 class="blog-title">Future Is Bright When You Are More Prepared</h2>
                            <p>Text.</p>
                            <blockquote>
                                <p>Quote,</p><cite>Cite name</cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="themeholy-comments-wrap">
                        <h2 class="blog-inner-title h3">Comments (3)<span class="shape"></span></h2>
                        <ul class="comment-list">
                            <li class="themeholy-comment-item">
                                <div class="themeholy-post-comment">
                                    <div class="comment-avater"><img src="{{ asset('assets/img/blog/comment-author-1.jpg')}}"
                                            alt="Comment Author"></div>
                                    <div class="comment-content">
                                        <div class="d-flex">
                                            <h3 class="name">Marvin McKinney</h3><span class="commented-on"><i
                                                    class="fal fa-calendar-alt"></i>02 March, 2023</span>
                                        </div>
                                        <p class="text">Competently provide access to fully researched methods of
                                            empowerment without sticky models.</p>
                                        <div class="reply_and_edit"><a href="blog-details.html" class="reply-btn"><i
                                                    class="fas fa-reply"></i>Reply</a></div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="themeholy-comment-item">
                                        <div class="themeholy-post-comment">
                                            <div class="comment-avater"><img src="{{ asset('assets/img/blog/comment-author-2.jpg')}}"
                                                    alt="Comment Author"></div>
                                            <div class="comment-content">
                                                <div class="d-flex">
                                                    <h3 class="name">Bessie Cooper</h3><span class="commented-on"><i
                                                            class="fal fa-calendar-alt"></i>20 March, 2023</span>
                                                </div>
                                                <p class="text">Collaboratively empower multifunctional e-commerce for
                                                    prospective applications. Seamlessly productivate plug and play
                                                    markets.</p>
                                                <div class="reply_and_edit"><a href="blog-details.html"
                                                        class="reply-btn"><i class="fas fa-reply"></i>Reply</a></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="themeholy-comment-item">
                                <div class="themeholy-post-comment">
                                    <div class="comment-avater"><img src="{{ asset('assets/img/blog/comment-author-3.jpg')}}"
                                            alt="Comment Author"></div>
                                    <div class="comment-content">
                                        <div class="d-flex">
                                            <h3 class="name">Floyd Miles</h3><span class="commented-on"><i
                                                    class="fal fa-calendar-alt"></i>06 June, 2023</span>
                                        </div>
                                        <p class="text">Proin dictum accumsan ante, vel cursus nulla congue quis.
                                            Aliquam a nisi pretium, facilisis arcu quis, placerat massa. Praesent ac
                                            odio quis massa</p>
                                        <div class="reply_and_edit"><a href="blog-details.html" class="reply-btn"><i
                                                    class="fas fa-reply"></i>Reply</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="themeholy-comment-form">
                        <div class="form-title">
                            <h3 class="blog-inner-title mb-2">Leave a Comment<span class="shape"></span></h3>
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-6 form-group"><input type="text" placeholder="Your Name*"
                                    class="form-control"> <i class="fal fa-user"></i></div>
                            <div class="col-md-6 form-group"><input type="text" placeholder="Your Email*"
                                    class="form-control"> <i class="fal fa-envelope"></i></div>
                            <div class="col-12 form-group"><textarea placeholder="Write a Comment*"
                                    class="form-control"></textarea> <i class="fal fa-pencil"></i></div>
                            <div class="col-12 form-group d-flex mb-0"><button class="themeholy-btn">POST COMMENT<span
                                        class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></button>
                            </div>
                        </div>
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
                                <li><a href="#">Service name</a> <span>(10)</span></li>
                                <li><a href="#">Service name</a> <span>(08)</span></li>
                                <li><a href="#">Service name </a><span>(15)</span></li>
                                <li><a href="#">Service name </a><span>(14)</span></li>
                                <li><a href="#">Service name </a><span>(06)</span></li>
                                <li><a href="#">Warehouse Storage </a><span>(10)</span></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h3 class="widget_title">Recent Posts<span class="shape"></span></h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img
                                                src="{{ asset('assets/img/blog/recent-post-1-1.jpg')}}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><a href="blog.html"><i
                                                    class="fal fa-calendar-days"></i>12 Jun, 2023</a></div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">We set
                                                the standards others try to live up to.</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img
                                                src="{{ asset('assets/img/blog/recent-post-1-2.jpg')}}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><a href="blog.html"><i
                                                    class="fal fa-calendar-days"></i>22 Jun, 2023</a></div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">We set
                                                the standards others try to live up to.</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img
                                                src="{{ asset('assets/img/blog/recent-post-1-3.jpg')}}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><a href="blog.html"><i
                                                    class="fal fa-calendar-days"></i>23 Jun, 2023</a></div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">We set
                                                the standards others try to live up to.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!---->
@endsection