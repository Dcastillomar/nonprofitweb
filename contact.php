<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,700&family=Raleway:wght@600&family=Rubik&family=Tilt+Prism&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Raleway", "Rubik";
        }
    </style>
</head>
<header>
    <?php include "header.html" ?>
</header>
<h1>Contact Us</h1>
<div class="container">
  <form action="mail.php" method="POST">

    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">
    <label for="subject">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Subject..">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
    
</body>
</html>