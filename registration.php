<?php
 require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user registration|php</title>
    <link rel="stylesheet" type= "text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type= "text/css" href="css/style.css">
</head>
<body>
    <div>
        <?php
        if(isset($_POST['create'])){
            // echo 'user submitted.'
             $firstname    = $_POST['firstname'];
             $lastname     =$_POST['lastname'];
             $email        =$_POST['email'];
             $phonenumber  =$_POST['phonenumber'];
             $password     =$_POST['password'];
             $sql = "INSERT INTO users (firstname,lastname,email) VALUES(?,?,?,?,?)";
             $stmtinsert = $db->prepare($sql);
             $result = $stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);
             if($result){
                echo "successfully saved.";
             }else{
                echo "there were erroers while saving the data";
             
              echo $firstname , "" , $lastname , "" , $phonenumber , "" , $password ;
             }
        }
        ?>
    </div>
    <div>
        <form action="registration.php" method="post">
      <!-- <div class="row"; -->
          <div class="container">
                <h1>registration</h1>
                <p>fill up the form with correct value.</p>
                 <hr class="mb-3"> 
                 <i class="fa-solid fa-circle-user"></i>
                <label for="firstname"><b>firstname</b></label>
                <input class="form-control" type="text" name="firstname" required>
                <label for="lastname"><b>lastname</b></label>
              
                <input class="form-control" type="text" name="lastname" required>
                <label for="email"><b>email address</b></label>
                <i class="fa-solid fa-envelope"></i>
                <input class="form-control" type="text" name="email" required>
                <label for="phonenumber"><b>phonenumber</b></label>
                <!-- <i class="fa-regular fa-lock"></i> -->
                <input class="form-control" type="text" name="phonenumber" required>
                <label for="password"><b>password</b></label>
            
                <input class="form-control" class="form-control" type="password" name="password" required>
               
                <input type="submit" name="create" value="sign up">
                <i class="fa-brands fa-google"></i>
                </div>
            <!-- </div> -->
        </form>
    </div>
    
</body>
</html>