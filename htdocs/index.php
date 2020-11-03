<?php
	/***
	#Connects to database and starts a session
	$con=mysqli_connect("210.213.193.68", "root", "BIVERproject18");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		mysqli_select_db($con, 'str_database');
		session_start();
	}***/
?>

<!DOCTYPE html>
<html>
	<head>
		<title>BiVER</title>
		
		<!---Character set, adjust to viewing device--->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		
		<!---Website Icon and External Stylesheet--->
		<link rel="icon" href="favicon.ico" type="image/x-icon">	
		<link rel="stylesheet" href="static/css/homepage.css?ver=<?php echo rand(111,999)?>">

		<style>
			/*A quick CSS reset*/
			* {
		        margin: 0;
		        padding: 0;
		        border: 0;
		        outline: 0;
		        font-size: 100%;
		        vertical-align: baseline;
		        background: transparent;
    		}
		</style>

	</head>

	<body>
        <?php
        	#Calls the navigation bar, used in multiple pages
        	include('navbar.php'); 
       	?>
        
        <!---Main Image Menu w/ Search Bar Section--->
		<div id="body-top">
			<div id="body-top-container">
				<div id="body-top-left">
					<h1>BIODIVERSITY AND VULNERABLE ECOSYSTEMS RESEARCH</h1>
					<p>Philippine-native species data. At your fingertips.</p>
					<form id="main-search">
						<input type="image" src="static/img/icons/search2.png" alt="Submit Form" />
						<input type="text">
					</form>
				</div>
					
				<iframe src="https://www.youtube.com/embed/rdXe-uzzyHg" allowfullscreen></iframe>

			</div>
			<div id="body-top-credit">
				<p>Cuatro Islas. Photo property of BiVER Project. &copy; BiVER 2020</p>
			</div>
		</div>

		<!---Home Page News and Announcements Section--->
		<div class="body-bottom">
			<!---News on the Side--->
			<div class="body-bottom-container">
				<article class="body-bottom-left">
					<h1>NEWS</h1>
					<article class="news-left">
						<a href="#">
							<div class="news-thumb" style="background: url('static/img/background/cuatroislas.jpg');"></div>
							<div class="news-info">
						        <h2>How many alien civilizations are out there? A new galactic survey holds a clue. How many alien civilizations are out there? A new galactic survey holds a clue.</h2>
						        <p>November 4, 2020</p>
					    	</div>
				    	</a>
				    </article>

				    <article class="news-left">
				    	<div class="news-thumb" style="background: url('static/img/background/cuatroislas.jpg');"></div>
				        <div class="news-info">
					        <h2>How many alien civilizations are out there? A new galactic survey holds a clue. How many alien civilizations are out there? A new galactic survey holds a clue.</h2>
					        <p>November 4, 2020</p>
				    	</div>
				    </article>

				    <article class="news-left">
				    	<div class="news-thumb" style="background: url('static/img/background/cuatroislas.jpg');"></div>
				        <div class="news-info">
					        <h2>How many alien civilizations are out there? A new galactic survey holds a clue. How many alien civilizations are out there? A new galactic survey holds a clue.</h2>
					        <p>November 4, 2020</p>
				    	</div>
				    </article>
				</article>

				<article class="body-bottom-right">
				    <h1>ACTIVITIES</h1>
	               <article class="news-right">
	               		<a href="#">
		               		<div class="news-thumb" style="background: linear-gradient(to top, rgba(0,0,0,1) 0%,rgba(0,0,0,0) 70%), url('static/img/background/cuatroislas.jpg');"></div>
		               		
		               		<div class="bottom-left">
		               			 <p>November 4, 2020</p>
		               			 <h2>The effect of pollution on people: Provide examples of how people have been changing in relation to the increase or decrease in environmental pollution</h2>
		               		</div>
	               		</a>
				    </article>

				    <article class="news-right-sub" style="margin-right: 1.25%">
				    	<a href="#">
					        <div class="news-thumb" style="background: linear-gradient(to top, rgba(0,0,0,1) 0%,rgba(0,0,0,0) 70%), url('static/img/background/cuatroislas.jpg');"></div>

					        <div class="bottom-left">
		               			 <p>November 4, 2020</p>
		               			 <h2>The effect of pollution on people: Provide examples of how people have been changing in relation to the increase or decrease in environmental pollution</h2>
		               		</div>
		               	</a>
				    </article>

				    <article class="news-right-sub" style="margin-left: 1.25%">
				    	<a href="#">
					    	<div class="news-thumb" style="background: linear-gradient(to top, rgba(0,0,0,1) 0%,rgba(0,0,0,0) 70%), url('static/img/background/cuatroislas.jpg');"></div>

					    	<div class="bottom-left">
		               			 <p>November 4, 2020</p>
		               			 <h2>The effect of pollution on people: Provide examples of how people have been changing in relation to the increase or decrease in environmental pollution</h2>
		               		</div>
		               	</a>
				    </article>
				</article>
			</div>
		</div>


		<!---Will move this to all_scripts_bottom.php soon (BEN)--->
		<footer>
			<!--- DISCONTINUED DUE TO SLOW LOADING, WILL RETURN ONCE LAZY LOADING IMPLEMENTED
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
