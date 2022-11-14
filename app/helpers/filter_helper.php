<?php 
function htmlspecial_array($variable) {
    foreach ($variable as $value) {
        if (!is_array($value)) { $value = htmlspecialchars($value);  }
        else { htmlspecial_array($value); }
    }
}