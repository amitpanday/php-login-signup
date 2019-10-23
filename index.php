<?php
session_start();
if(isset($_POST['submit']) && !isset($_SESSION['id']))
{
    $email=$_POST['email'];
	$password=$_POST['password'];
	if(!empty($email) && !empty($password))
	{
		$user="root";
		$pass="";
		$database="amit";
		$host="localhost";
		$con=mysqli_connect($host,$user,$pass,$database);
		$qbe="select * from project1 where email='$email' ";
		$res=mysqli_query($con,$qbe);
		$e="";
		$p="";
		$b="";
		while($res1= mysqli_fetch_array($res))
		{
			$b=$res1['id'];
			$a=$res1['name'];
		    $p=$res1['password'];
			$e=$res1['email'];
		}
		$_SESSION['id']=$b;
		$_SESSION['name']=$a;
		$_SESSION['email']=$e;
		$_SESSION['password']=$p;
		if($email==$e)
		{
			if($password==$p)
			{
		       header('location:profile.php');
		    }
		}
	}
}
else if(isset($_COOKIE['email']) && ($_COOKIE['password']))
{
    $x=$_COOKIE['email'];
	$y=$_COOKIE['password'];
} 
else
{
	$x="Enter your email";
	$y="password";
}
?>
<?php     
 include ("header.php");
 ?> 
     <div id="templatemo_content_wrapper"><span class="top"></span><span class="bottom"></span>
        <div id="templatemo_content">     
            <div id="templatemo_slider">
                <div id="one" class="contentslider">
                    <div class="cs_wrapper">
                        <div class="cs_slider">
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/1" target="_parent">
                                    <img src="images/slider/templatemo_slide02.jpg" alt="Website Template 01" />
                                </a>
                            </div><!-- End cs_article -->
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/2" target="_parent">
                               	<img src="images/slider/templatemo_slide01.jpg" alt="Website Template 02" />
                                </a>
                            </div><!-- End cs_article -->
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/3" target="_parent">
                               	<img src="images/slider/templatemo_slide03.jpg" alt="Website Template 03" />
                                </a>
                            </div><!-- End cs_article -->
                            <div class="cs_article">
                                <a href="http://www.templatemo.com/page/4" target="_parent">
                               	<img src="images/slider/templatemo_slide04.jpg" alt="Website Template 04" />
                                </a>
                            </div><!-- End cs_article -->
                        </div><!-- End cs_slider -->
                    </div><!-- End cs_wrapper -->
                </div><!-- End contentslider -->
                <!-- Site JavaScript -->
                <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
                <script type="text/javascript">
                    $(function() {
                    $('#one').ContentSlider({
                    width : '600px',
                    height : '240px',
                    speed : 600,
                    easing : 'easeInOutQuart'
                    });
                    });
                </script>
                <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
                <script src="js/chili/recipes.js" type="text/javascript"></script>
                <div class="cleaner"></div>
            </div> <!-- end of templatemo_slider -->  
            <form method="POST">
                    <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;">E-mail:</lebel>
                      <input type="email" name="email" style="height: 30; width: 600;" value="<?php echo $x; ?>" >
                        <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;">PASSWORD:</lebel>
                           <input type="password" name="password" style="height: 30; width: 600;" value="<?php echo$y; ?>" >
                              <input type="submit" name="submit" value="login" style="margin:auto; padding:10px 20px 10px 20px; color:green; font-size:25" >
								 </form>
            <div class="cleaner_h40"></div>
            <h2>What we do?</h2>
            <p>We serve clients at every level of their organization, in whatever capacity we can be most useful, whether as a trusted advisor to top management or as a hands-on coach for front line employees. For every engagement, we assemble a team with the most appropriate experience and expertise</p>
             <p>No matter the challenge, we focus on delivering practical and enduring results, and equipping our clients to grow and lead. We partner with clients to put recommendations into practice. Our implementation specialists work directly with clients over long periods to help develop workforce skills, drive operational improvement, and apply new working methods</p>       
        </div> <!-- end of templatemo_content -->
        <?php
		include ("siderbar.php");
		?>
    	<div class="cleaner"></div>
    </div> <!-- end of content_wrapper -->
<?php
include ("footer.php");
?>