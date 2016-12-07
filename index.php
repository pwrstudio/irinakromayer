<?php get_header(); ?>

<?php $content = get_page_by_title( 'Landing page' );?>

<?php if(have_rows('content', $content->ID)):?>
  <?php while ( have_rows('content', $content->ID)) : the_row(); ?>
    <?php $video = get_sub_field('video'); ?>
    <?php if($video):?>
      <video src='<?php echo $image['url']; ?>' muted autoplay loop class="main <?php echo get_sub_field('size');?>"></video>
    <?php else:?>
      <?php $image = get_sub_field('image'); ?>
      <img src="<?php echo $image['url']; ?>" class="main <?php echo get_sub_field('size');?>">
    <?php endif;?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
