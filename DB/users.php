<?php

function get_users($args = null) {
    if (file_exists($args)) {
        return  json_decode(file_get_contents($args), true);
    } else {
        echo "Nope";
    }
}

?>