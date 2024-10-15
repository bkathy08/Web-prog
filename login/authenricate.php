<?php
  //include database connection file
  include('database/connecton.php');
  //start a session to manage user data 
  session_start();
  //check if the form is summitted using login button.
  if(isset($_POST['login']))
  {
    //Sanitized the username input 
    //to prevent sql injection
    // unwanted character
    $username = $conn->real_escape_string($_POST['username']); 
    //get your password (note: not yet enypted)
    $password =$_POST['password'];
    //sql query to seslect username from the database
    $sql_username ="SELECT* FROM users WHERE username='$username'";
    //execute the query
    $result= $conn->query($sql_username);

    //check the query returned any results
    if($result->num_rows > 0)
    {
      //fetch all associated records based on username
      $row =$result->fetch_assoc();
      //verify the provided password against
      //the stored has password
    if(password_verify($password,$row['password']))
    {
       //pass is correct,set session variables
       $_SESSION['username']= $username;
       $_SESSION['role'] = $row['role'];
       //Redirect the user to appropriate dashboard
       if($row['role'] == 'admin')
       {
        header("location: client.dashboard");
        //babalik kapag nag false sya but with text or message
       }
       else if ($row['role'] == 'client')
       {
            header("location: client.dashboard");
           //babalik kapag nag false sya but with text or message
       }
    }
    else
    {
        header("location: index.php?incorrect");
        //babalik kapag nag false sya but with text or message
    }

    }
    else
    {
        header("location: index.php?incorrect");
     //babalik kapag nag false sya but with text or message
    }

  }
  else
  {
     header("location: index.php");
     //babalik kapag nag false sya
  }

?>