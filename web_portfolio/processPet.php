<?php include 'header.php'; 

foreach($_FILES["fileToUpload"] as $key => $value){
} 

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["pet_name"];
  $type = $_POST["pet_type"];
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

  $file = "data/pets.txt";
  if(!is_file($file)){
    file_put_contents($file,"");
  }
  $current = file_get_contents($file);
  $current .= "$name,$type,$target_file\n";
  file_put_contents($file, $current);
}
?>

<html>
    <table>
      <caption>Pet Info</caption>
      <tr>
        <td>Name</td>    
        <td><?php echo "$name";?></td>
        <td></td> 
      </tr>
      <tr>
        <td>Pet Type</td> 
        <td><?php echo "$type";?></td>   
        <td></td> 
      </tr>
      <tr>
        <td>Image</td>    
        <td style="height:200px;width:100px;"> 
        <?php echo "<img src = $target_file>"?></td>
      </tr>
    </table>
    <p><a href="cutestPets.php">Back</a>
    
</main>       
</body>
</html>

<style>
  img{
    height: 50%;
    width:50%;
  }
</style>