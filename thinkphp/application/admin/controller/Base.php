<?php


namespace app\admin\controller;


use think\Controller;
use app\admin\model\Teacher as teacherModel;
class Base extends Controller
{

    protected function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        if (!teacherModel::isLogin()){
            $this->error('请登录',url('login/index'));
        }
    }

}