<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/sineup.css" />
<title>West Rolleston</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css" />
    <link rel="stylesheet" type="text/css" href="CSS/Topnav.css" />
  </head>
<body>
  <div class="wrapper">
  <header role="banner">
    <nav role="navigation">
      <p>
        <a href="index.php">
          <img src="./Images/small-logo2.png" />
        </a>
      </p>

      <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="Contact.php">Contact</a>
        <a href="About-us.php">About </a> 
        <a href="Our-story.php">Reference</a> 
        <a href="Where-are-we.php">Where are we?</a>
        <a href="Test-hide.php">The ambassadors</a>
        <a href="Sineup.php ">Sign up</a>
    </nav>
</head>
<body>
<form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form> 
</body>




</html>