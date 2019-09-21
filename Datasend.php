<!DOCTYPE html>
<html lang="en">
<title>Web</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-to1p:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}

//Slide show styles
img {
  vertical-align: middle;
  border: 1px solid #ddd;
  border-radius: 6px;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
//Horizontal line resize
.hori{
    size: 30px;
}
/* Large rounded green border */
hr.new5 {
  border: 10px solid green;
  border-radius: 5px;
}
hr.new6 {
  border: 10px solid tomato;
  border-radius: 3px;
}
</style>
<body>
<?php
    use PHPMailer\PHPMailer\PHPMailer;
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
                $mail->setFrom($email);
                $mail->addReplyTo($email, 'Information');

                $mail->Subject = 'Website builder or designer client :';
                $mail->Body    = $name."<br>".$message;
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->addAddress($address); 
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
