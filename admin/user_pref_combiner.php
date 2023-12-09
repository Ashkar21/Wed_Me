<?php 
include('dbconnect.php');


$table = array("register" => array("username", "created", "fname", "lname", "dob", "gender", "marital_status", "email", "phno", "address", "district", "state", "pincode", "religion", "caste", "star", "raashi", "suddha_jadakam", "family_status", "family_type", "family_value", "height", "weight", "skin_color", "physical_status"),"bio_hobby" => array("username","hobbies","food_preference","drinking","smoking","bio"),"profession_education" => array("username", "emp_type", "occupation", "income", "work_location", "highest_qualification", "qual_in_details", "university", "college"),"partner_preference" => array("username", "age", "height", "marital_status", "physical_status", "eating_habit", "drink_habit", "smoking", "religion", "caste", "star", "dosham", "education", "emp_status", "designation", "annual_income", "state", "district", "family_type", "family_value", "fathers_occup", "mother_occup"));
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




//--------------------------------------------- New try
$flag=0;
$count_query = "SELECT username FROM `register`";
$result_count = mysqli_query($con,$count_query);
$count = mysqli_num_rows( $result_count );

for($i=1;$i<=$count;$i++)
{
$tables2 = array("register","bio_hobby","profession_education");

$username = ''; //initialised to use inside while loop below
$textdata_value = ''; //initialised to use inside while loop below
$final_textdata = ''; //initialised to use inside while loop below
foreach($tables2 as $item)
{
    $query2 = "SELECT username,textdata FROM ".$item." WHERE id = ".$i;
    $result2= mysqli_query($con,$query2);
    $row2= mysqli_fetch_array($result2);

    $username = $row2['username']; //This will select the user
    $textdata_value = $row2['textdata']; //This will select the user's textdata
    $final_textdata = $final_textdata." ".$textdata_value;
    $textdata_value = ''; 

    //Updating user_preference table now
    $query_to_update = "UPDATE `user_preference` SET textdata = '$final_textdata' WHERE username = '$username'";
    if(mysqli_query($con,$query_to_update))
    {
        echo "Success";
        $flag=1;
        
    }
    else
    {
        echo "Failed";
    }
}

}
if($flag==1)
{
    echo "<script>alert('Operation Successfully performed!')</script>";
	echo "<script>location.href='index.php'</script>";
}



?>