<form>
    <input type="text" name="nome" placeholder="Nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">
</form>

<?php

require_once '../include/exemplo-01.php';

if (isset($_GET)) {
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: {$key}";
        quebraLinha();
        echo "Valor do campo: {$value}";
        quebraLinha(2);
    }
}

?>