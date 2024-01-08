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
        <!-- Hero Section -->
        <section class="home-hero">
            <h1>Welcome to James Cook University Open Day!</h1>
            <p>Join us to discover your future, explore our campus, and meet the faculty and students.</p>
        </section>

        <!-- Video Section -->
        <section class="home-video">
            <video id="openhouseVideo" width="100%" height="auto" autoplay muted loop>
                <source src="<?php echo get_template_directory_uri(); ?>./openhousevid.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- Play/Stop Button -->
            <button id="videoControl">Pause</button>

        </section>

        <!-- Ranking Section -->
        <section id="jcu-ranking" class="ranking-section">
            <h2>World Rankings</h2>
            
            <!-- Ranking Bars -->
            <div class="ranking-bar-container">
                <div class="ranking-bar" data-percentage="98" style="background-color: #1e90ff;">Top 2% University in the World</div>
                <div class="ranking-bar" data-percentage="100" style="background-color: #ff8c00;">Top 100 in Earth & Marine Sciences</div>
                <div class="ranking-bar" data-percentage="97" style="background-color: #32cd32;">#1 in Australia and #14 in the World for Sustainable Education</div>
                <!-- Add more ranking bars as needed -->
            </div>
        </section>

        <!-- Animated ranking logo -->
        <section id="jcu-rankings-logos" class="rankings-logos-section">
            <div class="rankings-logos-container">
                <!-- Each logo will be wrapped in a div with a class for animation -->
                <div class="ranking-logo animated-logo" data-delay="1900">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ranking-QS.png" alt="#1AUS and #1WORLD for Sustainable Edu">
                </div>
                <div class="ranking-logo animated-logo" data-delay="2635">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ranking-THE.png" alt="Top 2% university in the world">
                </div>
                <div class="ranking-logo animated-logo" data-delay="2300">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ranking-UN.png" alt="#5 in the World THE impact Rankings">
                </div>
                <div class="ranking-logo animated-logo" data-delay="1350">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ranking-WUR.png" alt="#1 in the World for Marine and Freshwater Bio">
                </div>
                <div class="ranking-logo animated-logo" data-delay="800">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ranking-GUG.png" alt="5 Stars Good Universities Guide">
                </div>
                <div class="ranking-logo animated-logo" data-delay="1550">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ranking-IRUA.png" alt="IRUA membership">
                </div>
                <div class="ranking-logo animated-logo" data-delay="1100">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ranking-QS2.png" alt="5 Stars QS URanking">
                </div>
            </div>
        </section>

        <!-- Info Section -->
        <section class="home-info" id="about">
            <!-- <h2 class="about-intro">About JCU</h2> -->
            <!-- <p class="about-intro">James Cook University has been at the forefront of education and research.  -->
                <!-- Our programs offer a blend of theory and practical experience to prepare you for the real world.</p> -->

            <!-- About Slideshow -->
            <div class="slideshow-container" id="admission">
                <!-- First Slide -->
                <div class="slide fade">
                    <h2>Trimester System</h2>
                    <p>With a trimester program, you can complete your Bachelors degree in 2 years 
                        and Masters degree in 1 year (depending on the course taken).</p>
                    <h2>Globally recognised Australian degree.</h2>
                    <p>You will graduate with exactly the same globally recognised degree as 
                        students who study at James Cook University in Australia.</p>
                </div>

                
                <!-- Second Slide -->
                <div class="slide fade">
                    <h2>Admissions Requirements</h2>
                    <p>The entry requirements differ from country to country and according to the applicant's desired course of study. 
                        In general applicants must have satisfactorily completed 12 years of schooling 
                        and appropriate English Proficiency level equating to a minimum IELTS of 6.0. 
                        Pathway programs are available for progression to our degree courses.</p>
                        <p>Email: <a href="mailto:admissions-singapore@jcu.edu.au">admissions-singapore@jcu.edu.au</a></p>
                    </div>
                    
                <!-- Third Slide -->
                <div class="slide fade">
                    <h2>JCU Intercampus Exchange Program</h2>
                    <p>James Cook University provides the opportunity for you to study in Singapore 
                        and in Australia and yet still remain as a Singapore based student paying your fees in Singapore currency. 
                        This is a unique program in Asia and is only able to operate because the university operates across both countries. 
                        The program is designed to ensure you get the best possible outcomes from your years of study with the university.</p>
                </div>
                    
                <!-- Fourth Slide -->
                <div class="slide fade">
                    <h2>Varie of courses</h2>
                    <p><b> majors in Business:</b> You can complete the double major at no extra cost or time commitment</p>
                    <p><b> Joint Masters of IT and Business Administration:</b> Get broader industry exposure and wider career options with a joint Masters program.</p>
                    <p><b>Psychology Accreditation:</b> Our Bachelor of Psychological Science courses are accredited by the Australian Psychology Accreditation Council (APAC).</p>
                    <p><b>Diploma Programs:</b> Students with Year 12, GCE 'A' Level or its equivalent who do not meet direct entry to a degree program are eligible to pursue this qualification.</p>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>

            <!-- Include about from about.php -->
            <section id="home-info">
            <?php get_template_part('about'); ?>
            </section>

        </section>

        <!-- Call to Action Section -->
        <!-- Include call to action section from cta.php -->
        <section id="cta">
        <?php get_template_part('cta'); ?>
        </section>

        <!-- Visit Our Campus Section -->
        <!-- Include form from visit-campus.php -->
        <section id="visit-our-campus">
        <?php get_template_part('visit-campus'); ?>
        </section>

        <!-- Include form from form.php -->
        <section id="enroll-now-form">
        <?php get_template_part('form'); ?>
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

</script>


<?php
// get_sidebar();
get_footer();
