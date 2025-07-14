<?php

function redirect($page, $seesion = [])
{
    $_SESSION[key($seesion)] = $seesion[key($seesion)];

    header("Location:" . URL_ROOT . $page);
    exit;
}
