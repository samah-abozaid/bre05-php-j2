<?php 


function routing(): string
{
    $route = $_GET['route'] ?? 'index';

    if ($route === 'index') {
        return 'index';
    } elseif ($route === 'choice') {
        return 'choice';
    } elseif ($route === 'choice-red') {
        return 'choice-red';
    } elseif ($route === 'choice-grey-blue') {
        return 'choice-grey-blue';
    } else {
        return 'choice-dark-blue';
    }
}


require "./templates/layout.phtml";

?>