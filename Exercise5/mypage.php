<!DOCTYPE html>
<html>   
<head>
<title>
 My First Website 
</title>


<style>
.error {color: red;}
body{
text-align: center;
color:black;
font-family: simplifica;
    font-size: 400%;
	background-image: url("1.jpg");
    background-color: #cccccc;
}
th, td {
    font-family: simplifica;
	
}

h1 {
font-size: 80%;
text-decoration: underline;
text-align:left;

}

h2 {
font-size: 80%;


}

a:link {
    color: blue;
    background-color: transparent;
    text-decoration: underline;
}
a:visited {
    color: black;
    background-color: transparent;
    text-decoration: underline;
}
a:hover {
    color: red;
    background-color: transparent;
     text-decoration: underline;
}
a:active {
    color: black;
    background-color: transparent;
     text-decoration: underline;
}
table {
font-family: verdana;
font-size: 50px;

}
button {
    background-color: white;
    color: black;
    border-size: 43px;
	border-color: blue;
	font-family: simplifica;
	font-size: 32px;
}

button:hover {
background-color: white;
color: green;

}
audio{
display: none;
}
table{
align: center;
}
</style>
<body> AMIEL POCHOLO B. SOBISOL</br>
    <img src="Cholo.jpg" width="300" height="300">

<table> 
<tr> 
<th>NICKNAME:</th>
<td>CHOLO</td> 
</tr>
<tr> 
<th>HOBBIES:</th>
<td>LOVES TO PLAY DRUMS</td>
</tr>
<tr>
<th>FAVORITE WEBSITES: </th>
<td>
<a href="http://Facebook.com/">FACEBOOK</a>
<a href="http://Twitter.com/">TWITTER</a>
</td>
<tr>
<th>INTERESTS:</th>
<td>MUSIC and PHOTOGRAPHY</td>
</tr>
</table>

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
 
        $sql_query = "INSERT INTO users(full_name,Nick_name,Home_Add,Cell_No,Gender) VALUES('$full_name','$Nick_name','$Home_Add','Cell_No','Gender')";
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
    <label>Sign up here and Join me!</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
   
    </tr>
    <tr>
    <td><input type="text" name="full_name" placeholder="Full Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Nick_name" placeholder="Nick Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Home_Add" placeholder="City" required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="Cell_No" placeholder="Cellphone Number" required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="Gender" placeholder="Gender" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save">SAVE<a/></button></td>
	<td align="center"><a href="index.php"> Edit data here -> </a></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</body>
</head>
</html>
