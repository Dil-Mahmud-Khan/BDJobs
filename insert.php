<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 
 // servername => localhost
 // username => root
 // password => empty
 // database name => bdjobs
 $conn = mysqli_connect("localhost", "root", "", "bdjobs");
  
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
  
 // Taking all 6 values from the form data(input)
 $bookname = isset($_REQUEST['bookname']) ? $_REQUEST['bookname'] : '';
 $publishername =  $_REQUEST['publishername'];
 $publisherage = $_REQUEST['publisherage'];
 $pageno =  $_REQUEST['pageno'];
 $publishdate = $_REQUEST['publishdate'];
 $booktype = isset($_REQUEST['booktype']) ? $_REQUEST['booktype'] : '';
  
 // Performing insert query execution
 // here our table name is college
 $sql = "INSERT INTO jobs  VALUES ('$bookname',
     '$publishername','$publisherage','$pageno','$publishdate','$booktype')";
  
 if(mysqli_query($conn, $sql)){
     echo "<h3>Showing all the data</h3>";

     echo nl2br("\n$bookname\n $publishername\n "
         . "$publisherage\n $pageno\n $publishdate \n$booktype");
 } else{
     echo "ERROR: Hush! Sorry $sql. "
         . mysqli_error($conn);
 } 
 // Close connection
 mysqli_close($conn);
 ?>
</body>
</html>