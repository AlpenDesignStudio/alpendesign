<?php
    $key=$_GET['typeahead'];
    $array = array();
    $con=mysql_connect("localhost","root","root");
    $db=mysql_select_db("alpendesign",$con);
    $query=mysql_query("select * from payroll where name LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['name'];
    }
    echo json_encode($array);
?>
