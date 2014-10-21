<?php get_header(); ?>

<!-- /*
Template Name: Artists
*/ -->

<div id="content">
<h2 id="inhouselogo">Inhouse Touring</h2>
<h1 id="contactgraphic">Artists</h2>

  
  <!-- <nav>
    <li id='home' class='nav-li'> -->
    
<?php $output = wp_nav_menu( array(
'menu' => 'nav',
'container' => false,
'echo' => '0',
// 'menu_class' => 'menu',
'items_wrap' => '<ul id="m" class="n">%3$s</ul>',
'depth' => 2)); ?>  
<?php echo $output; ?>     
       
       
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class(); ?> class= "text" id="post-<?php the_ID(); ?>">
		<!-- <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> -->
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>

	<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>

<?php else : ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1>Not Found</h1>
	</div>

<?php endif; ?>


  
</div>
</div>
  
<?php get_footer(); ?>