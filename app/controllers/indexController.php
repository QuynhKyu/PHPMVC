<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 18/01/2019
 * Time: 12:42 CH
 */
class indexController{
    /*
     * đây là phương thức khởi tạo của 1 class
     *  sẽ luôn được chạy ngay khi class được khởi tạo qua từ khóa
     * new
     * ví dụ: indexController = new indexController
     */
    public  function __construct()
    {


    }

    public function indexAction() {
        // hằng số in ra đây là cái phương thức nào của class nào
        echo '<br> ' .__METHOD__;
    }
}