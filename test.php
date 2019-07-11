<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
class Car {                         //class name Car
    function Car () {               //constructor named Car
        $this->model = "VW";        //in php it used pointer operator instead of . (this.) and assigned the string value to it
    }
}

//creating an object
$herbie = new Car();                //created and new object named car of the same name as car and accessed it's property

//show object properties
echo $herbie->model;                //used echo to print the value and pointer to access the model's value
?>

</body>
</html>