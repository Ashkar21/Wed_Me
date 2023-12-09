<?php
include('dbconnect.php');
header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=trainingdata.csv');
       $output = fopen("php://output", "w");
     fputcsv($output, array('trainingdata','label'));
         $query = "select *  from trainingdata";
         $result = mysqli_query($con,$query);
         while($row = mysqli_fetch_array($result))
         {
              fputcsv($output,array($row['textdata'],$row['label']));
             
         }
      fclose($output);

?>