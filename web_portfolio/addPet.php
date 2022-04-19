<?php include 'header.php';?>
<form method="post" enctype="multipart/form-data" action="processPet.php">
      <h3>Add Pet Details</h3>
        <p>Name<br/>
           <input type="text" name="pet_name" />
       </p>
       <p>Pet Type<br/>
           <select name="pet_type" >
              <option>Choose type</option> 
              <option>Dog</option>
              <option>Cat</option>
              <option>Other</option>
           </select>
       </p>           
       <p>Upload Image<br/>
       <input type="file" name="fileToUpload">
       </p> 
          <input type="submit"> 
          <input type="reset" value="Clear Form">      
</form>
</body>
</html>
