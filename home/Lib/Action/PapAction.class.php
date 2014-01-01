<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shiyuming
 * Date: 13-10-8
 * Time: 下午10:37
 * To change this template use File | Settings | File Templates.
 */

error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
class PapAction extends Action {
    public function index(){

        $this->display();
    }

}
