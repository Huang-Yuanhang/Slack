<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package version2
 */

get_header();
?>

	<main id="primary" class="site-main">
        <!-- Home Hero Section from homerhero.php -->
        <section id="homehero">
        <?php get_template_part('homehero'); ?>
        </section>

        <!-- JCU ranking Section from ranking.php -->
        <section id="ranking">
        <?php get_template_part('ranking'); ?>
        </section>

        <!-- Brochure section from brochure.php -->
        <section id="brochure">
        <?php get_template_part('brochure'); ?>
        </section>

        <!-- Educational Path from edupath.php -->
        <section id="edupath">
        <?php get_template_part('edupath'); ?>
        </section>

        <!-- Information Section from info.php -->
        <section id="info">
        <?php get_template_part('info'); ?>
        </section>

        <!-- About section is loaded inside info.php -->

        <!-- Call to action section from cta.php -->
        <section id="cta">
        <?php get_template_part('cta'); ?>
        </section>

        <!-- Visit our Campus Section from visit-campus.php -->
        <section id="visit-our-campus">
        <?php get_template_part('visit-campus'); ?>
        </section>

        <!-- Include form from form.php -->
        <section id="enroll-now-form">
        <?php get_template_part('form'); ?>
        </section>

        <!-- Video from journeyvideo.php -->
        <section id="journeyvideo">
        <?php get_template_part('journeyvideo'); ?>
        </section>

        <!-- Include Back to Top Button from totop.php -->
        <section id="back-to-top">
        <?php get_template_part('totop'); ?>
        </section>

	</main><!-- #main -->


<script>
    // Play/Stop video button 
    document.addEventListener('DOMContentLoaded', function() {
        var video = document.getElementById('openhouseVideo');
        var button = document.getElementById('videoControl');

        button.addEventListener('click', function() {
            if (video.paused) {
                video.play();
                button.textContent = 'Pause';
            } else {
                video.pause();
                button.textContent = 'Play';
            }
        });
    });

    // Read More button 
    document.addEventListener('DOMContentLoaded', function() {
        var aboutContent = document.getElementById('about-content');
        var readMoreBtn = document.getElementById('about-read-more');

        readMoreBtn.addEventListener('click', function() {
            var isExpanded = aboutContent.classList.contains('expanded');
            aboutContent.classList.toggle('expanded', !isExpanded);
            readMoreBtn.textContent = isExpanded ? 'Read More' : 'Read Less';
        });
    });

    // Animation trigger
    document.addEventListener('DOMContentLoaded', function() {
        var rankingBars = document.querySelectorAll('.ranking-bar');

        rankingBars.forEach(function(bar) {
            var percentage = bar.getAttribute('data-percentage') + '%';
            bar.style.setProperty('--percentage', percentage);
            
            // Trigger the animation after a short delay
            setTimeout(function() {
                bar.classList.add('ranking-bar-animate');
            }, 500);
        });
    });

    // Animation logo
    document.addEventListener('DOMContentLoaded', function() {
        var logos = document.querySelectorAll('.animated-logo');
        logos.forEach(function(logo) {
            // Set a delay based on the data-delay attribute
            var delay = logo.getAttribute('data-delay');
            setTimeout(function() {
                logo.classList.add('animate');
            }, delay);
        });
    });

    // Add smooth scrolling for all links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Slide show - information admission
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
    }

    // JavaScript to toggle the visibility of the Back to Top button
    document.addEventListener('DOMContentLoaded', (event) => {
    const backToTopButton = document.querySelector('.back-to-top');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) { // Button visible after scrolling down 500px
        backToTopButton.style.display = 'block';
        } else {
        backToTopButton.style.display = 'none';
        }
    });

    backToTopButton.addEventListener('click', (e) => {
        window.scrollTo({
        top: 0,
        behavior: 'smooth'
        });
    });
    });

    // Brochure
    document.querySelectorAll('.brochure-download').forEach(function(el) {
    el.addEventListener('click', function() {
        // Find the brochure item parent of this link
        var item = this.closest('.brochure-item');
        if (item) {
            item.scrollIntoView({ behavior: 'smooth', inline: 'center' });
        }
    });
});


</script>


<?php
// get_sidebar();
get_footer();
