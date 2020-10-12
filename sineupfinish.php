<head>
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
        <a href="Sineup.php ">Sign up</a>
    </nav>
  </header>
  <main role="main">
    <section class="sec-intro" role="section">
      <img src="./Images/Headerimg.jpg" alt="West Rolleston is a great school" />
      <footer>
        <div role="navigation">
          <ul class="nav-ul">
  </div>

<div class="body">
Thank for signing up!
</div>
<div class="body">
  
</div>
<div class="body">
  
</div>
</body>
</html>

<php>  
      
      <header>
      <if> (isset($_POST['submit'])) {  
        extract($_POST);  
        $servername = "localhost ";  
        $username   = "Husky";  
        $password   = "Westrollestonschool1";  
        $dbname     = "westrolleston-huskys-website-1-database";  
        // Create connection  
        $conn       = new mysqli($servername, $username, $password, $dbname); 
        // Check connection  
        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }
        $sql = "INSERT INTO `table_name` (fname,uname,lname,address,cno) 
       </if>
    
     <VALUES>('$fname','$uname','$lname','$adress','$cno')";  
        if ($conn->query($sql) === TRUE) {  
            header('Location: login.php');  
        } else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        $conn->close();  
    }  
     </VALUES> 
    </header>
    </php>

    