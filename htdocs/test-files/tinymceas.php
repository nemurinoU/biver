<script src="https://cdn.tiny.cloud/1/rn2h2fl80m2ock2nsjykysdwutc8c1ghjynld4tllbtpkd82/tinymce/5/tinymce.min.js"></script>
 		<script>
 			tinymce.init({
 				selector: "p.p-3",
 				plugins: "save",
  				toolbar: "save",
   				menubar: false,
 				inline: true,
 				save_onsavecallback: function () { 
 					$.ajax({
   						url: 'save.php?url=' + window.location.href + '&id=' + tinymce.activeEditor.id + '&pathname=' + $(location).attr('pathname') + '&content=' + tinymce.activeEditor.getContent(),
   						success: function (response) {
   							console.log(response);
   						}
					});
 				}
 			});
 		</script>