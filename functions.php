<?php
//Create PDO connection including et fetch mode
/**
 * Create PDO connection including et fetch mode
 *
 * @return PDO a database connection
 */
function getDb(){
    $db = new PDO('mysql:host=db; dbname=diana-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * Retrieves the drums from the database
 *
 * @param PDO $db database connection
 *
 * @return array drums retrieved from the database
 */
function retrieveDrums(PDO $db) : array {
    $query = $db->prepare("SELECT steeldrums.`name`, steeldrums.`manufacturer`, steeldrums.`inches`, steeldrums.`notes`, steeldrums.`color`, steeldrums.`img-url` FROM steeldrums;");
    $query->execute();
    return $query->fetchAll();
}


/**
 * generate the html to display drums
 *
 * @param array $drums drums retrieved from the database
 *
 * @return string generate the html to display drums
 */
function displayDrumHtml(array $drums) : string {
    $druminfo = '';

    if (!count($drums)){
        return 'Error';
    }

    foreach ($drums as $drum) {
        $druminfo .= '<div class="drum">' . '<img src="Drums/' .$drum['img-url'] . '"/>' .
            '<p>Name: ' . $drum['name'] . ' </p>' .
            '<p>Brand: ' . $drum['manufacturer'] . '</p>' .
            '<p>Diameter: ' . $drum['inches'].'"'. '</p>' .
            '<p>Number of notes: ' . $drum['notes'] . '</p>' .
            '<p>Color: ' . $drum['color'] . '</p>'
            . '</div>';
    }
    return $druminfo;
}

