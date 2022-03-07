<?php

echo "<table border='1'>";
$record_index = 0;
foreach ($all_requrds as $item) {
    if ($record_index === 0) {
        echo "<tr>";
        echo "<td> ID </td>";
        echo "<td> Name </td>";
        echo "<td> image </td>";
        echo "<td> details </td>";
        
        echo "</tr>";
    }
    echo "<tr>";
    
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $actual_link = explode("?", $actual_link)[0];
        $more = $actual_link."?glass=".$item->id;
        $img = explode(".", $item->Photo)[0]."tz.png";
        echo "<td>".$item->id ."</td>";
        echo "<td>".$item->product_name ."</td>";
        echo "<td><image src=images/"."$img"."></td>";
        echo "<td><a href="."$more".">more</a></td>";
    echo "</tr>";

    $record_index ++;
}
echo "</table>";
?>
<div> 
    <a href="<?php echo $previous_link;  ?>"> << Prev </a> | <a href="<?php echo $next_link;  ?>">  Next >> </a>
</div>

<form >
    <input type="text" placeholder="search by name" name="search">
    <input type="submit" value="search">
</form>



