@extends('web.layout')

@section('title')
المشروعات    
@endsection


@section('main')

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="relative jarallax text-light">
                <img src="{{asset('web/images/background/1.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h1>مشروع الدرة ريزيدنس: جوهرة الكويت الساطعة</h1>
                            <ul class="crumb">
                                <li><a href="index.html">الرئيسيه</a></li>
                                <li class="active">مشروع الدرة ريزيدنس: جوهرة الكويت الساطعة</li>
                            </ul>
                            <div class="spacer-double"></div>
                        </div>
                    </div>
                </div>
                <div class="de-overlay"></div>
            </section>

            <section style="padding: 40px 0 140px 0;">
                <div class="container">
                    <div style="direction: rtl;" class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="relative">
                                <img src="{{asset('web/images/misc/7.webp')}}" class="w-100 pe-5 pb-5 wow scaleIn" alt="">
                                <img src="{{asset('web/images/misc/6.webp')}}" class="w-50 abs end-0 bottom-0 z-2 wow scaleIn" data-wow-delay=".2s" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ps-lg-3">
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">مشروع الدرة ريزيدنس: جوهرة الكويت الساطعة
                                </h2>
                                <p class="mb-0 wow fadeInUp" data-wow-delay=".6s">
                                    مكان ينبض بالحياة، يدعو زائريه وسكانه للاستمتاع بتجربة لا تُنسى، حيث الفخامة ترتقي إلى مستويات عالمية، وحيث كل تفصيل صُمم بعناية ليعكس أرقى معايير الضيافة.
                                    <br><br>
بدأت رحلة "الدرة" برؤية طموحة تهدف إلى تقديم وجهة استثمارية فريدة تجمع بين الإطلالة البحرية الخلابة والعائد الاستثماري الواعد. ومع تطور هذا المشروع، استقبلت "الدرة" سكانها وعشاقها في مجتمع يتسم بالرقي، ليمثل مستقبلًا واعدًا لكل من ينضم إليه.
<br><br>
انضم إلى "الدرة"، حيث تجد الهدوء بجوار البحر، وتصبح جزءًا من قصة ملهمة تعيد تعريف الحياة العصرية المطلة على الخليج

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section style="background-color: #ac88675e" class="relative bg-light pt80 lines-deco">
                <div class="container-fluid relative z-2">
                    <div class="row g-4">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <div class="subtitle id-color wow fadeInUp mb-3">اكتشف</div>
                            <h2 class="mb-0 wow fadeInUp">الخدمات والمرافق في الدره ريزيدنس</h2>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="owl-custom-nav menu-float px-5" data-target="#more-rooms">
                                <a class="btn-next"></a>
                                <a class="btn-prev"></a>                                

                                <div id="more-rooms" class="owl-3-cols owl-carousel owl-theme">
                                    <!-- room begin -->
                                    <div class="item">
                                        <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".3s">
                                            <img src="{{asset('web/images/room/1.webp')}}" class="w-100 rounded-up-100" alt="">
                                            <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                                <h3 class="fs-40 lh-1 mb-4">الخدمه الاولي</h3>
                                                <div class="fs-14"> التفاصيل الكامله للخدمه الاولي</div>
                                            </div>
                                            <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 rounded-up-100"></div>
                                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                                <h3 class="mb-0">الخدمه الاولي</h3>
                                                <div class="text-center fs-14">
                                                    <span class="mx-2">
                                                        التفاصيل الكامله للخدمه الاولي
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                                        </div>
                                    </div>
                                    <!-- room end -->
                                                            
                                    <!-- room begin -->
                                    <div class="item">
                                        <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".3s">
                                            <img src="{{asset('web/images/room/1.webp')}}" class="w-100 rounded-up-100" alt="">
                                            <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                                <h3 class="fs-40 lh-1 mb-4">الخدمه الاولي</h3>
                                                <div class="fs-14"> التفاصيل الكامله للخدمه الاولي</div>
                                            </div>
                                            <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 rounded-up-100"></div>
                                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                                <h3 class="mb-0">الخدمه الاولي</h3>
                                                <div class="text-center fs-14">
                                                    <span class="mx-2">
                                                        التفاصيل الكامله للخدمه الاولي
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                                        </div>
                                    </div>
                                    <!-- room end -->
                                    
                                    <!-- room begin -->
                                    <div class="item">
                                        <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".3s">
                                            <img src="{{asset('web/images/room/1.webp')}}" class="w-100 rounded-up-100" alt="">
                                            <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                                <h3 class="fs-40 lh-1 mb-4">الخدمه الاولي</h3>
                                                <div class="fs-14"> التفاصيل الكامله للخدمه الاولي</div>
                                            </div>
                                            <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 rounded-up-100"></div>
                                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                                <h3 class="mb-0">الخدمه الاولي</h3>
                                                <div class="text-center fs-14">
                                                    <span class="mx-2">
                                                        التفاصيل الكامله للخدمه الاولي
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                                        </div>
                                    </div>
                                    <!-- room end -->

                                    <!-- room begin -->
                                    <div class="item">
                                        <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".3s">
                                            <img src="{{asset('web/images/room/1.webp')}}" class="w-100 rounded-up-100" alt="">
                                            <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                                <h3 class="fs-40 lh-1 mb-4">الخدمه الاولي</h3>
                                                <div class="fs-14"> التفاصيل الكامله للخدمه الاولي</div>
                                            </div>
                                            <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 rounded-up-100"></div>
                                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                                <h3 class="mb-0">الخدمه الاولي</h3>
                                                <div class="text-center fs-14">
                                                    <span class="mx-2">
                                                        التفاصيل الكامله للخدمه الاولي
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                                        </div>
                                    </div>
                                    <!-- room end -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <section style="margin: 100px 10% 0px 10%;" class="no-top no-bottom section-dark" aria-label="section">
                <div style="margin-bottom: 20px" class="col-lg-8 offset-lg-2 text-center">
                    <div class="subtitle id-color wow fadeInUp mb-3">اكتشف</div>
                    <h2 class="mb-0 wow fadeInUp">موقع الدره ريزيدنس</h2>
                </div>
                <a class="d-block hover popup-youtube" href="https://www.youtube.com/watch?v=C6rf51uHWJg">
                    <div class="relative overflow-hidden">
                        <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                            <div style="border: solid 2px #ac8867;" class="player wow scaleIn"><span style="border-left: 20px solid #ac8867;"></span></div>
                        </div> 
                        <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                        <iframe style="height: 400px;border-radius: 10px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345093274!2d-122.4194151846811!3d37.774929679759085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064d5e48059%3A0xbaa134f3aa8a73c1!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2seg!4v1699999999999!5m2!1sen!2seg" 
                            width="100%" 
                            height="400" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="img-fluid"
                            alt="Map">
                        </iframe>
                    </div>
                </a>
            </section>

            <style>
                /* Container */
                .container1 {
                  display: flex;
                  font-family: Arial, sans-serif;
                  direction: rtl; /* Set the layout direction to RTL */
                  text-align: right; /* Align text to the right */
                }
                
                /* Sidebar */
                .sidebar1 {
                  width: 200px;
                  padding: 20px;
                  background-color: #f0f0f0;
                }
                .sidebar1 ul {
                  list-style: none;
                }
                .sidebar1 ul li {
                  padding: 10px;
                  cursor: pointer;
                  color: #a88e5c;
                  font-weight: bold;
                }
                .sidebar1 ul li.active {
                  border-right: 3px solid #a88e5c; /* Move border to the right */
                  color: black;
                }
                
                /* Main Content */
                .main-content1 {
                  padding: 20px;
                }
                .main-content1 h2 {
                  font-size: 24px;
                  color: #54524e;
                  margin-bottom: 10px;
                }
                .description1,
                .image-section1 {
                  margin-top: 20px;
                }
                .sea-view1 {
                  font-size: 18px;
                  color: #54524e;
                  margin: 10px 0;
                }
                
                /* Description */
                .description1 {
                  font-size: 16px;
                  color: #54524e;
                }
                .description1 span {
                  font-weight: bold;
                }
                
                /* Image Section */
                .image-section1 {
                  display: flex;
                  align-items: center;
                }
                .image-container1 {
                  width: 100%;
                  margin: 0 auto;
                  margin: 0 13px;
                }
                .floor-plan1 {
                  width: 100%;
                  height: auto;
                }
                .carousel-nav1 {
                  display: flex;
                  justify-content: space-between;
                  font-size: 24px;
                  color: #a88e5c;
                }
                .carousel-nav1 #prev {
                  order: 2; /* Place the "previous" button on the right for RTL */
                }
                .carousel-nav1 #next {
                  order: 1; /* Place the "next" button on the left for RTL */
                }
                
                /* Additional styling */
                .carousel-nav1 div:hover {
                  color: #54524e;
                }

            </style>
            
            <section style="margin: 100px;">
              <div class="row g-4">
                <div class="col-lg-8 offset-lg-2 text-center">
                  <h2 style="margin-bottom: 30px;" class="wow fadeInUp">التخطيطات المثالية</h2>
                </div>
              </div>
              <div class="container1">
                <!-- Sidebar -->
                <div style="width: 330px;z-index: 100000;" class="sidebar1">
                  <ul id="layoutTypes">
                    <li data-type="1">شقة بغرفة نوم واحدة</li>
                    <li data-type="2" class="active">شقتان نوم - النوع الثاني</li>
                    <li data-type="3">شقتان نوم - النوع الثالث</li>
                    <li data-type="4">شقتان نوم - النوع الرابع</li>
                    <li data-type="5">شقتان نوم - النوع الخامس</li>
                    <li data-type="6">شقة بثلاث غرف نوم</li>
                    <li data-type="7">شقة بأربع غرف نوم</li>
                    <li data-type="8">تاون هاوس</li>
                    <li data-type="9">بنتهاوس مع تراس</li>
                    <li data-type="10">بنتهاوس مع مسبح</li>
                  </ul>
                </div>
            
                <!-- Main Content -->
                <div class="main-content1">
                  <h2 id="apartmentTitle">شقة فاخرة بغرفتين نوم في الكويت</h2>
                  <p class="sea-view1" id="seaView">مؤشر إطلالة على البحر: كامل</p>
            
                  <div class="image-section1">
                    <div class="carousel-nav1">
                      <div id="prev">❮</div>
                    </div>
                    <div class="image-container1">
                      <img style="width: 500px;" id="floorPlanImage" class="floor-plan" src="https://www.thetower.com.kw/wp-content/uploads/2022/01/2b-t2-1-1-768x432.jpg" alt="خطة الطابق">
                    </div>
                    <div class="carousel-nav1">
                      <div id="next">❯</div>
                    </div>
                  </div>
            
                  <div class="description1">
                    <p><span>المساحة الكلية:</span> <span id="totalArea">118 متر مربع</span></p>
                    <p><span>المستويات:</span> <span id="levels">3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18</span></p>
                  </div>
                </div>
              </div>
            </section>
            
            <script>
              // Data for each apartment layout
              const layouts = {
                1: { title: "شقة بغرفة نوم واحدة", seaView: "جزئي", area: "85 متر مربع", levels: "2, 3, 4", image: "https://www.thetower.com.kw/wp-content/uploads/2022/01/2b-t2-1-1-768x432.jpg" },
                2: { title: "شقتان نوم - النوع الثاني", seaView: "كامل", area: "118 متر مربع", levels: "3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18", image: "https://www.thetower.com.kw/wp-content/uploads/2022/01/2b-t2-1-1-768x432.jpg" },
                3: { title: "شقتان نوم - النوع الثالث", seaView: "جزئي", area: "125 متر مربع", levels: "5, 6, 7, 8, 9", image: "https://www.thetower.com.kw/wp-content/uploads/2022/01/2b-t2-1-1-768x432.jpg" },
                4: { title: "شقتان نوم - النوع الرابع", seaView: "كامل", area: "130 متر مربع", levels: "6, 7, 8, 9, 10", image: "https://www.thetower.com.kw/wp-content/uploads/2022/01/2b-t2-1-1-768x432.jpg" },
                5: { title: "شقتان نوم - النوع الخامس", seaView: "جزئي", area: "135 متر مربع", levels: "8, 9, 10, 11, 12", image: "https://www.thetower.com.kw/wp-content/uploads/2022/01/2b-t2-1-1-768x432.jpg" },
                6: { title: "شقة بثلاث غرف نوم", seaView: "كامل", area: "150 متر مربع", levels: "3, 5, 7, 9, 11, 13, 15", image: "https://www.thetower.com.kw/wp-content/uploads/2022/01/2b-t2-1-1-768x432.jpg" },
                7: { title: "شقة بأربع غرف نوم", seaView: "كامل", area: "200 متر مربع", levels: "4, 6, 8, 10, 12, 14", image: "https://www.thetower.com.kw/wp-content/uploads/2022/01/2b-t2-1-1-768x432.jpg" },
                8: { title: "تاون هاوس", seaView: "إطلالة على الحديقة", area: "250 متر مربع", levels: "طابق أرضي", image: "https://www.thetower.com.kw/wp-content/uploads/2022/01/2b-t2-1-1-768x432.jpg" },
                9: { title: "بنتهاوس مع تراس", seaView: "كامل", area: "300 متر مربع", levels: "الطابق العلوي", image: "https://www.thetower.com.kw/wp-content/uploads/2022/01/2b-t2-1-1-768x432.jpg" },
                10: { title: "بنتهاوس مع مسبح", seaView: "كامل", area: "350 متر مربع", levels: "الطابق العلوي", image: "https://www.thetower.com.kw/wp-content/uploads/2022/01/2b-t2-1-1-768x432.jpg" }
              };
            
              // Initial setup
              let currentLayout = 2;
              updateContent();
            
              // Update content based on selected layout
              function updateContent() {
                const layout = layouts[currentLayout];
                document.getElementById("apartmentTitle").innerText = layout.title;
                document.getElementById("seaView").innerText = "مؤشر إطلالة على البحر: " + layout.seaView;
                document.getElementById("totalArea").innerText = layout.area;
                document.getElementById("levels").innerText = layout.levels;
                document.getElementById("floorPlanImage").src = layout.image;
              }
            
              // Sidebar Navigation
              document.querySelectorAll("#layoutTypes li").forEach(item => {
                item.addEventListener("click", function() {
                  document.querySelectorAll("#layoutTypes li").forEach(li => li.classList.remove("active"));
                  this.classList.add("active");
            
                  currentLayout = parseInt(this.getAttribute("data-type"));
                  updateContent();
                });
              });
            
              // Carousel Navigation
              const images = layouts[currentLayout].image;
              let currentImageIndex = 0;
            
              function updateImage() {
                document.getElementById("floorPlanImage").src = images[currentImageIndex];
              }
            
              document.getElementById("prev").addEventListener("click", () => {
                currentImageIndex = (currentImageIndex > 0) ? currentImageIndex - 1 : images.length - 1;
                updateImage();
              });
            
              document.getElementById("next").addEventListener("click", () => {
                currentImageIndex = (currentImageIndex < images.length - 1) ? currentImageIndex + 1 : 0;
                updateImage();
              });
            </script>

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
                                        <img src="images/misc/9.webp" class="img-fluid wow fadeInUp animated" alt="" style="visibility: visible; animation-name: fadeInUp;">
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