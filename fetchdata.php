<?php

//fetch_images.php

$connect = new PDO("mysql:host=localhost;dbname=test_db", "root", "");

$query = "SELECT * FROM tbl_new ORDER BY id DESC";

$statement = $connect->prepare($query);

$output = '<div class="row">';

if($statement->execute())
{
 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $output .= '
  <div class="col s12 m6" style="margin-bottom:16px;">
   	<p> '.$row['name'].' </p>
   	<p> '.$row['phone'].' </p>
   	<p> '.$row['note'].' </p>
  </div>
  ';
 }
}

$output .= '</div>';

echo $output;

?>