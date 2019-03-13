<?php
namespace app\index\controller;
use \think\Request;
//http://serverName/index.php（或者其它应用入口文件）/模块/控制器/操作/参数/值…
class Index extends \think\Controller
{
    public function __construct()
    {
        parent::__construct();
        $request = Request::instance();
        $this->assign('action',$request->action());
    }

    public $model;
    //首页展示
    public function index()
    {
        return $this->fetch('hello/index');
    }

    //公司简介
    public function company()
    {
        return $this->fetch('company/index');
    }

    //游戏中心
    public function game()
    {
        return $this->fetch('game/index');
    }


    //新闻中心
    public function news()
    {
        return $this->fetch('news/index');
    }


    //商务合作
    public function cooperation()
    {
        return $this->fetch('cooperation/index');
    }


    //联系我们
    public function contact()
    {
        return $this->fetch('contact/index');
    }

    //百度地图
    public function map()
    {
        return $this->fetch('map/map');
    }
}
