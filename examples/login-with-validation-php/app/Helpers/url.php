<?php

function asset(string $path): string
{
    $baseUrl = '/projetos-estudos/frontend-ui-lab/examples/login-with-validation-php/public/';

    return $baseUrl . '/' . ltrim($path, '/');
}
?>