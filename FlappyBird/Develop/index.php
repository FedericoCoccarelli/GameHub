<!DOCTYPE html>
<html>
<head>
	<title>Esempio di bottoni PHP</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$("button").click(function() {
				var file = $(this).attr("value");
				$("#risultato").load(file);
			});
		});
	</script>                  
</head>
<body>
	<button value="listfiles.php">List Files</button>
	<button value="upload.php">Upload</button>
	<button value="form.php">Update Form</button>
	<button value="info.php">Info</button>
	<button value="phpinfo.php">PHP Info</button>
	<div id="risultato"></div>
</body>
</html>
