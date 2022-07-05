<?php include 'header.php'; ?>
<form method = "POST" action = "processForm.php">
    <h3>A simple form</h3>
    
    <p>First Name <br>
    <input type = "text" name = "fname"></p>
    
    <p>Last Name <br>
    <input type = "text" name = "lname"></p>
   
    <p>University Status<br>
    <select name="year">
        <option>Select</option>
        <option>1st year</option>
        <option>2nd year</option>
        <option>3rd year</option>
        <option>4th year</option>
    </select></p>

    <input id = "submit" type = "submit">

</form>

<p>
    <a href = "processForm.php?student_id=12345&location=PA">
        Student Info</a>
</p>