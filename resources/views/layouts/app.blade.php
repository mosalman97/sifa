<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIFA South India Fame Awards...</title>
    <script src="{{asset('js/app.js')}}">

    <style>


        // I'm guessing you have some styles in a style tag in your layout
    </style>
    @stack('css') // Any styles you 'push' will go here



    </script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bpBGSlideshow.min.js')}}"></script>
    <script src="{{asset('js/jquery.imagesloaded.min.js')}}"></script>
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
    <script src="{{asset('js/designesia.js')}}"></script>
    <script src="{{asset('js/enquire.min.js')}}"></script>
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/easing.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/active.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- <script src="{{asset('js/lightbox.min.js')}}"></script> -->
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/circle-progress.js')}}"></script>
<script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('js/modernizr.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>

<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>


    <!-- <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script> -->
    <!-- <link rel="stylesheet" href="{{asset('css/effect.css')}}"> -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">

  <link rel="stylesheet" href="{{asset('css/app.css')}}">

      <!-- <link rel="stylesheet" href="{{url('https://www.w3schools.com/w3css/4/w3.css')}}"> -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- <link rel="stylesheet" href="{{asset('img/bg.jpg')}}"> -->


    <link rel="stylesheet" href="{{asset('css/content.css')}}">
    <link rel="stylesheet" href="{{asset('css/nominal.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">


<link rel="stylesheet" href="{{asset('css/plugin.css')}}">

<link rel="stylesheet" href="{{asset('css/bg.css')}}">
<!-- <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}"> -->
<link rel="stylesheet" href="{{asset('css/fontawesome-free-5.13.0-web/css/all.css')}}">
<!-- <link href="css/fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet"> -->


    <!-- <link href="{{url('https://fonts.googleapis.com/css?family=Aclonica')}}"> -->
    <!-- <link href="{{url('https://fonts.googleapis.com/css?family=Fira+Sans')}}"> -->
    <!-- <link href="{{asset('css/alconia.css')}}">
    <link href="{{asset('css/firasans.css')}}"> -->

<link rel="stylesheet" href="{{asset('css/socialIcons.css')}}">

<link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
 <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
 <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> -->


  </head>
  <body>


  <div class="container2" width="100%" >


    @if(Request::is('/'))
    @include('inc.main')
    @elseif(Request::is('about')||Request::is('contact'))
    <h1>Header</h1>
    @else
    <h1>Admin </h1>
    @endif
    @if(Request::is('/')||Request::is('contact')||Request::is('about')||Request::is('gallery')||Request::is('nominations/submit')||Request::is('contact/submit')||Request::is('/submit'))


@include('inc.navbar')

      @else
    @include('inc.navbarAdmin')


    @endif


@include('inc.mobiSection')
    <div class="row " width="100%">
      <div class="col-lg-6">
        @include('inc.messages')
      </div>
    </div>
    @yield('content')



   @include('inc.footer')




<button class="fa fa-angle-up" style="font-size:40px" onclick="topFunction()" id="myBtn" title="Go to top"></button>
  </div>

  </body>
  <footer id="footer" class="text-center">
    <p>Copyright 2020 &copy KABS Digital</p>
  </footer>
<script type="text/javascript">
var mybutton = document.getElementById("myBtn");
var navbar = document.getElementById("navbar");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction();myFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {

  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


// Get the navbar

// window.onscroll = function() {myFunction()};
// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</html>
