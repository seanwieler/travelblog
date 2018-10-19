<?php

add_shortcode("travel_grid", "travel_grid_func");

function travel_grid_func($atts, $content=null) {
    ob_start();
    ?>
    <ul>
        <?php foreach ($atts as $attname ==> $attval): ?>
            <li><strong><?php echo $attname; ?></strong> <?php echo $attval; ?></li>
        <?php endforeach; ?>
    </ul>
    <p><?php echo $content; ?></p>
    <?php
    return ob_get_clean();
}
?>