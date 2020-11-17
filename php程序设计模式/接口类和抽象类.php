<?php

/**
 * 接口类:interface
 * 其实他们的作用很简单，当有很多人一起开发一个项目时，可能都会去调用别人写的一些类，
 * 那你就会问，我怎么知道他的某个功能的实现方法是怎么命名的呢，这个时候php接口类就起到作用了，
 * 当我们定义了一个接口类时，它里面的方式是下面的子类必须实现的。
 */

interface Shop
{

    public function buy($gid);

    public function sell($gid);

    public function view($gid);
}

/**
 * Interface Shop
 * 声明一个shop接口类，定义了三个方法：买(buy),卖(sell),看(view),
 * 那么继承此类的所有子类都必须实现这3个方法，少一个都不行，如果子类没有实现这些话，就无法运行。
 * 实际上接口类说白了，就是一个类的模板，一个类的规定，
 * 如果你继承此类这类，你就必须遵循我的规定，少一个都不行，但是具体怎么做，我不管，那是你的事
 *
 * 结论 ：接口类就是一个类的领导者，指明方向，子类必须完成它指定方法。
 */

class BaseShop implements Shop
{
    public function buy($gid)
    {
        echo('你购买了ID为'.$gid.'的商品');
    }

    public function sell($gid)
    {
        echo('你销售了ID为'.$gid.'的商品');
    }

    public function view($gid)
    {
        echo('你查看了ID为'.$gid.'的商品');
    }
}

$shop = new BaseShop();
echo $shop->buy(123).PHP_EOL;
echo $shop->sell(456).PHP_EOL;
echo $shop->view(789).PHP_EOL.PHP_EOL;

/**
 * --------------------------------------------------------------------------------
 */

/**
 * 抽象类:abstract
 * 其实抽象类和接口类有一部分很像，记得在哪里看见这样一句话，抽象类就把类 相似的部分抽出来，
 * 这句看上去很搞笑，其实它说出了抽象类的真理，抽象类的作用是，当你发现你的很多类里面用很多方法你不断的在重复写，那你就可以考虑使用抽象类了，
 * 你可能会说“我不是可以重写一个类每个公共类我个实例化一个这个公共类，调用相同的方法就可以了”，
 * 这里是可以，实际上抽象类做的工作也就是这个，不过他省去了你实例化的这个步骤，让你就像直接调用本类方法一样方便，而且你还可以重载这个方法。
 */
abstract class ShopCart
{
    public function buy($gid)
    {
        echo('你购买了ID为'.$gid.'的商品');
    }

    public function sell($gid)
    {
        echo('你销售了ID为'.$gid.'的商品');
    }

    public function view($gid)
    {
        echo('你查看了ID为'.$gid.'的商品');
    }
}

/**
 * 这里是一个例子，想上面一样我定义了一个商店类，抽出了它所有像的部分，买(buy),卖(sell),看(view),
 * 并且抽象类里都实现了这些方法，那么继承它的子类就自动获得了这些方法，子类就做它自己独特的东西，介绍代码的重复，提高复用性。
 *
 * 结论：抽象类就是一个类的服务提供商，拥有众多服务，非必须使用，当需要的时候调用即可，如果你觉得提供服务的不满足，你可以自己来做。
 */
class newShop extends ShopCart
{
    var $itme_id = null;

    public function __construct($id)
    {
        $this->itme_id = $id;
    }

    public function sell2()
    {
        $this->sell($this->itme_id);
    }

    public function down($item)
    {
        echo('你下架了ID为'.$item.'的商品');
    }
}

$newShop = new newShop(100);
echo $newShop->buy(123).PHP_EOL;
echo $newShop->sell(456).PHP_EOL;
echo $newShop->view(789).PHP_EOL;
echo $newShop->sell2().PHP_EOL;
echo $newShop->down(222).PHP_EOL;