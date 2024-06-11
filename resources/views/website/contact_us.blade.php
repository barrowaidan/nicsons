@extends('components.weblayout')
    @section('content') 
    <!--Start Up side-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Up side-->
    <!---->
    <div class="space" id="contact-sec">
        <div class="container">
            <div class="row gy-40 flex-row-reverse">
                <div class="col-xl-8">
                    <div class="contact-form-wrapper">
                        <form action="#" method="POST"
                            class="contact-form ajax-contact">
                            <h2 class="form-title">Send A Massage <span class="shape"></span></h2>
                            <div class="row">
                                <div class="form-group col-md-6"><input type="text" class="form-control" name="name"
                                        id="name" placeholder="Your Name"> <i class="fal fa-user"></i></div>
                                <div class="form-group col-md-6"><input type="email" class="form-control" name="email"
                                        id="email" placeholder="Email Address"> <i class="fal fa-envelope"></i></div>
                                <div class="form-group col-md-6"><input type="tel" class="form-control" name="number"
                                        id="number" placeholder="Phone Number"> <i class="fa-regular fa-phone-flip"></i>
                                </div>
                                <div class="form-group col-md-6"><input type="text" class="form-control" name="number"
                                        id="number4" placeholder="Subject"> <i class="fa-light fa-tag"></i></div>
                                <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                        class="form-control" placeholder="Message"></textarea> <i
                                        class="fal fa-comment"></i></div>
                                <div class="btn-group style2"><a href="blog.html" class="themeholy-btn">Free Quote!<span
                                            class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="contact-info-wrap">
                        <div class="title-area"><span class="sub-title"><img src="{{ asset('assets/img/shape/title_left.svg')}}"
                                    alt="shape">Contact Us</span>
                            <h2 class="sec-title mb-0">Get In Touch</h2>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class=""><img src="{{ asset('assets/img/icon/location_5.svg')}}"
                                        alt=""></i></div>
                            <div class="media-body">
                                <h4 class="contact-info_title">Office Address</h4><span class="contact-info_text">3891.
                                    Location</span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class=""><img src="{{ asset('assets/img/icon/phone.svg')}}" alt=""></i>
                            </div>
                            <div class="media-body">
                                <h4 class="contact-info_title">Phone Number</h4><span class="contact-info_text"><a
                                        href="tel:+255717253052">+255 (717) 253 052</a></span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class=""><img src="{{ asset('assets/img/icon/email.svg')}}" alt=""></i>
                            </div>
                            <div class="media-body">
                                <h4 class="contact-info_title">Email Address</h4><span class="contact-info_text"><a
                                        href="mailto:quick.help@gmail.com">info@nicsons.co.tz</a></span>
                            </div>
                        </div>
                        <div class="themeholy-social author-social">
                            <h4 class="info-title">Follow Us</h4><a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a> <a href="https://www.behance.net/"><i
                                    class="fa-brands fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-sec"><iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuzsoft!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
        allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!---->
@endsection