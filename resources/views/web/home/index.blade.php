@extends('web.layout')

@section('title')
الرئيسيه
@endsection

@section('main')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>
        
        {{-- {{ asset('storage/' . $contact->background_image) }} --}}

                        {{-- home_header --}}
                <section class="no-top no-bottom text-light jarallax relative vertical-center" data-jarallax data-speed="0.5">
                    <video autoplay muted loop class="jarallax-img" playsinline>
                        <source src="{{ asset('storage/' . $section->video_url) }}" type="video/mp4">
                    </video>
                    <div class="container relative z-2">
                        <div class="swiper-slide">
                            <div class="swiper-inner" data-bgimage="url(images/slider/2.jpg)">
                                <div class="sw-caption z-1000">
                                    <div class="container">
                                        <div class="row g-4 align-items-center">
    
                                            <div class="spacer-double"></div>
    
                                            <div class="col-lg-8 offset-lg-2 text-center">     
                                                <div class="spacer-single"></div>
                                                <div class="sw-text-wrapper">
                                                    <div class="slider-extra mb-3">
                                                        <span class="d-stars">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </span>
                                                    </div>
                                                    <h1 class="slider-title mb-4">
                                                        {!! nl2br(e($section->slider_title)) !!}
                                                    </h1>
                                                    <p class="col-lg-8 offset-lg-2 slider-teaser px-4 mb-0">{{$section->slider_description}}</p>
                                                    <div class="spacer-30"></div>
                                                    <a class="btn-main mb10 mb-3" href="about.html">المزيد عن الدره</a>
                                                </div>
                                            </div>
    
                                            <div class="spacer-single"></div>
                                        </div>
                                        
                                    </div>
                                </div>
    
                                <div class="abs abs-centered w-40">
                                    <div class="box-slider-decor"></div>
                                </div>
                                <div class="sw-overlay op-2"></div>
                            </div>
                        </div>    
                    </div>
                    <div class="de-overlay"></div>
                </section>
                        {{-- end --}}
                {{-- home_image/facilities --}}
                <section class="relative lines-deco">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-4 sm-hide">
                                <div class="relative wow fadeInUp" data-wow-delay=".3s">   
                                    <div class="abs top-0 w-100">
                                        <div class="shape-mask-1 jarallax">
                                            <img src="{{ asset('storage/'.$images[0]->src) }}" class="jarallax-img" alt="{{ $images[0]->alt }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-4 text-center">
                                <div class="wow scaleIn">
                                    <div class="subtitle id-color mb-3">مرحبا بكم في </div>
                                    <h2 class="wow fadeInUp">الدرة.. جوهرة الكويت الساطعة</h2>
                
                                    <div class="text-center wow fadeInUp" data-wow-delay=".5s">
                                        <h4 class="fw-bold mb-1">4.9 out of 5</h4>
                                        <div class="de-rating-ext fs-18">
                                            <span class="d-stars">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="icofont-star"></i>
                                                @endfor
                                            </span>
                                        </div>
                                        <span class="d-block fs-14 mb-0">على البحر مباشرة في ابوحليفة</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 sm-hide">
                                <div class="relative wow fadeInUp" data-wow-delay=".3s">                                
                                    <div class="abs top-0 w-100">
                                        <div class="shape-mask-1 jarallax">
                                            <img src="{{ asset('storage/'.$images[1]->src) }}" class="jarallax-img" alt="{{ $images[1]->alt }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="spacer-double"></div>

                        <div class="row g-4 relative z-2">
                            @foreach ($facilities as $facility)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="relative p-4 bg-white border-grey text-center">
                                        <div class="icon-container" style="font-size: 30px; color: #976e4e;">
                                            <img src="{{ asset('storage/' . $facility->icon) }}" alt="{{ $facility->name }}" style="border: 1px solid #976e4e; padding: 10px; border-radius: 50%; height: 55px; width: 55px;">
                                        </div>
                                        <div style="text-align: center; margin-top: 10px;">
                                            <h4>{{ $facility->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                
                        <div class="text-center mt-5">
                            <a style="min-width: 130px;height: 44px;" href="services.html" class="btn btn-primary">عرض المزيد</a>
                        </div>
                    </div>
                </section>


                {{-- home_stat --}}
                <section class="relative lines-deco">
                    <div class="container relative z-2">
                        <div class="row g-4">
                            @foreach ($states as $stat)
                            <div class="col-md-3">
                                <div class="relative">
                                    <img style="height:272px" src="{{ asset('storage/' . $stat->image_url) }}" class="img-fluid wow fadeInUp" alt="">
                                    <div class="bg-color text-light p-4 start-10 mx-4 mt-70 wow fadeInDown" data-wow-delay="">
                                        <div class="row g-4 align-items-center justify-content-center">
                                            <div class="col-lg-5 text-center">
                                                <div class="de_count fs-15 wow fadeInRight" data-wow-delay=".2s">
                                                    <h3 class="fs-60">
                                                        <span class="timer fs-60" data-to="{{ $stat->count_value }}" data-speed="3000">0</span>
                                                    </h3>
                                                    {{ $stat->label }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                
                    <div class="spacer-single"></div>
                </section>
                {{-- end --}}
    
                {{-- home_projects --}}
                <section class="relative">
                    <div class="container relative z-2">
                        <div style="direction: rtl;" class="row g-4 align-items-center">                        
    
                            <div class="col-lg-6">
                                <div class="row align-items-center">                                
    
                                    <div class="col-md-6">
                                        <div class="relative">
                                            <img src="{{ asset('storage/' . $projects[0]->image_1) }}" class="w-100 rounded02 wow fadeInUp" alt="" data-wow-delay=".2s">
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="relative">
                                            <img  style="height: 300px;" src="{{ asset('storage/' . $projects[0]->image_2) }}" class="w-100 rounded02 wow fadeInUp" alt="" data-wow-delay=".4s">
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="ms-4">
                                    <div class="subtitle id-color wow fadeInUp mb-2" data-wow-delay=".0s">{{ $projects[0]->name }}</div>
                                    <h2 class="wow fadeInUp " data-wow-delay=".2s">{{ $projects[0]->title }}</h2>
    
                                    <p class="wow fadeInUp" data-wow-delay=".4s">
                                        {{ $projects[0]->description }}                                   
                                     </p>
    
                                    <a class="btn-main wow fadeInUp" href="#" data-wow-delay=".6s">المزيد عنا</a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
    
                </section>
                {{-- end --}}
                
                {{-- المدونه  --}}
                <section class="lines-deco">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-8 offset-lg-2 text-center">
                                <h2 class="wow fadeInUp"> الأخبار والمدونه</h2>
                            </div>
                            <!-- هنا تبدأ الحلقة لعرض المنشورات -->
                            @foreach ($posts->chunk(3) as $chunk)
                                <div class="row">
                                    @foreach ($chunk as $post)
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <div class="post-image mb-3">
                                                    <div class="d-tagline start-0 ps-3">
                                                        <span>{{ $post->category }}</span>
                                                    </div>
                                                    <img alt="" src="{{ asset('storage/' . $post->image) }}" class="lazy">
                                                </div>
                                                <div class="pt-2 h-100">
                                                    <h4 style="text-align: right;" class="mb-3 lh-1-4">
                                                        <!-- تعديل الرابط هنا ليأخذ id المنشور -->
                                                        <a class="text-dark" href="{{ route('news_single', $post->id) }}">{{ $post->title }}</a>
                                                    </h4>
                                                    <p style="text-align: right;" class="mb-2">{{ $post->description }}</p>
                                                    <div style="text-align: right;" class="py-1">
                                                        <img src="{{ asset('storage/' . $post->author_image) }}" class="w-20px me-2 circle" alt="">
                                                        <div class="d-inline fs-14 fw-500 me-3">{{ $post->author_name }}</div>
                                                        <div class="d-inline fs-14 fw-500">
                                                            <i class="icofont-ui-calendar id-color me-2"></i>{{ $post->created_at->format('d M Y') }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center mt-5">
                            <a style="min-width: 130px;height: 44px;" href="services.html" class="btn btn-primary">عرض المزيد</a>
                        </div>
                    </div>
                </section>
                {{-- خلصت --}}


                {{-- تواصل معنا --}}
                <section class="relative lines-deco">
                    <div class="container">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                               <div class="text-center">
                                    <h3 class="mb-4">تواصل معنا</h3>
                                </div>
                                
                                <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="{{ route('contact.store') }}">
                                    @csrf
                                    <div class="row gx-4">
                                        <div class="col-lg-12 col-md-12 mb10">
                                            <div class="field-set">
                                                <input style="text-align: right;" type="text" name="Name" id="name" class="form-control" placeholder="الاسم" required>
                                            </div>
                                
                                            <div class="field-set">
                                                <input style="text-align: right;" type="text" name="Email" id="email" class="form-control" placeholder="الايميل" required>
                                            </div>
                                
                                            <div class="field-set">
                                                <input style="text-align: right;" type="text" name="phone" id="phone" class="form-control" placeholder="رقم الهاتف" required>
                                            </div>
                                            
                                            <div class="field-set">
                                                <select style="text-align: right;" name="unit_type" class="form-control">
                                                    <option>نوع الوحده</option>
                                                    <option>الاول</option>
                                                    <option>الثاني</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12">
                                            <div class="field-set mb20">
                                                <textarea style="text-align: right;" name="message" id="message" class="form-control" placeholder="الرساله" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div id='submit' class="mt20 text-cen">
                                            <input type='submit' id='send_message' value='تواصل الآن' class="btn-main">
                                        </div>
                                    </div>
                                
                                    <!-- عرض رسالة النجاح -->
                                    @if(session('success'))
                                        <div id="success_message" class="success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                
                                    <!-- عرض رسالة الخطأ (في حال وجود خطأ) -->
                                    @if($errors->any())
                                        <div id="error_message" class="error">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </form>
    
                            </div>
    
                            <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="row" style="background-size: cover; background-repeat: no-repeat;">
                                    @if($contact->secondary_images)
                                    @php
                                        $secondaryImages = json_decode($contact->secondary_images);
                                    @endphp
                                            @foreach ($secondaryImages as $index => $image)

                                    <div class="col-md-6" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="relative" style="background-size: cover; background-repeat: no-repeat;">
                                            <img src="{{ asset('storage/' . $image) }}" class="img-fluid wow fadeInUp animated" alt="" style="visibility: visible; animation-name: fadeInUp;">
                                        </div>
                                    </div>
    
                                    @if($index % 2 != 0) 
                                </div><div class="row" style="background-size: cover; background-repeat: no-repeat;">
                            @endif
                        @endforeach
                    @else
                        <!-- إذا لم تكن هناك صور ثانوية -->
                        <span>No secondary images available</span>
                    @endif
                </div>
            </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
                {{-- خلصت --}}
        </div>
    <!-- content close -->


@endsection
