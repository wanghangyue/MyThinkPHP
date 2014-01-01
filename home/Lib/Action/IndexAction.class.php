<?php
// 鏈被鐢辩郴缁熻嚜鍔ㄧ敓鎴愶紝浠呬緵娴嬭瘯鐢ㄩ��
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
class IndexAction extends Action {
    public function index(){
	$this->display();
    }

}

