<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container"><h1> Join with Sellkori Family</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name : <input type="text" name="name"><br><br>
	Email: <input type="text" name="email" ><br><br>
	Website: <input type="text" name="website"><br><br>
	Comment: <textarea name="comment" rows ="5" cols = "50"></textarea><br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>
</div>

</body>
</html>

 
