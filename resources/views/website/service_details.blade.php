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
                        <div class="page-img"><img src="{{ asset('assets/img/'.$service->photo[0]->img_path)}}" alt="Service Image">
                        </div>
                        <div class="page-content">
                            <h2 class="h4">{{$service->name}}</h2>
                            <p>{{$service->text}}</p>
                            <hr class="style1">
                            <h4 class="h4 mb-4">Frequently Asked Question</h4>
                            <div class="accordion-area accordion style2" id="faqAccordion">
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
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">All Services<span class="shape"></span></h3>
                            <ul>
                                @foreach ($services as $service)
                                    <li><a href="{{ route('service_details', $service->id)}}">{{$service->name}}</a> <span>{{$service->id}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_banner style2">
                            <div class="banner-image"><img src="{{ asset('assets/img/team/team.jpg')}}" alt=""></div>
                            <h4 class="widget_title">Need Help? Talk with expert</h4>
                            <div class="widget-banner text-center"><span class="widget_desc">Call anytime</span> <a
                                    href="tel:+255717253052" class="banner-link">+255 (717) 253 052</a></div>
                        </div>
                        <form id="form_data"
                            class="service-form style2 ajax-contact">
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
                                        url:"{{ route('request')}}",
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
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--Start -->
@endsection