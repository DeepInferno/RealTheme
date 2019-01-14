<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Real Theme
 * @since 1.0
 * @version 1.0
 */

$name = new WP_Query ([
    'post_type' => 'post',
    'posts_per_page' => '1',
    'category_name' => 'Name',
    'orderby' => 'date'
]);


$to ='johnathanward@hotmail.co.uk';
$subject = 'The subject';
$message = 'This is the body of the content';
$email = 'This is the users email';

wp_mail('johnathanward@hotmail.co.uk', 'The subject', 'The message');

$namePost = $name->posts[0];

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
                        <form method="post" action="<?php wp_mail('$email', '$subject', '$message') ?>">
                            <h1>Email Form</h1>
                            <input type="name" name="name" placeholder="eg. John Smith">
                            <br>
                            <input type="email" name="<?php $email ?>" placeholder="eg. me@me.com">
                            <br>
                            <input type="name" name="<?php $subject ?>" placeholder="eg. Subject name here">
                            <br>
                            <textarea id="message" name="<?php $message ?>" placeholder="Write something..." style="height:200px;width:200px"></textarea>
                            <br>
                            
                            <button type="test">Submit</button>
                        </form>
                    </div>
                </article>
            </main>
        </div>
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
                        
                    </ul>
                </div>
                
                <div class="tags-container">
                    <p><b><em>Post Tags</em></b></p>
                    <ul>
                        <p><?php echo $tags->post_content; ?></p>
                    </ul>
                </div>
            </aside>
      
        
        
        <footer class="footer-container">
            <a href="../index.php">Home</a>
        </footer>
    </body>
</html>