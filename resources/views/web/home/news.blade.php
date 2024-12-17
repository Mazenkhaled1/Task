@extends('web.layout')

@section('title')
الاخبار و المدونه
@endsection


@section('main')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>

        <section id="subheader" class="relative jarallax text-light">
            <img src="{{asset('web/images/background/1.webp')}}" class="jarallax-img" alt="">
            <div class="container relative z-index-1000">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1>الآخبار والمدونه</h1>
                        <p class="lead mt-3">تابع اخر اخبار الدره</p>
                        <ul class="crumb">
                            <li><a href="index.html">الرئيسيه</a></li>
                            <li class="active">الاخبار والمدونه</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="de-overlay"></div>
        </section>

        <section class="lines-deco">
            <div class="container">
                <div class="row g-4">

                    <div class="col-lg-4 col-md-6">
                        <div>
                            <div class="post-image mb-3">
                                <div class="d-tagline start-0 ps-3">
                                    <span>الكاتيجوري</span>
                                </div>
                                <img alt="" src="{{asset('web/images/news/1.webp')}}" class="lazy">
                            </div>
                            <div class="pt-2 h-100">
                                <h4 style="text-align: right;" class="mb-3 lh-1-4"><a class="text-dark" href="news-single.html" >أحدث وحداتنا التطويرية بكفاءة أكبر.</a></h4>
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
                                    <span>الكاتيجوري</span>
                                </div>
                                <img alt="" src="{{asset('web/images/news/1.webp')}}" class="lazy">
                            </div>
                            <div class="pt-2 h-100">
                                <h4 style="text-align: right;" class="mb-3 lh-1-4"><a class="text-dark" href="news-single.html" >أحدث وحداتنا التطويرية بكفاءة أكبر.</a></h4>
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
                                    <span>الكاتيجوري</span>
                                </div>
                                <img alt="" src="{{asset('web/images/news/1.webp')}}" class="lazy">
                            </div>
                            <div class="pt-2 h-100">
                                <h4 style="text-align: right;" class="mb-3 lh-1-4"><a class="text-dark" href="news-single.html" >أحدث وحداتنا التطويرية بكفاءة أكبر.</a></h4>
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
                                    <span>الكاتيجوري</span>
                                </div>
                                <img alt="" src="{{asset('web/images/news/1.webp')}}" class="lazy">
                            </div>
                            <div class="pt-2 h-100">
                                <h4 style="text-align: right;" class="mb-3 lh-1-4"><a class="text-dark" href="news-single.html" >أحدث وحداتنا التطويرية بكفاءة أكبر.</a></h4>
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
                                    <span>الكاتيجوري</span>
                                </div>
                                <img alt="" src="{{asset('web/images/news/1.webp')}}" class="lazy">
                            </div>
                            <div class="pt-2 h-100">
                                <h4 style="text-align: right;" class="mb-3 lh-1-4"><a class="text-dark" href="news-single.html" >أحدث وحداتنا التطويرية بكفاءة أكبر.</a></h4>
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
                                    <span>الكاتيجوري</span>
                                </div>
                                <img alt="" src="{{asset('web/images/news/1.webp')}}" class="lazy">
                            </div>
                            <div class="pt-2 h-100">
                                <h4 style="text-align: right;" class="mb-3 lh-1-4"><a class="text-dark" href="news-single.html" >أحدث وحداتنا التطويرية بكفاءة أكبر.</a></h4>
                                <p style="text-align: right;" class="mb-2">تتألق مجموعة الدرة ريزدنس كواحدة من رواد قطاع العقارات في الكويت . تعمل هذه الشركة على تقديم خدمات متكاملة في مجال العقارات </p>
                                <div style="text-align: right;" class="py-1">
                                    <img src="{{asset('web/images/testimonial/1.jpg')}}" class="w-20px me-2 circle" alt="">
                                    <div class="d-inline fs-14 fw-500 me-3">احمد كلرم</div>
                                    <div class="d-inline fs-14 fw-500"><i class="icofont-ui-calendar id-color me-2"></i>18 Mar 2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- pagination begin -->
                    <div class="col-lg-12 pt-4 text-center">
                        <div class="d-inline-block">
                            <nav aria-label="Page navigation example">
                              <ul class="pagination">
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                                  </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- pagination end -->
                </div>
            </div>
        </section>
        
    </div>
    <!-- content close -->

@endsection