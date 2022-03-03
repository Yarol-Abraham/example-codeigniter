<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    function debugin($variable)
    {
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';
        exit;
    };

