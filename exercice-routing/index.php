<?php

function routing() : string{
    // $route = $_GET['route'];
    if(isset($_GET['route']) && $_GET['route'] === "about"){
        return "about";
    }else if( isset($_GET['route']) && $_GET['route'] === "contact"){
        return "contact";
    }else {
        return "homepage";
    }
return "homepage";
}



require "templates/layout.phtml";

?>