
<html>
<head>
  <title> UCSC</title>
<link rel="stylesheet" type="text/css" href="admin.css" />

<style>
    fieldset {
      border: 0;
    }
    label {
      display: block;
      margin: 30px 0 0 0;
    }
    .overflow {
      height: 200px;
    }
</style>

<script>
  $( function() {
    $( "#speed" ).selectmenu();

    $( "#files" ).selectmenu();

    $( "#number" )
      .selectmenu()
      .selectmenu( "menuWidget" )
        .addClass( "overflow" );

    $( "#salutation" ).selectmenu();
  } );
</script>

</head>
<body>
<div id="header">
  <div class="logo"><a href="#"><img class="limg" src="png/home.png"></a></div><div class="logo"><a style="padding-left:10px;" href="#">EditYour<span>WebSite</span></a></div>
  <form action="#">
<div class="logo">
  <!--<fieldset>
    <select name="speed" id="speed">
      <option><a href="admin_back.php?type=home">Home</a></option>
      <option><a href="admin_back.php?type=home">About Us</a></option>
      <option><a href="admin_back.php?type=home">Slower</a></option>



      <option selected="selected">page</option>

    </select>

  </form-->
</div>
  <div class="logout">
    <div style="float:left;margin-top: 15px;"><a style="padding-right:10px;" href="#">Log<span>Out</span></a></div>
    <div style="float:left;margin-top: 5px;"><a href="#"><img class="limg" src="png/logout.png"></a></div>
  </div>
</div>
<div id ="tool">
   <div class="sidebar">
      <ul id="nav">
        <div id="box">
          <div class="box-top">Basics</div>
          <div class="box-pannel">
          </div>
        </div>

          <li><a  href="#"><img class="img" src="png/drag.png">      Drag</a></li>
          <li><a  href="#"><img class="img" src="png/selection.png">    select</a></li>
          <li><a  href="#"><img class="img" src="png/image.png">    Upload Image</a></li>
          <li><a  href="#"><img class="img" src="png/rgb.png">    Colors</a></li>
          <li><a  href="#"><img class="img" src="png/browser.png">   Content</a></li>
          <li><a  href="#"><img class="img" src="png/divide.png"></a></li>
          <li><a  href="#"><img class="img" src="png/html.png"></a></li>
          <li><a  href="#"><img class="img" src="png/css.png"></a></li>
          <li><a  href="#"><img class="img" src="png/js.png"></a></li>

      </ul>
 </div>
<div class="edits">

  <?php

  		if(isset($_GET['type'])){
  			if($_GET['type'] == 'home'){
  				require "../../../index.html";
  			}
  			else if($_GET['type'] == 'aboutus'){
  				require "../about_us.php";
  			}
  			else if($_GET['type'] == 'view3'){
  				require "project1/pages/gallery.php";
  			}
  			else if($_GET['type'] == 'source'){
  				require "source.php";
  			}
  		}
  		else{
  			require "../index.html";
  		}

  	?>
</div>
</div>

</body>
</html>
