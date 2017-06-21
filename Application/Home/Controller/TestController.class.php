<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
    public function index(){
        $this->display();


    }

    public function user(){
        exit;
        $data['name'] = '107493265';
        $data['password'] = md5('111111111111111');
        $data['mcode'] = '8BA033C7C710408FB3C62CF20D58A1EF';

        $res = M('member')->add($data);

    }

}
