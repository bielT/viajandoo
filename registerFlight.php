<?php

$title='Cadastrar Voo';
$links='<link rel="stylesheet" type="text/css" href="css/picker.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">
<script src="js/picker.js"></script>
<script>
  $( function() {
    $( "#datepickerin" ).datepicker();
  } );
  $( function() {
    $( "#datepickerout" ).datepicker();
  } );
</script>';

include __DIR__.'/include/head.php';
include __DIR__.'/include/toolbarAdm.php';
include __DIR__.'/include/formFlight.php';
$script = '';
include __DIR__.'/include/footer.php';
?>
