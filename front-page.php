<?php get_header(); ?>

<!-- HERO -->
<section class="hero-light">
    <div class="container hero-flex">
        <div class="hero-text">
            <h1>✨ Find Clarity in Your Life</h1>
            <p>
                We help you understand your past, present, and future through
                powerful astrology insights.
            </p>
            <a href="#" class="btn-primary">Explore Services</a>
        </div>

        <div class="hero-image">
            <img src="https://via.placeholder.com/400" alt="Astrology">
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="features container">
    <h2>Why Choose Us?</h2>

    <div class="cards">
        <div class="card light">
            <h3>🔍 Accurate Predictions</h3>
            <p>Based on real astrological calculations</p>
        </div>

        <div class="card light">
            <h3>🧘 Personal Guidance</h3>
            <p>Solutions tailored just for you</p>
        </div>

        <div class="card light">
            <h3>⚡ Quick Reports</h3>
            <p>Get your insights instantly</p>
        </div>
    </div>
</section>

<!-- SERVICES PREVIEW -->
<section class="services-preview">
    <div class="container">
        <h2>Our Expertise</h2>

        <div class="cards">
            <div class="card light">
                <h3>💖 Love & Relationships</h3>
                <p>Understand your partner better</p>
            </div>

            <div class="card light">
                <h3>💼 Career & Finance</h3>
                <p>Make smarter life decisions</p>
            </div>

            <div class="card light">
                <h3>🪐 Horoscope Reading</h3>
                <p>Daily, weekly & yearly insights</p>
            </div>
        </div>
    </div>
</section>

<section class="blog-section container">
    <h2>Latest Articles</h2>

    <div class="blog-grid">

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6
        );

        $query = new WP_Query($args);

        if($query->have_posts()) :
            while($query->have_posts()) : $query->the_post();
        ?>

        <div class="blog-card">

            <!-- IMAGE -->
            <div class="blog-image">
                <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
            </div>

            <!-- CONTENT -->
            <div class="blog-content">

                <p class="blog-date">
                    <?php echo get_the_date(); ?>
                </p>

                <h3><?php the_title(); ?></h3>

                <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                </p>

                <a href="<?php the_permalink(); ?>" class="read-btn">
                    Read Article →
                </a>

            </div>

        </div>

        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo "<p>No posts found</p>";
        endif;
        ?>

    </div>
</section>

<?php get_footer(); ?>