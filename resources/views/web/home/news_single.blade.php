@extends('web.layout')

@section('main')

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="relative jarallax text-light">
                <img src="{{asset('web/images/background/1.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                            <h2 class="mt-3 mb-3">اسم المدونه</h2>
                            ١٥ يناير ٢٠٢٤
                        </div>
                    </div>
                </div>
                <div class="de-overlay"></div>
            </section>

            <section class="lines-deco">
                <div style="direction: rtl;" class="container">
                    <div class="row gx-5">
                        <div class="col-lg-12">
                            <div class="blog-read">

                                <div class="post-text">
                                    <p><span class="dropcap">Q</span>uis sunt quis do laboris eiusmod in sint dolore sit pariatur consequat commodo aliqua nulla ad dolor aliquip incididunt voluptate est aliquip adipisicing ea cupidatat nostrud incididunt aliquip dolore. Sed minim nisi duis laborum est labore nisi amet elit adipisicing proident do consectetur dolor labore sit nisi ad proident esse ad velit nisi irure reprehenderit ut et dolor labore veniam quis.</p>

                                    <blockquote class="quote-s1">Quis sunt quis do laboris eiusmod in sint dolore sit pariatur consequat commodo aliqua nulla ad dolor aliquip incididunt voluptate est aliquip adipisicing ea cupidatat nostrud incididunt aliquip dolore.</blockquote>

                                    <p>Sunt duis laboris ex et quis laborum laborum cillum mollit voluptate culpa consequat ex cupidatat dolor eiusmod proident proident cillum pariatur sint adipisicing in nostrud do dolore consectetur quis incididunt minim consectetur. Exercitation elit proident dolor est id eiusmod dolor dolor incididunt ad voluptate laboris cupidatat est est sint veniam sint officia sint incididunt est sit ut tempor commodo pariatur ut proident et do.</p>

                                    <img src="{{asset('web/images/misc/7.webp')}}" class="img-fluid" alt="">

                                    <h4>Sint fugiat esse et dolore</h4>
                                    <p>Sed eu in ut sint dolor irure fugiat minim veniam sed ea proident ullamco occaecat irure ut velit eu ullamco fugiat cupidatat dolore fugiat. Lorem ipsum id non deserunt id consequat duis voluptate amet aliqua pariatur laboris officia pariatur veniam velit reprehenderit sint nostrud cupidatat magna eiusmod mollit exercitation pariatur nulla minim laboris dolore aliqua consectetur cillum duis aute consectetur.</p>

                                </div>

                            </div>

                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
        <!-- content close -->
    
@endsection