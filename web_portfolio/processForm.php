<?php include 'header.php'; ?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "<h3>Name: ";
        foreach($_POST as $key=>$value){
        }
        $first_name = $_POST["fname"];
        $last_name = $_POST["lname"];
        $year = $_POST["year"];
    
?>
<?php echo "$first_name $last_name<br>Grade: $year student";?>
   
<?php } ?>
<?php 
if($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "<h3>Output of post array<br></h3>";
    foreach($_GET as $key=>$value){
        echo "key is $key and value is $value<br>";
    }
} ?>