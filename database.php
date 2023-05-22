<!DOCTYPEhtml>
<html>
    <script src=
    "https://smtpjs.com/v3/smtp.js">
  </script>
  
  
 <head>
<title>database</title>
<!--magnific popup css cdn link-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <!--bootstrap link-->
      <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap-grid.min.css">
  <!--font link-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!--css link-->
      <link rel="stylesheet" type="text/css" href="medical.css">
</head>
<body>
	<?php
    include("doctor.php");


    ?>

        <header>
    	<div class="container">
    		<a href="#" class="logo"><span>H</span>ealth<span>C</span>are.</a>
            <nav class="nav">
            	<ul>
            		<li><a href="#home">Home</a></li>
            		<li><a href="#about">About</a></li>
            		<li><a href="#facility">Facility</a></li>
            		<li><a href="#review">Review</a></li>
            		<li><a href="#contact">Contact</a></li>
            		<li><a href="#post">Post</a></li>
            	</ul>
            	

            	</nav>
            <div class="fas fa-bars"></div>
            <div class="account">
            	<a href="log.php"><button class="bt" type="Create account">Sign in</button></a>
            </div>
        </div>

        
    </header>

  <!--header section ends-->
  <!--home section start-->
<section class="home" id="home">
	<div class="conntainer">
		<div class="row min-vh-100 align-items-center text-center text-md-left ">
			<div class="col-md-6 pr-md-5">
				<img src="Doctors-bro.png" width="100%" alt="">
			</div>

            <div class="col-md-6  pl-md-5 content">
				<h1><span>stay,</span> safe, <span>stay</span> healthy.</h1>
				<h3> We are commited for your health.</h3>
				
				<div class="learn">
          
                <a href="learnmore.php"><button class="button">learn more</button>

        </div>
			
			</div>

			
		</div>
		
	</div>
	
</section>

  <!--home section ends-->

  <!--about section start-->

  <section class="about" id="about">
  	<div class="container">
  		<div class="row min-vh-100 align-items-center">
  			<div class="col-md-6 content">
  			   <div class="box">
  				<h3><i class="fas fa-ambulance"></i>ambulance services</h3>
  				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Ipsa, suscipit.</p> 
  			   </div>

  			    <div class="box">
  				<h3><i class="fas fa-procedures"></i>emergency rooms</h3>
  				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Ipsa, suscipit.</p> 
  			   </div>

  			   <div class="box">
  				<h3><i class="fas fa-stethoscope"></i>free check-ups</h3>
  				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Ipsa, suscipit.</p> 
  			   </div>			

  		    </div>

         <div class="col-md-6 d-md-block">
         	<<img src="about img.png" width="100%" alt="">
  			
  	    </div>
  		
  	</div>

  	
  </section>
  <!--about section end-->

  <!--facility section start-->

    <section class="facility" id="facility">
      <div class="container">
          <h1 class="heading"><span>'</span> our facilities <span>'</span></h1> 
          <div class="box-container">
            <div class="box">
              <a href="facilities1.jpg" ><h1>Our Team Work</h1><img src="facilities1.jpg" alt=""></a>
            </div>

            <div class="box">
              <a href="facilities5.jpg"><h1>Our Lab</h1><img src="facilities5.jpg" alt=""></a>
            </div>
            
            <div class="box">
              <a href="facilities3.jpg"><h1>Emergency Room</h1><img src="facilities3.jpg" alt=""></a>
            </div>

            <div class="box">
              <a href="facilities4.jpg"><h1>Expert Doctors</h1><img src="facilities4.jpg" alt=""></a>
            </div>

            <div class="box">
              <a href="facilities6.jpg"><h1>Take Care</h1><img src="facilities6.jpg" alt=""></a>
            </div>

            <div class="box">
              <a href="facilities7.jpg"><h1>Advance Instrument</h1><img src="facilities7.jpg" alt=""></a>
            </div>

            <div class="box">
              <a href="facilities10.jpg"><h1>Good Enviroment</h1><img src="facilities10.jpg" alt=""></a>
            </div>

            <div class="box">
              <a href ="facilities12.jpg"><h1>Near Medical Store</h1><img src="facilities12.jpg" alt=""></a>
            </div>

            <div class="box">
              <a href="facilities11.jpg"><h1>Near Medical Store</h1><img src="facilities11.jpg" alt=""></a>
            </div>


          </div>
      </div>
      
    </section>
 <!--facility section end-->

 <!--review section start-->

 <section class="review" id="review">
 	<div class="container">

 		<h1 class="heading"><span>'</span> people's review <span>'</span></h1>
 		<div class="box-container">
 			<div class="box">
 				<p>I had the most wonderful experience at this practice! The facility is clean, the staff is welcoming, and I was seen right at the time of my appointment.</p>
                <h3>Anshuman Dutta</h3>
 				<span>Dec 22,2022</span>
 				<img src="download (3).jpg">
 			</div>

 			<div class="box">
 				<p>The staff and Dr.were all very friendly and helpful. I especially loved how Dr. (Name) really took his time to explain my conditions with me as well as my treatment options. I had a great visit and the doctor's demeanor has really put me at ease so I highly recommend this clinic</p>
                <h3> Miss.Sen</h3>
 				<span>Jan 5,2023</span>
 				<img src="download (2).jpg" alt="">
 			</div>
 			<div class="box">
 				<p>Dr. is a great doctor! He’s very understanding and listens to your concerns. He takes time with the patient to help them with their health issues! I highly recommend him to anyone looking for a specialist.
                </p>
               <h3> Sukriti Ghosh</h3>
 				<span>Jun25,2021</span>
 				<img src="download (1).jpg" alt="">
 			</div>


 		</div>
 	</div>



 </section>

<!--review section end-->

<!--counter section start-->
<section class="counter">
	<div class="container">
		<div class="box-container">
		<div class="box">
		     <i class="fas fa-hospital"></i>
		     <span>120+</span>
		     <h3>Hospitals</h3>
		</div>

		<div class="box">
		    <i class="fas fa-users"></i>
		    <span>100+</span>
		    <h3>staff</h3>
		</div>

		<div class="box">
		    <i class="fas fa-smile"></i>
		    <span>1200+</span>
		    <h3>happy patients</h3>
		</div>

		<div class="box">
		    <i class="fas fa-procedures"></i>
		    <span>130+</span>
		    <h3>bed facility</h3>
		</div>
	</div>
</div>
	</section>


 
<!--counter section end-->

<!--contact section starts-->
<section class ="contact" id="contact">

		<div class="container min-vh-100">
			<div class="row justify-content-center">
				<h1 class="heading"><span>'</span> make an appointment <span>'</span></h1>
				<div class="col-md-10">
					
					<form action="doctor.php" method="POST">
						<div class="inputbox">
							<input type="text" name="Name" placeholder="Full name" required="required">>
							<input type="number" name="Phone" placeholder="phone" required="required">>
						</div>	
                  <div class="inputbox">
							<input type="email"  name="Email" placeholder="your email " required="required">>

							<input type="date" name="Date" required="required">


							<select  onchange="la(this.value)" name="Department"  id="">
								
								<option value=" disabled selected">Doctor Consultation</option>
								
								<option value="choose a doctor">Available dr.</option>
                            </select>

         <select  name="Gastroenterologists">
			<option value="" disabled selected> Gastroenterologists </option>
			<option value="Dr.Mohan Dutta(Mon[9:00am-1:30pm])">Dr.Mohan Dutta(Mon[9:00am-1:30pm])</option>
			<option value="Dr.Mohan Dutta(Tue[11:00am-3:00pm])">Dr.Mohan Dutta(Tue[11:00am-3:00pm])</option>
			<option value="Dr.Mohan Dutta(Wed[2:00pm-5:00pm])">Dr.Mohan Dutta(Wed[2:00pm-5:00pm])</option>
			<option value="Dr.Mohan Dutta(Fri[4:00am-6:30pm])">Dr.Mohan Dutta(Fri[4:00am-6:30pm])</option>
			<option value="Dr.Siddhartha Ray(Sun[9:00am-1:30pm])">Dr.Siddhartha Ray(Sun[9:00am-1:30pm])</option>
			<option value="Dr.Siddhartha Ray(Mon[11:00am-3:00pm])">Dr.Siddhartha Ray(Mon[11:00am-3:00pm)</option>
			<option value="Dr.Siddhartha Ray(Thus[2:00am-5:00pm])">Dr.Siddhartha Ray(Thus[2:00am-5:00pm)</option>
			<option value="Dr.Siddhartha Ray(Sat[4:00pm-6:30pm])">Dr.Siddhartha Ray(Sat[4:00pm-6:30pm)</option>
		</select>
							
		<select name="Dermatologists">
			<option value="" disabled selected> Dermatologists </option>
			<option value="Dr.Priya Dey(Mon[8:00am-12:00pm])">Dr.Priya Dey(Mon[8:00am-12:00pm])</option>
			<option value="Dr.Priya Dey(Wed[11:00am-2:00pm])">Dr.Priya Dey(Wed[11:00am-2:00pm)</option>
			<option value="Dr.Priya Dey(Thus[4:00pm-6:00pm])">Dr.Priya Dey(Thus[4:00pm-6:00pm)</option>
			<option value="Dr.Priya Dey(Fri[8:00am-10:00pm])">Dr.Priya Dey(Fri[8:00am-10:00pm)</option>
			<option value="Dr.Diya Dasghupta(Mon[11:00am-2:30pm])">Dr.Diya Dasghupta(Mon[11:00am-2:30pm])</option>
			<option value="Dr.Diya Dasghupta(Tue[8:00am-10:00pm])">Dr.Diya Dasghupta(Tue[8:00am-10:00pm])</option>
			<option value="Dr.Diya Dasghupta(Wed[3:00am-5:00pm])">Dr.Diya Dasghupta(Wed[3:00am-5:00pm])</option>
			<option value="Dr.Diya Dasghupta(Fri[6:00pm-8:30pm])">Dr.Diya Dasghupta(Fri[6:00pm-8:30pm])</option>
		</select>

							
        <select name="Cardiologists" id="">
			<option value="" disabled selected>Cardiologists</option>
			<option value="Dr.Avishek Laha(Mon[9:00am-1:30pm])">Dr.Avishek Laha(Mon[9:00am-1:30pm])</option>
			<option value="Dr.Avishek Laha(Wed[11:00am-3:00pm])">Dr.Avishek Laha(Wed[11:00am-3:00pm)</option>
			<option value="Dr.Avishek Laha(Thus[2:00pm-5:00pm])">Dr.Avishek Laha(Thus[2:00pm-5:00pm)</option>
			<option value="Dr.Avishek Laha(Fri[4:00pm-6:30pm])">Dr.Avishek Laha(Fri[4:00pm-6:30pm)</option>
			
		</select>
		</div> 

       <input type="submit" value="Make appointment" class="button" name="submit"> 


		</form>
				
		</div>
       </div>
   </div>
    <div class="path">
   <a href="Choose a doctor.html"><button class="button">Pathology Outline</button></a>
</div>
                                

</section>
<!--contact section end-->
<!--post section start-->

<section class="post" id="post">
	<div class="container min-vh-100">
		<h1 class="heading"><span>'</span> out posts <span>'</span></h1>
		<div class="box-container">
			<div class="box">
				<img src="post.jpg" alt="">
				<div class="content">
					<span>2nd Mar,2023</span>
					<a href="#"><h3>Post title goes here</h3></a>
					<p>The Chief Executive Officer (CEO) is the highest-level management position in a hospital or hospital system. Hospital CEO's must possess the qualifications and skills to manage and direct the complexities of a modern patient care facility.</p>
				</div>
				
			</div>
			<div class="box">
				<img src="post1.jpg" alt="">
				<div class="content">
					<span> Nov 2,2020</span>
					<a href="#"><h3>Post title goes here</h3></a>
					<p>The Chief Executive Officer (CEO) is the highest-level management position in a hospital or hospital system. Hospital CEO's must possess the qualifications and skills to manage and direct the complexities of a modern patient care facility.</p>
				</div>
				
			</div>

			<div class="box">
				<img src="post2.jpg" alt="">
				<div class="content">
					<span>Sep 3,2022</span>
					<a href="#"><h3>Post title goes here</h3></a>
					<p>The Chief Executive Officer (CEO) is the highest-level management position in a hospital or hospital system. Hospital CEO's must possess the qualifications and skills to manage and direct the complexities of a modern patient care facility.</p>
				</div>
				
			</div>
			
		</div>

	</div>
	
</section>
<!--post section end-->
<!--footer section start-->
<section class="footer">
	<div class="container"> 
		<div class="row">
			<div class="col-md-4">
				<a href="#" class="logo"><span>H</span>ealth<span>C</span>are.</a>
				<p>he Chief Executive Officer (CEO) is the highest-level management position in a hospital or hospital s</p>
			</div>

			<div class="col-md-4 text-center">
				<h3>links</h3>
				<a href="#">home</a>
				<a href="#">about</a>
				<a href="#">facility</a>
				<a href="#">review</a>
				<a href="#">contact</a>
				<a href="#">post</a>
			</div>

			<div class="col-md-4 text-center">
				<h3>share</h3>
				<a href="#">facebook</a>
				<a href="#">twitter</a>
				<a href="#">instrgram</a>
				<a href="#">github</a>
				
			</div>
		</div>
	</div>
	
</section>

<!--footer section end-->


 <!--jquery link-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<!--magnific popup js link-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

   <!--js link-->
	<script src="medical.js"></script>

	<script>
		$('.facility').magnificPopup({
    delegate:'a',
    type:'image',
    gallary:{
      enabled:true}
    });
		function la()
		{
		window.location=("Choose a doctor.html");	
		}
	</script>

</body>
</html>