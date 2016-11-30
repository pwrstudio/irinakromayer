<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="theme-color" content="#000">

  <?php // FAVICONS ?>
  <?php get_template_part('template_parts/favicons'); ?>

  <?php // META INFO ?>
  <?php get_template_part('template_parts/meta_info'); ?>


  <title><?php wp_title(" | ", TRUE, "RIGHT"); ?></title>

  <?php wp_head(); ?>

</head>

<!--
  // Replace these classes on the body-element
  // to change the apperance of the logo >>>
  // >>> logo-color
  // >>> logo-video
  // >>> logo-image
-->

<?php // Get page by name ?>
<?php $header = get_page_by_title( 'Header' );?>

<style>

  .color-background {
    background-color: <?php echo get_field("background_color", $header->ID);?>;
  }

  .logo-link:hover ~ .color-background {
    background-color: <?php echo get_field("background_color_hover", $header->ID);?>;
  }

</style>

<body>

  <a href='mailto:<?php echo get_field("email_address", $header->ID);?>' class='logo-link'>
    <?php $logo = get_field('svg', $header->ID); ?>
    <img src="<?php echo $logo['url'];?>" class='logo'>
  </a>

  <?php $style = get_field("background_style", $header->ID);?>
  <?php if($style):?>
    <?php if($style == 'color'):?>
      <div class='color-background'></div>
    <?php elseif($style == 'image'):?>
      <?php $background = get_field('background_image', $header->ID); ?>
      <img src="<?php echo $background['url'];?>" class='image-background'>
    <?php elseif($style == 'video'):?>
      <div class='video-background'>
        <?php $video = get_field('background_video', $header->ID); ?>
        <video src="<?php echo $video['url'];?>" muted autoplay loop ></video>
      </div>
    <?php endif;?>
  <?php endif;?>