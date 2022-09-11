
<?php
 // SELECT  tabel from database query tabel name contactus
 $query = "SELECT * FROM contactus";//select all records from contactus tabel
 $my_db='project';//database name project

 // Connect to MySQL
  $connection = mysqli_connect('localhost','root','');

if (!$connection)
 die( "<p>Could not connect to database</p>" );  //if connot connect to database termenate
 // open database called project
 if ( !mysqli_select_db( $connection, $my_db) )
 die( "<p>Could not open database</p>" );//if could not open database termenate
 // executes/performs the given query on the database 'project'
 $result = mysqli_query( $connection,$query);
if (!$result){
 print( "<p>Could not execute query!</p>" );//if can't execute query
 die( mysqli_error() );//returns the last error description
} // end if
 print( "<p> Bewteen the Pages Book Club Members: <p> " );
 // fetch each record in result set
 for( $counter = 0; $row = mysqli_fetch_row( $result );++$counter ){//go through all record in the tabel
 foreach ( $row as $key => $value )
  // display results
 print( "$value " );
 print( " <p> </p>" );

} // end for
 mysqli_close($connection);
?>
