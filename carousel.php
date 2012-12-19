
<link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'>
 <script type="text/javascript" src="assets/js/jquery.countdown.js"></script>
 <script type='text/javascript' src='assets/js/jquery.min.js'></script>
 <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
 <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
 <script type='text/javascript' src='assets/js/camera.min.js'></script>
 <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
 </script>
<style>
		body {
			margin: 0;
			padding: 0;
		}
		a {
			color: #09f;
		}
		a:hover {
			text-decoration: none;
		}
		#back_to_camera {
			clear: both;
			display: block;
			height: 80px;
			line-height: 40px;
			padding: 20px;
		}
		.fluid_container {
			margin: 0 auto;
			max-width: 1000px;
			width: 50%;
		}
</style>


<div class="row-fluid carousel">
	<div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="assets/images/carousel/slides/thumbs/bridge.jpg" data-src="assets/images/carousel/slides/bridge.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
            </div>
            <div data-thumb="assets/images/carousel/slides/thumbs/leaf.jpg" data-src="assets/images/carousel/slides/leaf.jpg">
                <div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div>
            </div>
            <div data-thumb="assets/images/carousel/slides/thumbs/road.jpg" data-src="assets/images/carousel/slides/road.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
            <div data-thumb="assets/images/carousel/slides/thumbs/sea.jpg" data-src="assets/images/carousel/slides/sea.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                </div>
            </div>
            <div data-thumb="assets/images/carousel/slides/thumbs/shelter.jpg" data-src="assets/images/carousel/slides/shelter.jpg">
                <div class="camera_caption fadeFromBottom">
                    It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
                </div>
            </div>
            <div data-thumb="assets/images/carousel/slides/thumbs/tree.jpg" data-src="assets/images/carousel/slides/tree.jpg">
                <div class="camera_caption fadeFromBottom">
                    Different color skins and layouts available, <em>fullscreen ready too</em>
                </div>
            </div>
        </div><!-- #camera_wrap_1 -->
	</div>
</div>
