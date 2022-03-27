<?php
require __DIR__.'/vendor/autoload.php';

use  src\controller\UserController;
use src\controller\util\Render;

$render= Render::registerUser();
include __DIR__.'/include/head.php'; ///Script e bootstrap
include __DIR__.'/include/toolbarUser.php';
include __DIR__.'/include/formUser.php'; ///Front
include __DIR__.'/include/footer.php';

?>
