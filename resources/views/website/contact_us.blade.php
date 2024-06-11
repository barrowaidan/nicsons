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
                                <h4 class="contact-info_title">Office Address</h4><span class="contact-info_text">{{$company[0]->physical_address}}</span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class=""><img src="{{ asset('assets/img/icon/phone.svg')}}" alt=""></i>
                            </div>
                            <div class="media-body">
                                <h4 class="contact-info_title">Phone Number</h4><span class="contact-info_text"><a
                                        href="tel:{{$company[0]->phone_no}}">{{$company[0]->phone_no}}</a></span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class=""><img src="{{ asset('assets/img/icon/email.svg')}}" alt=""></i>
                            </div>
                            <div class="media-body">
                                <h4 class="contact-info_title">Email Address</h4><span class="contact-info_text"><a
                                        href="mailto:{{$company[0]->email}}">{{$company[0]->email}}</a></span>
                            </div>
                        </div>
                        <div class="themeholy-social author-social">
                            <h4 class="info-title">Follow Us</h4>
                            @foreach ($company[0]->socialMedia as $media)
                                <a href="{{$media->link}}"><i class="fab fa-{{$media->name}}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-sec"><iframe src="{{$company[0]->map_location}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!---->
@endsection