<?php

function start_route()
{
   echo "uri: " . $_SERVER['REQUEST_URI'] . "<br>";
   $uri=explode("/" , $_SERVER['REQUEST_URI']);
   echo "controller: ".$uri[1]. "<br>";
   echo "action: ".$uri[2];
}
return start_route();
