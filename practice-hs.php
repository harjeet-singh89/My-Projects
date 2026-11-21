<?php
    date_default_timezone_set("Asia/kolkata");
    echo "Hello Developers, this is a testing file.";

    function get_todays_date(){
        $date = date('Y-m-d h:i:s');
        return $date;
    }

    echo "<br>";
    echo "Today, the date is : " . get_todays_date() . "<br>";

    function showName($name){
        echo "My name is " . $name . "<br>";
    }

    $my_name = "Harjeet Singh";
    showname($my_name);

?>