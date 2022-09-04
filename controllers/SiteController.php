<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    /**
     * @return string
     * @package app\controllers
     */

    public  function home()
    {
        $params = [
            "name" => "welcome to milad frame work"
        ];



        return $this->render('home',$params);
    }

    public function contact()
    {

        $params = [
            "name" => "welcome to milad frame work"
        ];
        return $this->render('contact',$params);


    }

    public  function handleContact(Request $request)
    {
        $body =$request->getBody();
        var_dump($body);
//        $params = [
//            "jj" => "sdfsd"
//        ];
//        return $this->render('contact',$params);
    }



}