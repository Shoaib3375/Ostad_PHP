<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "youremail@example.com"; // Change this to your email address
    $headers = "From: $name <$email>" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
    echo "<p>Thank you for contacting us. We will get back to you shortly.</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>

    <nav>
        <img src="logo.png">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="contact-form">
        <h2>Get In Touch</h2>
        <form action="process.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button class="btn" type="submit">Send</button>
        </form>
    </section>
</main>
<footer>
    <p>&copy; My Website 2023</p>
</footer>
</body>
</html>
