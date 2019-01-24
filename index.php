<html>
	<head>
		<title>TR-Load</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="c02.js"></script>
		<style type="text/css">
			.row-center
			{
				text-align:center;
			}
			body 
			{
				font-family: 'Prompt', sans-serif;
			}
			iframe 
			{
				width: 100%;
				height: 100%;
			}
			.slidecontainer 
			{
				width: 100%;
			}
			.slider 
			{
			  -webkit-appearance: none;
			  width: 100%;
			  height: 25px;
			  background: #d3d3d3;
			  outline: none;
			  opacity: 0.7;
			  -webkit-transition: .2s;
			  transition: opacity .2s;
			}
			.slider:hover 
			{
				opacity: 1;
			}
			.slider::-webkit-slider-thumb 
			{
			  -webkit-appearance: none;
			  appearance: none;
			  width: 25px;
			  height: 25px;
			  background: #4CAF50;
			  cursor: pointer;
			}
			.slider::-moz-range-thumb 
			{
			  width: 25px;
			  height: 25px;
			  background: #4CAF50;
			  cursor: pointer;
			}
		</style>
	</head>
	<body>
		<?php
			require('connect-db.php');
			$keyword = $_GET["keyword"];
			if(isset($keyword))
			{
				$spl_search ="SELECT * FROM tbl_tr-load WHERE pea LIKE '%".$keyword."%'";
				$query_search = mysqli_query($conn,$sql_search);
			}
		?>
		<div class="container-fluid" >
			<div class="row row-center">
				<div class="col-lg-4 offset-lg-4" >
					<h1>Tranformer Load</h1>
				</div>
			</div>
		</div>
		<div class="container-fluid" >
			<div class="row">
				<div class="col-lg-4 offset-lg-4 well" >
					<form action="https://tr-load-ptm.herokuapp.com/" method="get">
						<div class="form-group">
							<label for="usr">PEA no.:</label>
							<input type="text" class="form-control" id="usr" name="keyword">
						</div>
						<button type="submit" class="btn btn-primary btn-block">ค้นหา</button>
					</form>
				</div>
			</div>
		</div>
		<div class="container-fluid" >
			<div class="row">
				<div class="col-lg-4 offset-lg-4 well" >
					<div class="list-group">
						<?php
						while($objsearch = mysqli_fetch_array(query_search))
						{
							echo "PEA no.".$objsearch["pea"]."<br>";
							echo "Location".$objsearch["location"]."<br>";
						}
					</div>
				</div>
			</div>
		</div>
	</body>
</html>