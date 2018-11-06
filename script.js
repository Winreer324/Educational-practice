// data_person start
$(".creat").hide();
let btn_change_true = true;
// alert("sloll");
let edd_btn = true;
let close = true;
let getTable = "";
let idTable = "";
// event.preventDefault();
$(".hide").hide();
$(".person").find("input").attr("disabled",true);  

let up=[];
$(document).on("click",".btn_change_edit",function(e){
 
  $(this).parents(".int").children(".show").hide();
  $(this).parents(".int").children(".hide").show(); 

  if(close){
    $(this).parents(".input").children("input").attr("disabled",true); 
    close=false;
  }
  if(!close){
   $(this).parents(".input").children("input").attr("disabled",false); 
   close=true;
  }

});

$(document).on("click",".btn_delate",function(e){
  e.preventDefault(); 
  let id = $(this).parents(".input").find(".id_id").val();
  console.log(id);
  alert(id);
  let inputs = $(this).parents(".input").find("input");
  let fields = [];
  let values = [];
  let types = ""
  let action = 'delete';
  // let table = 'data_person';
  let table = showTable();
  idTable = showIDTable();
  getTable = showTable();
  inputs.each(function() {
    fields.push($(this).attr('name'));
    values.push($(this).val());
    types += $(this).attr('data-type');
    console.log(inputs);
  })
  $.ajax({
    url: '../Educational-practice/php/CRUD.php',
    type: 'POST',
    data: {
      table: table,
      id: id,
      getTable: getTable,
      idTable: idTable,
      action: action,
      fields: JSON.stringify(fields),
      values: JSON.stringify(values),
      types: types,
    },
    success: function(response) {
      console.log(response);
      location.reload();
      console.log("Данные отправленны delete "+getTable);
    },
    error: function(error) {
      console.log(error);
      console.log("Данные не отправленны delete");
    }
  })
  if(close){
  let del = $(this).parent().parent().parent(); 

  del.find("input").remove();
  del.find("button").remove();
  }
});

$(document).on("click",".btn_change_check",function(e){

  $(this).parents(".int").children(".show").show();
  $(this).parents(".int").children(".hide").hide(); 
  close=false;
   $(this).parents(".input").children("input").attr("disabled",true); 
  addShowInput();
 let id = $(this).parents(".input").find(".id_id").val();
  console.log(id);
    e.preventDefault(); 

  let inputs = $(this).parents(".input").find("input");
  let fields = [];
  let values = [];
  let types = "";
  let action = 'update';
  // let table = 'data_person';
  let table = showTable();
  idTable = showIDTable();
   // up = [];
  inputs.each(function() {
    fields.push($(this).attr('name'));
    values.push($(this).val());
    types += $(this).attr('data-type');
    console.log(values);
  }) 

  $.ajax({
    url: '../Educational-practice/php/CRUD.php',
    type: 'POST',
    data: {
      table: table,
      id: id,
      getTable: getTable,
      idTable: idTable,
      action: action,
      fields: JSON.stringify(fields),
      values: JSON.stringify(values), 
      types: types,
    },
    success: function(response) {
      console.log(response);
      location.reload();
      console.log("Данные отправленны edit");
    },
    error: function(error) {
      console.log(error);
      console.log("Данные не отправленны edit");
    }
  })

});

$(document).on("click",".btn_delate_close",function(){
  
  $(this).parents(".int").children(".show").show();
  $(this).parents(".int").children(".hide").hide(); 

  close=false; 

  $(this).parents(".input").children("input").attr("disabled",true); 
}); 

            // creat data people
$(document).on("click",".btn_creat_data_person",function(){
  $(".creat").show();   
 $(this).parents(".int").children(".show").show();
  $(this).parents(".int").children(".hide").hide();  
 $(".creat_input").parent().find("input").attr("disabled",false); 
  addShowInput();
});

$(document).on("click",".btn_creat_data_person_true", function(e){ 
  
  e.preventDefault(); 
  let inputs = $(".creat_input").parent().find("input");
  let fields = [];
  let values = [];
  let types = "";
  let action = 'insert';
  // let table = 'data_person';
  let table =  showTable();
  inputs.each(function() {
    fields.push($(this).attr('name'));
    values.push($(this).val());
    types += $(this).attr('data-type');
    console.log(inputs);
  })
  $.ajax({
    url: '../Educational-practice/php/CRUD.php',
    type: 'POST',
    data: {
      table: table,  
      action: action,
      fields: JSON.stringify(fields),
      values: JSON.stringify(values),
      types: types,
    },
    success: function(response) {
      console.log(response);
      location.reload();
      console.log("Данные отправленны creat data_person");
    },
    error: function(error) {
      console.log(error);
      console.log("Данные не отправленны creat data_person");
    }
  }) 
  
});

$(document).on("click",".btn_creat_data_person_false",function(){
  $(".creat").hide(); 
  addShowInput();
});

            //  creat data people end




                              // data_person end



                              // visitors start
 
 
            // creat visitors

$(document).on("click",".btn_creat_visitors",function(){
  $(".creat").show();  
 $(".creat_input").parent().find("input").attr("disabled",false); 
  $(this).parents(".int").children(".show").show();
  $(this).parents(".int").children(".hide").hide(); 
});

$(document).on("click",".btn_creat_visitors_true",function(e){ 
  // $("#person").append('<div class="row person creat_input  pt-4 pb-5 "><input class="item col-md-2 ml-5 " type="text" placeholder="#"><input class="item col-md-2 ml-4 " type="date" placeholder="Дата посещения"><input class="item col-md-2 ml-4 " type="text" placeholder="Данные человека"><input class="item col-md-2 ml-4 " type="text" placeholder="Услуга"><div class="row ml-5 int"><div class="show"><button class="btn_change_false border-primary blue-gradient btn ty"><i class="fa fa-edit"></i> </button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"><i class="fa fa-trash"></i> </button></div><div class="hide"><button class="btn_change_false border-primary blue-gradient btn ty"> <i class="fa fa-check"></i></button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"> <i class="fa fa-close"></i></button></div></div></div>');
  $(".hide").hide();
  $(".show").show(); 

  e.preventDefault();  

  let inputs = $(".creat_input").parent().find("input");
  let fields = [];
  let values = [];
  let types = "";
  let action = 'insert';
  // let table = 'data_person';
  let table =  showTable();
  inputs.each(function() {
    fields.push($(this).attr('name'));
    values.push($(this).val());
    types += $(this).attr('data-type');
    console.log(inputs);
  })
  $.ajax({
    url: '../Educational-practice/php/CRUD.php',
    type: 'POST',
    data: {
      table: table,  
      action: action,
      fields: JSON.stringify(fields),
      values: JSON.stringify(values),
      types: types,
    },
    success: function(response) {
      console.log(response);
      location.reload();
      console.log("Данные отправленны creat visitors");
    },
    error: function(error) {
      // console.log(error);
      console.log("Данные не отправленны creat visitors");
    }
  })  
});

$(document).on("click",".btn_creat_visitors_false",function(){
  $(".creat").hide(); 
  addShowInput();
});


                              // visitors end



                              // data visit start
 
 
            // creat visitors

$(document).on("click",".btn_creat_data_visit",function(){
  $(".creat").show();   
  $(this).parents(".int").children(".show").show();
  $(this).parents(".int").children(".hide").hide();
  $(".creat_input").parent().find("input").attr("disabled",false); 
  addShowInput();
});

$(document).on("click",".btn_creat_data_visit_true",function(e){ 
  // $("#person").append('<div class="row  mr-0 pt-4 pb-5 ">  <input class="item col-md-1 ml-5 " type="text" placeholder="#">  <input class="item col-md-2 ml-4 " type="text" placeholder="Пользователь"> <input class="item col-md-2 ml-4 " type="date" placeholder="Дата посещения">  <div class="row ml-5 int"><div class="show"><button class="btn_change_false border-primary blue-gradient btn ty"><i class="fa fa-edit"></i> </button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"><i class="fa fa-trash"></i> </button></div><div class="hide"><button class="btn_change_false border-primary blue-gradient btn ty"> <i class="fa fa-check"></i></button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"> <i class="fa fa-close"></i></button></div></div></div> ');
  $(".hide").hide();
  $(".show").show();


  e.preventDefault(); 

  let inputs = $(".creat_input").parent().find("input");
  let fields = [];
  let values = [];
  let types = "";
  let action = 'insert';
  // let table = 'data_person';
  let table =  showTable();
  inputs.each(function() {
    fields.push($(this).attr('name'));
    values.push($(this).val());
    types += $(this).attr('data-type');
    console.log(inputs);
  })
  $.ajax({
    url: '../Educational-practice/php/CRUD.php',
    type: 'POST',
    data: {
      table: table,  
      action: action,
      fields: JSON.stringify(fields),
      values: JSON.stringify(values),
      types: types,
    },
    success: function(response) {
      console.log(response);
      location.reload();
      console.log("Данные отправленны creat data_visit");
    },
    error: function(error) {
      // console.log(error);
      console.log("Данные не отправленны creat data_visit");
    }
  }) 
});

$(document).on("click",".btn_creat_data_visit_false",function(){
  $(".creat").hide(); 
  addShowInput();
});


                              //  data visit end



                              // services start
 
 
            // creat services

$(document).on("click",".btn_creat_services",function(){
  $(".creat").show();   
  $(".creat_input").parent().find("input").attr("disabled",false);  
  $(this).parents(".int").children(".show").show();
  $(this).parents(".int").children(".hide").hide();

  addShowInput();
});

$(document).on("click",".btn_creat_services_true",function(e){ 
  // $("#person").append('<div class="row  mr-0 pt-4 pb-5 "><div class="row ml-5 int"><div class="show"><button class="btn_change_false border-primary blue-gradient btn ty"><i class="fa fa-edit"></i> </button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"><i class="fa fa-trash"></i> </button></div><div class="hide"><button class="btn_change_false border-primary blue-gradient btn ty"> <i class="fa fa-check"></i></button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"> <i class="fa fa-close"></i></button></div></div></div> ');
  $(".hide").hide();
  $(".show").show();

 e.preventDefault(); 

  let inputs = $(".creat_input").parent().find("input");
  let fields = [];
  let values = [];
  let types = "";
  let action = 'insert';
  // let table = 'data_person';
  let table =  showTable();
  inputs.each(function() {
    fields.push($(this).attr('name'));
    values.push($(this).val());
    types += $(this).attr('data-type');
    console.log(inputs);
  })
  $.ajax({
    url: '../Educational-practice/php/CRUD.php',
    type: 'POST',
    data: {
      table: table,  
      action: action,
      fields: JSON.stringify(fields),
      values: JSON.stringify(values),
      types: types,
    },
    success: function(response) {
      console.log(response);
      location.reload();
      console.log("Данные отправленны creat services");
    },
    error: function(error) {
      console.log(error);
      console.log("Данные не отправленны creat services");
    }
  }) 
});

$(document).on("click",".btn_creat_services_false",function(){
  $(".creat").hide(); 
  addShowInput();
});


                              //  services end



                              // staff start
 
 
            // creat staff

$(document).on("click",".btn_creat_staff",function(){
  $(".creat").show();  
$(".creat_input").parent().find("input").attr("disabled",false);  
  $(this).parents(".int").children(".show").show();
  $(this).parents(".int").children(".hide").hide();

  addShowInput();
});

$(document).on("click",".btn_creat_staff_true",function(e){ 
  // $("#person").append('<div class="row  mr-0 pt-4 pb-5 ">  <input class="item col-md-1 ml-5 " type="text" placeholder="#">  <input class="item col-md-2 ml-4 " type="text" placeholder="Пользователь"> <input class="item col-md-2 ml-4 " type="date" placeholder="Дата посещения">  <div class="row ml-5 int"><div class="show"><button class="btn_change_false border-primary blue-gradient btn ty"><i class="fa fa-edit"></i> </button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"><i class="fa fa-trash"></i> </button></div><div class="hide"><button class="btn_change_false border-primary blue-gradient btn ty"> <i class="fa fa-check"></i></button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"> <i class="fa fa-close"></i></button></div></div></div> ');
  $(".hide").hide();
  $(".show").show();
  
 e.preventDefault(); 

  let inputs = $(".creat_input").parent().find("input");
  let fields = [];
  let values = [];
  let types = "";
  let action = 'insert';
  // let table = 'data_person';
  let table =  showTable();
  inputs.each(function() {
    fields.push($(this).attr('name'));
    values.push($(this).val());
    types += $(this).attr('data-type');
    console.log(inputs);
  })
  $.ajax({
    url: '../Educational-practice/php/CRUD.php',
    type: 'POST',
    data: {
      table: table,  
      action: action,
      fields: JSON.stringify(fields),
      values: JSON.stringify(values),
      types: types,
    },
    success: function(response) {
      console.log(response);
      location.reload();
      console.log("Данные отправленны creat staff");
    },
    error: function(error) {
      console.log(error);
      console.log("Данные не отправленны creat staff");
    }
  }) 
});

$(document).on("click",".btn_creat_staff_false",function(){
  $(".creat").hide(); 
  addShowInput();
});


                              //  staff end






// // function 

function addShowInput(){
  $(this).parents(".creat_input").children("input").attr("disabled",false); 
}
function showTable(){
  if($("div").is("#data_person")){return "data_person"}
  if($("div").is("#date_visit")){return "date_visit"}
  if($("div").is("#staff")){return "staff"}
  if($("div").is("#services")){return "services"}
  if($("div").is("#visitors")){return "visitors"}
}
function showIDTable(){
  if($("div").is("#data_person")){return "id_data_person"}
  if($("div").is("#date_visit")){return "id_date_visit"}
  if($("div").is("#staff")){return "id_staff"}
  if($("div").is("#services")){return "id_services"}
  if($("div").is("#visitors")){return "id_visitors"}
}

// alert(showTable());
// alert(showIDTable());