<html>
<header>
	<h1> Staff Login</h1>
</header>
<body>
	<form action="stafflogin.php" method="post">
	Type "A for Admin login, or type "M" for Mental Health Advisor: <input type="text" name="identifyerID" required><br><br>
   	Employee ID: <input type="text" name="employeeID" required><br><br>
   	Password: <input type="password" name="Password" required><br><br>
   <input type="submit" value="Submit" />
   <input type="button" name = "Cancel" value="Cancel" onClick = "window.location='../index.php';"/>
</form>
</body>
</html>