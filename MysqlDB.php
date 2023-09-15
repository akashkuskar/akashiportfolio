<?php
// error_reporting(0);
if(isset($_POST['send'])!=NULL)
{
  $con=pg_connect("host=localhost port=5432 dbname=portfolio user=postgres password=pass@123") or die ("Could not connect to the server\n");
  // echo " connected successfull";
  $name=$_POST['name'];
  $email=$_POST["email"];
  $subject=$_POST["subject"];
  $message=$_POST["message"];

  $query="INSERT INTO form(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
  $result=pg_query($con,$query);
}
  if($result)
  {
    echo "Submited Successfully..!\n";
  }
  else
  {
    echo "Error Occured: Enable to connect..!\n";
  }

  pg_close($con);

?>







  



