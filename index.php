<?php

require_once 'php/dbClass.php'; //подключаем файл с классом подключения к БД
$connect = new DBConnection(); //создаём экземпляр класса подключения к БД

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Admin Page Barbershop</title>
	<!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

</head>
		
<body class="grey lighten-2 mr-0">
	<section class="mr-0">

		<nav class="navbar fixed-top navbar-expand-lg navbar-ligth white scrolling-navbar mb-5">
			<div class="container-fluid pt-3 pb-3">
				<a href="index.php" class="navbar-brand waves-effect"><strong class="text-primary">Панель администратора</strong></a>
				<div class="nav_my collapse navbar-collapse col-md-5">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="data_person.php" class="nav-link waves-effect">Данные людей</a>
						</li>
						<li class="nav-item">
							<a href="date_visit.php" class="nav-link waves-effect">Посещение</a>
						</li>
						<li class="nav-item">
							<a href="services.php" class="nav-link waves-effect">Услуги</a>
						</li>
						<li class="nav-item">
							<a href="staff.php" class="nav-link waves-effect">Сотрудники</a>
						</li>
						<li class="nav-item">
							<a href="visitors.php" class="nav-link waves-effect">Посетители</a>
						</li>
					</ul>
				</div>
			</div> 
		</nav>




</section>

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