// data_person start
$(".creat").hide();
let btn_change_true = true;
// alert("sloll");
let edd_btn = true;
let close = true; 
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
//////////////
$(document).on("click",".btn_delate",function(e){
  e.preventDefault(); 
  tr = $(this).parent().parent().parent();
  let inputs = $(this).parents(".input").find("input");
  let values = [];
  let types = 'i';
  let action = 'delete';
  let table = showTable();
  let id_table = showIDTable();
  // let id = $(this).attr('.data-id');
  let id = $(this).parents(".input").find(".id_id").val();
  console.log("id = "+ id);
  $.ajax({
    url: 'php/CRUD.php',
    type: 'POST',
    data: {
      table: table,
      action: action,
      id: id,
      id_table: id_table,
      types: types,
    },
    success: function(response) {
      console.log(response); 
      location.reload();
    },
    error: function(error) {
      console.log(error);
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



    e.preventDefault();  
  let inputs = $(this).parents(".input").find("input");
  let values = [];
  let fields = [];
  let types = '';
  let action = 'update';
  let table = showTable();
  let id = $(this).parents(".input").find(".id_id").val();
  let id_table = showIDTable();
  console.log(id); 
  inputs.each(function() {
    fields.push($(this).attr('name'));
    values.push($(this).val());
    types += $(this).attr('data-type');
  })
  $.ajax({
    url: 'php/CRUD.php',
    type: 'POST',
    data: {
      table: table,
      action: action,
      id: id,
      id_table: id_table,
      fields: JSON.stringify(fields),
      values: JSON.stringify(values),
      types: types,
    },
    success: function(response) {
      console.log(response);
      location.reload(); 
    },
    error: function(error) {
      console.log(error);
    }
  })
});

$(document).on("click",".btn_delate_close",function(){
  
  $(this).parents(".int").children(".show").show();
  $(this).parents(".int").children(".hide").hide(); 

  close=false; 

  $(this).parents(".input").children("input").attr("disabled",true); 
}); 
 
$(document).on("click",".btn_creat",function(){
  $(".creat").show();   
 $(this).parents(".int").children(".show").show();
  $(this).parents(".int").children(".hide").hide();  
 $(".creat_input").parent().find("input").attr("disabled",false); 
  addShowInput();
});

$(document).on("click",".btn_creat_true", function(e){ 
  
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
    url: 'php/CRUD.php',
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
      console.log("Данные отправленны creat ");
    },
    error: function(error) {
      console.log(error);
      console.log("Данные не отправленны creat ");
    }
  }) 
  
});

$(document).on("click",".btn_creat_false",function(){
  $(".creat").hide(); 
  addShowInput();
});


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