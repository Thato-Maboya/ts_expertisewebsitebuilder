<!DOCTYPE html>
<html lang="en">
<head>
  <title>Send mail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    #first{
width:400px;
//padding:24px 20px;
background-color:#fff;
border:1px solid #000;
position:relative;
//left:50%;
float: right;
//top:0
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password], input[type=number],input[type=email],textarea{
width: 100%;
padding: 10px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}
/* Set a style for all buttons */
button {
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}
button:hover {
opacity:1;
}
/* Extra styles for the cancel button */
.cancelbtn {
padding: 14px 20px;
background-color: #f44336;
}
/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
float: left;
width: 50%;
}
/* Add padding to container elements */
.container {
padding: 16px;
}
/* Clear floats */
.clearfix::after {
content: "";
clear: both;
display: table;
}
/* Change styles for cancel button and signup button on extra
small screens */
@media screen and (max-width: 300px) {
.cancelbtn, .signupbtn {
width: 100%;
}
}
//bgcolor for signup page
.bgcolor {
    background-color: #ccffcc;
}
.bg{
    background-color: #ccccff;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    margin:0 auto;

}
.topnav {
  overflow: hidden;
  background-color: #333;
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
<body>
    <?php
    use PHPMailer\PHPMailer\PHPMailer;

// Import PHPMailer classes into the global namespace
// These must be at the t
// op of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;





    
    
            //$servername = "localhost";
            //$username = "root";
            //$password = "Solomaboya@16650";
            //$databasename = "mydatabase";
            // Create connection
            //$conn = new mysqli($servername, $username, $password, $databasename);
    if(isset($_POST['forgt'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['comment'];
        //$select = "SELECT * FROM signup WHERE email='$email'";
        //$result=mysqli_query($conn, $select);
        //$count=  mysqli_num_rows($result);
        //$data=  mysqli_fetch_array($result);
        
        //$idData=$data['id'];
        //$emailData=$data['email'];
        //$nameData=$data['firstname'];
        
        // Load Composer's autoloader
        require 'vendor/autoload.php';
        require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require 'vendor/phpmailer/phpmailer/src/Exception.php';
        // Instantiation and passing `true` enables exceptions
        
        //if($email==$emailData){
        $mail = new PHPMailer();
        
        //require_once "PHPMailer.php";
        //require_once "Exception.php";
        //require 'PHPMailerAutoload.php';
        
        
                //$mail = new PHPMailer;
                //   // Add a recipient
                $mail->isSMTP(true);                                      // Set mailer to use SMTP
                $mail->SMTPDebug=0;
                $mail->SMTPAuth =true;
                $mail->SMTPSecure='ssl';
                $mail->Host='smtp.gmail.com';
                $mail->Port=465;
                $mail->isHTML(true);                                 // Set email format to HTML
                $mail->Username='solomaboya@gmail.com';
                $mail->Password='nthabisen';
                $address='solomaboya@gmail.com';                     // TCP port to connect to
                $mail->setFrom($address);

                $mail->Subject = 'website builder or designer client :';
                $mail->Body    = "Hi, Click the link to reset your Password."."<br><a href=http://localhost/dashboard/EmailPassword.php?id=".$idData.">Reset Password</a>";
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->addAddress($email); 
                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    $msg='<div class="alert alert-success">Message has been sent</div>';
                }  
    }
    
    ?>
    <br><br>

<div class="container">
    <?php
        if (isset($msg)){
            echo $msg;
        }
    ?>
    <?php
        if (isset($errMsg)){
            echo $errMsg;
        }
    ?>
</div>

</body>
</html>



