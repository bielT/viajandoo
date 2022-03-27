let form = document.querySelector('#form_Flight');

form.addEventListener("submit",function(event){
  event.preventDefault();
  var  type = $('#submit').val() ;

  if(type == "0") {
    $.ajax({
      url:"./src/controller/pages/flightRegister.php",
      method:"POST",
      data:$('#form_Flight').serialize(),
      success:function(data1)
      {
        alert(data1)
      }
    });
  }else if(type == "1") {
    $.ajax({
      url:"./src/controller/pages/flightUpdate.php",
      method:"POST",
      data:$('#form_Flight').serialize(),
      success:function(data1)
      {
        alert(data1)
      }
    });
  }

});
