<?php

function get_users($args) {
    if (file_exists($args)) {
        return  json_decode(file_get_contents($args), true);
    } else {
        echo "File could not be found!";
    }
}

function redirect(string $file, $args) {
    echo '<form id="form" action="'.$file.'" method="POST">';
    foreach ($args as $a => $b) {
        echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
    }
    echo "</form>";
    echo '<script type="text/javascript">document.getElementById("form").submit();</script>';
}

date_default_timezone_set('Europe/Paris');
function write_to_log(string $file, string $user, string $message) {
    file_put_contents($file, date("j-m-y")." | ".date("G:i:s")." | ".$user." | ".$message."\n", FILE_APPEND | LOCK_EX);
}


?>