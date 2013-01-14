
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
            <div data-thumb="assets/images/carousel/slides/thumbs/mun1.jpg" data-src="assets/images/carousel/slides/mun1.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>
            <div data-thumb="assets/images/carousel/slides/thumbs/mun2.jpg" data-src="assets/images/carousel/slides/mun2.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>
            <div data-thumb="assets/images/carousel/slides/thumbs/mun3.jpg" data-src="assets/images/carousel/slides/mun3.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>
            <div data-thumb="assets/images/carousel/slides/thumbs/mun4.jpg" data-src="assets/images/carousel/slides/mun4.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>
            <div data-thumb="assets/images/carousel/slides/thumbs/mun5.jpg" data-src="assets/images/carousel/slides/mun5.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>
            <div data-thumb="assets/images/carousel/slides/thumbs/mun6.jpg" data-src="assets/images/carousel/slides/mun6.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>
        </div><!-- #camera_wrap_1 -->
	</div>
</div>
