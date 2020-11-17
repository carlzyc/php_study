<?php

//工厂模式是我们最常用的实例化对象模式，是用工厂方法代替new操作的一种模式。
//
//使用工厂模式的好处是，只需要知道factory这个类和里面的lianjiedb方法。

header('Content-Type:text/html;charset=utf-8');

/**简单工厂示例**/
//共同的接口
interface db{
    function conn();
}

class dbmysql implements db{
    public function conn(){
       echo '连接mysql成功!';
    }
}
class dbsqlserver implements  db{
    public function conn(){
        echo '连接sqlserver成功!';
    }
}


class factory {
    public static function lianjiedb($type){
        if ($type=='mysql'){
            return new dbmysql();
        }elseif($type=='sqlserver'){
            return new dbsqlserver();
        }else{
            return false;
        }
    }
}

//客户端
$a=factory::lianjiedb('mysql');
echo $a->conn();

//如要新增redis连接的话需修改factory里的lianjiedb方法,违反了面向对象的封闭原则(对修改闭,对扩展开,工厂方法请看gongchang2.php)







