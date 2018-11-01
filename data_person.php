<?php
	include "index.php";
?>

	<div class="card mr-5 ml-5 mb-5" style="margin-top: 150px">
		<div class=" max-lg-5">
			<div class="container-fluid pt-3">
				<div class="d-flex justify-content-end border=buttom border-primary pb-3">
					<h4 class="mr-auto text-primary pl-3">Данные людей</h4>
					<buttom class=" btn blue-gradient btn-sm my-0 p w-0 mr-3 btn_creat_data_person">Добавить</buttom>
				</div>
			</div>
		</div>
	</div>
	<hr class="hr ml-5 mr-5 mb-4 blue-gradient ">

	<!-- creat new data -->
		<div class="creat card mb-5">
			<div class="row"><p class="text-center text-primary mt-5 " style="margin-left: 600px; font-size:30px;">Введите данные</p></div>
			<div class="row  mr-0 pt-4"> 
				<div class="item ml-5 col-md-2">#</div>
				<div class="item col-md-2">Имя</div>
				<div class="item col-md-2">Фамилия</div>
				<div class="item col-md-2">Отчество</div>
				<div class="item col-md-2">Телефон</div>
			</div>
			<!--  -->
			<div class="row person creat_input  pt-4 pb-5 ">
				<input class="item col-md-1 ml-5 " type="text" placeholder="#">
				<input class="item col-md-2 ml-4 " type="text" placeholder="Имя">
				<input class="item col-md-2 ml-4 " type="text" placeholder="Фамилия">
				<input class="item col-md-2 ml-4 " type="text" placeholder="Отчество">
				<input class="item col-md-1 ml-4 " type="text" placeholder="Телефон">
				<div class="row ml-5 test">
					<button class="btn_creat_data_person_true border-primary blue-gradient btn">
						<i class="creat_check">add</i>
					</button>
					<button class="btn_creat_data_person_false ml-3 border-primary blue-gradient btn">
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

			<!-- <input class="item col-md-1 ml-5 " type="text" placeholder="#">
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
						<input class='item col-md ml-5 ' type='text' placeholder='#' value='{$data[$i]['id_data_person']}'>
						<input class='item col-md-2 ml-4 ' type='text' placeholder='Фамилия' value='{$data[$i]['Lname']}'>
						<input class='item col-md-2 ml-4 ' type='text' placeholder='Имя' value='{$data[$i]['Fname']}'> 
						<input class='item col-md-2 ml-4 ' type='text' placeholder='Отчество' value='{$data[$i]['Sname']}'>
						<input class='item col-md-2 ml-4 ' type='text' placeholder='Телефон' value='{$data[$i]['phone']}' >     

						<div class='row ml-5 int'>
							<div class='show'>
								<button class='btn_change_false border-primary blue-gradient btn ty'>
									<i class='fa fa-edit'></i> 
								</button>
								<button class='btn_delate ml-3 border-primary blue-gradient btn ty'>
									<i class='fa fa-trash'></i> 
								</button>
							</div>
							<div class='hide'>
								<button class='btn_change_false border-primary blue-gradient btn ty'> 
									<i class='fa fa-check'></i>
								</button>
								<button class='btn_delate ml-3 border-primary blue-gradient btn ty'> 
									<i class='fa fa-close'></i>
								</button>
							</div>
						</div>

					</div>
                  	";                  
                  }
                 ?>
<!--                   	<tr>
			      		<th scope='row'>{$data[$i]['id_data_person']}</th>
			      		<td><input class='form-control' name='name' disabled type='text' value='{$data[$i]['Fname']}'></td>
			      		<td><input class='form-control' name='login' disabled type='text' value='{$data[$i]['Lname']}'></td>
			      		<td><input class='form-control' name='password' disabled type='text' value='{$data[$i]['Sname']}'></td>
			      		<td><input class='form-control' name='password' disabled type='text' value='{$data[$i]['phone']}'></td>
			      		<td><div class='icons-ed-del'><i data-opType='update' class='btn btn-light mr-2 far fa-edit fa-lg' style='color: #339af0;'></i><i data-opType='delete' class='btn btn-light far fa-trash-alt fa-lg' style='color: #ff6b6b;'></i></div>
			      		</td>
			    	</tr> -->
			<!-- <div class="row ml-5 int">
				<div class="show">
					<button class="btn_change_false border-primary blue-gradient btn ty">
						<i class="fa fa-edit"></i> 
					</button>
					<button class="btn_delate ml-3 border-primary blue-gradient btn ty">
						<i class="fa fa-trash"></i> 
					</button>
				</div>
				<div class="hide">
					<button class="btn_change_false border-primary blue-gradient btn ty"> 
						<i class="fa fa-check"></i>
					</button>
					<button class="btn_delate ml-3 border-primary blue-gradient btn ty"> 
						<i class="fa fa-close"></i>
					</button>
				</div>
			</div> -->
			
		<!-- </div> -->
	</div>

<?php 
	include "footer.php";
?>