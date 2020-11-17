<?php


interface db{
    function conn();
}

interface factory{
    function createdb();
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

class mysqlfactory implements factory{
    public function createdb()
    {
        return new dbmysql();
    }

}

class sqlserverfactory implements factory{
    public function createdb()
    {
        return new dbsqlserver();
    }

}

//新增redis连接
class dbredis implements  db{
    public function conn(){
        echo '连接redis成功!';
    }
}

class redisfactory implements factory{
    public function createdb()
    {
        return new dbredis();
    }

}

//客户端
$a=new redisfactory();
$db=$a->createdb();
echo $db->conn();