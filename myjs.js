                                // data_person start
$(".creat").hide();
let btn_change_true = true;
// alert("sloll");
let edd_btn = true;
let close = true;
let i=0;
$(".hide").hide();
$(".int").parent().find("input").attr("disabled",false);  
          // btn change
$(document).on("click",".btn_change_true",function(){
  i++;

  // $(".show").show(); 
  // $(".hide").hide();
  if(i%2==0) {
    close=true;
  } 
  $(this).parents('.int').children('.show').show();
  $(this).parents('.int').children('.hide').hide();

  $(this).parents('.input').children('input').attr("disabled",true);  

  $(".btn_change_true").addClass('btn_change_false').removeClass('btn_change_true');

  addShowInput();
});
          // btn change enable 
$(document).on("click",".btn_change_false",function(){
  i++;

  $(this).parents('.input').children('input').attr("disabled",false); 

  $(".btn_change_false").addClass('btn_change_true').removeClass('btn_change_false');

  // $(".show").hide();
  // $(".hide").show();

  $(this).parents('.int').children('.show').hide();
  $(this).parents('.int').children('.hide').show(); 
  addShowInput();
});
          // click delete 
$(document).on("click",".btn_delate",function(){ 

  if(close){
    let del = $(this).parent().parent().parent(); 

    del.find("input").remove();
    del.find("button").remove();  
  }
  if(!close){ 
    // $(".show").show();
    // $(".hide").hide();

    $(this).parents('.int').children('.show').show();
    $(this).parents('.int').children('.hide').hide();

    close=true;

    $(".btn_change_true").addClass('btn_change_false').removeClass('btn_change_true');

    $(this).parents('.input').children('input').attr("disabled",true); 
  }  
  addShowInput();
});
            // creat data people
$(document).on("click",".btn_creat_data_person",function(){
  $(".creat").show();  

  // $(".show").show();
  // $(".hide").hide();
  $(this).parents('.int').children('.show').show();
  $(this).parents('.int').children('.hide').hide();

  addShowInput();
});

$(document).on("click",".btn_creat_data_person_true",function(){ 
  $("#person").append('<div class="row person input pt-4 pb-5 mr-0"> <input class="item col-md-1 ml-5 " type="text" placeholder="#"><input class="item col-md-2 ml-4 " type="text" placeholder="Имя"><input class="item col-md-2 ml-4 " type="text" placeholder="Фамилия"><input class="item col-md-2 ml-4 " type="text" placeholder="Отчество"><input class="item col-md-1 ml-4 " type="text" placeholder="Телефон"><div class="row ml-5 int"><div class="show"><button class="btn_change_false border-primary blue-gradient btn ty"><i class="fa fa-edit"></i> </button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"><i class="fa fa-trash"></i> </button></div><div class="hide"><button class="btn_change_false border-primary blue-gradient btn ty"> <i class="fa fa-check"></i></button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"> <i class="fa fa-close"></i></button></div></div></div>');
  
  $(".int").parent().find("input").attr("disabled",true); 

  $(".hide").hide();
  $(".show").show();

  // $(this).parents('.int').children('.show').show();
  // $(this).parents('.int').children('.hide').hide();
  $(".btn_change_true").addClass('btn_change_false').removeClass('btn_change_true');
  addShowInput();
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

  // $(".show").show();
  // $(".hide").hide();
  $(this).parents('.int').children('.show').show();
  $(this).parents('.int').children('.hide').hide();

  addShowInput();
});

$(document).on("click",".btn_creat_visitors_true",function(){ 
  $("#person").append('   <div class="row person creat_input  pt-4 pb-5 "><input class="item col-md-2 ml-5 " type="text" placeholder="#"><input class="item col-md-2 ml-4 " type="date" placeholder="Дата посещения"><input class="item col-md-2 ml-4 " type="text" placeholder="Данные человека"><input class="item col-md-2 ml-4 " type="text" placeholder="Услуга"><div class="row ml-5 int"><div class="show"><button class="btn_change_false border-primary blue-gradient btn ty"><i class="fa fa-edit"></i> </button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"><i class="fa fa-trash"></i> </button></div><div class="hide"><button class="btn_change_false border-primary blue-gradient btn ty"> <i class="fa fa-check"></i></button><button class="btn_delate ml-3 border-primary blue-gradient btn ty"> <i class="fa fa-close"></i></button></div></div></div> ');
  $(".hide").hide();
  $(".show").show();
  $(".int").parent().find("input").attr("disabled",true); 


  // $(this).parents('.int').children('.show').show();
  // $(this).parents('.int').children('.hide').hide();
  $(".btn_change_true").addClass('btn_change_false').removeClass('btn_change_true');
  addShowInput();
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

  // $(".show").show();
  // $(".hide").hide();
  $(this).parents('.int').children('.show').show();
  $(this).parents('.int').children('.hide').hide();

  addShowInput();
});

$(document).on("click",".btn_creat_data_visit_true",function(){ 
  $("#person").append('<div class="row  mr-0 pt-4 pb-5 ">  <input class="item col-md-1 ml-5 " type="text" placeholder="#">  <input class="item col-md-2 ml-4 " type="text" placeholder="Пользователь"> <input class="item col-md-2 ml-4 " type="date" placeholder="Дата посещения">  <div class="row ml-5 int"> <div class="show">  <button class="btn_change_false border-primary blue-gradient btn ty">  <i class="fa fa-edit"></i>   </button>  <button class="btn_delate ml-3 border-primary blue-gradient btn ty"> <i class="fa fa-trash"></i>  </button> </div>  <div class="hide"> <button class="btn_change_false border-primary blue-gradient btn ty">   <i class="fa fa-check"></i> </button> <button class="btn_delate ml-3 border-primary blue-gradient btn ty">  <i class="fa fa-close"></i>  </button> </div> </div> </div> ');
  $(".hide").hide();
  $(".show").show();
  $(".int").parent().find("input").attr("disabled",true); 


  // $(this).parents('.int').children('.show').show();
  // $(this).parents('.int').children('.hide').hide();
  $(".btn_change_true").addClass('btn_change_false').removeClass('btn_change_true');
  addShowInput();
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

  // $(".show").show();
  // $(".hide").hide();
  $(this).parents('.int').children('.show').show();
  $(this).parents('.int').children('.hide').hide();

  addShowInput();
});

$(document).on("click",".btn_creat_services_true",function(){ 
  $("#person").append('<div class="row  mr-0 pt-4 pb-5 "><div class="row ml-5 int"> <div class="show">  <button class="btn_change_false border-primary blue-gradient btn ty">  <i class="fa fa-edit"></i>   </button>  <button class="btn_delate ml-3 border-primary blue-gradient btn ty"> <i class="fa fa-trash"></i>  </button> </div>  <div class="hide"> <button class="btn_change_false border-primary blue-gradient btn ty">   <i class="fa fa-check"></i> </button> <button class="btn_delate ml-3 border-primary blue-gradient btn ty">  <i class="fa fa-close"></i>  </button> </div> </div> </div> ');
  $(".hide").hide();
  $(".show").show();
  $(".int").parent().find("input").attr("disabled",true); 


  // $(this).parents('.int').children('.show').show();
  // $(this).parents('.int').children('.hide').hide();
  $(".btn_change_true").addClass('btn_change_false').removeClass('btn_change_true');
  addShowInput();
});

$(document).on("click",".btn_creat_services_false",function(){
  $(".creat").hide(); 
  addShowInput();
});


                              //  services end



                              // services start
 
 
            // creat services

$(document).on("click",".btn_creat_staff",function(){
  $(".creat").show();  

  // $(".show").show();
  // $(".hide").hide();
  $(this).parents('.int').children('.show').show();
  $(this).parents('.int').children('.hide').hide();

  addShowInput();
});

$(document).on("click",".btn_creat_staff_true",function(){ 
  $("#person").append('<div class="row  mr-0 pt-4 pb-5 ">  <input class="item col-md-1 ml-5 " type="text" placeholder="#">  <input class="item col-md-2 ml-4 " type="text" placeholder="Пользователь"> <input class="item col-md-2 ml-4 " type="date" placeholder="Дата посещения">  <div class="row ml-5 int"> <div class="show">  <button class="btn_change_false border-primary blue-gradient btn ty">  <i class="fa fa-edit"></i>   </button>  <button class="btn_delate ml-3 border-primary blue-gradient btn ty"> <i class="fa fa-trash"></i>  </button> </div>  <div class="hide"> <button class="btn_change_false border-primary blue-gradient btn ty">   <i class="fa fa-check"></i> </button> <button class="btn_delate ml-3 border-primary blue-gradient btn ty">  <i class="fa fa-close"></i>  </button> </div> </div> </div> ');
  $(".hide").hide();
  $(".show").show();
  $(".int").parent().find("input").attr("disabled",true); 


  // $(this).parents('.int').children('.show').show();
  // $(this).parents('.int').children('.hide').hide();
  $(".btn_change_true").addClass('btn_change_false').removeClass('btn_change_true');
  addShowInput();
});

$(document).on("click",".btn_creat_staff_false",function(){
  $(".creat").hide(); 
  addShowInput();
});


                              //  services end






// // function

// function iconShow(){

// let a = $(this).parents('button');

//   $(".person").find(".fa-edit").show();
//   $(".person").find(".fa-trash").show();
//   $(".person").find(".fa-check").hide();
//   $(".person").find(".fa-close").hide();

//   // a.find(".fa-edit").show();
//   // a.find(".fa-trash").show();
//   // a.find(".fa-check").hide();
//   // a.find(".fa-close").hide();
//  addShowInput();
// }
// function iconHide(){
// let a = $(this).parent("i");

// $(".person").find(".fa-edit").hide();
// $(".person").find(".fa-trash").hide();
// $(".person").find(".fa-check").show();
// $(".person").find(".fa-close").show();

//   // a.find(".fa-edit").hide();
//   // a.find(".fa-trash").hide();
//   // a.find(".fa-check").show();
//   // a.find(".fa-close").show();
//  addShowInput();
// }


function addShowInput(){
  $(this).parents('.creat_input').children('input').attr("disabled",false); 
}