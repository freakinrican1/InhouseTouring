<?php get_header(); ?>

<div id="content">
<h1 id="inhouselogo">Inhouse Touring</h1>

<video id="uhm" autoplay video muted loop>>
  <source src= "<?php bloginfo('template_directory');?>/images/Uhm.mp4" type="video/mp4">
  <source src= "<?php bloginfo('template_directory');?>/images/Uhm.ogv" type="video/ogg">
    Your browser does not support the video tag.
</video>


  
  <!-- <nav>
    <li id='home' class='nav-li'> -->
<div id="homemenu"> 
	  </div>
	   
<?php $output = wp_nav_menu( array(
'menu' => 'nav',
'container' => false,
'echo' => '0',
// 'menu_class' => 'menu',
'items_wrap' => '<ul id="m" class="n">%3$s</ul>',
'depth' => 2)); ?>  
<?php echo $output; ?>     
       
       
    <!-- </li>
    <li id='about' class='nav-li'>
      Artists
    </li>
    <li id='shows' class='nav-li'>
      Shows
    </li>
    <li id='home' class='nav-li'>
      Contact
    </li> -->
  </nav>

</div>
 <div id="text"> 

<h2>Inhouse Touring is a booking agency based in Omaha, Nebraska. Started by Jordan Smith, Inhouse works with passionate bands who are looking to tour in North America. With 6 years of tour booking experience, Inhouse can help your band get on the road and get the exposure it deserves. Feel free to contact us or send music.  </h2>
</div>


<?php get_footer(); ?>