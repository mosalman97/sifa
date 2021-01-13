
  <div  id="navbar" class="navColor" style="z-index: 9999;">
    <div class="row">
      <!-- <div id="navtop" class="col-xs-8"> -->
        <nav  aria-label="breadcrumb ">
          <ol class="breadcrumb"  id="myTopnav">
            <li class="breadcrumb-item {{Request::is('/') ? 'activeNav' :''}}" aria-current="page"><a href="/fameSouth/">Home</a></li>
            <li class="breadcrumb-item {{Request::is('concept') ? 'activeNav' :''}}"><a href="/#concept">The Concept</a></li>
            <li class="breadcrumb-item {{Request::is('category') ? 'activeNav' :''}}"><a href="/#category">Category</a></li>
            <li class="breadcrumb-item {{Request::is('process') ? 'activeNav' :''}}"><a href="/#process">Selection Process</a></li>
            <li class="breadcrumb-item {{Request::is('about') ? 'activeNav' :''}}"><a href="/fameSouth/public/about">Nominal Form</a></li>
            <li class="breadcrumb-item {{Request::is('contact') ? 'activeNav' :''}}"><a href="/fameSouth/public/contact">Contact</a></li>
            <li class="breadcrumb-item {{Request::is('gallery') ? 'activeNav' :''}}"><a href="/fameSouth/public/gallery">Gallery</a></li>

            <li><a href="javascript:void(0);" class="icon" onclick="menuResponsive()">
              <i class="fa fa-bars"></i>
            </a></li>

          </ol>
        </nav>
      <!-- </div> -->
      <!-- <div id="brand"class="col-xs-4  " > -->

  <!-- <h1>Hi</h1> -->
  <!-- <img src="img/espartologo.png" width="200px" height="100%"alt="" style=""> -->




      <!-- </div> -->
    </div>

  </div>
