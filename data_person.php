<?php
	include "index.php";
	// $stmt = "DELETE FROM `data_person` WHERE `id_data_person`=50 ; ";
?>

	<div id="data_person" class="card mr-5 ml-5 mb-5" style="margin-top: 150px">
		<div class=" max-lg-5">
			<div class="container-fluid pt-3">
				<div class="d-flex justify-content-end border=buttom border-primary pb-3">
					<h4 class="mr-auto text-primary pl-3">Данные людей</h4>
					<buttom class=" btn blue-gradient btn-sm my-0 p w-0 mr-3 btn_creat">Добавить</buttom>
				</div>
			</div>
		</div>
	</div>
	<hr class="hr ml-5 mr-5 mb-4 blue-gradient ">
	
	<!-- creat new data -->
		<div class="creat card mb-5">
			<div class="row"><p class="text-center text-primary mt-5 " style="margin-left: 600px; font-size:30px;">Введите данные</p></div>
			<div class="row  mr-0 pt-4"> 
				<!-- <div class="item ml-5 col-md-2">#</div> -->
				<div class="item col-md-2">Имя</div>
				<div class="item col-md-2">Фамилия</div>
				<div class="item col-md-2">Отчество</div>
				<div class="item col-md-2">Телефон</div>
			</div>
			<!--  -->
			<div class="row person creat_input  pt-4 pb-5 ">
				<!-- <input class="item col-md-1 ml-5 " type="text" placeholder="#"> -->
				<input class="item col-md-2 ml-4 " data-type='s' name='Fname' type="text" placeholder="Имя">
				<input class="item col-md-2 ml-4 " data-type='s' name='Lname' type="text" placeholder="Фамилия">
				<input class="item col-md-2 ml-4 " data-type='s' name='Sname' type="text" placeholder="Отчество">
				<input class="item col-md-1 ml-4 " data-type='i' name='phone' type="text" placeholder="Телефон">
				<div class="row ml-5 test">
					<button class="btn_creat_true border-primary blue-gradient btn">
						<i class="creat_check">add</i>
					</button>
					<button class="btn_creat_false ml-3 border-primary blue-gradient btn">
						<i class="creat_close_data_person">close</i>
					</button>
				</div>
			</div>
		</div>
		<!-- creat end -->

	<div id="person" class="card mr-0">
		<div class="row  mr-0 pt-4"> 
			<div class="item ml-5 col-md-2">#</div>
			<div class="item col-md-2">Фамилия</div>
			<div class="item col-md-2">Имя</div> 
			<div class="item col-md-2">Отчество</div>
			<div class="item col-md-2">Телефон</div>
		</div>
		<hr>
		<!--  -->
		<!-- <div class="row person input pt-4 pb-5 mr-0"> -->
<!-- 
			<input class="item col-md-1 ml-5 " type="text" placeholder="#">
			<input class="item col-md-2 ml-4 " type="text" placeholder="Имя">
			<input class="item col-md-2 ml-4 " type="text" placeholder="Фамилия">
			<input class="item col-md-2 ml-4 " type="text" placeholder="Отчество">
			<input class="item col-md-1 ml-4 " type="text" placeholder="Телефон"> -->
			
				<?php
                  $query = "SELECT * FROM data_person"; //записываем запрос на выборку данных
                  $queryResult = $connect->makeUnpreparedQuery($query); //выполняем запрос записываем ответ MySQL в $queryResult
                  $data = $connect->fetch($queryResult); //данные полученные из MySQL преабоазовываем в ассоциативный массив
                  for($i = 0, $count = sizeof($data); $i < $count; $i++) // выводим данные в виде строк HTML-таблицы 
                  {
                  	echo "
                  	<div class='row person input pt-4 pb-5 mr-0'>
						<input class='item col-md ml-5 id_id'  data-type='i' name='id_data_person'  type='text' placeholder='#' value='{$data[$i]['id_data_person']}'>
						<input class='item col-md-2 ml-4 '  data-type='s' name='Lname' type='text' placeholder='Фамилия' value='{$data[$i]['Lname']}'>
						<input class='item col-md-2 ml-4 '  data-type='s' name='Fname' type='text' placeholder='Имя' value='{$data[$i]['Fname']}'> 
						<input class='item col-md-2 ml-4 '  data-type='s' name='Sname' type='text' placeholder='Отчество' value='{$data[$i]['Sname']}'>
						<input class='item col-md-2 ml-4 '  data-type='i' name='phone' type='text' placeholder='Телефон' value='{$data[$i]['phone']}' >     

						<div class='row ml-5 int'>
							<div class='show'>
								<button class='btn_change_edit border-primary blue-gradient btn ty  '>
									<i class='fa fa-edit'></i> 
								</button>
								<button class='btn_delate ml-3 border-primary blue-gradient btn ty data-table='data_person' data-id='{$data[$i]['id_data_person']}''>
									<i class='fa fa-trash'></i> 
								</button>
							</div>
							<div class='hide'>
								<button class='btn_change_check border-primary blue-gradient btn ty  data-table='data_person' data-id='{$data[$i]['id_data_person']}' '> 
									<i class='fa fa-check'></i>
								</button>
								<button class='btn_delate_close ml-3 border-primary blue-gradient btn ty'> 
									<i class='fa fa-close'></i>
								</button>
							</div>
						</div>

					</div>
                  	";                  
                  }
                 ?>
 
	</div>


<?php 
	include "footer.php";
?>