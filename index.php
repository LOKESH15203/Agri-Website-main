<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $place = $_POST['place'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $other = $_POST['other'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'tanaya';
        
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $sql = "INSERT INTO tanaya.pratik (`name`, `mobile`,`place`,`gender`,`age`,`other`) values ('$name', '$mobile', '$place','$gender','$age','$other')";


        $place = $conn->query('SELECT place FROM pratik WHERE name = "$name"');
        $result = $conn->query("$place");
        $row = mysqli_fetch_assoc($result);
        if ($result) {
            echo "The city was successfully inserted into the database.";
        } 
        else {
            echo "The city was not successfully inserted into the database.";
        }
        mysqli_query($conn, $sql);

        // Create a connection to the MySQL database
        

// Run a query to select all cities in the United States
        //$place = $connection->query('SELECT place FROM pratik WHERE name = "$name"');

// Close the connection to the MySQL database
      
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- <form action="#" method="POST">
        Name : <input type="text" name="name"> <br> Email: <input type="email" name="email"><br>
        Mobile: <input type="number" name="mobile"><br>
        City: <input type="text" name="city"><br>
        <input type="submit" name="submit" value="Send Data">
    </form> -->



      <div class="row">
    <div class="col-md-12">
      <form action="#" method="POST">
        <h1> Sign Up </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Your Basic Info</legend>
        
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">

          <label for="phone">Phone:</label>
          <input type="number" id="number" name="mobile"><br>

          <label for="place">Place:</label>
          <input type="text" id="place" name="place"><br>

          
          <label for="gender">Gender:</label>
          <input type="text" id="gender" name="gender"><br>

          
          <label>Age:</label>
          <input type="number" id="age" name="age"><br>
          
          <label for="other">Other:</label>
          <input type="text" id="other" name="other" style="height: 10em;"><br>

          <div class="btn" style=" padding: 19px 39px 18px 39px; color: #FFF;  background-color: #4bc970;
            font-size: 18px;
            text-align: center;
            font-style: normal;
             border-radius: 5px;
             width: 100%;
              border: 1px solid #3ac162;  width: 100%;
           border-width: 1px 1px 3px;
         box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
            margin-bottom: 10px;">
         <input class="btn" type="submit" name="submit" value="Send Data" style="background-color:#4bc970; 
            font-size: 23px; color: aliceblue;"> 
         </div>
          
            <!-- port 80 error >
    
       </form>
        </div>
      </div>
      
 

</body>
</html>