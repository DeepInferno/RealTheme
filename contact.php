<?php

$myemail = "johnathanward@hotmail.co.uk";
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = _POST['message'];

wp_mail($myemail, $name, $subject, $email, $message);
?>

<html>
    <head>
        <meta charset=utf-8>
        <title><?php bloginfo('title'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
    </head>
    <body>        
         <header class="header-container">
            <h1 class="heading"><?php echo get_bloginfo('name'); ?></h1>
            <p class="subheading"><?php echo get_bloginfo('description'); ?></p>
        </header>

        <div class="global-container">
            <main class="main-container">
                <article class="article-container">
                    <div class="email-form">
                        <form method="post" action="success.php">
                            <input type="name" name="name" placeholder="eg. John Smith">
                            <br>
                            <input type="email" name="email" placeholder="eg. me@me.com">
                            <br>
                            <input type="name" name="subject" placeholder="eg. Subject name here">
                            <br>
                            <input type="name" name="message" placeholder="eg. Type your message here">
                            <br>
                            
                            <button type="test">Submit</button>
                        </form>
                    </div>
                </article>
            </main>
        </div>
    </body>
</html>