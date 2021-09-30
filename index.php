
<?php

require_once 'functions.php';

$db = getDb();
$drums = retrieveDrums($db);
$drumHtml = displayDrumHtml($drums);


?>



<!DOCTYPE html>
<html lang="en-GB">


<head>
    <title>Steel Drums Collection</title>
    <link rel="stylesheet" href="styles.css" type="text/css" >

</head>
<body>

<header>
    <h1>Welcome</h1>
</header>

<section>
    <div class="vid">
        <video controls>
            <source src=”http://techslides.com/demos/sample-videos/small.ogv” type="video/ogg">
            <source src="videoOne.mp4" type="video/mp4">
        </video>
    </div>
    <div class="about">
        <p> Allow me to tell you a little story about how I first came across my first hang drum. It was a sunny October in Barcelona.
            Wandering the narrow mysterious cobbled streets, we ended up in a small square where you could enjoy the weather as you sipped the local Sangria.
            Very potent there, I must add. Anyhow, it seemed like the perfect place to relax. So there we were for a few hours.
            20mins in we heard one of the most beautiful sounds playing across the square. A traveler was playing what looked like a
            flying saucer. After taking us on a journey with the sound of his music he came over for donations. That's the
            moment I fell in love and discovered a whole new world of drums.
        </p>
    </div>
</section>

<section class="collection">
    <div class="info">
        <?php
        echo $drumHtml;
        ?>
    </div>
</section>

</body>
</html>

