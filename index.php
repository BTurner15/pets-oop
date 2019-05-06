<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//Require autoloads
require_once('vendor/autoload.php');
//require_once('classes/pet.php');
// session_start();
//Create an instance of the Base Class
$f3 = Base::instance();
//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

$f3->set('colors', array('red', 'green', 'blue', 'orange', 'yellow'));

//Define a default route
$f3->route('GET /', function($f3) {
    echo '<h1>Pets OOP</h1>';
    //Instantiate (create) an instance of a new pet
    $pet1 = new Pet('Buckaroo', 'Orange-Red');
    $pet2 = new Pet();
    $pet3 = new Pet("Rufus");
    //$pet1->name = ;
    //$pet1->color = ;

    $f3->set('pet1', $pet1);
    $f3->set('pet2', $pet2);
    $f3->set('pet3', $pet3);
    $template = new Template();
    //echo "<a href='order'>Order a pet</a>";
    echo $template->render('views/my-pets.html');
});

$f3->run();