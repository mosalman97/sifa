




function menuResponsive() {
  var x = document.getElementById("myTopnav");
  var y =document.getElementById("brand");
  var z=document.getElementById("navtop");
  if (x.className === "breadcrumb") {

    x.className += " responsive";
    y.style.display = "none";
      z.classList.add("col-xs-12")
      z.classList.remove("col-xs-8")
    } else {
      x.className = "breadcrumb";
        y.style.display = "block";

        z.classList.add("col-xs-8")
        z.classList.remove("col-xs-12")
    }
  }
