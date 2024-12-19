@extends('web.layout')

@section('title') 
من نحن
@endsection 


@section('main')
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class=" jarallax text-light">
                <img src="{{ asset('storage/' . $about_us_main->image) }}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h1>{{$about_us_main->title}}</h1>
                            <ul class="crumb">
                                <li><a href="{{route('/')}}">الرئيسية</a></li>
                                <li class="active">{{$about_us_main->subtitle}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="de-overlay"></div>
            </section>

            <section style="direction: rtl;" class=" lines-deco">
                <div class="container">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle wow fadeInUp mb-3">{{$about_us_header->name}}</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">{{$about_us_header->title}}</h2>
                            <p>
                                {!! nl2br(e($about_us_header->description)) !!}
                            </p>
                        </div>

                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-6">
                                    <img src="{{ asset('storage/' . $about_us_property->image_path_1) }}" class="img-fluid mb-4 wow zoomIn" alt="">
                                    <div class="col-12 text-center">
                                        <div class="bg-color-2 text-light p-4">
                                            <div class="de_count wow fadeInUp">
                                                <h2 class="mb-0"><span class="timer" data-to="{{$about_us_property->apartments_count}}" data-speed="3000"></span>+</h2>
                                                <span>شقه </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="spacer-single sm-hide"></div>
                                    <div class="col-12 text-center">
                                        <div class="bg-color text-light p-4">
                                            <div class="de_count wow fadeInUp">
                                                <h2 class="mb-0"><span class="timer" data-to="{{$about_us_property->floors_count}}" data-speed="3000"></span>+</h2>
                                                <span>طابق</span>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('storage/' . $about_us_property->image_path_2) }}" class="img-fluid mt-4 wow zoomIn" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            
            <section class=" lines-deco">
                <div class="container">
                    @foreach ($about_us_contents as $about_us_content )
                    <div class="row g-0 align-items-center justify-content-center">
                        <div class="col-lg-5">
                            <div class="relative wow fadeInUp" data-wow-delay=".3s">   
                                <div class="shape-mask-1 jarallax">
                                    <img src="{{ asset('storage/' . $about_us_content->image) }}" class="jarallax-img" alt="">
                                </div>
                            </div>
                        </div>

                        <div style="text-align: right;" class="col-lg-5">
                            <div class="ms-lg-5 wow scaleIn">
                                <h2 class="wow fadeInUp">{{$about_us_content->title}}</h2>
                                <p>
                                    {{$about_us_content->description}}
                                </p>
                            </div>
                        </div>    
                        @endforeach                                            
                    </div>
                </div>

            </section>

        </div>
        <!-- content close -->
        
@endsection