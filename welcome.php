<?php


    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $adress = $_POST['adress'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $skills = $_POST['skills'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $department = $_POST['department'];



    echo "Your Name is " . $firstname . " " . $lastname . "<br><br>";

    echo "Adress is " . $adress . "<br><br>";

    echo "Your skills is <br>";

    for($i = 0; $i< sizeof($skills);$i++){
        echo $skills[$i] . "<br>";
    }

    echo  "<br><br>"."Your country is " . $country . "<br><br>";

    echo "Your department is " . $department;

?>