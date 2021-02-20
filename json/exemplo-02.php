<?php

$json = '[{"nome":"Jean Carlos","idade":25},{"nome":"Bianca","idade":10}]';

// Segundo argumento é uma flag para criar array, senão transformará em objeto:
print_r(json_decode($json, true));