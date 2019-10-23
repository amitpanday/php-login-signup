<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pro Teal - A Dream Company To Work For</title>
<meta name="keywords" content="free website templates, pro teal, web design, 2-column" />
<meta name="description" content="Pro Teal - free website template (2-column layout) from templatemo.com" />
<link rel="icon" href="favicon.ico" type="image/x-ico" >
<link href="templatemo_style.css" rel="stylesheet" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" media="screen,projection" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
            <h1><a href="http://www.templatemo.com/page/1" target="_parent">
                <img src="images/templatemo_logo.png" alt="Site Title" width="200" height="50" />
                <span>A Dream Company To Work For</span>
            </a></h1>
      	</div>
        <div id="search_box">
            <a href="registration.php" > <input type="submit" name="q" value="signup"></a>&nbsp
			<?php
			if(isset($_SESSION['id'] ))
			{
				$name=$_SESSION['name'];
				echo"<a href='logout.php' ><input type='submit' name='search' value='logout'></a>&nbsp";
				echo"<a href='Profile.php' ><input type='submit' name='search' value='Profile'></a>";
				echo"<a href='Profile.php' ><h3 style='text-transform:uppercase ;line-height: 1.5; color:chartreuse;' >$name</h3></a>";
			}
			else
			{
				echo"<a href='index.php' > <input type='submit' name='Search' value='Login' ></a>";
			}
			?>  
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of header -->
    <div id="templatemo_menu">
            <ul>
                <li><a href="index.php" class="current">Home</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>    	
    	</div> <!-- end of templatemo_menu -->