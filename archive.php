<div class="archive-page">
	<?php
	 get_header();
	?>
   <article id="post-87" class="post-87 page type-page status-publish hentry">
      <div class="entry-content">
         <div id="et-boc" class="et-boc">
            <div class="et_builder_inner_content et_pb_gutters3">
               <div class="et_pb_section et_pb_section_0 gotham et_pb_with_background et_pb_fullwidth_section et_section_regular">         
                  <section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_pb_bg_layout_dark et_pb_text_align_left">
                     <div class="et_pb_fullwidth_header_container left">
                        <div class="header-content-container center">
                           <div class="header-content">
                              <h1 class="et_pb_module_header"><?php single_cat_title(); ?></h1>
                              <div class="et_pb_header_content_wrapper"></div>
                           </div>
                        </div>
                     </div>
                     <div class="et_pb_fullwidth_header_overlay"></div>
                     <div class="et_pb_fullwidth_header_scroll"></div>
                  </section>
               </div> <!-- .et_pb_section -->
            <div class="et_pb_section et_pb_section_1 et_section_specialty">
               <div class="et_pb_row">
                  <div class="et_pb_column et_pb_column_2_3 et_pb_column_0   et_pb_specialty_column  et_pb_css_mix_blend_mode_passthrough">
                     <div class="et_pb_row_inner et_pb_row_inner_0">
                        <div class="et_pb_column et_pb_column_4_4 et_pb_column_inner et_pb_column_inner_0   et-last-child">
                           <div class="et_pb_module et_pb_blog_0 et_pb_blog_grid_wrapper">
                              <div class="et_pb_blog_grid clearfix et_pb_bg_layout_light ">
                                 <div class="et_pb_ajax_pagination_container">
                                    <?php
                                       if ( have_posts() ) :
                                          while ( have_posts() ) : the_post();
                                             $post_format = et_pb_post_format(); 
                                              ?>
                                             <article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>

                                          <?php
                                             $thumb = '';

                                             $width = (int) apply_filters( 'et_pb_index_blog_image_width', 400 );

                                             $height = (int) apply_filters( 'et_pb_index_blog_image_height', 250 );
                                             $classtext = 'et_pb_post_main_image';
                                             $titletext = get_the_title();
                                             $thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'Blogimage' );
                                             $thumb = $thumbnail["thumb"];

                                             et_divi_post_format_content();

                                             if ( ! in_array( $post_format, array( 'link', 'audio', 'quote' ) ) ) {
                                                if ( 'video' === $post_format && false !== ( $first_video = et_get_first_video() ) ) :
                                                   printf(
                                                      '<div class="et_main_video_container">
                                                         %1$s
                                                      </div>',
                                                      $first_video
                                                   );
                                                elseif ( ! in_array( $post_format, array( 'gallery' ) ) && 'on' === et_get_option( 'divi_thumbnails_index', 'on' ) && '' !== $thumb ) : ?>
                                                   <div class="et_pb_image_container">
                                                      <a class="entry-featured-image-url" href="<?php the_permalink(); ?>">
                                                      <?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
                                                      </a>
                                                   </div>
                                             <?php
                                                elseif ( 'gallery' === $post_format ) :
                                                   et_pb_gallery_images();
                                                endif;
                                             } ?>

                                          <?php if ( ! in_array( $post_format, array( 'link', 'audio', 'quote' ) ) ) : ?>
                                             <?php if ( ! in_array( $post_format, array( 'link', 'audio' ) ) ) : ?>
                                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                             <?php endif; ?>

                                             <p class="post-meta">
                                                <span class="published"><?php the_date(); ?></span>
                                                  |  <?php 

                                                      foreach(get_the_category() as $key => $value )
                                                         {
                                                            echo '<a href="'.get_category_link($value->cat_ID).'">'. $value->name .'</a>';
                                                            if($key < (count(get_the_category()) -1)){
                                                               echo " , ";
                                                            }
                                                         }
                                                     ?>
                                            </p>

                                             <?php

                                                if ( has_excerpt() ) {
                                                   the_excerpt();
                                                } else {
                                                   truncate_post( 270 );
                                                }?>
                                                <a class="read-more" href="<?php the_permalink(); ?>" class="more-link">read more</a>
                                          <?php endif; ?>

                                             </article> <!-- .et_pb_post -->

                                       <?php
                                             endwhile;
                                             wp_reset_postdata();

                                             if ( function_exists( 'wp_pagenavi' ) )
                                                wp_pagenavi();
                                             else
                                                get_template_part( 'includes/navigation', 'index' );
                                          else :
                                             get_template_part( 'includes/no-results', 'index' );
                                          endif;
                                       ?>
                                 </div> 
                              </div>
                           </div>
                        </div> <!-- .et_pb_column -->
                     </div> <!-- .et_pb_row_inner -->
                  </div> <!-- .et_pb_column -->
                  <div class="et_pb_column et_pb_column_1_3 et_pb_column_1    et_pb_css_mix_blend_mode_passthrough et_pb_column_single">
                     <?php echo do_shortcode('[et_pb_section global_module="9306"][/et_pb_section]');?>
                  </div> <!-- .et_pb_column -->
               </div> <!-- .et_pb_row -->
            </div>
         </div>
      </div>               
   </div> <!-- .entry-content -->
</article>

<?php echo do_shortcode('[et_pb_section global_module="9396"][/et_pb_section]');?>

	<?php
		get_footer();
	?>
</div>


