<?php get_header(); ?>

  <div id="fp-hero">
    <div class="fp-hero-title">
      <div class="flex-row">
        <div class="fp-hero-title-img">
          <img src="http://www.256klabs.com/wpdev/wp-content/uploads/2017/06/logo-white-small.png" />
        </div>
        <div class="fp-hero-title-header">
          <h1><?php bloginfo('name'); ?></h1>
          <p>
            <?php bloginfo( 'description' ); ?>
          </p>
        </div>
      </div>
    </div>
    <div class="fp-hero-message">
      <div class="flex-row">
        <div class="container">

      
        <p>Hi! My name is Fayek, I'm a developer, engineer, creative coder and music producer. I like to work on React apps, Wordpress themes, Processing sketches, Arduino projects, DIY electronics, creative installations and gameboy music.</p>
      </div>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="title">
      <h1>Projects.</h1>
    </div>
    <div class="filter-nav">
      <div class="filter-list">
        <ul>
          <li class='filter-nav-item' id="all">All</li>
          <li class='filter-nav-item' id="code">Code</li>
          <li class='filter-nav-item' id="electronics">Electronics</li>
          <li class='filter-nav-item' id="music">Music</li>
        </ul>
      </div>
    </div>
  <div class="gallery">
  

<?php


if ( have_posts() ) : while ( have_posts() ) : the_post();

  //  check if post has featured-image
  if (has_post_thumbnail()):
    $thumbnailvar = get_the_post_thumbnail_url($post, 'full');
  else :
    $thumbnailvar = 'http://www.256klabs.com/wpdev/wp-content/uploads/2017/04/bk2.jpg';
  endif;
  
  // check condition of post if it has a custom field value
  if (get_post_custom_values('external-url')['0']):
    $postlink = get_post_custom_values('external-url')['0'];
  else :
    $postlink = get_permalink();
  endif;

/**
 * Send debug code to the Javascript console
 */


  $postcatobj = get_the_category();
  $postcat = "";
  foreach($postcatobj as $value) {
    $postcat .= $value->cat_name . " ";
  }
  
  ?>
  <div class="gallery-box <?php echo $postcat ?> ">
    <a target="_blank" href="<?php echo $postlink; ?>">
    <div class="gallery-box-thumb" style="background-image: url('<?php echo $thumbnailvar ?>')"></div></a>
    
      
      <a target="_blank" href="<?php echo $postlink; ?>" target="_blank">
        <div class="gallery-box-title">
        <h2><?php echo the_title(); ?></h2>
        </div>
      </a>
    
  </div>
  
<?php
endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>
    
  </div>
  
</div>



<div class="code-sites">
  <div class="title">
    <h1>Code Reference.</h1>
  </div>
  <div class="code-container">
    <div class="code-box">
      <div class="icon">
        <a target="_blank" href="https://codepen.io/fayekhelmi/"><i class="fa fa-codepen" aria-hidden="true"></i></a>
      </div>
      <div class="code-info">
        <p>
          Codepen is a great place for testing out code snippets.
        </p>
        <a target="_blank" href="https://codepen.io/fayekhelmi/">View</a>
      </div>
    </div>
    <div class="code-box">
      <div class="icon">
        <a target="_blank" href="https://www.github.com/256k"><i class="fa fa-github" aria-hidden="true"></i></a>
      </div>
      <div class="code-info">
        <p>
          I use github for all my code version control, as well as contribute to other open source projects.
        </p>
        <a target="_blank" href="https://www.github.com/256k">View</a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
