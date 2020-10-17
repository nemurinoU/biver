	<!-- ------------------------------------------------------------<Bootstrap CDN>------------------------------------------------------- -->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="nailthumb/jquery.nailthumb.1.1.min.js"></script>
	<link rel="stylesheet" href="nailthumb/jquery.nailthumb.1.1.min.css">
 	<script src="lazyload/lazyload.min.js"></script>               
	<!-- ------------------------------------------------------------<Bootstrap CDN/>------------------------------------------------------ -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<!-- -----------------------------------------------------------<Fonts and Icons>------------------------------------------------------ -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&display=swap" rel="stylesheet">
	<!-- -----------------------------------------------------------<Fonts and Icons/>----------------------------------------------------- -->
	<!-- ----------------------------------------------------------<Icon Header & Styling>-------------------------------------------------- -->
	<link href="style.css" rel="stylesheet">
	<!-- ---------------------------------------------------------<Icon Header & Styling/>-------------------------------------------------- -->
	<script src="https://cdn.tiny.cloud/1/rn2h2fl80m2ock2nsjykysdwutc8c1ghjynld4tllbtpkd82/tinymce/5/tinymce.min.js"></script>
 		<script>
			tinymce.init({
			  selector: 'textarea#full-featured-non-premium',

			  images_upload_url: 'postacceptor.php',
			  automatic_uploads: true,
			  
			  
			  
			  plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons  ',
			  imagetools_cors_hosts: ['picsum.photos'],
			  menubar: 'file edit view insert format tools table help',
			  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
			  toolbar_sticky: true,
			  autosave_ask_before_unload: true,
			  autosave_interval: "30s",
			  autosave_prefix: "{path}{query}-{id}-",
			  autosave_restore_when_empty: false,
			  entity_encoding : "named",
			  autosave_retention: "2m",
			  image_advtab: true,


			  content_css: [
			    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			    '//www.tiny.cloud/css/codepen.min.css'
			  ],
			  link_list: [
			    { title: 'My page 1', value: 'http://www.tinymce.com' },
			    { title: 'My page 2', value: 'http://www.moxiecode.com' }
			  ],
			  image_list: [
			    { title: 'My page 1', value: 'http://www.tinymce.com' },
			    { title: 'My page 2', value: 'http://www.moxiecode.com' }
			  ],
			  image_class_list: [
				{title: 'None', value: 'nailthumb myImages'},
			  ],
			  importcss_append: true,
			  height: 400,
			  file_picker_callback: function (callback, value, meta) {
			    /* Provide file and text for the link dialog */
			    if (meta.filetype === 'file') {
			      callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
			    }

			    /* Provide image and alt text for the image dialog */
			    if (meta.filetype === 'image') {
			      callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
			    }

			    /* Provide alternative source and posted for the media dialog */
			    if (meta.filetype === 'media') {
			      callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
			    }
			  },
			  templates: [
			        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
			    { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
			    { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
			  ],
			  template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
			  template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
			  height: 600,
			  image_caption: true,
			  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
			  noneditable_noneditable_class: "mceNonEditable",
			  toolbar_drawer: 'sliding',
			  contextmenu: "link image imagetools table",
			 });
 		</script>