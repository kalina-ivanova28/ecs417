<?php
    session_start();
    $_SESSION["User"]= "LoggedIn";
    include "Blog_Page.html";

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $dbhost = getenv("MYSQL_SERVICE_HOST");
        $dbport = getenv("MYSQL_SERVICE_PORT");
        $dbuser = getenv("DATABASE_USER");
        $dbpwd = getenv("DATABASE_PASSWORD");
        $dbname = getenv("DATABASE_NAME");

        $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
            


        $current_datetime=(string) date("jS \of F Y h:i A");
        $title = $_POST["title"];
        $post = $_POST["text1"];

        $sql = "INSERT INTO `Blog_Posts` (`Date_Time`, `Title`, `Post`) VALUES ('$current_datetime', '$title', '$post')";

        $rs=mysqli_query($conn,$sql);

        if ($title !== "" and $post !== "")
        {
            header("location: viewBlog.php");
            
        }
        
        
        mysqli_close($conn);

    }

?>