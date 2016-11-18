<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $full_name = $_POST['full_name'];
 $Nick_name = $_POST['Nick_name'];
 $Home_Add = $_POST['Home_Add'];
 $Cell_No = $_POST['Cell_No'];
 $Gender = $_POST['Gender'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(full_name,Nick_name,Home_Add,Gender,Cell_No) VALUES('$full_name','$Nick_name','$Home_Add','Cell_No','Gender')";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MYSQL</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>MYSQL</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="mypage.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="full_name" placeholder="Full Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Nick_name" placeholder="Nick Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Home_Add" placeholder="Home Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Cell_No" placeholder="Cellphone Number" required /></td>
	<tr>
    <td><input type="text" name="Gender" placeholder="Gender" required /></td>
    </tr>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>