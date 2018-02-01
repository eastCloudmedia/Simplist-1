<?php

namespace Route\Core;

class Router
{

    protected static $BaseController="Controller\\";
    public static function Register()
    {
        $CurrentRoute= self::getCurrentRoute();
        $Routes = self::isRouteDefined("$CurrentRoute");
        $RequestVerb = $Routes['verb'];
        $CurrentRouteVerb = self::currentRequestVerb();

        if ($CurrentRouteVerb==$RequestVerb)
        {
            list($Folder,$Controller,$Method)=explode(".",$Routes['target']);
            $ControllerClass= self::$BaseController.$Folder."\\".$Controller;
            $ControllerInstance = new $ControllerClass;
            if (method_exists($ControllerInstance,"$Method"))
            {
                $ControllerInstance->$Method();
            }
            else
            {
                //print '<div class="Container" style="text-align: center;vertical-align: middle;padding-top: 300px;">';
                //print '<div class="MainText" style="text-align: center;vertical-align: middle;font-size: 100px;font-family: '.'Calibri Light'.';">NOT FOUND</div>';
                //print '<div class="SubText" style="text-align: center;vertical-align: middle;font-size: 25px;padding-top: 0px;font-family: '.'Calibri Light'.';">Or the area is restricted.</div>';
                //print '</div>';
                return $Routes['/NotFound'];
            }
        }
        else
        {
            print '<div class="Container" style="text-align: center;vertical-align: middle;padding-top: 300px;">';
            print '<div class="MainText" style="text-align: center;vertical-align: middle;font-size: 100px;font-family: '.'Calibri Light'.';">Area restrited</div>';
            print '<div class="SubText" style="text-align: center;vertical-align: middle;font-size: 25px;padding-top: 0px;font-family: '.'Calibri Light'.';">This page wont accept POST requests.</div>';
            print '</div>';
        }

    }

    public static function getCurrentRoute()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public static function isRouteDefined(string $Route)
    {
        $Routes = self::getRoutes();
        if (array_key_exists($Route,$Routes))
        {
            return $Routes[$Route];
        }
        else
        {
            return $Routes['/NotFound'];
        }
    }

    public static function getRoutes()
    {
        $Routes = include PATH . DIRECTORY_SEPARATOR . 'Setting/Routes.php';
        return $Routes;
    }
    public static function currentRequestVerb()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
?>