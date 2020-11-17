<?php
//单例模式
class sigle{
    static public $temp=null;
    //防止在外部被实例化,final防止被重写
    final protected function __construct()
    {

    }

    //获取实例的唯一入口
    static public function getinl(){
        if (self::$temp===null){
            self::$temp=new sigle();
        }
        return self::$temp;
    }

    //封锁clone
    final protected function __clone()
    {

    }


}

$s1=sigle::getinl();
$s2=clone $s1;
if ($s1===$s2){
    echo '是一个对象';
}else{
    echo 'bu是一个对象';
}