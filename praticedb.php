<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db</title>
</head>
<body>
    <?php
      $hostname = "localhost";
      $username = "root";
      $password = "";
      $database = "getintouch_details";

      $conn = mysqli_connect($hostname,$username,$password,$database);
      if(!$conn){
        die("error :". mysqli_connect_error());
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (isset($_POST["fname"])) {
        $Fname = $_POST["fname"];
    } else {
        
        $Fname = "";
    }
    if (isset($_POST["lname"])) {
        $Lname = $_POST["lname"];
    } else {
        
        $Lname= ""; 
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    } else {
        $email= ""; 
    }
    if (isset($_POST["phone"])) {
        $phone = $_POST["phone"];
    } else {
        $phone= ""; 
    }
    if (isset($_POST["address"])) {
        $address = $_POST["address"];
    } else {
        $address= ""; 
    }
    if (isset($_POST["massage"])) {
        $massage = $_POST["massage"];
    } else {
        $massage= ""; 
    }

        
   

     $sql = "INSERT INTO info (Fname , Lname , email, Phone, Address, massage) VALUES ('$Fname', '$Lname', '$email',''$phone','$Address','$massage');";
    }
     if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
    mysqli_close($conn);
      ?>


</body>
</html>