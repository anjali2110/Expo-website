<?php
 
    require ("phpmailer/class.phpmailer.php");
 
    if(isset($_POST['submit'])){
        $first_name=$_POST['first_name']; // Get Name value from HTML Form
        $last_name=$_POST['last_name'];
        $cmp=$_POST['cmp'];
        $desg=$_POST['desg'];
        $city=$_POST['city'];
        $mobile=$_POST['mobile'];  // Get Mobile No
        $email=$_POST['email'];  // Get Email Value
        $message=$_POST['message']; // Get Message Value
         
         
        $mail = new PHPMailer();
         
        $mail->IsSMTP();
        $mail->Host = "smtp.google.com"; // Your Domain Name
         
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = "mookambika2k18@gmail.com"; // Your Email ID
        $mail->Password = "uobhsutuxmfawoie"; // Password of your email id
         
        $mail->From = "info@websapex.com";
        $mail->FromName = "WebsApex Team";
        $mail->AddAddress ("anbarivan007@gmail.com"); // On which email id you want to get the message
        $mail->AddCC ($email);
         
        $mail->IsHTML(true);
         
        $mail->Subject = "Enquiry from Website submitted by $name"; // This is your subject
         
        // HTML Message Starts here
         
        $mail->Body = "
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>First Name: </strong></td>
                            <td style='width:400px'>$first_name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Last Name: </strong></td>
                            <td style='width:400px'>$last_name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Company Name: </strong></td>
                            <td style='width:400px'>$cmp</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Designation </strong></td>
                            <td style='width:400px'>$desg</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Residing City Name: </strong></td>
                            <td style='width:400px'>$city</td>
                        </tr>

                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$mobile</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Website name: </strong></td>
                            <td style='width:400px'>$message</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
             
        if(!$mail->Send()) {
            // Message if mail has been sent
            echo "<script>
                alert('Submission failed.');
            </script>";
        }
        else {
            // Message if mail has been not sent
            echo "<script>
                alert('Email has been sent successfully.');
            </script>";
        }
 
    }
?>