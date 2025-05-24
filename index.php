<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/components/templates/head.component.php';
require BASE_PATH . '/components/templates/footer.component.php';

?>


<?php
head();
?>

<section class = "container">
    <div class = "description">
        <h2>Welcome to ZIC's Room/Hotel Website</h2>
        <p>Click below to View rooms and rooms available!</p>
        <a href = "/page/room/index.php" class = "button">View Rooms</a>
    </div>
</section>



<?php
footer();
?>


