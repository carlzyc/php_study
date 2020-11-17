<?php

/**程序设计模式之观察者模式
 * 男生小明 同时交往了个女朋友 小丽
 * 小明属于被观察者,小丽属于观察者,当小明去酒吧就会分手*
 */

class man{
    public $observer;

    //绑定观察者
    public function add($obj){
        $this->observer=$obj;
    }
    public function qvjiuba(){
        $this->observer->fenshou();
    }


}

class woman{
    public function fenshou(){
        echo '分手吧';
    }

}

$xiaoming=new man();
$xiaoli=new woman();

//绑定观察者
$xiaoming->add($xiaoli);

//做出去酒吧的操作,触发分手
echo $xiaoming->qvjiuba();
