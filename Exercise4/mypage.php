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
font-family: verdana;
    font-size: 200%;
	background-image: url("1.jpg");
    background-color: #cccccc;
}
th, td {
    font-family: verdana;
	
}

h1 {
font-size: 100%;
text-decoration: underline;


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
font-size: 30px;
}
button {
    background-color: white;
    color: black;
    border-size: 43px;
	border-color: blue;
	font-family: verdana;
	font-size: 32px;
}

button:hover {
background-color: white;
color: green;

}
audio{
display: none;
}




</style>
<body>
AMIEL POCHOLO B. SOBISOL</br>
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
<h1>TRIVIA ABOUT ME!</h1>

<h1 id="Q1">WHAT IS MY TWO FAVORITE SPORTS?</h1>

<button type="button" onclick="document.getElementById('Q1').innerHTML = 'BASKETBALL AND BOXING'">View My Sports!</button>
<h1 id="Q2">MY BEST TRAIT?</h1>
<button type="button" onclick="document.getElementById('Q2').innerHTML = 'OPTIMIST'">I AM......</button>
<h1 id="Q3">FAVORITE FOOD</h1>
<button type="button" onclick="document.getElementById('Q3').innerHTML = 'CHICKEN'">THIS IS DELICIOUS!</button>
<h1 id="Q4">PEOPLE I HATE?</h1>
<button type="button" onclick="document.getElementById('Q4').innerHTML = 'NEGATIVE PEOPLE'">I HATE.....</button>
<h1 id="Q5">MOTTO IN LIFE?</h1>
<button type="button" onclick="document.getElementById('Q5').innerHTML = 'TRUST NO ONE BUT YOURSELF'">Click To Know!</button>
<?php
// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $homeErr = $cellErr = $commentErr = $genderErr = "";
$name = $nickname = $email = $home = $cell = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z]+$/;",$name)) {
      $nameErr = "Only letters and Numbers"; 
    }
  }
  if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("[a-zA-Z ]",$nickname)) {
      $nicknameErr = "Letters Only!"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
   if (empty($_POST["home"])) {
    $homeErr = "Home Address is required";
  } else {
    $home = test_input($_POST["home"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z]+$/;",$home)) {
      $homeErr = "Only letters and Numbers"; 
    }
  }
   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
   if (empty($_POST["cell"])) {
    $cellErr = "";
  } else {
    $cell = test_input($_POST["cell"]);
    if (!preg_match("[0-9 ]",$cell)) {
      $cellErr = "Only Numbers are allowed!"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Join me! Register below.</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 Complete Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
 Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
 E-mail:  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 Home Address:  <input type="text" name="home" value="<?php echo $home;?>">
  <span class="error">*<?php echo $homeErr;?></span>
  <br><br>
 Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <span class="error">*<?php echo $genderErr;?></span>
  <br><br>
 Cell-Phone Number:  <input type="text" name="cell" value="<?php echo $cell;?>">
  <span class="error">*<?php echo $cellErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <p><span class="error">* required field.</span></p>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $email;
echo "<br>";
echo $home;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo $cell;
echo "<br>";
?>
<audio controls autoplay>
<source src="Inconsistencies.mp3" type="audio/mpeg">
</audio>
</body>
</head>
</html>
