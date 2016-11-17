<!DOCTYPE html>
<head>
 
  <!--<link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
	<link rel="stylesheet" href="styles.css"> 
	<link rel="stylesheet" href="index.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <script src="galleria/galleria-1.4.7.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="jquery.slides.min.js"></script>

	<script src="script.js"></script>
	<title>University Place</title>
</head>
 <style>
    .galleria{ width: 700px; height: 400px; background: #000 }
</style>


<body>
  <ul class="topnav" align= "center">
  <li><a id="home" href="index.html" target="_self">Home</a></li>
  <li><a href="act.html" target="_self">Activity Calendars</a></li>
  <li><a href="news.html" target="_self">Newsletters</a></li>
  <li><a href="rcd.html" target="_self">Residents' Council Documents</a></li>
  <li><a href="upf.html" target="_self">University Place Foundation</a></li>
  <li><a href="uph.html" target="_self">University Place History</a></li>
  <li><a href="about.html" target="_self">About Us</a></li>
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul>
</body>

<body>

<div class="galleria">
    <?php $dir = "../Images/";
$gimages = glob($dir."*.png");
$id = 0;
foreach($gimages as $gimage) {
  $id = $id +1;
    echo '<img src="'.$gimage.'" >';
}?>
</div>
<script>
  (function() { 
            Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
            Galleria.run('.galleria',{
              autoplay: 7000,
              height: 650,
              width: 1230
            });
        }());
</script>
	
</body>
