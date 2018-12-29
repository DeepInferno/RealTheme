<?php

$latest = new WP_Query([
    'post_type' => 'post', //Gets the post details via WP
    'posts_per_page' => 1,
    'orderby' => 'date'
]);

$name = new WP_Query([
    'post_type' => 'post', //Gets the post details via WP
    'posts_per_page' => 1,
    'category_name' => 'Name',
    'orderby' => 'date'
]);

$second = new WP_Query ([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'offset' => 1
]);

$recent = new WP_Query ([
    'post_type' => 'post', //Gets the post details via WP
    'posts_per_page' => 3,
    'orderby' => 'date'
]);

$postTags = new WP_Query ([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date'
]);

$namePost = $name->posts[0];
$latestPost = $latest->posts[0];
$secondPost = $second->posts[0];
$recentPosts = $recent->posts[0];
$tags = $postTags->posts[0]

//var_dump($allPosts->posts);

/*foreach ($latest->posts as $post) {
    echo '<p>' . get_the_title($post->ID) . '</p>'; //Displays each post onto the webpage
}
*/
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
                    <div class="image-container">
                        <img src="https://placehold.it/300" />
                    </div>
                    <div class="title-heading"><h1><?php echo get_the_title($latest->ID); ?></h1></div>
                    <div class="title-description"><p><?php echo $latestPost->post_content; ?></p></div>
                    <div class="text-container">
                        <p>Hello</p>
                    </div>
                </article>
                
                 <article class="article-container">
                    <div class="image-container">
                        <img src="https://placehold.it/300" />
                    </div>
                    <div class="title-heading"><h1><?php echo get_the_title($second->ID); ?></h1>
                     </div>
                     <div class="title-description"><p><?php echo $secondPost->post_content; ?></p>
                     </div>
                    <div class="text-container">
                        <p>Hello</p>
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
                        <img src="https://placehold.it/50" /><?php echo get_the_title($recentPost->ID); ?>
                        <img src="https://placehold.it/50" /><?php echo get_the_title($recentPost->ID); ?>
                        <img src="https://placehold.it/50" /><?php echo get_the_title($recentPost->ID); ?>
                    </ul>
                </div>
                
                <div class="tags-container">
                    <p><b><em>Tags</em></b></p>
                    <ul>
                        <li>Tag 1</li>
                        <li>Tag 2</li>
                        <li>Tag 3</li>
                    </ul>
                </div>
            </aside>
        </div>


        <footer class="footer-container">
            My footer
        </footer>
    </body>
</html>