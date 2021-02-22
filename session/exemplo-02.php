<?php
require_once 'configuracao.php';

// Em vez de usar session_unset(), usar conforme abaixo:
// unset($_SESSION['nome']);

echo $_SESSION['nome'];