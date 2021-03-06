<?php

namespace app\api\controller;

use fun\auth\Api;
use support\Request;

class Index extends Api
{
    public function beforeAction(Request $request)
    {
        return parent::beforeAction($request); // TODO: Change the autogenerated stub
    }

    public function index(Request $request)
    {

        return response('登录账号ID：'.$this->member_id);
    }

    public function view(Request $request)
    {
        return view('index/view', ['name' => 'webman']);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

}
