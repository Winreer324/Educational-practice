<?php
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>barbershop practika BD</title>
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <!-- style -->
  <style>
		.person{
			border:1px solid #000;
			position: relative;
			display: block;
			margin: 20px 4%;
			background: #BFC0FF;
			/*-webkit-box-shadow: -9px 10px 5px -5px rgba(0,0,0,0.75);
			-moz-box-shadow: -9px 10px 5px -5px rgba(0,0,0,0.75);
			box-shadow: -9px 10px 5px -5px rgba(0,0,0,0.75);*/
		}
		.img{
			width: 28%;
    		float: left; 
    		margin: 20% 0 0 11px;
		}
		img{
			width: 100px;
			height: 100px;
			display: block;
			border-radius: 100%;
		}
		/*.content{
			float: right;
			width: 60%;
		}*/
		input{
			margin: 10px 5px;
			width: 160px;
			display:inline-block;
			/*background: #D1BFFF;*/
		}
		/*.value{
			position: absolute;
		}
		.value1{top: 0;right: -60px;}
		.value2{top: 20px;right: -60px;}*/
		.searchInput{
			width: 200px;
			height: 40px;
			background: #fff;
			color: #000;
			border: 2px solid #000;
			padding: 2px;
			margin: 10px 40% ;
		}
		/*.logo{
			width: 300px;
			height: 150px;
			background: #eef;
			border: 1px solid #000;
			margin: 50px 0 30px 50px; 
		}*/
		.collapse{
			/*margin-left: 570px;*/
		}
		.collapse ul>li>a{
			padding-left: 30px;
		}
		.hr{
			width: 98%;
			margin: 10px 2%;
			height: 1px;
			background: #000;
		}
	</style>
  <!-- end -->
</head>
		
<body class="grey lighten-3">


		<main>
			<div class="nav">
				<div class="logo"></div>
				<nav class="navbar fixed-top navbar-expand-lg navbar-ligth white scrolling-navbar">
					<div class="container-fluid">
						<div class="">
							<a href="" class="navbar-brand waves-effect"><strong class="blue-text">Панель администратора</strong></a>
						</div>
						<div class="collapse navbar-collapse col-md-5">
							<ul class="nav nav-pills">
							  <li role="presentation" class="active"><a href="#">Home</a></li>
							  <li role="presentation"><a href="#">Profile</a></li>
							  <li role="presentation"><a href="#">Messages</a></li>
							  <li role="presentation"><a href="#">Messages2</a></li>
							  <li role="presentation"><a href="#">Messages3</a></li>
							</ul>
						</div>
					</div>
				</nav> 
				<div class="">
					 <div class="">
				        <h2>Детали</h2>  
				        <button>Edd</button>
				    </div>
				</div>
				<hr class=" hr">
			</div>
			<section>
			<div class="person">
				<!-- <div class="img">
					<img src="img/avatar.png" alt="альбина">
				</div> -->
				<div class="content">
					<input type="fname" placeholder="имя">
					<input type="lname" placeholder="фамилия">
					<input type="sname" placeholder="отчество">
					<input type="phone" placeholder="телефон">
					<input type="salary" placeholder="зарплата">
					<input type="position" placeholder="должность">
					<input type="who" placeholder="посититель/работник">
				</div>
				<button class="value value1">velue 1</button>
				<button class="value value2">velue 2</button>
			</div>
			<div class="person">
				<!-- <div class="img">
					<img src="img/avatar.png" alt="альбина">
				</div> -->
				<div class="content">
					<input type="fname" placeholder="имя">
					<input type="lname" placeholder="фамилия">
					<input type="sname" placeholder="отчество">
					<input type="phone" placeholder="телефон">
					<input type="salary" placeholder="зарплата">
					<input type="position" placeholder="должность">
					<input type="who" placeholder="посититель/работник">
				</div>
				<button class="value value1">velue 1</button>
				<button class="value value2">velue 2</button>
			</div>
			<div class="person">
				<!-- <div class="img">
					<img src="img/avatar.png" alt="альбина">
				</div> -->
				<div class="content">
					<input type="fname" placeholder="имя">
					<input type="lname" placeholder="фамилия">
					<input type="sname" placeholder="отчество">
					<input type="phone" placeholder="телефон">
					<input type="salary" placeholder="зарплата">
					<input type="position" placeholder="должность">
					<input type="who" placeholder="посититель/работник">
				</div>
				<button class="value value1">velue 1</button>
				<button class="value value2">velue 2</button>
			</div>
			<div class="person">
				<!-- <div class="img">
					<img src="img/avatar.png" alt="альбина">
				</div> -->
				<div class="content">
					<input type="fname" placeholder="имя">
					<input type="lname" placeholder="фамилия">
					<input type="sname" placeholder="отчество">
					<input type="phone" placeholder="телефон">
					<input type="salary" placeholder="зарплата">
					<input type="position" placeholder="должность">
					<input type="who" placeholder="посититель/работник">
				</div>
				<button class="value value1">velue 1</button>
				<button class="value value2">velue 2</button>
			</div>
			</section>
		</main>

   <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script> 
</body>
</html> 