<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>
		Biver
	</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- ------------------------------------------------------------<Bootstrap CDN>------------------------------------------------------- -->
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
		<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
		
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>



		
    	<script src="nailthumb/jquery.nailthumb.1.1.min.js"></script>
    	<link rel="stylesheet" href="nailthumb/jquery.nailthumb.1.1.min.css">
 		<script src="lazyload/lazyload.min.js"></script>               
 		
 		<script src="https://cdn.tiny.cloud/1/rn2h2fl80m2ock2nsjykysdwutc8c1ghjynld4tllbtpkd82/tinymce/5/tinymce.min.js"></script>
 		<script>
 			tinymce.init({
 				selector: "div.myeditablediv",
 				plugins: "save",
  				toolbar: "save",
   				menubar: false,
 				inline: true,
 				save_onsavecallback: function () { 
 					$.ajax({
   						url: 'save.php?url=' + window.location.href + '&id=' + tinymce.activeEditor.id + '&pathname=' + $(location).attr('pathname') + '&content=' + tinymce.activeEditor.getContent({format: 'text'}),
   						type: "post",
   						success: function (response) {
   							console.log(response);
   						}
					});
 				}
 			});
 		</script>
		<!-- ------------------------------------------------------------<Bootstrap CDN/>------------------------------------------------------ -->

		<!-- -----------------------------------------------------------<Fonts and Icons>------------------------------------------------------ -->

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

		<!-- -----------------------------------------------------------<Fonts and Icons/>----------------------------------------------------- -->

		<!-- ----------------------------------------------------------<Icon Header & Styling>-------------------------------------------------- -->

		<link href="style.css" rel="stylesheet">

		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<link rel="shortcut icon" href="favicon.ico" type="image/ico">

		<!-- ---------------------------------------------------------<Icon Header & Styling/>-------------------------------------------------- -->
		<style type="text/css">
			.myeditablediv{
				margin: 50px;
			}
		</style>
</head>
<body>
	<form method="post"><div class="myeditablediv" id="1">asdasdasd</div></form>

	<form><div class="myeditablediv" id="ba">This is some new textasdasdsad</div></form>
</body>
<script type="text/javascript">
	$(function() {                       //run when the DOM is ready
  		$(".myeditablediv").click(function() {  //use a class, since your ID gets mangled
    		$(this).addClass("active");      //add the class to the clicked element
  		});
	});
</script>
</html>
