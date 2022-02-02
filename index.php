<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css" media="screen">
		div{
			border: 1px solid #d3d3d3;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm">
			One of three columns
		</div>
		<div class="col-sm">
			One of three columns
		</div>
		<div class="col-sm">
			One of three columns
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col">
			1 of 2
		</div>
		<div class="col">
			2 of 2
		</div>
	</div>
	<div class="row">
		<div class="col">
			1 of 3
		</div>
		<div class="col">
			2 of 3
		</div>
		<div class="col">
			3 of 3
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			1 of 3
		</div>
		<div class="col-6">
			2 of 3 (wider)
		</div>
		<div class="col">
			3 of 3
		</div>
	</div>
	<div class="row">
		<div class="col">
			1 of 3
		</div>
		<div class="col-5">
			2 of 3 (wider)
		</div>
		<div class="col">
			3 of 3
		</div>
	</div>
</div>

<!-- Stack the columns on mobile by making one full-width and the other half-width -->
<div class="row">
	<div class="col-12 col-md-8">.col-12 .col-md-8</div>
	<div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
	<div class="col-6 col-md-4">.col-6 .col-md-4</div>
	<div class="col-6 col-md-4">.col-6 .col-md-4</div>
	<div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>

<!-- Columns are always 50% wide, on mobile and desktop -->
<div class="row">
	<div class="col-6">.col-6</div>
	<div class="col-6">.col-6</div>
</div>

<div class="row no-gutters">
  <div class="col-12 col-sm-6 col-md-8">.col-12 .col-sm-6 .col-md-8</div>
  <div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			First, but unordered
		</div>
		<div class="col order-12">
			Second, but last
		</div>
		<div class="col order-1">
			Third, but first
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col order-last">
			First, but last
		</div>
		<div class="col">
			Second, but unordered
		</div>
		<div class="col order-first">
			Third, but first
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>