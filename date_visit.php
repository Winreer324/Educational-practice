<?php
	include "index.php";

?>

	<div id="date_visit" class="card mr-5 ml-5 mb-5" style="margin-top: 150px">
		<div class=" max-lg-5">
			<div class="container-fluid pt-3">
				<div class="d-flex justify-content-end border=buttom border-primary pb-3">
					<h4 class="mr-auto text-primary pl-3">Дата посещения</h4>
					<buttom class="btn blue-gradient btn-sm my-0 p w-0 mr-3 btn_creat">Добавить</buttom>
				</div>
			</div>
		</div>
	</div>
	<hr class="hr ml-5 mr-5 mb-4 blue-gradient ">

	<!-- creat new data_visit -->
	<div class="creat card mb-5">
		<div class="row"><p class="text-center text-primary mt-5 " style="margin-left: 600px; font-size:30px;">Введите данные</p></div>
		<div class="row  mr-0 pt-4"> 
			<!-- <div class="item ml-5 col-md-2">#</div> -->
			<div class="item col-md-2">Пользователь</div>
			<div class="item col-md-2">Дата посещения</div>
		</div>
		<!--  -->
		<div class="row person creat_input  pt-4 pb-5 ">
			<!-- <input class="item col-md-1 ml-5 " type="text" placeholder="#"> -->
			<input class="item col-md-2 ml-4 " data-type='i' name="visitors_id" type="text" placeholder="Пользователь">
			<input class="item col-md-2 ml-4 " data-type='s' name="date" type="date" placeholder="Дата посещения"> 
			<div class="row ml-5 test">
				<button class="btn_creat_true border-primary blue-gradient btn">
					<i class="creat_check">add</i>
				</button>
				<button class="btn_creat_false ml-3 border-primary blue-gradient btn">
					<i class="creat_close_data_visit">close</i>
				</button>
			</div>
		</div>
	</div>
	<!-- creat end -->

	<div id="person" class="card">
		<div class="row  mr-0 pt-4"> 
			<div class="item ml-5 col-md-2">#</div>
			<div class="item col-md-2">Пользователь</div>
			<div class="item col-md-2">Дата посещения</div> 
		</div>
		<hr> 

				<?php
                  $query = "SELECT * FROM date_visit"; //записываем запрос на выборку данных
                  $queryResult = $connect->makeUnpreparedQuery($query); //выполняем запрос записываем ответ MySQL в $queryResult
                  $data = $connect->fetch($queryResult); //данные полученные из MySQL преабоазовываем в ассоциативный массив
                  for($i = 0, $count = sizeof($data); $i < $count; $i++) // выводим данные в виде строк HTML-таблицы 
                  {
                  	echo "
                  	<div class='row person input pt-4 pb-5 mr-0 ml-2'>
						<input class='item col-md-2 ml-3 id_id ' data-type='i' name='id_date_visit' type='text' placeholder='#' value='{$data[$i]['id_date_visit']}'>
						<input class='item col-md-2 ml-4 ' data-type='i' name='visitors_id' type='text' placeholder='Пользователь' value='{$data[$i]['visitors_id']}'>
						<input class='item col-md-2 ml-4 ' data-type='s' name='date' type='date' placeholder='ДДата посещения' value='{$data[$i]['date']}'>    

						<div class='row ml-5 int'>
							<div class='show'>
								<button class='btn_change_edit border-primary blue-gradient btn ty'>
									<i class='fa fa-edit'></i> 
								</button>
								<button class='btn_delate ml-3 border-primary blue-gradient btn ty' >
									<i class='fa fa-trash'></i> 
								</button>
							</div>
							<div class='hide'>
								<button class='btn_change_check border-primary blue-gradient btn ty'> 
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
	</div>

<?php 
	include "footer.php";
?>