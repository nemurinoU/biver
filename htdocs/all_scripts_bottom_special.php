
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Upload a file</h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
			</button>
			</div>
			<div class="modal-body">
				<?php
				$sql = "SELECT * FROM accounts WHERE username='$user'";
				$query = mysqli_query($con,$sql);
				$data = mysqli_fetch_array($query);
				$project = $data['project'];
				$access = $_SESSION['access'];
				$name = $data['first_name'].",".$data['middle_name'].",".$data['last_name'];
				echo "<form name=fileform method='post' class='form-horizontal mx-auto' action='insert-file.php' enctype='multipart/form-data'>
				<input type=text class='form-control mb-2' name=date value='".date('Y-m-d')."' hidden>
				<input type=text class='form-control mb-2' name=username value='$user' hidden>
				<input type=text class='form-control mb-2' name=project value='$project' hidden>
				<input type=text class='form-control mb-2' name=access value='$access' hidden>
				<input type=text class='form-control mb-2' name=name value='$name' hidden>
				<input type=file class='bg-muted form-control padding mb-2' name='uploaded_file'>
				<div class='row'><div class='col-xs-12 mx-auto'><br>
				<input type='submit' class='btn btn-success' value='Submit'></div></div>";
				echo "</form></div>";
				?>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>


<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
  		$('[data-toggle="tooltip"]').tooltip(); 
	});
	$(document).ready(function () {
		$("a").tooltip({
			'selector': '',
			'placement':'top',
			'container':'body'
			});
	});
	(function ($) {
		$(document).ready(function(){
			var counter = 0;
			$(".bnav").hide();
			$('.bnav').fadeIn();
			$( ".bnav" ).animate({ "max-height": "200px" }, "slow" );
		});
	}(jQuery));
</script>

<!--

	Lazyload Script and NailThumb

-->

<script type="text/javascript">
    var myLazyLoad = new LazyLoad({
   		elements_selector: "img",
    	load_delay: 300 //adjust according to use case
	});
    jQuery(document).ready(function() {
        jQuery('.nailthumb').nailthumb({width:100,height:100});
    });
</script>

<!--

	Modal Script

-->

<script type="text/javascript">
	// create references to the modal...
	var modal = document.getElementById('myModal');
	// to all images -- note I'm using a class!
	var images = document.getElementsByClassName('myImages');
	// the image in the modal
	var modalImg = document.getElementById("img01");
	// and the caption in the modal
	var captionText = document.getElementById("caption");

	// Go through all of the images with our custom class
	for (var i = 0; i < images.length; i++) {
	  var img = images[i];
	  // and attach our click listener for this image.
	  img.onclick = function(evt) {
	    console.log(evt);
	    modal.style.display = "flex";
	    modalImg.src = this.src;
	    captionText.innerHTML = this.alt;
	  }
	}

	var span = document.getElementsByClassName("modal")[0];

	span.onclick = function() {
	  modal.style.display = "none";
	}

</script>