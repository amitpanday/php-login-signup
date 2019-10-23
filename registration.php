<?php
session_start();
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(!empty($name))
	{
		$user="root";
		$pass="";
		$database="amit";
		$host="localhost";
		$con=mysqli_connect($host,$user,$pass,$database);
		$query123="select *  from project1 where email='$email'";
		$rs=mysqli_query($con,$query123);
		$em="";
		while($rs_dt=mysqli_fetch_array($rs))
		{
			$em=$rs_dt['email'];	
		}
		if($em=="")
		{
		$query="INSERT into project1 (id,name,address,mobile,email,password)   VALUES ('','$name' ,'$address', '$mobile' , '$email' ,'$password')";
		mysqli_query($con,$query);
		$ab=mysqli_insert_id($con);
		$_SESSION['id']=$ab;
		setcookie(email, $email, time() + (86400 * 30));
	    setcookie(password,$password, time() + (86400 * 30));
		  header ('location:profile.php');
		}
	}
}
?>
<?php    
 include ("header.php");
 ?>
   <div id="templatemo_content_wrapper"><span class="top"></span><span class="bottom"></span>
        <div id="templatemo_content">
        <h2 align="center">Registration Form</h2>
                <form method="POST">
                 <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;"> Student Name:</lebel>
				 <input type="text" name="name" style="width:600; height:35;">
                 <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;"> Full address:</lebel>
				 <input type="text" name="address" style="width:600; height:35;">
                 <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;"> Mobile Number:</lebel>
				 <input type="text" name="mobile" style="width:600; height:35;">
				 <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;"> E-mail ID:</lebel>
				 <input type="email" name="email" style="width:600; height:35;">
				 <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;"> Password:</lebel>				 
				 <input type="password" name="password" style="width:600; height:35;">
                  <input type='submit' value="submit" name="submit" style="margin:auto; padding:10px 20px 10px 20px; color:green; font-size:25">                    
                </form>
        </div> <!-- end of templatemo_content -->
          <?php
		include ("siderbar.php");
		?>
    	<div class="cleaner"></div>
    </div> <!-- end of content_wrapper -->
<?php
include ("footer.php");
?>