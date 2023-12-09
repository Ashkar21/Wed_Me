<?php 
include('dbconnect.php');

$final_textdata = "";



$table = array("register" => array("login_id", "username", "created", "fname", "lname", "dob", "gender", "marital_status", "email", "phno", "address", "district", "state", "pincode", "religion", "caste", "star", "raashi", "suddha_jadakam", "family_status", "family_type", "family_value", "height", "weight", "skin_color", "physical_status"));
$query = '';
foreach( $table as $key => $value){
 	$columns = '';
     foreach( $value as $col){
     	$columns .=  $col . " " ;   
     }
     $columns = trim($columns);
     $columns = str_replace(" ",",",$columns);

	 $query = 'SELECT '. $columns .' FROM ' .$key ;



     $result1= mysqli_query($con,$query);
     while($row1= mysqli_fetch_array($result1))
     {
         $textdata = "";
         $username = $row1['username'];
         $fields = mysqli_fetch_fields($result1);
         foreach ($fields as $field) 
         {
             $t2 = $field->name . "_" . str_replace(' ', '', $row1[$field->name]);
             $textdata = $textdata." ".$t2;
             
         }
         $UPDATE = "UPDATE `$key` SET textdata = '".$textdata."' WHERE username = '".$username."'";
         
         mysqli_query($con,$UPDATE);
 
         
         $textdata = "";
         $username = "";
         
     }

    }

// Defined an array of tables
//$tables = array("register", "bio_hobby", "profession_education", "partner_preference");

// foreach ($tables as $item) {
//     //Run for each table 
//     $q1 = "SELECT * FROM `$item`";
//     $result1= mysqli_query($con,$q1);
//     while($row1= mysqli_fetch_array($result1))
//     {
//         $textdata = "";
//         $username = $row1['username'];
//         $fields = mysqli_fetch_fields($result1);
//         foreach ($fields as $field) 
//         {
//             $t2 = $field->name . "_" . str_replace(' ', '', $row1[$field->name]);
//             $textdata = $textdata." ".$t2;
            
//         }
//         $UPDATE = "UPDATE `$item` SET textdata = '".$textdata."' WHERE username = '".$username."'";
        
//         mysqli_query($con,$UPDATE);

        
//         $textdata = "";
//         $username = "";
//         $q1 = "";
//     }

// }



// $tables2 = array("register", "bio_hobby", "profession_education");
// foreach ($tables2 as $item2) {
//     //Run for each table 
//     $query_getusername = "SELECT username AS un FROM `$item2` LIMIT 1;";
//     //echo $query_getusername;
    
//     $result= mysqli_query($con,$query_getusername);
    
//     while ($row1= mysqli_fetch_array($result))
//     {
//         $username=$row1['un'];
//         //echo "Userrrr:".$username;

//         $q1 = "SELECT textdata FROM `$item2` WHERE username = '$username'"; 
//         if($result1= mysqli_query($con,$q1))
//         {
            
//         $row2= mysqli_fetch_array($result1);
//         //echo "ROW1".$row1;
//         $final_textdata = $row2['textdata'];
//         echo $final_textdata."___ccccccccccccccccccccc___";

//         //$final_textdata = $final_textdata." ".$row2['td'];

//         //$insert = "INSERT INTO `user_preference` VALUES('".$username."','".$final_textdata."',0)";
//         //mysqli_query($con,$insert);
//         }
//     }
//     $final_textdata = "";
//     $username="";
//     $q1="";

// }
// echo "VVVVVVVVVVVVVVVVVVVVVVV".$final_textdata;
// $insert = "INSERT INTO `user_preference` VALUES(,,0)";
// mysqli_query($con,$insert);


//------------------ RETRY 

// $qx = "SELECT textdata as td FROM register WHERE username = 'neraj@gmail.com'";
// $result= mysqli_query($con,$qx);
// $row1= mysqli_fetch_array($result);
// $final_textdata = $row1['td'];

// echo $final_textdata;


//--------------------------------------------- New try

// First, connect to the database
$dsn = 'mysql:host=localhost;dbname=wedme';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$field1_value ='';
$tables2 = array("register", "bio_hobby", "profession_education");
foreach ($tables2 as $item2) {
    //$table = 'register';
    // Then, select the field value from table1
    $id = 'francis@gmail.com'; // example value
    $stmt1 = $db->prepare("SELECT textdata FROM `$item2` WHERE username = '$id'");
    $stmt1->execute();
    //$stmt1->execute([$id]);
    $field1_value = $field1_value." ".$stmt1->fetchColumn();

    echo $field1_value;

    // Finally, update the field2 value in table2
    $stmt2 = $db->prepare("UPDATE `user_preference` SET textdata = '$field1_value' WHERE username = 'francis@gmail.com'");
    $stmt2->execute();
    //$stmt2->execute([$field1_value, $id]);
}








?>