<?php

/**门面模式
 * 照相为例
 * 开始 1.打开闪关灯 2.打开照相机
 * 结束 1.关闭闪光灯 2.关闭相机
 */

class light {
    public function turn_on(){
        echo '闪关灯已打开 <br />';
    }

    public function turn_off(){
        echo '闪光灯已关闭 <br />';
    }
}

class camera {
    public function turn_on(){
        echo '照相机已打开 <br />';
    }

    public function turn_off(){
        echo '照相机已关闭 <br />';
    }
}

//正常情况需实例化以上两个类 分别去调用里面的打开方法或关闭

//门面模式
class menmian{
    private $light;
    private $camera;
     function __construct()
    {
        $this->light=new light();
        $this->camera=new camera();
    }

    public function start(){
        $this->light->turn_on();
        $this->camera->turn_on();
    }

    public function stop(){
        $this->light->turn_off();
        $this->camera->turn_off();
    }

}


$a=new menmian();
$a->start();
$a->stop();



