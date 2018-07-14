<?php get_header(); ?>
    <div class="container posts-container">
        <?php while (have_posts()) : the_post(); ?>
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(1110, 300) );?>   
            <a class="work-link" href="<?php the_permalink(); ?>">
                <div class="work-wrap" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center; background-size: cover;">
                    <div class="info-container">
                        <h2 class="work-title"><?php the_title(); ?></h2>
                        <?php
                            $posttags = get_the_tags();
                                if ($posttags) {
                                foreach($posttags as $tag) {
                                    echo '<span class="tag">'. $tag->name . '</span>' . ' '; 
                                }
                            }
                        ?>
                    </div>
                </div>
            </a>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>