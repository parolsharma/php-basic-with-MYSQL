<?php
$insert=false;
    if(isset($_POST['name'])) {
    
      //set connection variables
    
    $server= "localhost";
    $username="root";
    $password="root";
    $dbname="trip";
     // create a database connection
    $con = mysqli_connect($server,$username,$password,$dbname);
     // check for conection success
    if(!$con) {
        echo "database error";
    }
    //collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
   
   
   $sql = "INSERT INTO Trip(name,age,gender,email,phone,other,dt) VALUES('$name','$age','$gender','$email','$phone','$desc', current_timestamp());"; 
   
   //echo $sql;
    
   //ecexute the query
    if (mysqli_query($con, $sql)) {
       // echo "New record created successfully";

       //flag for successful insertion
       $insert=true;
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
    // close the database connection
    mysqli_close($con);
    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome To Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
      <img class="bg" src="bg.jpg" alt="IIT kharagpur">
    <div class="container">
      <h1>Welcome to IIT kharagpur US Trip Form</h1>
      <p>
        Enter your details and submit this form to confirm your participation in
        the trip
      </p>
      <?php
      if($insert==true) {
      echo "<p class='submitmsg'>Thank you for submitting your form. We are happy to see you joining us for the US trip</p>";
      }
      ?>
      <form action="index.php" method="POST">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name"
        />
        <input type="text" name="age" id="age" placeholder="Enter your age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter your gender"
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your email"
        />
        <input
          type="phone"
          name="phone"
          id="phone"
          placeholder="Enter your phone"
        />
        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="Enter any other information here"
        ></textarea>
        <button class="btn">Submit</button>
      </form>
    </div>
    <script src="index.js"></script>
  </body>
</html>
