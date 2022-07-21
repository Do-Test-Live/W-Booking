<?php
require_once('includes/dbcontroller.php');
$db_handle = new DBController();
if (isset($_POST['submit'])) {

    $code = '2NCCMAO3';

    $url = $_SERVER['SERVER_NAME'].'/Order-Detail?code=' . $code;

    $email_to = $_POST['email'];
    $subject = 'Email From Food Island';
    $userName = 'Test User';
    $l = strtolower($userName);
    $u = ucfirst($l);

    $headers = "From: Food Island <" . $db_handle->from_email() . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <h3 style='color:black'>Hi $u!</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>Thank you for reaching out us</p>   
                        
                            <p style='color:black'>Our team is excited to join you on your journey with us!<br>
                                We look forward to speaking with you.<br>
                                If there are any changes to your contact information or availability, please let us know by
                             </p>
                            
                            <p style='color:black;font-weight:bold'>We look forward to speaking with you!<br>
                                Food Island Team
                            </p> 
                             <p style='color:black;text-align: center'>
                                Please Scan The QR Code edit the info
                            </p> 
                            <div style='text-align: center'>
                                <img src='https://chart.googleapis.com/chart?chof=.svg&choe=UTF-8&cht=qr&chs=300x300&chl=$url'/>
                            </div>
                        </div>
                    </body>
                </html>
                ";

    if (mail($email_to, $subject, $messege, $headers)) {
        echo "<script>
                window.location.href='index.php';
                </script>";
    }
}
