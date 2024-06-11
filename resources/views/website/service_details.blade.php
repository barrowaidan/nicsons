@extends('components.weblayout')
    @section('content') 
    <!--Start Up side-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Service Details</h1>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Up side-->
    <!--Start -->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single service-single">
                        <div class="page-img"><img src="{{ asset('assets/img/service/service_details.jpg')}}" alt="Service Image">
                        </div>
                        <div class="page-content">
                            <h2 class="h4">Service Name</h2>
                            <p>Service text</p>
                            <div class="row">
                                <div class="feature-tab-wrapper">
                                    <div class="feature-content">
                                        <h4 class="h5 mb-3 mt-n2">Our Areas of Responsibility</h4>
                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque
                                            velit nisi</p>
                                        <div class="feature-icon-list">
                                            <ul>
                                                <li><i class="fa-solid fa-circle-check"></i>Provide company-wide
                                                    visibility to capacity</li>
                                                <li><i class="fa-solid fa-circle-check"></i>Provide company-wide
                                                    visibility to capacity</li>
                                                <li><i class="fa-solid fa-circle-check"></i>Many desktop publishing
                                                    packages</li>
                                                <li><i class="fa-solid fa-circle-check"></i>Customer engagement matters
                                                </li>
                                                <li><i class="fa-solid fa-circle-check"></i>Inventory & Logistics
                                                    Management</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="feature-image"><img src="{{asset('assets/img/service/service_1.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <hr class="style1">
                            <h4 class="h4 mb-4">Frequently Asked Question</h4>
                            <div class="accordion-area accordion style2" id="faqAccordion">
                                <div class="accordion-card active">
                                    <div class="accordion-header" id="collapse-item-1"><button class="accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                            aria-expanded="true" aria-controls="collapse-1">How can logistics problems
                                            be reduced?</button></div>
                                    <div id="collapse-1" class="accordion-collapse collapse show"
                                        aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Curabitur aliquet quam id dui posuere blandit.
                                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                                cubilia Curae; Donec velit neque, auctor sit amet aliquam vel,
                                                ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt
                                                nibh pulvinar a.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="accordion-header" id="collapse-item-2"><button
                                            class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-2" aria-expanded="false"
                                            aria-controls="collapse-2">What is the best way to manage
                                            logistics?</button></div>
                                    <div id="collapse-2" class="accordion-collapse collapse"
                                        aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Curabitur aliquet quam id dui posuere blandit.
                                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                                cubilia Curae; Donec velit neque, auctor sit amet aliquam vel,
                                                ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt
                                                nibh pulvinar a.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">All Services<span class="shape"></span></h3>
                            <ul>
                                <li><a href="{{ route('service_details', 1)}}">Service name</a> <span>(10)</span></li>
                                <li><a href="{{ route('service_details', 1)}}">Service name</a> <span>(08)</span></li>
                                <li><a href="{{ route('service_details', 1)}}">Service name </a><span>(15)</span></li>
                                <li><a href="{{ route('service_details', 1)}}">Service name </a><span>(14)</span></li>
                                <li><a href="{{ route('service_details', 1)}}">Service name </a><span>(06)</span></li>
                                <li><a href="{{ route('service_details', 1)}}">Warehouse Storage </a><span>(10)</span></li>
                            </ul>
                        </div>
                        <div class="widget widget_banner style2">
                            <div class="banner-image"><img src="{{ asset('assets/img/normal/about_avater.jpg')}}" alt=""></div>
                            <h4 class="widget_title">Need Help? Talk with expert</h4>
                            <div class="widget-banner text-center"><span class="widget_desc">Call anytime</span> <a
                                    href="tel:+255717253052" class="banner-link">+255 (717) 253 052</a></div>
                        </div>
                        <form action="#" method="POST"
                            class="service-form style2 ajax-contact">
                            <h3 class="fs-24 mb-20 mt-n1 text-white">Request a quote</h3>
                            <div class="row">
                                <div class="form-group col-12"><input type="text" class="form-control" name="name"
                                        id="name7" placeholder="Your Name"> <i class="fal fa-user"></i></div>
                                <div class="form-group col-12"><input type="email" class="form-control" name="email"
                                        id="email" placeholder="Email Address"> <i class="fal fa-envelope"></i></div>
                                <div class="form-group col-12"><input type="text" class="form-control" name="number"
                                        id="number8" placeholder="Weight, Kg"> <i class="fa-light fa-weight-scale"></i>
                                </div>
                                <div class="form-group col-12"><input type="text" class="form-control" name="number"
                                        id="number9" placeholder="Distance, Km"> <i
                                        class="fa-sharp fa-regular fa-location-dot"></i></div>
                                <div class="form-group col-12"><select name="subject" id="subject7"
                                        class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Select Freight
                                        </option>
                                        <option value="Road Freight">Road Freight</option>
                                        <option value="Ocean Freight">Ocean Freight</option>
                                        <option value="Air Freight">Air Freight</option>
                                        <option value="Rail Freight">Rail Freight</option>
                                    </select></div>
                                <div class="btn-group justify-content-center"><a href="about.html"
                                        class="themeholy-btn blue-btn2 btn-fw justify-content-center">Free Quote!<span
                                            class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--Start -->
@endsection