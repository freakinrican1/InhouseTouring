<?php get_header(); ?>

<div id="content">
<h1 id="inhouselogo">Inhouse Touring</h1>

<video id="uhm" autoplay>
  <source src= "<?php bloginfo('template_directory');?>/images/Uhm.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>


  
  <!-- <nav>
    <li id='home' class='nav-li'> -->
       <?php wp_nav_menu( array( 'theme-location' => 'nav' ) ); ?>
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
<h2>About Inhouse</h2>  
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>


<?php get_footer(); ?>