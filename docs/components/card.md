#图片加文字

####用法



```html
<x-blade::card.cube title="标题" imageUrl="https://img13.360buyimg.com/n1/jfs/t1/178891/36/6013/547034/60ae2c7aEbaeee633/8574ccb66184f2c4.jpg" des="全网最低价，物超所值" />
```

示例：

```html
<div class="  mx-auto flex  flex-wrap  w-full ">
    @foreach($goodsSku as $item)
        <?php
        //            $item->unit_amount;
        ?>
        <div class="lg:w-1/6 px-2 w-1/2 flex-wrap">
            <x-blade::card.cube :title="$item->goods->goods_name.$item->name" :imageUrl="$item->image_url_format" des="全网最低价，物超所值" >
                <div class="flex w-full justify-between py-2 ">
                    <div class="text-xs ">
                        价格
                    </div>
                    <div class="text-red-500">
                        ￥{{$item->unit_amount}}
                    </div>
                </div>
            </x-blade::card.cube>
        </div>
    @endforeach

</div>

```

####参数说明

|  参数名   | 是否必须 | 说明 |  示例     |
|  ----  | ----  | ----  |  ----   |
| title  | 否 |  标题 | 可以写商品标题：帮宝适一级帮Xl |
| imageUrl  | 否 |  卡片的图片地址 | https://z3.ax1x.com/2021/06/24/RMxcxU.png |
| slot  | 否 |  插槽,在便签内编辑即可 | `<span> hello liaosp </span>` |




#### 示例

![](https://z3.ax1x.com/2021/06/24/RQiyTg.png)

手机端：

![](https://z3.ax1x.com/2021/06/24/RQFQhj.png)


