<!DOCTYPE html>
<html lang="zxx">
<head>
    <title> @yield('title') - موقع الدره ريزيدينس</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="AlduraResiedence" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{asset('web/css/plugins.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('web/css/swiper.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('web/css/coloring.css')}}" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="{{asset('web/css/colors/scheme-02.css')}}" rel="stylesheet" type="text/css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> --}}

    @yield('styles')
    <style>
    @font-face {
        font-family: "Times New Roman";
        src: url('/fonts/times-new-roman-bold-italic.ttf') format('truetype'),
             url('/fonts/times-new-roman-bold.ttf') format('truetype'),
             url('/fonts/times-new-roman-italic.ttf') format('truetype'),
             url('/fonts/times-new-roman.ttf') format('truetype');
    }

    body, h1, h2, h3, h4, h5, h6, a, li, input, button, p, div {
        font-family: "Times New Roman", serif !important;
        letter-spacing: 0px !important;
    }

    @media (max-width: 1000px) {
        .slider-title {
            font-size: 16px !important;
        }
        .slider-teaser {
            font-size: 12px !important;
        }
    }
</style>


</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header style="z-index: 10000000000000000;" class="transparent has-topbar scroll-blur nav-up">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div style="direction: rtl;" class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="index.html">
                                        <img class="logo-main" src="{{asset('web/images/logo.png')}}" alt="" >
                                        <img class="logo-scroll" src="{{asset('web/images/logo.png')}}" alt="" >
                                        <img class="logo-mobile" src="{{asset('web/images/logo.png')}}" alt="" >
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="{{route('contact')}}">تواصل معنا</a></li>
                                    <li><a class="menu-item" href="{{route('news')}}">الاخبار والمدونه</a></li>
                                    <li><a class="menu-item" href="{{route('location')}}">الموقع</a></li>
                                    <li>
                                        <a class="menu-item" href="{{route('projects')}}">المشروعات</a>
                                 
                                    </li>
                                    <li><a class="menu-item" href="{{route('about')}}">من نحن</a></li>
                                    <li><a class="menu-item" href="{{route('/')}}">الرئيسيه</a></li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">          
                                    <a href="{{route('contact')}}" class="btn-main btn-line">للحجز والاستفسار</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        @yield('main')




        {{-- ------------------------------ --}}
<style>
.footer-section {
background-color: #b57a1d; /* Match the background color */
color: #ffffff; /* White text */
padding: 40px 20px;
font-family: 'Arial', sans-serif;
}

.footer-logo {
max-width: 150px;
margin: 20px 0;
}

.quick-links {
list-style: none;
padding: 0;
margin: 0;
}

.quick-links li {
margin: 5px 0;
}

.quick-links li a {
color: #ffffff;
text-decoration: none;
}

.quick-links li a:hover {
text-decoration: underline;
}

.social-icons {
margin-top: 20px;
}

.social-icons a {
color: #ffffff;
margin-right: 10px;
font-size: 20px;
text-decoration: none;
}

.social-icons a:hover {
color: #ddd;
}

.dmca-img {
max-width: 100px;
margin-top: 10px;
}

.subfooter {
border-top: 1px solid #fff;
padding: 10px 0;
margin-top: 20px;
font-size: 14px;
}

    </style>
        <!-- Footer -->
        <footer style="text-align: right;background-color: #ac8867;" class="footer-section">
            <div class="container">
                <div class="row">
                    <!-- Left Section -->
                    <div class="col-md-3 text-light">
                        <h5>روابط الدعم</h5>
                        <p>الخط الساخن: <a href="tel:+96599884030">+96599884030</a></p>
                        <p>الايميل: <a href="mailto:info@aldurahresidence.com">info@aldurahresidence.com</a></p>
                    </div>
        
                    <!-- Center Section -->
                    <div class="col-md-3 text-light text-right">
                        <h5>روابط سريعة</h5>
                        <ul class="quick-links">
                            <li><a href="#">من نحن</a></li>
                            <li><a href="#">المدونة</a></li>
                            <li><a href="#">تواصل معنا</a></li>
                            <li><a href="#">سياسة الخصوصية</a></li>
                        </ul>
                    </div>
        
                    <!-- Right Section -->
                    <div class="col-md-6 text-light">
                        <img src="{{asset('web/images/logo.png')}}" alt="Logo" class="footer-logo">
                        <p>
                            تميزت شركة الدرة للتطوير العقاري بتقديم حلول متكاملة تجمع بين الابتكار والجودة، مما يجعلها من الشركات الرائدة في مجال الضيافة والاستثمار العقاري والفندقي. تأسست الشركة على يد نخبة من كبار رجال الأعمال بهدف تقديم رؤية جديدة لمجتمعات سكنية توازن بين مفهوم المجتمعات الحديثة والمواقع الحيوية النابضة بالحياة
                        </p>
                        <div class="social-icons mb-sm-30 mt-4">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                    </div>
                </div>
        
                <!-- Subfooter -->
                <div class="subfooter text-center text-light mt-4">
                    جميع الحقوق محفوظة © 2024 - Aldurahresidence
                </div>
            </div>
        </footer>

    </div>

    <style>
        /* Popup Overlay */
.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

/* Add fade-in animation */
.popup-overlay.active {
    visibility: visible;
    opacity: 1;
    animation: fadeIn 0.5s ease;
}

/* Keyframes for popup animation */
@keyframes fadeIn {
    from {
        transform: scale(0.9);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

/* Popup Content */
.popup-content {
    background: #fff;
    padding: 20px;
    max-width: 400px;
    width: 100%;
    text-align: center;
    border-radius: 8px;
    position: relative;
    animation: slideDown 0.5s ease;
}

/* Slide-down animation for the popup */
@keyframes slideDown {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Close Button */
.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: none;
    border: none;
    font-size: 20px;
    cursor: pointer;
}

/* Logo and Text */
.popup-logo {
    width: 50px;
    margin-bottom: 10px;
}

.popup-content h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 5px;
}

.popup-content p {
    font-size: 18px;
    margin-bottom: 15px;
}

/* Brochure Image */
.popup-brochure {
    width: 100%;
    margin-bottom: 15px;
}

/* Email Input and Button */
label {
    font-size: 14px;
    color: #333;
}

.required {
    color: red;
}

input[type="email"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.download-btn {
    background-color: #c3a45b;
    color: #fff;
    padding: 10px;
    width: 100%;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

.download-btn:hover {
    background-color: #b39750;
}

    </style>
    <div style="z-index: 100000000000000;" class="popup-overlay" id="popup">
    <div class="popup-content">
        <button class="close-btn" onclick="closePopup()">×</button>
        <img style="width: 190px;" src="{{asset('web/images/logo.png')}}" alt="Logo" class="popup-logo">
        <h2>مرحبا بكم في الدره ريزيدنس</h2>
        <img src="{{asset('web/images/news/1.webp')}}" alt="Brochure Image" class="popup-brochure">
        <label for="email">رقم الواتس اب <span class="required">(مطلوب)</span></label>
        <input type="email" id="email" placeholder="Please enter your Phone to download the Brochure" required>
        <button class="download-btn">تنزيل البروشور</button>
    </div>
</div>

    <script>
    // Function to open the popup with a delay
window.onload = function () {
    setTimeout(function () {
        document.getElementById("popup").classList.add("active");
    }, 3000); // Delay of 3 seconds (3000ms)
};

// Function to close the popup
function closePopup() {
    document.getElementById("popup").classList.remove("active");
}

    </script>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('web/js/plugins.js')}}"></script>
    <script src="{{asset('web/js/designesia.js')}}"></script>
    <script src="{{asset('web/js/swiper.js')}}"></script>
    <script src="{{asset('web/js/custom-marquee.js')}}"></script>
    <script src="{{asset('web/js/custom-swiper-2.js')}}"></script>
        @yield('scripts')
</body>
</html>