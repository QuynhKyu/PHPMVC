<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 18/01/2019
 * Time: 12:45 CH
 */
class errorController{

    public  function  __construct()
    {

    }

    public  function indexAction(){

        echo '<br>'. __METHOD__;
        exit;
    }
}