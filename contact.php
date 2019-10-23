<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$msg=$_POST['msg'];
	if(!empty($name))
	{
		$user="root";
		$pass="";
		$database="amit";
		$host="localhost"; 
		$con=mysqli_connect($host,$user,$pass,$database);
		$query123="select *  from massege where email='$email'";
		$rs=mysqli_query($con,$query123);
		$em="";
		while($rs_dt=mysqli_fetch_array($rs))
		{
			$em=$rs_dt['email'];
			
		}
		if($em=="")
		{
		
		$query="INSERT into massege VALUES ('','$name','$email','$mobile','$msg')";
		mysqli_query($con,$query);
		//$ab=mysqli_insert_id($con);
		header('location:index.php');
		}
	}
}
?>
<?php  
session_start();  
 include ("header.php");
 ?>
    <div id="templatemo_content_wrapper"><span class="top"></span><span class="bottom"></span>
        <div id="templatemo_content">     
        	<h2>Contact Information</h2>
            <h5>Our Office Location</h5>
            Noida sector 15, <br />
            Near nerulas Hotel, C79<br />
            DELHI,INDIA<br /><br />
          <strong>Email:</strong> <a href="#">amitp381997@gmail.com</a>            <br />
          Phone Number: 9695973304.      
          <div class="cleaner_h60"></div>         
            <h4>Send us a quick message</h4>
            <div id="contact_form">          
                <form method="POST">
                    <label for="author">Name:</label> <input type="text" id="author" name="name" class="required input_field" />
              <div class="cleaner_h10"></div>                
					 <label for="email">Email:</label>
                  <input type="text" id="email" name="email" class="validate-email required input_field" />
                    <div class="cleaner_h10"></div>                  
                     <label for="url">Phone:</label> 
					<input type="text" name="mobile" id="url" class="input_field" >
                  <div class="cleaner_h10"></div>                 
                     <label for="text">Message:</label>
					<textarea  name="msg" rows="0" cols="0" class="required" id="text" ></textarea>
                    <div class="cleaner_h10"></div>                  
                    <input style="font-weight: bold;" type="submit" name="submit" value=" Send " />              
              </form>
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