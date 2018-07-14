<?php get_header(); ?>

<div class="container section-lowered">
    <h1 class="main-title">Hi! I am a self-taught web developer from London.</h1>
    <h2 class="main-subtitle">I am an aspiring full-stack web developer. I use this website to show what I have learnt.</h2>
    <div class="illustration-main"></div>
</div>
<div class="section section-blue">
    <div class="container">
        <h1 class="section-title">My Skills</h1>
        <div class="row">
            <div class="col-lg-4">
                <div class="icons" id="frontend"></div>
                <ul class="skill-list">
                    <li class="skill-list-item__title">Front End</li>
                    <li class="skill-list-item">HTML</li>
                    <li class="skill-list-item">CSS (SASS)</li>
                    <li class="skill-list-item">JavaScript (ReactJS)</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="icons" id="design"></div>
                <ul class="skill-list">
                    <li class="skill-list-item__title">Design</li>
                    <li class="skill-list-item">Adobe XD</li>
                    <li class="skill-list-item">Adobe Photoshop</li>
                    <li class="skill-list-item">Adobe Illustrator</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="icons" id="backend"></div>
                <ul class="skill-list">
                    <li class="skill-list-item__title">Back End</li>
                    <li class="skill-list-item">PHP (Laravel)</li>
                    <li class="skill-list-item">MySQL</li>
                    <li class="skill-list-item">Node.js</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="section section-grey">
    <div class="container">
        <h1 class="section-title">My Work</h1>
        <?php query_posts('posts_per_page=4'); ?>
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
</div>

<?php get_footer(); ?>