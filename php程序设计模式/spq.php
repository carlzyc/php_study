<?php
/**适配器模式*/
class huodong{
    public function pashan(){
        echo '周日爬山';
    }



}



interface app {
    function pashan();

}


class spq implements app{
    public $temp;
    public function __construct($temp)
    {
        $this->temp=$temp;
    }

    public function pashan(){
        $this->temp->pashan();
    }
    public function youyong(){
        echo '周六游泳';
    }
}
$li=new huodong();
$spq=new spq($li);
$spq->pashan();
$spq->youyong();
