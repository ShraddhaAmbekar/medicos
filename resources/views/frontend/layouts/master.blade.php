<?PHP
header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html lang="in">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> @yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/medicos_logo.png') }}">
    @include('frontend.common.allcss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body class="home-st1">

    <!--  start cursor  -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!--  end cursor  -->
    <!-- ====== Start Loading ====== -->
    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
          
            <div class="load-text">
                 
                <span>M</span>
                <span>E</span>
                <span>D</span>
                <span>I</span>
                <span>C</span>
                <span>O</span>
                <span>S</span>
                <span>M</span>
                <span>I</span>
                <span>N</span>
                <span>D</span>
                <span>Z</span>
            </div>
        </div>
    </div>


<!--comment--> 


<div id="fixed-social">
    <div>
        <a class="fixed-facebook " href="https://www.facebook.com/profile.php?id=61559361827873&mibextid=LQQJ4d" target="_blank"> <span>Facebook</span></a>
    </div>
    <!--<div>-->
    <!--    <a href="#" class="fixed-twitter" target="_blank"><i class="fa fa-twitter"></i> <span>Twitter</span></a>-->
    <!--</div>-->
    <div>
        <a href="https://www.instagram.com/medicosmindz9536?igsh=MjRvdWgzaXY1Nnlt" class="fixed-instagrem" target="_blank"> <span>Instagram</span></a>
    </div>
       <div>
        <a href="https://www.youtube.com/@medicosmindz-hl6qw" class="fixed-youtube" target="_blank"> <span>Youtube</span></a>
    </div>
    <div>
        <a href="#" class="fixed-linkedin" target="_blank"> <span>LinkedIn</span></a>
    </div>

 
</div>

<style>

    /* fixed social*/
    #fixed-social {
        position: fixed;
        top: 230px;
        right:0px;
        z-index:9999;
    }
    .fa-facebook, .fa-instagram, .fa-linkedin, .fa-pinterest, .fa-twitter{
        color: white !important;
        font-size: 20px;
    }
   

    #fixed-social a {
        color: #fff;
        display: block;
        height: 40px;
        position: relative;
        text-align: center;
        line-height: 40px;
        width: 40px;
        margin-bottom: 1px;
        z-index: 2;
    }
    #fixed-social a:hover>span{
        visibility: visible;
        right: 41px;
        opacity: 1;
    } 
    #fixed-social a span {
        line-height: 40px;
        right: 60px;
        position: absolute;
        text-align: center;
        width: 120px;
        visibility: hidden;
        transition-duration: 0.5s;
        z-index: 1;
        opacity: 0;
    }
    .fixed-facebook{
        /*background-color: #1877f2;*/
        background-image: url({{ asset('frontend/assets/img/icons/fbicon.jpg') }});
        background-size:cover;
        background-repeat: no-repeat;
    }
    .fixed-facebook span{
        background-color: #1877f2;
    }
    .fixed-twitter{
        background-color: #1d9bf0;

    }
    .fixed-twitter span{
        background-color: #1d9bf0;
    }

    .fixed-instagrem{
        background-image: url({{ asset('frontend/assets/img/icons/insta-icon.png') }});
        background-size:cover;
        background-repeat: no-repeat;

    }
    .fixed-instagrem span{

        background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);
    }
    .fixed-linkedin{
        background-image: url({{ asset('frontend/assets/img/icons/linkedin-icon.png') }});
        background-size:cover;
        background-repeat: no-repeat;

    }
    .fixed-linkedin span{
        background-color: #0077b5;
    }
    .fixed-youtube{
       background-image: url({{ asset('frontend/assets/img/icons/ytube1-icon.png') }});
        background-size:cover;
        background-repeat: no-repeat;

    }
    .fixed-youtube span{
        background-color: #FF0000;
    }
    /*end fixed social*/
    
     /* WhatsApp button styles */
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50px;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            text-decoration: none;
        }

</style>

    @include('frontend.common.sidemenu')
    <div id="scrollsmoother-container">


        <!-- Main Wrapper Start -->

        <!-- Header Area start -->
        @include('frontend.common.navbar')
        @yield('content')
        @include('frontend.common.footer')

    </div>

    @include('frontend.common.alljs')


<a href="https://wa.me/9773877349" class="whatsapp-button" target="_blank">
    <i class=""><img src="{{ asset('frontend/assets/img/icons/whatsapp.png') }}"></i>   
</a>







</body>

</html>
