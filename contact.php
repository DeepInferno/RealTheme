<?php

$myemail = "johnathanward@hotmail.co.uk";
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = _POST['message'];

Name: $name
Email: $email
Subject: $subject
Message: $message
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
                            
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </article>
            </main>
            
            <aside class="aside-container">
                <div class="bio-container">
                   <!-- <div class="image-container">
                        <img src="https://placehold.it/200" />
                    </div>
                    -->
                    <div class="text-container">
                        <h1 class="name-container"><?php echo get_the_title($namePost->ID); ?></h1>
                        <p><?php echo $namePost->post_content; ?></p>
                    </div>
                </div>
                
                <div class="posts-container">
                    <p><b><em>Recent Posts</em></b></p>
                    <ul>
                        <img src="https://placehold.it/50" /><?php echo get_the_title($recentPosts->ID); ?>
                        
                        <?php foreach ($recent->post as $recentPosts) {
    echo  get_the_title($recentPosts->ID); 
} ?>
                    </ul>
                </div>
                
                <div class="tags-container">
                    <p><b><em>Post Tags</em></b></p>
                    <ul>
                        <p><?php echo $tags->post_content; ?></p>
                    </ul>
                </div>
            </aside>
        </div>


        <footer class="footer-container">
            My footer
        </footer>
    </body>
</html>