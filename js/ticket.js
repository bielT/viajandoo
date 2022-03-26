$(document).ready(function(){
  var i=1;

  $('#localdepart').blur(function(){
    var sel=  document.getElementById("localdepart") ;

    $.get("listadehora.php?id="+sel.options[sel.selectedIndex].value, function(data){
      const resultados =  JSON.parse(data);
        console.log( resultados);
        console.log( typeof(resultados));
      for (var[key,value] of Object.entries(resultados)) {
        $("#dataehora").append(`<option value="${value.idFlight}">
        ${value.check_out_date_hour}</option>`
       );
      }

    });

  });



  });
