@extends('web.layout')


@section('title')
تواصل معنا 
@endsection 


@section('main')

<div class="no-bottom no-top" id="content">

    <div id="top"></div>
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="subheader" class="relative jarallax text-light">
        <img src="{{ asset('storage/' . $contact->background_image) }}" class="jarallax-img" alt="">
        <div class="container relative z-index-1000">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1>{{$contact->title}}</h1>
                    <ul class="crumb">
                        <li><a href="{{route('/')}}">{{$contact->breadcrumb}}</a></li>
                        <li class="active">{{$contact->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="de-overlay"></div>
    </section>

    
    <section class="relative lines-deco">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                   <div class="text-center">
                        <h3 class="mb-4">{{$contact->sub_title}}</h3>
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
                                        <!-- استخدام الصور المخزنة بدلاً من الصور الثابتة -->
                                        <img src="{{ asset('storage/' . $image) }}" class="img-fluid wow fadeInUp animated" alt="" style="visibility: visible; animation-name: fadeInUp;">
                                    </div>
                                </div>
                
                                <!-- Break after 2 images to create a new row -->
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
    </section>

</div>
<!-- content close -->
 <!-- content close -->
@endsection