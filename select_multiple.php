<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<style type="text/css">
		#division {
		  width: 100%;
		}
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
</head>
<body>
	<form method="post">
		<select id="division" name="division_name[]"></select>
		<input type="submit" name="push" value="Kirim">
		
	</form>

	<?php 

	if(isset($_POST['push'])){
		echo "<pre>";
		print_r($_POST['division_name']);
		echo "</pre>";
	}

	?>

<script type="text/javascript">
	var $t = $('#division');

	var data_selected =["Manager", "Founder"];
	var data_division =["Manager", "Founder", "IT","HRD"];

	$t.select2({
		  multiple: true,
		  tags: true,
		  data: data_division,
		  matcher: function(params, option) {
		    var selected = $t.select2('data');
		    var optionSelected = selected.some(function(item) {
		      return (item.text === option.text);
		    });
		    if (optionSelected) return false;
		    return option;
		  }
	});

	$t.select2({
		tags :true
	}).val(data_selected).trigger("change");
</script>

</body>
</html>