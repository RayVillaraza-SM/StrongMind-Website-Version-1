<?php

$full_name = $_POST['full_name'];
$email_address = $_POST['email_address'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$formcontent = "From: $full_name at $email_address \n Subject: $subject \n Message: $message";

$recipient = "ray.villaraza@strongmind.com";

$mailheader = "From: $email_address \r\n";

if(mail($recipient, 'StrongMind: '.$subject, $formcontent, $mailheader)) { 
     echo '
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>StrongMind</title>
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="css/style.css">
    
    <link rel="stylesheet" media="screen" href="css/responsive.css">
</head>

<body>

<!-- HEADER -->
<header class="row">
	<section class="container">
        <h1><a href="index.html" title="StrongMind - Home"><img class="img-responsive" src="images/hdr-logo-strongmind.png" alt="StrongMind"></a></h1>
		<p class="contact-confirmation text-center">Thank you for reaching out to us! We will get back to you shortly.</p>
        </section>
    </section>
</header>

<section class="copyright row text-center">
	<p>© 2012 - 2013 Strongmind. All Rights Reserved.</p>
</section>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/js/bootstrap.min.js"></script>
<script src="js/respond.js"></script>

</body>
</html>
'; 
} else { 
     echo '
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>StrongMind</title>
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="css/style.css">
    
    <link rel="stylesheet" media="screen" href="css/responsive.css">
</head>

<body>

<!-- HEADER -->
<header class="row">
	<section class="container">
        <h1><a href="index.html" title="StrongMind - Home"><img class="img-responsive" src="images/hdr-logo-strongmind.png" alt="StrongMind"></a></h1>
		<p class="contact-confirmation text-center">Oops! There was an error in sending your message, please try again. If this problem persists, e-mail us at <a href="info@strongmind.com" title="E-mail us instead!">info@strongmind.com</a></p>
        </section>
    </section>
</header>

<section class="copyright row text-center">
	<p>© 2012 - 2013 Strongmind. All Rights Reserved.</p>
</section>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/js/bootstrap.min.js"></script>
<script src="js/respond.js"></script>

</body>
</html>
';}