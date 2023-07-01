<?php
 require('conection.php');
 session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>home page </title>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="additional_styles.css">
</head>

<body>
	<nav class="navbar">
		<h1 class="logo">CROP ROTATION </h1>
		<ul class="nav-links">
			<li class="active"><a href="/index.html"></a>HOME</li>
			<li><a href="mraket.php">Online Market</a></li>
			<li><a href="#"> Gaverment service</a></li>
			<li><a href="/About/about.html">About</a></li>
			
		
		<?php
	 if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) 
	 {
		echo $_SESSION['username'] . " - <a href='logout.php' class='ctn'>LOGOUT</a>";
	}
	 else
	 {
		echo"
	  <div class='sign-in-up'>
      <button type='button' onclick=\"popup('login-popup')\"class='ctn'>LOGIN</button>
      <button type='button' onclick=\"popup('register-popup')\"class='ctn'>REGISTER</button>
   		 </div>
		";
	 }
 ?></ul>
		<img src="./image/icons8-top-menu-60.png" class="menu-btn">
	</nav>
	<header>
		<div class="header-content">
			<h2>Grow Agricluture Digitaliy </h2>
			<div class="line"></div>
			<h1>Indian Crop Rotation Agricluture</h1>
			<a href="crop.php" class="ctn">Let's Start</a>
		</div><br><br>
	
	<!-- login and reg page  -->
	<div class="popup-container" id="login-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="login-btn" name="login">LOGIN</button>
      </form>
    </div>
  </div>

  <div class="popup-container" id="register-popup">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="register-btn" name="register">REGISTER</button>
      </form>
    </div>
  </div>
  <?php
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) 
	{
		echo"<h1 style='text-aling: center;'class='ctn'> Wlcome to the website - $_SESSION[username]";
	}
?>
  </header>
	<!---Events -->
	<section class="events">
		<div class="title">
			<h1>Farming Season </h1>
			<div class="line">
			</div><br><br>
			<div class="row">
				<div class="col">
					<img src="./image/farmer.jpg" alt="" style="height:250px;">
					<h4>Farming in Monsoon</h4>
					<p>These crops household crop plants grown and harvested in India during the rainy season, which typically lasts from June to November.</p>
					<a href="#" class="ctn">About More </a>
				</div>


				<div class="col">
					<img src="./image/imag.jpeg" alt=""style="height:250px;" >
					<h4>Farming in Winter </h4>
					<p>Indian winter is the best season to grow a variety of vegetables in a kitchen garden. This growing season is also called as the Rabi season.</p>
					<a href="#" class="ctn">About More </a>
				</div>
			</div>

	</section>

	<section class="explore">
		<div class="explore-content">
			<h1>Explor Diffrent Type Of Crops </h1>
			<div class="line"></div>
			<p>Agriculture is the art and science of cultivating the soil, growing crops and raising livestock.<br><br>Farming is the act or process of working the ground, planting seeds, and growing edible plants. You can also describe raising animals for milk or meat as farming.</p>
			<a href="#" class="ctn">Get more </a>
		</div>

	</section>

	<section class="tours">
		<div class="row">
			<div class="col content-col">
				<h1> Diffrent Type OF Agricluture</h1>
				<div class="line"></div>
				<p><B>Agriculture is the art and science of cultivating the soil, growing crops and raising livestock.Agriculture is the art and science of cultivating the soil, growing crops and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets. Agriculture provides most of the world's food and fabrics.</B></p>
				<a href="#" class="ctn">About More<a>
			</div>
			<div class="col image-col">
				<div class="image-gallery">
					<img src="./image/cow.jpg" alt="" >
					<img src="./image/img1.jpg " alt="">
					<img src="./image/chicken.jpg " alt="">
					<img src="./image/salt.jpg " alt="">
				</div>
			</div>

		</div>
		 
	</section >
	
	
<section class="footer">
	<!-- symbols  -->
	<svg style="color:aliceblue" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
		<path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
		<path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
	  </svg>&nbsp;&nbsp;&nbsp;
	  <svg style="color:aliceblue" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
		<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
	  </svg>&nbsp;&nbsp;&nbsp;
	  <svg style="color:aliceblue" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
		<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
	  </svg> &nbsp;&nbsp;&nbsp;
	  <svg style="color:aliceblue"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
		<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
	  </svg>&nbsp;&nbsp;&nbsp;
	<p>For more information contact us For free   </p>
	<h3> Contect Us  </h4>
</section>
<script>
	function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }
	</script>


	<script>
		const menuBtn = document.querySelector('.menu-btn')
		const navlinks = document.querySelector('.nav-links')
		menuBtn.addEventListener('click', () => {
			navlinks.classList.toggle('mobile-menu')
		})
	</script>
</body>

</html>