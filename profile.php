<?php
session_start();
$id=$_SESSION['id'];
	if(!empty($id))
	{
		$user="root";
		$pass="";
		$database="amit";
		$host="localhost";
		$con=mysqli_connect($host,$user,$pass,$database);
		$query="select * from project1 where id='$id'";
		$res=mysqli_query($con,$query);
		while($res1= mysqli_fetch_array($res))
		{
		   $x=$res1['id'];
	       $a= $res1['name'];
		   $b= $res1['address'];
	       $c= $res1['mobile'];
           $d= $res1['email'];
		   $e= $res1['password'];
		   setcookie('email', $d, time() + (86400 * 30));
		   setcookie('password', $e, time() + (86400 * 30));	       
		}
		$_SESSION['name']=$a;
		$_SESSION['id']=$id;
	}
?>
<?php    
 include ("header.php");
 ?>
    <div id="templatemo_content_wrapper"><span class="top"></span><span class="bottom"></span>
        <div id="templatemo_content">
		<h2 align="center">User Profile</h2>
		<form method="POST">               
				<lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;">Student Name:</lebel>
				  <input type="text" name="name" value="<?php echo $a; ?>" style="width:600; height:35; text-transform:uppercase ;" >
                 <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;">Full address:</lebel>
					<input type="text" name="address" value="<?php echo $b; ?>" style="width:600; height:35;text-transform:uppercase ;" >
                <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;">Mobile Number:</lebel>
				 <input type="text"name="mobile" value="<?php echo $c; ?>" style="width:600; height:35;" >
				<lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;">E-mail ID:</lebel>
				 <input type="email" name="email" value="<?php echo $d; ?>" style="width:600; height:35;" >
				<lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;">Password:</lebel>
				 <input type="password" name="password" value="<?php echo $e; ?>" style="width:600; height:35;" >
				 </form>
				 <?php echo"if you want update your profile.Click on button";?>
				 <a href="updateprofile.php"> <input type="submit" value="update"> 
				 </a>
        	<div class="cleaner_h40"></div>
            <div id="gallery">
              </div>
        </div> <!-- end of templatemo_content -->
          <?php
		include ("siderbar.php");
		?>
    	<div class="cleaner"></div>
    </div> <!-- end of content_wrapper -->
<?php
include ("footer.php");
?>