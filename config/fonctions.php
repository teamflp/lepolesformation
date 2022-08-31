<?php

require_once dirname(__FILE__).'/dbase.php';

/** @return false|void  */
function get_url_action() {
    /* @var $_SERVER type */
    $server = filter_var($_SERVER['PHP_SELF']);
    if ($server) :
        echo 'action="' . filter_var($server, 'PHP_SELF') . '"';
    else :
        return FALSE;
    endif;
}

function url(){
    return $_SERVER['REQUEST_URI'];
}

 // Function qui permet de rediriger vers une autre page
function redirect($url) {
    header('Location: ' . $url);
    exit();
}

// Function qui permet d'inclure un fichier
function includeFile($file) {
    $path =[];
    $path[] = $file;

    // Si chemin relatif
    if (file_exists($file)) {
        include $file;
    } else {
        // Si chemin absolu
        foreach ($path as $key => $value) {
            if (file_exists($value)) {
                include $value;
                require_once dirname(dirname(__FILE__)) . $value . '.php';
            } 
            return false;
        }
    }
}
