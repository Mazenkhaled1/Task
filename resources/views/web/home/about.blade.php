@extends('web.layout')

@section('title') 
من نحن
@endsection 


@section('main')
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class=" jarallax text-light">
                <img src="{{asset('web/images/background/3.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h1>عن الدره</h1>
                            <ul class="crumb">
                                <li><a href="index.html">الرئيسية</a></li>
                                <li class="active">عن الدره</li>
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
                            <div class="subtitle wow fadeInUp mb-3">من نحن</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">تولد الدرة.. جوهرة الكويت الساطعة</h2>
                            <p>
                                تأسست شركة الدرة للتطوير العقاري بهدف تقديم رؤية مبتكرة وراقية في عالم الاستثمار والتطوير العقاري في الكويت. على مدار عقدين من الزمن، رسخنا مكانتنا كشريك موثوق في مجال الضيافة، الاستثمار الفندقي، وتطوير المشاريع السكنية والتجارية ذات الطابع الحديث والأناقة المميزة، مقدمين حلولاً متكاملة تستجيب لتطلعات عملائنا في الكويت والمنطقة.
<br>
                                بفضل فريق عمل يمتلك خبرات واسعة في مجالات متعددة، نسعى إلى إثراء السوق العقارية الكويتية عبر مشاريع استثنائية تعيد تعريف مفهوم الحياة العصرية، وتفتح آفاقاً جديدة لفرص استثمارية مدروسة بعناية

                            </p>
                        </div>

                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-6">
                                    <img src="{{asset('web/images/misc/7.webp')}}" class="img-fluid mb-4 wow zoomIn" alt="">
                                    <div class="col-12 text-center">
                                        <div class="bg-color-2 text-light p-4">
                                            <div class="de_count wow fadeInUp">
                                                <h2 class="mb-0"><span class="timer" data-to="126" data-speed="3000"></span>+</h2>
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
                                                <h2 class="mb-0"><span class="timer" data-to="18" data-speed="3000"></span>+</h2>
                                                <span>طابق</span>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('web/images/misc/8.webp')}}" class="img-fluid mt-4 wow zoomIn" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            
            <section class=" lines-deco">
                <div class="container">
                    <div class="row g-0 align-items-center justify-content-center">
                        <div class="col-lg-5">
                            <div class="relative wow fadeInUp" data-wow-delay=".3s">   
                                <div class="shape-mask-1 jarallax">
                                    <img src="{{asset('web/images/facilities/1.webp')}}" class="jarallax-img" alt="">
                                </div>
                            </div>
                        </div>

                        <div style="text-align: right;" class="col-lg-5">
                            <div class="ms-lg-5 wow scaleIn">
                                <h2 class="wow fadeInUp">الرؤية</h2>
                                <p>
                                    
                                                    سعى لإعادة تعريف مفهوم الحياة في الكويت من خلال تطوير مشاريع عقارية رائدة تتميز بالأناقة والإبداع، وتقدم نمط حياة فريداً لا يُضاهى وفرصاً استثماريةً آمنةً بعوائد مرتفعة. هدفنا أن نكون الخيار الأول في مجال الاستثمار العقاري والتطوير في الكويت خلال السنوات الثلاث المقبلة
                                </p>
               
                            </div>
                        </div>                                                
                    </div>

                    <div class="row g-0 align-items-center justify-content-center">
                        <div style="text-align: right;direction: rtl;" class="col-lg-5">
                            <div class="me-lg-5 wow scaleIn">
                                <h2 class="wow fadeInUp">الأهداف</h2>
                                <p>
                                     <ul>
                                                        <li>تطوير مشاريع عقارية تجمع بين الابتكار والرقي
                                                        </li>
                                                        <li>تقديم أنماط حياة متميزة توفر بيئة راقية وفرصاً استثمارية آمنة ومستدام
                                                        </li>
                                                        <li>تحقيق الريادة في مجال الاستثمار العقاري بالكويت خلال ثلاث سنوات
                                                        </li>
                                                        <li>توفير وحدات سكنية تجمع بين الفخامة والحداثة في التصميم والخدمات
                                                        </li>
                                                        <li>بناء شراكات مستدامة مع العملاء والمستثمرين أساسها الثقة والاحترام
                                                        </li>
                                                        <li>تبني ممارسات التنمية المستدامة لضمان تأثير إيجابي على البيئة والمجتمع
                                                        </li>
                                                    </ul>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="relative wow fadeInUp" data-wow-delay=".3s">   
                                <div class="shape-mask-2 jarallax">
                                    <img src="{{asset('web/images/facilities/2.webp')}}" class="jarallax-img" alt="">
                                </div>
                            </div>
                        </div>                                                
                    </div>

                    <div class="row g-0 align-items-center justify-content-center">
                        <div class="col-lg-5">
                            <div class="relative wow fadeInUp" data-wow-delay=".3s">   
                                <div class="shape-mask-1 jarallax">
                                    <img src="{{asset('web/images/facilities/1.webp')}}" class="jarallax-img" alt="">
                                </div>
                            </div>
                        </div>

                        <div style="text-align: right;direction: rtl;" class="col-lg-5">
                            <div class="ms-lg-5 wow scaleIn">
                                <h2 class="wow fadeInUp">المهمة</h2>
                                <p>
                                                    نحن ملتزمون بتقديم وحدات سكنية تنبض بالفخامة وتتوافق مع أرقى معايير الحداثة، وتتيح فرصاً استثمارية آمنة تضمن العوائد المجزية لعملائنا. في الدرة للتطوير العقاري، نولي أهمية كبيرة لجودة الخدمات ولإقامة علاقات طويلة الأمد مع عملائنا ومستثمرينا، ساعين لتحقيق نجاح مشترك ونمو مستدام. كذلك، نحرص على اعتماد أفضل ممارسات التنمية المستدامة، واضعين الأثر الإيجابي لمشاريعنا على البيئة والمجتمع ضمن أولوياتنا
                                            
                                </p>
                                
                    
                            </div>
                        </div>                                                
                    </div>
                    
                </div>

            </section>

        </div>
        <!-- content close -->
        
@endsection