<?php

namespace Kamil\Framework;

use Exception;

function render_template($template, $params = []): void {
    $path = Config::TEMPLATES . $template;
    if(file_exists($path)){
        extract($params);
        include $path;
    } else {
        throw new Exception("File doesn't exist");
    }
}
