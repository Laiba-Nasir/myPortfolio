<!-- RESOURCES CITATION FOR thank_you.php -->
<!-- https://www.youtube.com/watch?v=YOowArgPkQc  -->
<!-- https://www.youtube.com/watch?v=BIHqMM9Tv4Q&pp=ygUjaG93IHRvIG1ha2UgYSB0aGFuayB5b3UgcGFnZSBpbiBwaHA%3D  -->
<!-- https://www.youtube.com/watch?v=Ig7aLU3TFQk&pp=ygUhaG93IHRvIG1ha2UgYSBzdWNjZXNzIHBhZ2UgaW4gcGhw -->
<!-- https://www.sitepoint.com/community/t/php-form-not-showing-success-or-error-messages-when-submitted/366266/2 -->
<!-- I used the websites above to provide the code, as I got stuck along the way, ChatGPT was useful in guiding me to the right direcion by providing me with the more accurate code  -->
<!-- https://chatgpt.com/?oai-dm=1 -->

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            color: yellow; 
        }
    </style>
</head>
<body>
    <h1>Thank You!</h1>
    <p>Your message has been sent successfully. Here are the details you submitted:</p>
    <ul>
        <li><strong>Name:</strong> <?php echo htmlspecialchars($_GET['name']); ?></li>
        <li><strong>Email:</strong> <?php echo htmlspecialchars($_GET['email']); ?></li>
        <li><strong>Phone Number:</strong> <?php echo htmlspecialchars($_GET['number']); ?></li>
        <li><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($_GET['message'])); ?></li>
    </ul>
    <a href="index.html" style="color: lightblue;">Go back to Home</a>
</body>
</html>
