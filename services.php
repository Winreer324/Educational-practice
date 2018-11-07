<?php
	include "index.php";

?>

	<div id="services" class="card mr-5 ml-5 mb-5" style="margin-top: 150px">
		<div class=" max-lg-5">
			<div class="container-fluid pt-3">
				<div class="d-flex justify-content-end border=buttom border-primary pb-3">
					<h4 class="mr-auto text-primary pl-3">Услуги</h4>
					<buttom class="btn blue-gradient btn-sm my-0 p w-0 mr-3 btn_creat">Добавить</buttom>
				</div>
			</div>
		</div>
	</div>
	<hr class="hr ml-5 mr-5 mb-4 blue-gradient ">

	<!-- creat new services -->
	<div class="creat card mb-5">
		<div class="row"><p class="text-center text-primary mt-5 " style="margin-left: 600px; font-size:30px;">Введите данные</p></div>
		<div class="row  mr-0 pt-4">  
			<div class="item col-md-2">Дата посещения</div>
			<div class="item col-md-2">Услуга</div> 
		</div>
		<!--  -->
		<div class="row person creat_input  pt-4 pb-5 "> 
			<input class="item col-md-2 ml-5 " data-type="i" name="services_date_visit_id" type="text" placeholder="Дата посещения">
			<input class="item col-md-2 ml-5 " data-type="s" name="services" type="text" placeholder="Услуга"> 
			<div class="row ml-5 test">
				<button class="btn_creat_true border-primary blue-gradient btn">
					<i class="creat_check">add</i>
				</button>
				<button class="btn_creat_false ml-3 border-primary blue-gradient btn">
					<i class="creat_close_services">close</i>
				</button>
			</div>
		</div>
	</div>
	<!-- creat end -->

	<div id="person" class="card">
		<div class="row  mr-0 pt-4"> 
			<div class="item ml-5 col-md-2">#</div>
			<div class="item col-md-2">Дата посещения</div>
			<div class="item col-md-2">Услуга</div> 
		</div>
		<hr>
 
			<?php
                  $query = "SELECT * FROM services"; //записываем запрос на выборку данных
                  $queryResult = $connect->makeUnpreparedQuery($query); //выполняем запрос записываем ответ MySQL в $queryResult
                  $data = $connect->fetch($queryResult); //данные полученные из MySQL преабоазовываем в ассоциативный массив
                  for($i = 0, $count = sizeof($data); $i < $count; $i++) // выводим данные в виде строк HTML-таблицы 
                  {
                  	echo "
                  	<div class='row person input pt-4 pb-5 mr-0 ml-2'>
						<input class='item col-md-2 ml-3 id_id' data-type='i' name='id_services' type='text' placeholder='#' value='{$data[$i]['id_services']}'>
						<input class='item col-md-2 ml-4 ' data-type='i' name='services_date_visit_id' type='text' placeholder='' value='{$data[$i]['services_date_visit_id']}'>
						<input class='item col-md-2 ml-4 ' data-type='s' name='services' type='text' placeholder='Услуга' value='{$data[$i]['services']}'>    

						<div class='row ml-5 int'>
							<div class='show'>
								<button class='btn_change_edit border-primary blue-gradient btn ty'>
									<i class='fa fa-edit'></i> 
								</button>
								<button class='btn_delate ml-3 border-primary blue-gradient btn ty' data-table='services' data-id='{$data[$i]['id_services']}' >
									<i class='fa fa-trash'></i> 
								</button>
							</div>
							<div class='hide'>
								<button class='btn_change_check border-primary blue-gradient btn ty'  data-table='services' data-id='{$data[$i]['id_services']}' '> 
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