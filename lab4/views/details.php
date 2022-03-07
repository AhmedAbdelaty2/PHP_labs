<?php

$id = $_GET["glass"];

$glass = $all_requrds->where('id', $id)->first();

echo "<table border='1'>";
echo "<tr>";
echo "<td> Type = ".$glass->product_name. "</td>";
echo "<td> Price = ".$glass->list_price. "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Details<br/> code: ".$glass->PRODUCT_code."<br/>item id:".$glass->id."<br/>rating:".$glass->Rating." </td>";
echo "<td><image src='images/".$glass->Photo."'></td>";
echo "</tr>";
