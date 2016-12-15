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
    font-size: 500%;
	background-image: url("1.jpg");
    background-color: #cccccc;
}
th, td {
    font-family: simplifica;
	
}

h1 {
font-size: 40%;

text-align: left;


}

a:link {
    color: blue;
    background-color: transparent;
    
}
a:visited {
    color: black;
    background-color: transparent;
  
}
a:hover {
    color: red;
    background-color: transparent;
  
}
a:active {
    color: black;
    background-color: transparent;

}
table {
font-family: simplifica;
font-size: 50px;

}

p{
	font-size: 30px;
	font-family: simplifica;
}
h2{
	font-size: 50px;
	font-family: simplifica;
}





</style>
<body> AMIEL POCHOLO B. SOBISOL</br>
   <center><img src="Cholo.jpg" width="300" height="300"></center>

<center><table>
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
</table></center>
	<h2> Trivia! </h2>

			<p>
				1. My Favorite Sports:
			</p>

			<p id="q1">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q1').innerHTML = 'Basketball and Boxing'">Click to see answer</button>

			<p>
				2. My favorite Hobby: 
			</p>

			<p id="q2">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q2').innerHTML = 'Lifting weights!'">Click to see answer</button>

			<p>
				3. Favorite Food:
			</p>

			<p id="q3">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q3').innerHTML = 'Any food with chicken'">Click to see answer</button>

			<p>
				4.People I hate:
			</p>

			<p id="q4">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q4').innerHTML = 'Negative People + People with No GOALS'">Click to see answer</button>

			<p>
				5. Inspired by quote: 
			</p>

			<p id="q5">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q5').innerHTML = 'Whatever you are, Be a good one. - Abraham Lincoln'">Click to see answer</button>

			</center>


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
 $Email = $_POST['Email'];
 $Comment = $_POST['Comment'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(full_name,Nick_name,Home_Add,Cell_No,Gender,Email,Comment) VALUES('$full_name','$Nick_name','$Home_Add','$Cell_No','$Gender','$Email','$Comment')";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<?php
// define variables and set to empty values
 $full_nameErr = $Nick_nameErr =$Home_AddErr =  $Cell_NoErr =  $GenderErr =  $EmailErr =  $CommentErr ="";
 $full_name = $Nick_name = $Home_Add = $Cell_No = $Gender = $Email  = $Comment ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["full_name"])) {
    $full_nameErr = "Name is required";
  } else {
    $full_name = test_input($_POST["full_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z]+$/",$full_name)) {
      $full_nameErr = "Only letters and Numbers"; 
    }
  }
  if (empty($_POST["Nick_name"])) {
    $Nick_nameErr = "Nickname is required";
  } else {
    $Nick_name = test_input($_POST["Nick_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z]+$/",$Nick_name)) {
      $Nick_nameErr = "Letters Only!"; 
    }
  }
  
  if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid email format"; 
    }
  }
   if (empty($_POST["Home_Add"])) {
    $Home_AddErr = "Home Address is required";
  } else {
    $Home_Add = test_input($_POST["Home_Add"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z]+$/",$Home_Add)) {
      $Home_AddErr = "Only letters and Numbers"; 
    }
  }
   if (empty($_POST["Gender"])) {
    $GenderErr = "Gender is required";
  } else {
    $Gender = test_input($_POST["Gender"]);
  }
}
   if (empty($_POST["Cell_No"])) {
    $Cell_NoErr = "";
  } else {
    $Cell_No = test_input($_POST["Cell_No"]);
    if (!preg_match("[0-9 ]",$Cell_No)) {
      $Cell_NoErr = "Only Numbers are allowed!"; 
    }
  }

  if (empty($_POST["Comment"])) {
    $Comment = "";
  } else {
    $Comment = test_input($_POST["Comment"]);
  }

 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
    <td><input type="text" name="Email" placeholder="Email" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Comment" placeholder="Comment" required /></td>
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
</head>
</html>
