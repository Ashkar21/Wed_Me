<?php
include('dbconnect.php');
header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=testdata.csv');
       $output = fopen("php://output", "w");
     fputcsv($output, array('pid','inputstring'));
         $query = "select *  from register where textdata<>''";
         $result = mysqli_query($con,$query);
         while($row = mysqli_fetch_array($result))
         {
              fputcsv($output,array($row['login_id'],$row['textdata']));
             
         }
      fclose($output);

?>