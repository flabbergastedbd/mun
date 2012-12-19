<!DOCTYPE html>
<html>
	<head> 	 
		<script type="text/javascript" src="assets/js/jquery.js"></script>
	</head>
	<title>IIT-BHU Model United Nations</title>
	<body>
		<?php require ('header.php');?>
		<?php if (!isset($_GET['page'])){ require('carousel.php'); }?>
		<div class="row-fluid container">
			<div class="span1">
			</div>
			<div class="span7">
				<div class="content">
					<?php 
						if (isset($_GET['page'])){
							switch($_GET['page'])
							{
								case 'regd':
									require('registerD.php');
									break;
								case 'rege':
									require('registerE.php');
									break;
								case 'aboutus':
									require('aboutus.php');
									break;	
								case 'committees':
									require('committees.php');
									break;								
								case 'techres':
									require('technicalres.php');
									break;
								case 'travelplan':
									require('travelplan.php');
									break;
								case 'team':
									require('team.php');
									break;
							}
						}
						else {require('home.php'); }
					?>
				</div>
			</div>
		<?php require('widgets.php'); ?>
		</div>
	</body>
</html>
