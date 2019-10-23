<?php
session_start();
        $id=$_SESSION['id'];
        $user="root";
		$pass="";
		$database="amit";
		$host="localhost";
		$con=mysqli_connect($host,$user,$pass,$database);
		$query="select * from project1 where id='$id'";
		$res=mysqli_query($con,$query);
		$res1= mysqli_fetch_array($res);
	      $a=$res1['name'];
	      $b=$res1['address'];
	      $c=$res1['mobile'];
		  $d=$res1['email'];
		  $e=$res1['password'];
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
		$query="UPDATE project1 SET name='$name', address='$address', mobile='$mobile', email='$email', password='$password' where id='$id' ";
		mysqli_query($con,$query);
		$query="select * from project1 where id='$id'";
		$res=mysqli_query($con,$query);
		$res1= mysqli_fetch_array($res);
	      $a=$res1['name'];
	      $b=$res1['address'];
	      $c=$res1['mobile'];
		  $d=$res1['email'];
		  $e=$res1['password'];
		  header('location:index.php');
	}
}
?>
<?php    
 include ("header.php");
 ?>  
    <div id="templatemo_content_wrapper"><span class="top"></span><span class="bottom"></span>
        <div id="templatemo_content">	
		 <h2 align="center">update Form</h2>
		 <form method="POST">
                <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;"> Student Name:</lebel>
				 <input type="text" value="<?php echo$a; ?>" name="name" style="width:600; height:35;text-transform:uppercase ;" >
                <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;">  Full address:</lebel>
				  <input type="text" value="<?php echo$b; ?>" name="address" style="width:600; height:35;text-transform:uppercase ;">
                <lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;">  Mobile Number:</lebel>
				  <input type="text" value="<?php echo$c; ?>" name="mobile" style="width:600; height:35;">
				<lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;">  E-mail ID:</lebel>
				  <input type="email" value="<?php echo$d; ?>" name="email" style="width:600; height:35;">
				<lebel style="margin:auto; font-size:25px; padding:0; line-height:1; color:red;">  Password:</lebel>
				  <input type="password" value="<?php echo$e; ?>" name="password" style="width:600; height:35;">
                   <input type="submit" value="submit" name="submit">
                       </form>
       <div class="cleaner_h30"></div>
             </div><!-- end of templatemo_content -->
<?php
    include ("siderbar.php");
?>
    	<div class="cleaner"></div>
    </div> <!-- end of content_wrapper -->  
<?php
include ("footer.php");
?>