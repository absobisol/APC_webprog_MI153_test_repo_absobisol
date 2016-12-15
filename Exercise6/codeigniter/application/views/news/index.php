<html>

	<head>
		<h1><b><center><font color = #1a75ff>MY PERSONAL WEBPAGE</font></center></b></h1>
	<style>
		#info{
			border: 1px white;
			color: #66a3ff;
			width: 50%;
			font-size: 40px;
		}

		body{
			color: #66a3ff;
			font-family: simplifica;
		}

		#q1, #q2, #q3, #q4, #q5{
			color: green;
		}
		
		#Visitors{
			background-color: white;
				font-size:40px;
		}
		table{
			color: black;
			font-size:40px;

		.error {color: red;}
		}
		
		p{
			font-size: 40px;
		}
		td{
			font-family: simplifica;
		}
	</style>
	</head>

		<body>
		<center>
			<table id="info">
			<tr>
				<th id="info">Field</th>
				<th id="PI">Information</th>
			</tr>
			<tr>
				<td id="info">Name</td>
				<td id="info">AMIEL POCHOLO B. SOBISOL</td>
			</tr>
			<tr>
				<td id="info">Nickname:</td>
				<td id="info">CHOLO</td>
			</tr>
			<tr>
				<td id="info">Birthdate:</td>
				<td id="info">JULY 12, 1998</td>
			</tr>
			<tr>
				<td id="info">Age:</td>
				<td id="info">18</td>
			</tr>
			<tr>
				<td id="info">Course:</td>
				<td id="info">BS Information Technology, Specializing in mobile and internet technology</td>
			</tr>
			</table>
			<p>
			<br>My Favorite websites:</br>
			<a href= "https://www.facebook.com"><img border="0" alt="Facebook" src="<?php echo base_url('Images/facebook.jpg');?>" width=100 height=100></a>
			<a href= "https://www.twitter.com"><img border="0" alt="Twitter" src="<?php echo base_url('Images/twitter.jpg');?>" width=100 height=100></a>
			<br> My Personal Image:</br>
			<img border="0" alt="Twitter" src="<?php echo base_url('Images/Cholo.jpg');?>" width=300 height=300></a>
			</p>


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

<div id = "Visitors">
<h2><?php echo $title; ?></h2>

<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Nickname</strong></td>
		<td><strong>Email</strong></td>
        <td><strong>Home Address</strong></td>
		<td><strong>Gender</strong></td>
        <td><strong>Cellphone Number</strong></td>
        <td><strong>Comment</strong></td>
		
    </tr>
<?php foreach ($userinfo as $news_item): ?>
        <tr>
            <td><?php echo $news_item['Name']; ?></td>
			<td><?php echo $news_item['Nickname']; ?></td>
			<td><?php echo $news_item['Email']; ?></td>
			<td><?php echo $news_item['Home_Address']; ?></td>
			<td><?php echo $news_item['Gender']; ?></td>
			<td><?php echo $news_item['Cp_Num']; ?></td>
			<td><?php echo $news_item['Comment']; ?></td>
            <td>
                <a href="<?php echo site_url('news/'.$news_item['User_ID']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item['User_ID']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['User_ID']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</div>
