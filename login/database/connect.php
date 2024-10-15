

     <?php
           $host = "localhost";
           $user = "root";
           $password = "";
           $dbname ="kathy_db";
           //Connection string to connect database
           $conn = new mysqli($host,$user,$password,$dbname);

           if($conn->connect_error)
           {
             die("Connection Failed: ".$conn->connect_error);
           }

     ?>



