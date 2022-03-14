<?php

require __DIR__.'/vendor/autoload.php';

use  src\Entity\Address;
use  src\Entity\User;
use  src\Entity\Airport;
use  src\Entity\Flight;
use  src\Entity\Ticket;
use  src\Entity\AirportPageContent;
use  src\Entity\ImagemCarousel;
 $us = new User('gabreil Te','asdf@gmail.com','12341234','123456789','1234',8);

// $us->delete();
// $ad = new Address('asdf fjhçkjh ',
                  // 'gagk',
                  // 'state',
                  // 5,
                  // '',
                  // '13451234',
                  // 8,
                  // 10);

// $ai = new Airport('asdf','dadasfeeee','state','pais U',6);
// //print_r($ai->update());


// $fl = new Flight(1,3,'12/12/2000 de 6:59','12/12/2000 de 20:59',10);
// print_r($fl->delete());
// print_r(Flight::getFlight(2));
// $ti  = new Ticket(3,5,6);
// print_r($ti->delete());
// $resumeC=null, $descriptionC=null, $priceC=null,
// $pathImageDescriptionC=null,$idPageC=null,$pathMiniatureC= null,$id=null
//  $pc = new AirportPageContent('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
//                               'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
//                               ,  4000000.00,
//                               'asdfa/asdf/sdf/asdf/asdfsd.png',1,
// 'asdfa/asdf/sdf/asdf/asdfsd.png',4);

$ic = new ImagemCarousel('asdfa/asdf/sdf/asdf/asdfsd.png',1,2);
print_r(ImagemCarousel::getImagemCarousels());
?>
