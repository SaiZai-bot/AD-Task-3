<?php

function nav($navilist) {
    echo '<nav><ul class="nav-list">';
    foreach ($navilist as $item){
        echo '<li class="nav-item"><a href = "' . $item['url'] . '">' . $item['label'] . '</a></li>';
    }
    echo '</ul>';
}

?>