<?php 
require 'Controller/CoffeeController.php';
$coffeeController = new CoffeeController();

if(isset($_POST['types']))
{
    //Fill page with coffees of the selected type
    $coffeeTables = $coffeeController->CreateCoffeTables($_POST['types']);
}
else
{
    //Page is loaded for the first time, no type selected -> Fetch all types
    $coffeeTables = $coffeeController->CreateCoffeTables('%');
}

//Output page data
$title = 'Coffee overview';
$content = $coffeeController->CreateCoffeeDropdownList().$coffeeTables;

include 'Template.php';
?>