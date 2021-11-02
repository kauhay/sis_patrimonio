var data1;
  $(function(){
  $("#data1").change(function(){
  data1 = $(this).val();

  $.ajax({

    type:"POST",
    url:"select_data1.php?data1="+data1,
    dataType:"text",
    success: function(res){
      $("#data2").children(".data2").remove();
      $("#data2").append(res); }

});
});
}); 



var data3;
$(function(){
  $("#data2").change(function(){
data3 = $(this).val();
  
  
  $.ajax({

    type:"POST",
    url:"select_data2.php",
    data: {data3,data1},
   
    success: function(res){
      $("#filial_atual").children(".filial_atual").remove();
      $("#filial_atual").append(res); }

});
});
}); 



var filial_atual;
$(function(){
  $("#filial_atual").change(function(){
filial_atual = $(this).val();
  
  
  $.ajax({

    type:"POST",
    url:"select_filial_atual.php",
    data: { data3, data1, filial_atual },
   
    success: function(res){
      $("#localizacao").children(".localizacao").remove();
      $("#localizacao").append(res); }

});
});
}); 


var localizacao;
$(function(){
  $("#localizacao").change(function(){
  localizacao = $(this).val();
  
  
  $.ajax({

    type:"POST",
    url:"select_localizacao.php",
    data: { data3, data1, filial_atual, localizacao },
   
    success: function(res){
      $("#tipo").children(".tipo").remove();
      $("#tipo").append(res); }

});
});
}); 


var tipo;
$(function(){
  $("#tipo").change(function(){
  tipo = $(this).val();
  
  
  $.ajax({

    type:"POST",
    url:"select_tipo.php",
    data: { data3, data1, filial_atual, localizacao, tipo },
   
    success: function(res){
      $("#ativo").children(".ativo").remove();
      $("#ativo").append(res); }

});
});
});