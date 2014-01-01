<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shiyuming
 * Date: 13-10-9
 * Time: 下午3:07
 * To change this template use File | Settings | File Templates.
 */
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
class PapersAction extends Action {
    public function index(){

        $this->display();
    }

}
