<!DOCTYPE html> 
<html>

<head>

  <title>Free For Fun</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
   <meta http-equiv="refresh" content="30">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
    <configuration>
   <system.webServer>
      <httpProtocol>
         <customHeaders>
            <add name="X-Custom-Name" value="MyCustomValue" />
         </customHeaders>
      </httpProtocol>
   </system.webServer>
</configuration>
</head>

<body>
     <?php
    error_reporting(0);
  
$dir = $_GET["photo"];

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "<img src=" . $dir."/".$file  . ">";
    }
    closedir($dh);
  }
}

    
?>
  <div id="main">		

    <header>
	  <div id="strapline">
	    <div id="welcome_slogan">
	      <h3>Welcome To Free For  <span>Fun</span></h3>
	    </div><!--close welcome_slogan-->
      </div><!--close strapline-->	  
	  <nav>
	    <div id="menubar">
          <ul id="nav">
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="ourwork.html">Working</a></li>
            <li><a href="testimonials.html">Testing</a></li>
            <li><a href="?photo=projects.html">Projects</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div><!--close menubar-->	
      </nav>
    </header>
    
    <div id="slideshow_container">  
	  <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="940" height="250" src="images/home_1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li><img width="940" height="250" src="images/home_2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
        </ul> 
	  </div><!--close slideshow-->  	
	</div><!--close slideshow_container-->   
	
	<div id="site_content">		
	  
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>New Website</h2>
            <p>Welcome to our new website. Please fild the flag in the website</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Update</h2>
            <h3>March 2016</h3>
            <p>The New Vulnerability Remote Exploit is Konica Minolta</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>February 2016</h3>
            <p>The New Vulnerability Local Exploit Privilege Escalation is Chkrootkit</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Phone: Kurapiko Tel.+66 85 115 6587</p>
            <p>Email: <a href="mailto:kurapiko@youremail.co.uk">Kurapiko@youremail.co.uk</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	   
	  <div id="content">
        <div class="content_item">
		  <h1>Welcome To Website</h1> 
          <p>This WebSite is Vulnerability Website This Type of Vulnerability is Web If you can fild the Vulnerability u can get the flag and points. </p>
	  
		  <div class="content_container">
		    <p>If You Can See me u can get the flag hahaha!!.</p>
		  	<div class="button_small">
		      <a href="#">Read more</a>
		    </div><!--close button_small-->
		  </div><!--close content_container-->
          <div class="content_container">
		    <p>Don't Give up pls</p>          
		  	<div class="button_small">
		      <a href="#">Read more</a>
		    </div><!--close button_small-->		  
		  </div><!--close content_container-->	
		  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	

    <footer>
	  <a href="index.php">Home</a> | <a href="ourwork.html">Working</a> | <a href="testimonials.html">Testimonials</a> | <a href="projects.html">Projects</a> | <a href="contact.html">Contact</a><br/><br/>
	  <a href="http://www.google.com">Google</a> | website template by Melonz<a href="http://www.index.html">Free For Fun</a>
    </footer>
	
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html>
