<?php
include "classes/db/connect.php";

if(isset($_POST['done']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    echo $name.$email;
    #$query="SELECT * FROM feeback WHERE name='$name'";
    #$exec=$con->query($query);
    #if($exec->num_rows==0)
    #{
        $query2="INSERT INTO feedback (name,email,message)VALUES ('$name','$email','$message')";

        if($con->query($query2))
        {   
            //echo $query;
            echo "<script>alert('Your Feedback has been submited.'); location.href='contact.php'</script>";
            //header("location:");
        }
        else
        {
            echo $query;
        }
    #}
    #else
    #{
        /*header("location:viewtables.php");*/
    #echo"<script>alert('Duplicate Values Inserted.');location.href='viewtables.php' </script>";
    #}

}
?>