<!DOCTYPE html>
<html>
<head>
    <title>Mailer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/image-uploader.min.css">
    <script src="jquery/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Your Name: <input name="name" type="text" size="26"><br />
        Your Email: <input name="email" type="text" size="26"><br />
        Your Message:<br />
        <textarea name="message"></textarea><br />
        <input class="Submit" type="submit" value="Send Message">
    </form>
</body>
</html>
