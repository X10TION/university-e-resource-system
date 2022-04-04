<?php 
include 'connections.php';

if(isset($_POST['multi'])){
    $title = mysqli_real_escape_string($connection,$_POST['title']);
     $author = mysqli_real_escape_string($connection,$_POST['author']);
      $date = mysqli_real_escape_string($connection,$_POST['year']);
      $faculty = mysqli_real_escape_string($connection,$_POST['faculty']);
      $department = mysqli_real_escape_string($connection,$_POST['department']);
    $descriptions = mysqli_real_escape_string($connection,$_POST['descriptions']);
    $file =$_FILES['resource']["name"];
     $tempname = $_FILES['resource']["tmp_name"];
     $folder = "video/" .$file;
     move_uploaded_file($tempname, $folder);

     $sql = "INSERT INTO video (title,name,faculty,department,descriptions,author,publications) VALUES ('$title','$folder','$faculty','$department','$descriptions','$author','$date')";
     
     if(!mysqli_query($connection,$sql)){
        $mess = "Please invalid Credentials"; 
            }
     else{

         $mess= "you have successfully make one contribution.. to &copy;MAU-LEARN";
     }
}

if(isset($_POST['books'])){
    $title = mysqli_real_escape_string($connection,$_POST['title']);
     $author = mysqli_real_escape_string($connection,$_POST['author']);
      $date = mysqli_real_escape_string($connection,$_POST['year']);
      $faculty = mysqli_real_escape_string($connection,$_POST['faculty']);
      $department = mysqli_real_escape_string($connection,$_POST['department']);
    $descriptions = mysqli_real_escape_string($connection,$_POST['descriptions']);
    $file =$_FILES['resource']["name"];
     $tempname = $_FILES['resource']["tmp_name"];
     $books = "books/" .$file;
     move_uploaded_file($tempname, $books);

     $sql = "INSERT INTO books (title,attach,faculty,department,description,author,publications) VALUES ('$title','$books','$faculty','$department','$descriptions','$author','$date')";
     
     if(!mysqli_query($connection,$sql)){
        $mess = "Please invalid Credentials"; 
            }
     else{

         $mess= "you have successfully make one contribution.. to &copy;MAU-LEARN";
     }
}
?>