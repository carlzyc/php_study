<?php

//策略模式
interface love {
    function sajiao();
}


class keai implements love{
    public function sajiao()
    {
        echo '讨厌,不理你了';
    }
}


class tiger implements love{
    public function sajiao()
    {
        echo '给老娘过来';
    }
}


class girlfriend{
    protected $temp;
    public function __construct($temp)
    {
        $this->temp=$temp;
    }

    public function sajiao(){
        $this->temp->sajiao();
    }
}


$keai=new keai();
$girlfriend=new girlfriend($keai);
$girlfriend->sajiao();
