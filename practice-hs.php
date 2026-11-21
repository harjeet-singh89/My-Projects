<?php
    echo "Hello Developers, this is a testing file.";

    function getDate(){
        $date = date('Y-m-d' 'H-i-s');
        return $date;
    }

    echo "Today, the date is : " . getDate();

    function showName($name){
        echo "My name is " . $name;
    }

    $my_name = "Harjee";
    showname($my_name);

?>