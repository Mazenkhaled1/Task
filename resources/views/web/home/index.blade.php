@extends('web.layout')

@section('title')
الرئيسيه
@endsection

@section('main')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>
    
                <section class="no-top no-bottom text-light jarallax relative vertical-center" data-jarallax data-speed="0.5">
                    <video autoplay muted loop class="jarallax-img" playsinline>
                        <source src="{{asset('web/images/video.mp4')}}" type="video/mp4">
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
                                                    <h1 class="slider-title mb-4">على البحر مباشرة في ابوحليفة
                                                        <br>
                                                        تولد الدرة
                                                    </h1>
                                                    <p class="col-lg-8 offset-lg-2 slider-teaser px-4 mb-0">نعمل على تقديم خدمات متكاملة في مجال العقارات، مركزة على بناء فلل سكنية ومباني تجارية عالية الجودة.</p>
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
    
                <section class="relative lines-deco">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-4 sm-hide">
                                <div class="relative wow fadeInUp" data-wow-delay=".3s">   
                                    <div class="abs top-0 w-100">
                                        <div class="shape-mask-1 jarallax">
                                            <img src="{{asset('web/images/misc/2.webp')}}" class="jarallax-img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-4 text-center">
                                <div class="wow scaleIn">
                                    <div class="subtitle id-color mb-3">مرحبا بكم في </div>
                                    <h2 class="wow fadeInUp">الدرة.. جوهرة الكويت الساطعة
                                    </h2>
    
                                    <div class="text-center wow fadeInUp" data-wow-delay=".5s">
                                        <h4 class="fw-bold mb-1">4.9 out of 5</h4>
                                        <div class="de-rating-ext fs-18">
                                            <span class="d-stars">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
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
                                            <img src="{{asset('web/images/misc/3.webp')}}" class="jarallax-img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="spacer-double"></div>
    
                        <div style="margin-top: 30px;" class="row g-4 relative z-2">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                              <div class="relative p-4 bg-white border-grey text-center">
                                <!-- Icon at the top -->
                                <div class="icon-container" style="font-size: 30px; color: #976e4e;">
                                  <i style="border: 1px solid #976e4e; padding: 10px; border-radius: 50%; height: 55px; width: 55px;" class="fas fa-swimming-pool"></i>
                                </div>
                                <div style="text-align: center; margin-top: 10px;">
                                  <h4>حمام سباحة بإطلالة مميزة</h4>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                              <div class="relative p-4 bg-white border-grey text-center">
                                <div class="icon-container" style="font-size: 30px; color: #976e4e;">
                                  <i style="border: 1px solid #976e4e; padding: 10px; border-radius: 50%; height: 55px; width: 55px;" class="fas fa-table-tennis"></i>
                                </div>
                                <div style="text-align: center; margin-top: 10px;">
                                  <h4>ملعب بادل لعشاق الرياضة</h4>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                              <div class="relative p-4 bg-white border-grey text-center">
                                <div class="icon-container" style="font-size: 30px; color: #976e4e;">
                                  <i style="border: 1px solid #976e4e; padding: 10px; border-radius: 50%; height: 55px; width: 55px;" class="fas fa-concierge-bell"></i>
                                </div>
                                <div style="text-align: center; margin-top: 10px;">
                                  <h4>خدمات فندقية على أعلى مستوى</h4>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                              <div class="relative p-4 bg-white border-grey text-center">
                                <div class="icon-container" style="font-size: 30px; color: #976e4e;">
                                  <i style="border: 1px solid #976e4e; padding: 10px; border-radius: 50%; height: 55px; width: 55px;" class="fas fa-door-open"></i>
                                </div>
                                <div style="text-align: center; margin-top: 10px;">
                                  <h4>خدمة الغرف المتاحة طوال اليوم</h4>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                              <div class="relative p-4 bg-white border-grey text-center">
                                <div class="icon-container" style="font-size: 30px; color: #976e4e;">
                                  <i style="border: 1px solid #976e4e; padding: 10px; border-radius: 50%; height: 55px; width: 55px;" class="fas fa-utensils"></i>
                                </div>
                                <div style="text-align: center; margin-top: 10px;">
                                  <h4>مطاعم راقية تقدم أطباقًا فاخرة</h4>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                              <div class="relative p-4 bg-white border-grey text-center">
                                <div class="icon-container" style="font-size: 30px; color: #976e4e;">
                                  <i style="border: 1px solid #976e4e; padding: 10px; border-radius: 50%; height: 55px; width: 55px;" class="fas fa-dumbbell"></i>
                                </div>
                                <div style="text-align: center; margin-top: 10px;">
                                  <h4>مرافق رياضية وترفيهية متنوعة</h4>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                          <a style="min-width: 130px;height: 44px;" href="services.html" class="btn btn-primary">عرض المزيد</a>
                        </div>
                    </div>
                </section>
    
                <section class="relative lines-deco">
                    <div class="container relative z-2">
                        <div class="row g-4">
                            <div class="col-md-3">
                                <div class="relative">
                                    <img style="height:272px" src="{{asset('web/images/gallery-square/1.webp')}}" class="img-fluid wow fadeInUp" alt="">
                                    <div class="bg-color text-light p-4 start-10 mx-4  mt-70 wow fadeInDown" data-wow-delay="">
                                        <div style="justify-content: center;" class="row g-4 align-items-center">
                                            <div class="col-lg-5 text-center">
                                                <div class="de_count fs-15 wow fadeInRight" data-wow-delay=".2s">
                                                    <h3 class="fs-60"><span class="timer fs-60" data-to="18" data-speed="3000">0</span></h3>
                                                    طابق
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="relative">
                                    <img style="height:272px" src="{{asset('web/images/gallery-square/3.webp')}}" class="img-fluid wow fadeInUp" alt="">
                                    <div class="bg-color text-light p-4 start-10 mx-4  mt-70 wow fadeInDown" data-wow-delay="">
                                        <div style="justify-content: center;" class="row g-4 align-items-center">
                                            <div class="col-lg-5 text-center">
                                                <div class="de_count fs-15 wow fadeInRight" data-wow-delay=".2s">
                                                    <h3 class="fs-60"><span class="timer fs-60" data-to="126" data-speed="3000">0</span></h3>
                                                    شقه
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-3">
                                <div class="relative">
                                    <img style="height:272px" src="{{asset('web/images/gallery-square/7.webp')}}" class="img-fluid wow fadeInUp" alt="">
                                    <div class="bg-color text-light p-4 start-10 mx-4  mt-70 wow fadeInDown" data-wow-delay="">
                                        <div style="justify-content: center;" class="row g-4 align-items-center">
                                            <div class="col-lg-5 text-center">
                                                <div class="de_count fs-15 wow fadeInRight" data-wow-delay=".2s">
                                                    <h3 class="fs-60"><span class="timer fs-60" data-to="4771" data-speed="3000">0</span></h3>
                                                    متر مربع
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-3">
                                <div class="relative">
                                    <img style="height:272px" src="{{asset('web/images/gallery-square/4.webp')}}" class="img-fluid wow fadeInUp" alt="">
                                    <div class="bg-color text-light p-4 start-10 mx-4  mt-70 wow fadeInDown" data-wow-delay="">
                                        <div style="justify-content: center;" class="row g-4 align-items-center">
                                            <div class="col-lg-5 text-center">
                                                <div class="de_count fs-15 wow fadeInRight" data-wow-delay=".2s">
                                                    <h3 class="fs-60"><span class="timer fs-60" data-to="12" data-speed="3000">0</span></h3>
                                                    مصعد
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="spacer-single"></div>
    
                </section>
    
                <section class="relative">
                    <div class="container relative z-2">
                        <div style="direction: rtl;" class="row g-4 align-items-center">                        
    
                            <div class="col-lg-6">
                                <div class="row align-items-center">                                
    
                                    <div class="col-md-6">
                                        <div class="relative">
                                            <img src="{{asset('web/images/gallery-square/3.webp')}}" class="w-100 rounded02 wow fadeInUp" alt="" data-wow-delay=".2s">
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="relative">
                                            <img  style="height: 300px;" src="{{asset('web/images/gallery-square/1.webp')}}" class="w-100 rounded02 wow fadeInUp" alt="" data-wow-delay=".4s">
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="ms-4">
                                    <div class="subtitle id-color wow fadeInUp mb-2" data-wow-delay=".0s">مشروع الدره ريزدينس</div>
                                    <h2 class="wow fadeInUp " data-wow-delay=".2s">على مدار أكثر من 20 عامًا من الخبرة في منطقة الخليج</h2>
    
                                    <p class="wow fadeInUp" data-wow-delay=".4s">
                                        تميزت شركة الدرة للتطوير العقاري بتقديم حلول متكاملة تجمع بين الابتكار والجودة، مما يجعلها من الشركات الرائدة في مجال الضيافة والاستثمار العقاري والفندقي. تأسست الشركة على يد نخبة من كبار رجال الأعمال بهدف تقديم رؤية جديدة لمجتمعات سكنية توازن بين مفهوم المجتمعات الحديثة والمواقع الحيوية النابضة بالحياة
                                    </p>
    
                                    <a class="btn-main wow fadeInUp" href="#" data-wow-delay=".6s">المزيد عنا</a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
    
                </section>
    
                <section class="lines-deco">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-8 offset-lg-2 text-center">
                                <h2 class="wow fadeInUp"> الاخبار والمدونه</h2>
                            </div>
    
                            <div class="col-lg-4 col-md-6">
                                <div>
                                    <div class="post-image mb-3">
                                        <div class="d-tagline start-0 ps-3">
                                            <span>الكاتيجوري</span>
                                        </div>
                                        <img alt="" src="{{asset('web/images/news/1.webp')}}" class="lazy">
                                    </div>
                                    <div class="pt-2 h-100">
                                        <h4 style="text-align: right;" class="mb-3 lh-1-4"><a class="text-dark" href="#" >أحدث وحداتنا التطويرية بكفاءة أكبر.</a></h4>
                                        <p style="text-align: right;" class="mb-2">تتألق مجموعة الدرة ريزدنس كواحدة من رواد قطاع العقارات في الكويت . تعمل هذه الشركة على تقديم خدمات متكاملة في مجال العقارات </p>
                                        <div style="text-align: right;" class="py-1">
                                            <img src="{{asset('web/images/testimonial/1.jpg')}}" class="w-20px me-2 circle" alt="">
                                            <div class="d-inline fs-14 fw-500 me-3">احمد كلرم</div>
                                            <div class="d-inline fs-14 fw-500"><i class="icofont-ui-calendar id-color me-2"></i>18 Mar 2024</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6">
                                <div>
                                    <div class="post-image mb-3">
                                        <div class="d-tagline start-0 ps-3">
                                            <span>tips &amp; tricks</span>
                                        </div>
                                        <img alt="" src="{{asset('web/images/news/2.webp')}}" class="lazy">
                                    </div>
                                    <div class="pt-2 h-100">
                                        <h4 style="text-align: right;" class="mb-3 lh-1-4"><a class="text-dark" href="#" >أحدث وحداتنا التطويرية بكفاءة أكبر.</a></h4>
                                        <p style="text-align: right;" class="mb-2">تتألق مجموعة الدرة ريزدنس كواحدة من رواد قطاع العقارات في الكويت . تعمل هذه الشركة على تقديم خدمات متكاملة في مجال العقارات </p>
                                        <div style="text-align: right;" class="py-1">
                                            <img src="{{asset('web/images/testimonial/1.jpg')}}" class="w-20px me-2 circle" alt="">
                                            <div class="d-inline fs-14 fw-500 me-3">احمد كلرم</div>
                                            <div class="d-inline fs-14 fw-500"><i class="icofont-ui-calendar id-color me-2"></i>18 Mar 2024</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6">
                                <div>
                                    <div class="post-image mb-3">
                                        <div class="d-tagline start-0 ps-3">
                                            <span>tips &amp; tricks</span>
                                        </div>
                                        <img alt="" src="{{asset('web/images/news/3.webp')}}" class="lazy">
                                    </div>
                                    <div class="pt-2 h-100">
                                        <h4 style="text-align: right;" class="mb-3 lh-1-4"><a class="text-dark" href="#" >أحدث وحداتنا التطويرية بكفاءة أكبر.</a></h4>
                                        <p style="text-align: right;" class="mb-2">تتألق مجموعة الدرة ريزدنس كواحدة من رواد قطاع العقارات في الكويت . تعمل هذه الشركة على تقديم خدمات متكاملة في مجال العقارات </p>
                                        <div style="text-align: right;" class="py-1">
                                            <img src="{{asset('web/images/testimonial/1.jpg')}}" class="w-20px me-2 circle" alt="">
                                            <div class="d-inline fs-14 fw-500 me-3">احمد كلرم</div>
                                            <div class="d-inline fs-14 fw-500"><i class="icofont-ui-calendar id-color me-2"></i>18 Mar 2024</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                          <a style="min-width: 130px;height: 44px;" href="services.html" class="btn btn-primary">عرض المزيد</a>
                        </div>
                    </div>
                </section>
                
                <section class="relative lines-deco">
                    <div class="container">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                               <div class="text-center">
                                    <h3 class="mb-4">تواصل معنا</h3>
                                </div>
                                
                                <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="#">
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
                                                <select style="text-align: right;" class="form-control">
                                                    <option>نوع الوحده</option>
                                                    <option>الاول</option>
                                                    <option>الثاني</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12">
                                            <div class="field-set mb20">
                                                <textarea style="text-align: right;"  name="message" id="message" class="form-control" placeholder="الرساله" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    
                                    <div class="text-center">
                                        <div id='submit' class="mt20 text-cen">
                                            <input type='submit' id='send_message' value='تواصل الآن' class="btn-main">
                                        </div>
                                    </div>
    
                                    <div id="success_message" class='success'>
                                        Your message has been sent successfully. Refresh this page if you want to send more messages.
                                    </div>
                                    <div id="error_message" class='error'>
                                        Sorry there was an error sending your form.
                                    </div>
                                </form>
    
                            </div>
    
                            <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="row" style="background-size: cover; background-repeat: no-repeat;">
                                    <div class="col-md-6" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="relative" style="background-size: cover; background-repeat: no-repeat;">
                                            <img src="{{asset('web/images/misc/9.webp')}}" class="img-fluid wow fadeInUp animated" alt="" style="visibility: visible; animation-name: fadeInUp;">
                                        </div>
                                    </div>
    
                                    <div class="col-md-6" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="spacer-single sm-hide" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="relative" style="background-size: cover; background-repeat: no-repeat;">
                                            <img src="{{asset('web/images/misc/10.webp')}}" class="img-fluid wow fadeInUp animated" alt="" style="visibility: visible; animation-name: fadeInUp;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
        </div>
    <!-- content close -->


@endsection

