@extends('web.layout')

@section('main')

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="relative jarallax text-light">
                <img src="{{ asset('storage/' . $new->background_image) }}" class="jarallax-img" alt="">
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
                                    <p><span class="dropcap">Q</span>{{$post->description}}</p>

                                    <blockquote class="quote-s1">{{$post->description}}</blockquote>

                                    <p>{{$post->description}}</p>
                                    {{-- {{ dump($new->background_image) }} --}}
                                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="">

                                    <h4>{{$post->title}}</h4>
                                    <p>{{$post->description}}</p>

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