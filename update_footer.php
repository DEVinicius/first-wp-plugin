<?php
/*
Plugin Name: Alteração de Rodapé
Plugin URI:
Description: Primeiro plugin criado para realizar alterações de rodapé
Version: 1.0
Author: Vinícius Pereira de Oliveira
Author URI:
Text Domain:
License:
*/

function updateFooter()
{
    echo "Meu primeiro plugin - Vinícius Pereira de Oliveira";
}

add_action('wp_footer', 'updateFooter');