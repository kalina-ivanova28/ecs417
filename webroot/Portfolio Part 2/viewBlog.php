<html>
<head>
<title>Blog Posts</title>
<style type="text/css">
body {
    background-color: DarkSlateGrey;
    font-size: 1.25em;
}
nav {
	display:inline-block;
	width:100%;
	background-color: DarkSlateGrey;
	font-size: 1.25em;
}
nav a {
	float: right;
	color:white;
	padding:1em;
}

nav form {
    float:left;
}

td {
    text-align:center;
    font-size: 1.25em;
}
</style>
</head>
<body>
<?php
    $dbhost = getenv("MYSQL_SERVICE_NAME");
    $dbport = getenv("MYSQL_SERVICE_PORT");
    $dbuser = getenv("DATABASE_USER");
    $dbpwd = getenv("DATABASE_PASSWORD");
    $dbname = getenv("DATABASE_NAME");

    $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
?>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <hgroup>
      <header>
          <h1>Blog Posts</h1>
        </header>
        <link rel="reset" href="reset.css">
        <link rel="stylesheet" href="stylesheet_viewBlog.css">
  </hgroup>

  <nav>
    <a href="./Index.php">Home</a>
    <a href="./logout.php">Log out</a><br/>
    <form id="form_month" name="month_form" method="POST" action="">  
            Select "All Blog Posts" to see all posts or Select a Month and press "Submit"
            <select name="selected">  
            <option value="">All Blog Posts</option>  
            <option value="jan">January</option>
            <option value="feb">February</option>
            <option value="march">March</option>
            <option value="april">April</option>
            <option value="may">May</option>
            <option value="june">June</option>
            <option value="july">July</option>
            <option value="aug">August</option>
            <option value="sep">September</option>
            <option value="oct">October</option>
            <option value="nov">November</option>
            <option value="dec">December</option> 
            </select>  
           <input type='submit' name='submit_button'>
        </form>
        


  </nav>
</html>
<?php
    function LogOut(){
        header("location:logout.php");
    }
    function NoMonth(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts`";

        $result = mysqli_query($conn,$sql);

        $row = mysqli_fetch_array($result);

        $row_total = mysqli_num_rows($result);


    // for ($i = $row_total; $i > 0; $i--){
    //     echo "<tr><td>" . $row[$i]['Date_Time']. "<br/>" . "</td><td>" . $row[$i]['Title'] . "<br/>" . $row[$i]['Post'] . "</td></tr>";
    //     echo "<br/>";
    //     echo "<hr/>";
    // }

        while($row=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

    }   

    function SeparateByMonthJan(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%January%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }

    function SeparateByMonthFeb(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%February%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row2=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }

    function SeparateByMonthMar(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%March%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row2=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }

    function SeparateByMonthApril(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%April%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }

    function SeparateByMonthMay(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%May%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row2=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }

    function SeparateByMonthJune(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%June%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row2=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }

    function SeparateByMonthJuly(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%July%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row2=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }

    function SeparateByMonthAug(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%August%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row2=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }

    function SeparateByMonthSep(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%September%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row2=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }

    function SeparateByMonthOct(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%October%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row2=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }

    function SeparateByMonthNov(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%November%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row2=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }

    function SeparateByMonthDec(){
        $dbhost = getenv("MYSQL_SERVICE_NAME");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT * FROM `Blog_Posts` WHERE Date_Time LIKE '%December%'  ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        while($row2=mysqli_fetch_array($result))
        {   

            echo "<tr><td>" . $row['Date_Time'] . "<br/> " . $row['Title'] . "<br/>" . $row['Post'] . "</td></tr>"; 
            echo "<br/>";
            echo "<hr/>";
        }

        
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if ($_POST["selected"]==""){
            NoMonth();
        }

        if ($_POST["selected"]=="jan"){
            SeparateByMonthJan();
        }

        if ($_POST["selected"]=="feb"){
            SeparateByMonthFeb();
        }

        if ($_POST["selected"]=="march"){
            SeparateByMonthMar();
        }

        if ($_POST["selected"]=="april"){
            SeparateByMonthApril();
        }

        if ($_POST["selected"]=="may"){
            SeparateByMonthMay();
        }

        if ($_POST["selected"]=="june"){
            SeparateByMonthJune();
        }

        if ($_POST["selected"]=="july"){
            SeparateByMonthJuly();
        }

        if ($_POST["selected"]=="aug"){
            SeparateByMonthAug();
        }

        if ($_POST["selected"]=="sep"){
            SeparateByMonthSep();
        }

        if ($_POST["selected"]=="oct"){
            SeparateByMonthOct();
        }

        if ($_POST["selected"]=="nov"){
            SeparateByMonthNov();
        }

        if ($_POST["selected"]=="dec"){
            SeparateByMonthDec();
        }
    }
    mysqli_close($conn);

?>