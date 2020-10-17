<div class="container-fluid padding">
	<div class="row padding">
			<div class="col-xs-12 col-sm-12 col-md-6"></div>
			<div class="col-xs-12 col-sm-12 col-md-6"></div>
		</div>
</div>
<footer class="page-footer container-fluid padding px-0 pt-3 pb-0 text-center">
			
		<div class="container-fluid padding">
			<div class="row padding  align-items-center text5">
				<div class="col-xs-12 col-sm-12 col-md-6 rightFooter mb-0 pb-0">
					<div class="rightFootSpace px-3">
						<p style="font-weight: 700">CONTACT US</p>
						<p>
							<span style="font-weight: 700">Email Address</span><br>
							hello@reakkygreatsite.com
						</p>
						<p>
							<span style="font-weight: 700">Phone Number</span><br>
							(123) 456 7890
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 leftFooter">
					<div class="leftFootSpace px-3">
						<address class="footerfont mx-2 my-auto d-block">
							Center for Research in Science Technology <br>
							Pawing, Palo, Leyte <br> 
							6501 <br>
							Philippines <br>
						</address> 
					</div>
				</div>
			</div>
		</div>
		<p class="mt-4 px-3 text5">All data will be in the public domain unless otherwise stated. </p>

		<p style="background-color: #010d2c" class="m-0 p-2"><span class="text-muted">@ 2020 Copyright:</span> BiVER</p>
	</footer>

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
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
	    modal.style.display = "block";
	    modalImg.src = this.src;
	    captionText.innerHTML = this.alt;
	  }
	}

	var span = document.getElementsByClassName("modal")[0];

	span.onclick = function() {
	  modal.style.display = "none";
	}

</script>