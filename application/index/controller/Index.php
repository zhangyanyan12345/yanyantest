<?php
namespace app\index\controller;

use Predis\Client;
use think\Cache;
use think\Db;

class Index
{
    public function index()
    {
        /*$client  =  new  Client();

        $client -> set('uid',111);

        $value=$client->get('uid');
        var_dump($value);*/
        ini_set ('memory_limit', '800M');

        $vo [0]=[
            'user'=>111,
            'name'=>222,
            'phone'=>333
        ];
        $vo [1]=[
            'user'=>111,
            'name'=>222,
            'phone'=>333
        ];

        Cache::set('listtest',$vo,0);

        // $vo=json_encode($vo);也可以存json字符串

        $res = Cache::get('listtest');

        dump($res);
		echo  'lalalalal';
    }

}
