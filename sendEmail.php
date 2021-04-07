<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if ( isset($_POST['email'])) {
        $name = "FA4 Team";
        $email = $_POST['email'];
        $subject ="Email Xac Nhan";

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "thidieu040421@gmail.com"; //enter you email address
        $mail->Password = '0362911617'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
         $mail->addAddress("$email"); //enter you email address
        $mail->Subject = ("$subject");
        $mail->Body =  ('Chào bạn ' .$email .' <br><br>Cảm ơn bạn đã đăng ký FA4 Team! <br> Hãy theo dõi page để biết nhiều món mới nhé.<br><Br>Cảm ơn!'); 
        ;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
    // if(isset($_POST['btn'])){
    //     echo "";
    // }
?>
