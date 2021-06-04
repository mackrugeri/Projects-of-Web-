<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <link href="layouting/styles/layout.css" rel="stylesheet" type="text/css" media="all">
		<link href="layouting/styles/login.css" rel="stylesheet" type="text/css" media="all">
        <title>MeetMe Personal</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
      
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body style="background-color:#729ce0;">
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area" style="background-image:url(background.png);">
        	<h1 style="text-align: center; font-size:40px; color:#a8e7ff; padding-top: 10px; padding-bottom:10px; border-radius:100px;margin-left:100px; margin-right:100px; border-bottom:5px solid #a8e7ff; background-color:black; font-size:30px;" >Personal Details</h1>
           	<div class="container box_1620" >
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
								<img src="img/personal.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="personal_text">
									<!-- <h6>Hello Everybody, i am</h6> -->
									<!-- <h3>Account Details</h3> -->
									<h4 style="font-size:30px;"> Account Details</h4>
									
									<ul class="list basic_info">
										<li><a href="#"><i class="lnr lnr-user"></i> Ahsan Chughtai</a></li>
										<li><a href="#"><i class="lnr lnr-user"></i> Father Name</a></li>
										<li><a href="#"><i class="lnr lnr-user"></i> Mother Name</a></li>
										<li><a href="#"><i class="lnr lnr-link"></i> 12101-8400000-7</a></li>
										<li><a href="#"><i class="lnr lnr-star-empty"></i> N/A</a></li>
										<li><a href="#"><i class="lnr lnr-link"></i> Default Account</a></li>
										<li><a href="#"><i class="lnr lnr-phone-handset"></i>03339964995 </a></li>
										<li><a href="#"><i class="lnr lnr-envelope"></i> ahsanchughtai846@gmail.com</a></li>
										<li><a href="#"><i class="lnr lnr-home"></i> Santa monica bullevard</a></li>
									</ul>
									<ul class="list personal_social">
										<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<br>
										 <button style="margin-top:20px;background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;" onclick="document.getElementById('id01').style.display='block'" class="Ai1-tag">Change password</button>
						           <div id="id01" class="modal">
						      
							      <form class="modal-content animate" style="width:50%; background-color:#729ce0;" action="/action_page.php">
							        <div class="imgcontainer">
							          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>	
							        </div>
							        <div >
							          <input style="width:100%;" type="text" placeholder="Old Password" name="Anumber" required style="color:black;">
							          <input style="width:100%;" type="text" placeholder="New Password" name="Anumber" required style="color:black;">
							          <input style="width:100%;"type="Password" placeholder="Re-Password" name="pass" required>
							      </form>
							      	<button class="bttn" style="margin-left:88%;" type="submit">Apply</button> 
							      	</div>
							    </div>
						        </li>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
 
    </body>

 <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>