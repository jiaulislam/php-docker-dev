<?php


class Server {

    function __construct()
    {
        $this->server = array();
        foreach($_SERVER as $key => $value) {
            $this->server[$this->toCamelCase($key)] = $value;
        }
        $this->server = (object) $this->server;
    }

    private static function toCamelCase($variable) {
        $var = explode('_', $variable);
        if (count($var) > 1) {
            $transformed = strtolower($var[0]);
            foreach($var as $k => $v) {
                if ($k != 0){
                    $transformed .= ucfirst(strtolower($v));
                }
            }
            return $transformed;
        }else {
            return strtolower($variable);
        }
    }

    function serverAddr()
    {
        return $this->server->gatewayInterface;
    }

    function everything()
    {
        return $this->server;
    }

    function hostName()
    {
        return $this->server->hostname;
    }

    function home()
    {
        return $this->server->home;
    }

    function httpHost()
    {
        return $this->server->httpHost;
    }

    function httpCookie()
    {
        return $this->server->httpCookie;
    }

    function serverName()
    {
        return $this->server->serverName;
    }

    function remoteAddr()
    {
        return $this->server->remoteAddr;
    }

    function requestedUri()
    {
        return $this->server->requestUri;
    }

    function requestMethod()
    {
        return $this->server->requestMethod;
    }

    function requestTime()
    {
        return $this->server->requestTime;
    }
}