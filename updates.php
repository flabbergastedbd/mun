
<head>
<link rel="stylesheet" type="text/css" href="assets/css/updates.css" media="screen"/>
<script type="text/javascript" src="assets/js/jquery2.min.js"></script>
<script type="text/javascript" src="assets/js/featurify.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$("#sample1").featurify({pause:3333});

	$("#sample2").featurify({
		directionIn : 1,
		directionOut:1,
		pause:3333
	});
});
</script>
</head>

<body>

<div id="sample2" class="sample" >
	<ul style="list-style-type:none; font-style:bold; font-size: 150%;">
		<li>Update 1</li>
		<li>Update 2</li>
		<li>Update 3</li>
	</ul>
</div>

<div id="sample1" class="sample">
	<ul style="list-style-type:none;">
		<li>Something Something Something Something Something Something Something Something </br> Something Something Something Something Something Something Something Something </br></li>
		<li>Another thing Another thing Another thing Another thing Another thing Another thing Another thing Another thing </br> Another thing Another thing Another thing Another thing Another thing Another thing Another thing Another thing </br></li>
		<li>Ultimate thing Ultimate thing Ultimate thing Ultimate thing Ultimate thing Ultimate thing Ultimate thing Ultimate thing </br> Ultimate thing Ultimate thing Ultimate thing Ultimate thing Ultimate thing Ultimate thing Ultimate thing Ultimate thing </br></li>
	</ul>
</div>

</body>
