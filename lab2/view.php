<?php
$imported = file("log.txt");
$words = array();

//var_dump($imported);
foreach($imported as $user){
    $words = explode(",", $user);
    
    echo "Visit date:".$words[0]."<br/>";
    echo "IP Address:".$words[1]."<br/>";
    echo "email:".$words[2]."<br/>";
    echo "name:".$words[3]."<br/>";
    echo "number of visits:".$words[4]."<br/>";
    echo "=====================================<br/><br/>";
    
}

?>