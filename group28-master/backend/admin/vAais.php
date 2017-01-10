<!DOCTYPE html>
<!-- saved from url=(0040)http://s.codepen.io/suez/fullpage/vAais? -->

<html>
<head>

  <title>Admin</title>
  <script src="./stopExecutionOnTimeout-58d22c749295bca52f487966e382a94a495ac103faca9206cbd160bdf8aedf2a.js.download"></script>
  <script src="./jquery.min.js.download"></script>
  <link rel="stylesheet" type="text/css" href="admin1.css" />
  <link rel="stylesheet" type="text/css" href="fontawesome.css" />

  <link rel="stylesheet" type="text/css" href="materialize\css\materialize.css" />
  <script src="materialize\js\materialize.js"></script>





  <script>
  $(document).ready( function() {
      $("#load_home").on("click", function() {
          $("#home").load("../../index.html");
      });
  });
  </script>


<!--
  <link rel="stylesheet" href="../../../layout/styles/layout.css" type="text/css" />
  <script type="text/javascript" src="../../../layout/scripts/jquery.min.js"></script>
  <script type="text/javascript" src="../../../layout/scripts/jquery-s3slider.js"></script>
-->
<style type="text/css">
:root .ad
{ display: none !important; }</style>

<script>
$(document).ready(function () {
$('.trigger').click(function () {
    $('.menu').toggleClass('active');
});
});
//# sourceURL=pen.js
</script>
  <script>
  window.console = window.console || function(t) {};
</script>



  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<!---drag-------------------------->
<script>
$( function() {
  $( "#draggable" ).draggable();
  $( "#droppable" ).droppable({
    drop: function( event, ui ) {
      $( this )
        .addClass( "ui-state-highlight" )
        .find( "p" )
          .html( "Dropped!" );
    }
  });
} );
</script>
<!------------------>


</head>
<body>
  <div id="header1">
    <div class="logo"><a href="#"><img class="limg" src="../png/home.png"></a></div><div class="logotext"><a style="color: #ecf0f1;" href="#">EditYour<span>WebSite</span></a></div>
    <div class="logout">
      <div style="float:left;margin-top: 8px;"> <a href ="#" id="load_home"> HOME </a><a style="padding-right:10px;" href="#">Log<span>Out</span></a></div>
      <div style="float:left;margin-top: 1px;"><a href="#"><img class="limg" src="../png/exit.png"></a></div>
    </div>
  </div>
<div id="home" class="edits">
<?php

  		if(isset($_GET['type'])){
  			if($_GET['type'] == 'home'){
  				require "../../index.php";
  			}
  			else if($_GET['type'] == 'aboutus'){
  				require "../../index.html";
  			}
  			else if($_GET['type'] == 'view3'){
  				require "../../index.html";
  			}
  			else if($_GET['type'] == 'source'){
  				require "../../index.html";
  			}
  		}
  		else{
  			/*--require "in";*/
  		}

  	?>

</div>

<div translate="no">

  <div class="menu">
  <div class="btn trigger">
    <span class="line"></span>
  </div>
  <div class="icons">
    <div class="rotater">
      <a href="vAais.php?type=home">
      <div class="btn btn-icon">
        <i class="fa fa-codepen"></i>
      </div>
      </a>
    </div>
    <div class="rotater">
      <a href="vAais.php?type=home">
      <div class="btn btn-icon">
        <i class="fa fa-facebook"></i>
      </div>
    </div>
    </div>
    <div class="rotater">
      <div class="btn btn-icon">
        <i class="fa fa-google-plus"></i>
      </div>
    </div>
    <div class="rotater">
      <div class="btn btn-icon">
        <i class="fa fa-twitter"></i>
      </div>
    </div>
    <div class="rotater">
      <div class="btn btn-icon">
        <i class="fa fa-dribbble"></i>
      </div>
    </div>
    <div class="rotater">
      <div class="btn btn-icon">
        <i class="fa fa-linkedin"></i>
      </div>
    </div>
    <div class="rotater">
      <div class="btn btn-icon">
        <i class="fa fa-github"></i>
      </div>
    </div>
    <div class="rotater">
      <div class="btn btn-icon">
        <i class="fa fa-behance"></i>
      </div>
    </div>
  </div>
</div>
<div class="colors">

  <div class="fixed-action-btn horizontal click-to-toggle">
      <a class="btn-floating btn-large red">
        <i class="material-icons"></i>
      </a>
      <ul>
        <a href="vAais.php?type=home"><li><a class="btn-floating red"><i class="material-icons"></i></a></li></a>
        <li><a class="btn-floating yellow darken-1"><a href="vAais.php?type=home"><i class="material-icons"></a></i></a></li>
        <li><a class="btn-floating green"><i class="material-icons"></i></a></li>
        <li><a class="btn-floating blue"><i class="material-icons"></i></a></li>
      </ul>
    </div>

</div>







</body></html>
