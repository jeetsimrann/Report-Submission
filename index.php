<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>GFG- Store Data</title>
</head>
  
<body>
    <?php require 'utilities/header.php'; ?>
    <center>
        <h1>Storing Form data in Database</h1>
  
        <form action="addemployee.php" method="post">
              
        <p>
                <label for="EmployeeID">EmployeeID:</label>
                <input type="text" name="EmployeeID" id="EmployeeID">
            </p>
<p>
                <label for="FirstName">First Name:</label>
                <input type="text" name="FirstName" id="FirstName">
            </p>
  
<p>
                <label for="LastName">Last Name:</label>
                <input type="text" name="LastName" id="LastName">
            </p>
  
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>