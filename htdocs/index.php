<?php
	$con=mysqli_connect("210.213.193.68", "root", "BIVERproject18");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		mysqli_select_db($con, 'str_database');
		session_start();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>BiVER</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = yes">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
			
		<link rel="stylesheet" href="static/css/homepage.css?ver=<?php echo rand(111,999)?>">
	</head>
	<body>
        <?php include('navbar.php'); ?>
        
		<div id="body">
			<div id="div2">
				<div id="div2_1">
					<h1>BIODIVERSITY AND VULNERABLE ECOSYSTEMS RESEARCH</h1>
					<p>Philippine-native species data. At your fingertips.</p>
					<form>
						<img src="static/img/icons/search2.png">
						<input type="text">
					</form>
				</div>
				<iframe src="https://www.youtube.com/embed/rdXe-uzzyHg">
				</iframe>
				<div id="div2_2">
					<p>Corlito syrichto. Photo from Google Images. Copyright 2020.</p>
				</div>
			</div>
		</div>



		<div id="body2">
			<div id="div3_1">
				<div id="news">NEWS</div>
                <a href="#">
				<div id="div3_1s">
					<img src="static/img/misc/placeholder.png">
					<div>
						<p id="headline">Headline</p>
						<p id="author">by Author</p>
					</div>
				</div>
                </a>
                <a href="#">
				<div id="div3_1s">
					<img src="static/img/misc/placeholder.png">
					<div>
						<p id="headline">Headline</p>
						<p id="author">by Author</p>
					</div>
				</div>
                </a>
                <a href="#">
				<div id="div3_1s">
					<img src="static/img/misc/placeholder.png">
					<div>
						<p id="headline">Headline</p>
						<p id="author">by Author</p>
					</div>
				</div>
                </a>
                <a href="#">
				<h3>SEE MORE</h3>
                </a>
			</div>
			<div id="div3_2">
                <a href="#">
				<div id="bpanel">
					<div>RESEARCH</div>
					<h1>Evaluation of Microplastics in West Philippines Sea</h1>
				</div>
                </a>
                <a href="#">
				<div id="spanel1">
					<div id="spanel1_img">
						<div>RESEARCH</div>
					</div>
					<h3>Pesticidal effects on Comperiella sp.</h3>
					<p>by Gomez, A, et. al.</p>
				</div>
                </a>
                <a href="#">
				<div id="spanel2">
					<div id="spanel2_img">
						<div>RESEARCH</div>
					</div>
					<h3>Density clustering of Tilapia in Bilog Island</h3>
					<p>by De la Cruz, K, et. al.</p>
				</div>
                </a>
			</div>			
		</div>



		<footer>
			<!---	
			<div id="sites">
				<img src="static/img/sites/working.jpg">
				<img src="static/img/sites/tempworking.jpg">
				<img src="static/img/sites/fieldwork2.jpg">
				<img src="static/img/sites/danao.jpg">
				<img src="static/img/sites/binahaan.jpg">
				<img src="static/img/sites/cuatroislas.jpg">
				<img src="static/img/sites/sanpedro.jpg">
				<img src="static/img/sites/bito.jpg">
			</div>--->
			<div id="contact_us">
				<div id="contact_us_left">
					<p>
						<span style="font-family: Amiko-Regular; font-size: 1.4em">CONTACT US</span><br>
						biverweb@evc.pshs.edu.ph <br>
						(123) 456 789 <br><br>
						<img src="static/img/icons/FBIcon.png">
						<img src="static/img/icons/TwitterIcon.png">
						<img src="static/img/icons/YTIcon.png">
					</p>
				</div>
				<div id="contact_us_right">
					<p>
						<img src="static/img/logos/PCAARRD.png">
						<img src="static/img/logos/pshss.png">
						<img src="static/img/logos/crestLogo.png">
						<br>Center for Research in Science and Technology<br>
						Pawing, Palo, Leyte<br>
						6501<br>
						Philippines<br>
					</p> 
				</div>
			</div>
			<div id="copyright">
				<p>
					<img src="static/img/logos/biverlogo.png">
					Copyright &copy; BiVERWeb 2020
				</p>
			</div>
		</footer>
        <!-- --------------------------------------------------------------<Javascript>--------------------------------------------------------- -->
		<!-- --------------------------------------------------------------<Javascript/>-------------------------------------------------------- -->
	</body>
</html>
