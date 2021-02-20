<?php

require_once '../include/exemplo-01.php';

echo '<select>';

for ($i = date('Y'); $i >= date('Y') - 100; $i--) {
    echo '<option value="' . $i . '">' . $i .  '</option>';
}

echo '</select>';
