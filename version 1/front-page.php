<?php get_header();?>


    Test

    <div class="container">
        <div class="row">
            <div class="col">
                Left Side
            </div>

            <div class="col">
                Right Side
            </div>
        </div>
        
    </div>

    <?php
    // Echo
    echo "<p>This is an example of echoing HTML using PHP.</p>";

    // Decisions
    $number = 10;

    if ($number > 5) {
        echo "The number is greater than 5. <br>";
    } else {
        echo "The number is not greater than 5. <br>";
    }

    // Rep
    echo "<br>Using for loop:<br>";

    for ($i = 1; $i <= 5; $i++) {
        echo "<br>Iteration $i<br>";
    }

    ?>

<?php get_footer();?>