
  <div  id="navbar" class="navColor" style="z-index: 9999;">
    <div class="row">
      <!-- <div id="navtop" class="col-xs-8"> -->
        <nav  aria-label="breadcrumb ">
          <ol class="breadcrumb"  id="myTopnav">
            <li class="breadcrumb-item {{Request::is('contacts') ? 'activeNav' :''}}"><a href="/contacts">Contacts</a></li>
            <li class="breadcrumb-item {{Request::is('nominations') ? 'activeNav' :''}}"><a href="/nominations">Nominations</a></li>
            <li><a href="javascript:void(0);" class="icon" onclick="menuResponsive()">
              <i class="fa fa-bars"></i>
            </a></li>

          </ol>
        </nav>
      <!-- </div> -->
      <!-- <div id="brand"class="col-xs-4  " >

  <h1>Hi</h1>
  <img src="img/espartologo.png" width="200px" height="100%"alt="" style="">




      </div> -->
    </div>

  </div>
