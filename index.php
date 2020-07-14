
<?php
/**
 * Site: betabase
 * Autor: Douglas Matos da Silva
 * Data: 10 de Setembro, 2018
 */


/* Define a página atual pela URL */
$pagina = 'home';

if(isset($_GET['i'])) {
    $pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'app/views/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
    case 'home.php';
        include 'app/views/home.php';
        break;

    case 'clientes.php';
        include 'app/views/clientes.php';
        break;

    case 'trabalhos.php';
        include 'app/views/trabalhos.php';
        break;

    case 'contato.php';
        include 'app/views/contato.php';
        break;

        default:
            include 'app/views/home.php';
            break;
}

/* Carrega o footer.php */
include 'app/views/footer.php';

