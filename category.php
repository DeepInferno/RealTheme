<html>
<head>
    <meta charset=utf-8>
    <title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
    </head>
<body>
<div id ="widget-test" class ="widget-test" role= "complementary">
	<?php if ( dynamic_sidebar('header-widget')) : else : endif; ?>
	</div>

	
    </body>
	<footer>This will/should appear at the bottom of the screen</footer>
</html>