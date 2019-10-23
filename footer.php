    <div id="templatemo_footer">

        <ul class="footer_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="services.php">services</a></li>
            <li class="last_menu"><a href="contact.php">Contact Us</a></li>
			 </ul>
			<?php
			if(isset($_SESSION['id'] ))
			{
				$name=$_SESSION['name'];
				echo"<a href='logout.php' ><h3 style='line-height: 1.5; color:chartreuse;' >$name(logout)</h3></a>";
			}
			?>
       
    
        Copyright © 2048 <a href="#">Pro Teal- A Dream Company To Work For</a>
            
    </div> <!-- end of footer -->

</div> <!-- end of wrapper -->

</body>
</html>