<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hasheo</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	
</head>
<body>
	<div class="ROW">
		<div class="col-xs-12">
			<p><br></p>
			<div class="col-xs-6">
				<label  class="control-label"> Pass</label>
				<div class="form-group">
					<textarea class="form-control" cols="1" rows="25" id="pass"></textarea>
				</div>	
			</div>
			<div class="col-xs-6">
				<label  class="control-label"> Hash</label>
				<div class="form-group">
					<textarea class="form-control" cols="" rows="25" id="hash"></textarea>
				</div>	
			</div>	
			<div class="col-xs-12">
				<div class="col-xs-4">
					<label for="numero"> Número de hashes aleatorio
						<input type="text" class="form-control" id="numero" name="numero">
					</label>
				</div>
				<div class="col-xs-offset-1 col-xs-4">
					<button class="btn btn-info" onclick="GetHash()">Hashear</button>
				</div>
				<!--
				<div class="col-xs-offset-2 col-xs-4">
					<button class="btn btn-info" onclick="GetDeHash()">DesHashear</button>
				</div>
				-->
			</div>
		</div>
		

<script  src="jquery.min.js"></script>
<script  src="bootstrap/js/bootstrap.js"></script>
<script>
function GetHash() {
	var arreglo=$.trim($('#pass').val());
		arreglo= arreglo.split("\n");
	var numero=$.trim($("#numero").val());
	$.post("Hasheo.php",{arreglo:arreglo,numero:numero}).done(function(data) {
			$("#hash").val("");
			$("#hash").val(data);
	});
}

function GetDeHash() {
	var arreglo=$.trim($('#hash').val());
		arreglo= arreglo.split("\n");
	$.post("DeHasheo.php",{arreglo:arreglo}).done(function(data) {
			$("#pass").val("");
			$("#pass").val(data);
	});
}

</script>
</body>
</html>