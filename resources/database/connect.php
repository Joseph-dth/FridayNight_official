<?php

//phpmailer setting
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';


//database setting
$program = filter_input(INPUT_POST, 'product');
$name = filter_input(INPUT_POST, 'name');
$email= filter_input(INPUT_POST, 'email');
/*
$host = "113.196.82.202";
$dbusername = "root";
$dbpassword = "test123";
$dbname = "FridayNight";
*/

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    //$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    // $mail->Host       = '74.125.23.108';                    // Set the SMTP server to send through
    $mail->Host       = '192.168.1.4';                    // Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->SMTPAuth   = false;                                   // Enable SMTP authentication
    // $mail->Username   = 'simpson.1025.1213@gmail.com';                     // SMTP username
    //$mail->Password   = 'laetitia0429';                               // SMTP password
    // $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    // $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    //$mail->setFrom('simpson.1025.1213@gmail.com');
    $mail->setFrom('simpson.1025.1213@gmail.com');

    $mail->addAddress('simpson.1025.1213@gmail.com');     // Add a recipient
    $mail->addAddress($email);     // Add a recipient
    //$mail->addAddress('watchman99@gmail.com');     // Add a recipient
    /*
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/


    $body = '
            <div style="text-align: center;">
            <p>FridayNight工作團隊</p>
            </div>
            <p>我們已收到您的回覆，不知道您何時有空呢？</p>
            <a href="https://forms.gle/Un5ghAwDrC7DTcnD8">預約會談</a>
            <p>FridayNight全體工作人員敬上</p>';



    // Attachments
    //$mail->addAttachment('/opt/lampp/htdocs/FridayNight');         // Add attachments
   //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
   // Content
   $mail->isHTML(true);                                  // Set email format to HTML
   $mail->Subject = 'FridayNight工作團隊';
   $mail->Body    = $body;
   $mail->AltBody = strip_tags($body);

   $mail->send();
   echo 'Message has been sent';
} catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//mail setting
/*
$mail = new PHPMailer(true);
$result='';
$mail->Host = '192.168.1.4';                    // Set the SMTP server to send through
$mail->Port = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
$mail->SMTPAuth = false;                                   // Enable SMTP authentication
$mail->setFrom('simpson.1025.1213@gmail.com');
$mail->addAddress('simpson.1025.1213@gmail.com');     // Add a recipient
$mail->addAddress($email);     // Add a recipient
$body = ' 
        <div style="text-align: center;">
            <p>FridayNight工作團隊</p>
        </div>
        <p>我們已收到您的回覆，不知道您何時有空呢？</p>
        <a href="https://forms.gle/Un5ghAwDrC7DTcnD8">預約會談</a>
        <p>FridayNight全體工作人員敬上</p>';

//$mail->addAddress('watchman99@gmail.com');     // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'FridayNight確認信件';
$mail->Body    = $body;
$mail->AltBody = strip_tags($body);

if($mail->send()){
    $result="Message has been sent";
}else{
    $result="Somthing went wrong";
}
echo $result;
*/

/*
if (!empty($name)){
    if (!empty($email)){

        


        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
            }else{
                $sql = "INSERT INTO member_test (program, email, name)
                values ('$program','$email','$name')";
                if ($conn->query($sql)){
                echo "<script> alert('We will respond you as soon as we can!');parent.location.href='../../index.html'; </script>"; 
                }else{
                    echo "Error: ". $sql ."
                    ". $conn->error;
                    }
                    $conn->close();
                }
        }else{
            echo "<script> alert('Email should not be empty!');parent.location.href='/'; </script>"; 
            die();
            }
    }else{
        echo "<script> alert('Name should not be empty!');parent.location.href='/'; </script>"; 
        die();
    }



/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';
$program = filter_input(INPUT_POST, 'product');
$name = filter_input(INPUT_POST, 'name');
$email= filter_input(INPUT_POST, 'email');


if (!empty($name)){
    if (!empty($email)){
        $host = "113.196.82.202";
        $dbusername = "root";
        $dbpassword = "test123";
        $dbname = "FridayNight";

        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
        }else{
            $sql = "INSERT INTO member_test (program, email, name)
            values ('$program','$email','$name')";
            if ($conn->query($sql)){
                // Instantiation and passing `true` enables exceptions

                try {
                    //Server settings
                    $mail->SMTPDebug = 2;                      // Enable verbose debug output
                    $mail->isSMTP();                                            // Send using SMTP
                    //$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                    // $mail->Host       = '74.125.23.108';                    // Set the SMTP server to send through
                    $mail->Host       = '192.168.1.4';                    // Set the SMTP server to send through
                    // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->SMTPAuth   = false;                                   // Enable SMTP authentication
                    // $mail->Username   = 'simpson.1025.1213@gmail.com';                     // SMTP username
                    //$mail->Password   = 'laetitia0429';                               // SMTP password
                    // $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    // $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                    $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                    //$mail->setFrom('simpson.1025.1213@gmail.com');
                    $mail->setFrom('simpson.1025.1213@gmail.com');

                    $mail->addAddress('simpson.1025.1213@gmail.com');     // Add a recipient
                    $mail->addAddress($email);     // Add a recipient
                    //$mail->addAddress('watchman99@gmail.com');     // Add a recipient
                    /*
                    $mail->addAddress('ellen@example.com');               // Name is optional
                    $mail->addReplyTo('info@example.com', 'Information');
                    $mail->addCC('cc@example.com');
                    $mail->addBCC('bcc@example.com');*/

                    /*
                    $body = ' 
                        <div style="text-align: center;">
                        <p>FridayNight工作團隊</p>
                        </div>
                        <p>我們已收到您的回覆，不知道您何時有空呢？</p>
                        <a href="https://forms.gle/Un5ghAwDrC7DTcnD8">預約會談</a>
                        <p>FridayNight全體工作人員敬上</p>';
                    
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Test mail for sure';
                    $mail->Body    = $body;
                    $mail->AltBody = strip_tags($body);

                    $mail->send();
                    echo 'Message has been sent';
                    } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    } 


                echo "<script> alert('We will respond you as soon as we can!');parent.location.href='../../index.html'; </script>"; 
            }else{
                echo "Error: ". $sql ."
                ". $conn->error;
            }
            $conn->close();
            }
        }
        else{
            echo "<script> alert('Email should not be empty!');parent.location.href='../../index.html'; </script>"; 
            die();
        }
    }else{
        echo "<script> alert('Name should not be empty!');parent.location.href='../../index.html'; </script>"; 
        die();
    }
*/
?>