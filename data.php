<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "book_issue";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$dbname);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  // echo "Connected successfully";
  $title=$_POST['title'];
  $author=$_POST['author'];
  $p_year=$_POST['p_year'];
  $genre=$_POST['genre'];
  $sql="INSERT INTO  `book_issue`.`books` (`title`, `author`, `p_year`, `genre`, `dt`) VALUES ('$title', '$author', '$p_year', '$genre', current_timestamp());";


  echo $sql;

  if($conn->query($sql)==true){
    echo "sucessfully";
  }
  else{
    echo "error $sql <br> $conn->error";
  }

  $conn->close()





?>
