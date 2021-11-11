<!DOCTYPE html>
<html lang="en">
<head>
    <title>Receiving Input</title>
</head>
<body>
    <p> thanks for your input</p>
    <?PHP 
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        print ("<br> Your email address is: $email");
        print ("<br> Contact preferences is: $contact");
    ?>
</body>
</html>