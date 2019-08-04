    <?php  
 $connect = mysqli_connect("localhost", "root", "", "test_db");  
 $number = $_POST["name"];  
 $phone = $_POST["phone"];  
 $note = $_POST["note"];
 $number = implode("|", $number);  
 echo $number;


    $sql = "INSERT INTO `tbl_new`(`name`, `phone`, `note`) VALUES ('".$number."','".$phone."','".$note."')";  
                mysqli_query($connect, $sql);  
      echo "Data Inserted";  

 ?> 