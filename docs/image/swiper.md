#图片加文字

####用法



```html
        <x-blade::swiper.image-swiper>
               ..你要添加的内容
        </x-blade::swiper.image-swiper>

```

示例用的是x-blade::image.bg-image-text-link 组件：

```html
        <x-blade::swiper.image-swiper>

            <div class="swiper-slide">
                <x-blade::image.bg-image-text-link
                    title="第一张图片"
                    imageUrl="https://h2.ioliu.cn/bing/BurleighHeads_ZH-CN6052781534_1920x1080.jpg?imageslim"
                />
            </div>

            <div class="swiper-slide">
                <x-blade::image.bg-image-text-link
                    title="第二张图片"
                    imageUrl="https://h2.ioliu.cn/bing/SocaCycles_ZH-CN3583247274_800x480.jpg?imageslim"
                />
            </div>

        </x-blade::swiper.image-swiper>

```

####参数说明

|  参数名   | 是否必须 | 说明 |  示例     |
|  ----  | ----  | ----  |  ----   |
| autoplay  | 否 |  是否自动播放 | 传 true Or false  注意：这里是字符型  |



#### 示例

![](https://z3.ax1x.com/2021/06/24/RMxcxU.png)

手机端：

![](https://z3.ax1x.com/2021/06/24/RMxWqJ.png)


