<?php

echo "<table border='1'>";
$record_index = 0;
foreach ($all_requrds as $item) {
    if ($record_index === 0) {
        echo "<tr>";
        echo "<td> ID </td>";
        echo "<td> Name </td>";
        
        echo "</tr>";
    }
    echo "<tr>";
   
        echo "<td>".$item->id ."</td>";
        echo "<td>".$item->product_name ."</td>";
    echo "</tr>";

    $record_index ++;
}
echo "</table>";
?>
<div> 
    <a href="<?php echo $previous_link;  ?>"> << Prev </a> | <a href="<?php echo $next_link;  ?>">  Next >> </a>
</div>



