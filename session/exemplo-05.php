<?php
require_once './configuracao.php';
require_once '../include/exemplo-01.php';

echo session_save_path();

quebraLinha();

var_dump(session_status());

quebraLinha();

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo 'A sessão está desabilitada.';
        break;
    case PHP_SESSION_ACTIVE:
        echo 'A sessão está ativa.';
        break;
    case PHP_SESSION_NONE:
        echo 'A sessão está habilitada e uma existe.';
        break;
    default:
        break;
}