<?php
/**
 * About Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['about-section-toggle']==1) { ?>
<section id="about" class="about lite <?php echo $integral['about-custom-class']; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
                <?php if ($integral['about-title-icon']) { ?><i class="fa <?php echo $integral['about-title-icon']; ?>"></i><?php } ?>
				<?php if ($integral['about-title']) { ?><h2 class="bigtitle"><span><?php pll_e('Про нас'); ?></span></h2><?php } ?>
                <?php if ($integral['about-subtitle']) { ?><p class="subtitle"><?php pll_e('Про нас сабтайтл'); ?></p><?php } ?>
			</div>
			<div class="col-md-12">
                <?php
                    $my_id = $integral['about-text'];
                    $post_id = get_post($my_id);
                    $content = $post_id->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                ?>
			</div><!--feature-->
		</div>
	</div>
</section><!--about-->
<?php } ?>