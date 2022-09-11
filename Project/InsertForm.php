<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['Email'];

//connect to the database
  $connection = mysqli_connect('localhost','root','');
  if (!$connection) {
  die('could not connect to the databse');//termenate
  }
  //used database is project
  $db_select = mysqli_select_db($connection, 'project');//project is the name of the database file that data should be stored in
   if (!$db_select) {
   die('could not find databse');
   }

 //MYSQL Query to insert data in databse called project in a tabel called contactus
 $query="INSERT INTO contactus(Firstname,Lastname,email) VALUES('$fname','$lname','$email')";

// open project database
 if ( !mysqli_select_db( $connection , 'project') )
 die( "<p>Could not open database</p>" );
 // execute query in project database
  $result = mysqli_query( $connection, $query);
if (!$result){
 print( "<p> Could not execute query! </p>\n");
 die();
} // end if
$my_db='project';
print ( "<p> Welcome $fname, $lname to our Book Club</p>\n");
print ( "<p> Your information are saved in the database $my_db </p>\n");
mysqli_close( $connection );
 ?>
