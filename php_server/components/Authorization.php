<?php

namespace Authorization;
class Authorization{

    private $controllerName;
    private $functionName;
    private $http_authorization;

    function __construct($controllerName,$functionName,$http_authorization){
    $this->controllerName = $controllerName;
    $this->functionName = $functionName;
    $this->http_authorization = $http_authorization;
    }

    function get_permission(){
        if ($this->http_authorization == 'Bearer test_123_authorization'){
            return true;
        }else{
            return false;
        }

    }




}