### 2019-1
---
### HTML `<span>`标签
* `<span>` 用于对文档中的行内元素进行组合。

* `<span>` 标签没有固定的格式表现。当对它应用样式时，它才会产生视觉上的变化。如果不对 `<span>` 应用样式，那么 `<span>` 元素中的文本与其他文本不会任何视觉上的差异。

* `<span>` 标签提供了一种将文本的一部分或者文档的一部分独立出来的方式。

---

### VSCode快速生成HTML文件格式

    先将文件保存为HTML格式，然后在空文档中输入！，然后按Tab键，即可快速生成基本代码。

---

### display几个常用属性值的用法
* inline：
    * 使元素变成行内元素，拥有行内元素的特性，即可以与其他行内元素共享一行，不会独占一行。

    * 不能更改元素的height，width的值，大小由内容撑开。

    * 可以使用padding，margin的left和right产生边距效果，但是top和bottom就不行。

* block：
    * 使元素变成块级元素，独占一行，在不设置自己的宽度的情况下，块级元素会默认填满父级元素的宽度。

    * 能够改变元素的height，width的值。

    * 可以设置padding，margin的各个属性值，top，left，bottom，right都能够产生边距效果。

* inline-block：
    * 结合了inline与block的一些特点，结合了上述inline的第1个特点和block的第2,3个特点。

    * 用通俗的话讲，就是不独占一行的块级元素。

    * 使用了 display:inline-block 后会存在元素间的间隙问题，这个间隙是由空白符（我们在写标签后顺手打的回车产生了相当于空白符的回车符）引起的。*解决办法：对父元素设置{font-size:0}，将空白符大小也变成0px，从而消除空白符。*

---

### VSCode中预览.md文件
    使用指令 ctrl+Shift+V

---

### 伪元素 first-letter和first-line
* first-letter：该伪元素用于指定一个元素第一个字母的样式。所有前导标点符号应当与第一个字母一同应用该样式。某些语言有一些要处理为单个字符的字母组合，如果是这样，用户代理可能会把首字母同时应用到这个字母组合。

* first-line：伪元素向文本的首行添加特殊样式。

    用法示例
    ```
    p::first-letter{
        ...
    }
    ```

---

### 导航栏下拉菜单示例
```
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>

    <!-- 下拉菜单内容 -->
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
    </div>
</li>
```

---

### 属性 display:flex/flexbox;
* flex是Flexible Box的缩写，翻译成中文就是“弹性盒子”，用来为盒装模型提供最大的灵活性。任何一个容器都可以指定为Flex布局。

* flexbox估计与flex是同一种意思的不同写法（? 未证实）

* flexbox通常能让我们更好的操作他的子元素布局，例如：
    * 如果元素容器没有足够的空间，我们无需计算每个元素的宽度，就可以设置他们在同一行；
    * 可以快速让他们布局在一列；
    * 可以方便让他们对齐容器的左、右、中间等；
    * 无需修改结构就可以改变他们的显示顺序；
    * 如果元素容器设置百分比和视窗大小改变，不用提心未指定元素的确切宽度而破坏布局，因为容器中的每个子元素都可以自动分配容器的宽度或高度的比例。

> 参考资料：[Flexbox——快速布局神器_Flexbox, CSS3, Layout 教程_w3cplus](https://www.w3cplus.com/css3/flexbox-basics.html)
---

### 盒子模型margin/paddding/border属性详解
* margin：盒子模型边框到外部另一个盒子边框的距离（可理解为外边距）；

* padding：盒子模型边框到内容的距离（可简单理解为内边距），设置时大小向内扩展；

* border：盒子模型边框的大小，设置时大小向外扩展。如原div的大小为100px\*100px，设置border大小为20px时，整个div的大小就变成了120px*120px了。

    ![参考图片](./image/box_1.jpg)

---

### 盒子模型的flex-basis/flex-shrink/flex-grow属性详解
flex items的应用准则：content –> width –> flex-basis (limted by max|min-width)
也就是说：
* 如果没有设置flex-basis属性，那么flex-basis的默认值为auto，则它的大小就等于项目的width属性的大小；

* 如果没有设置width属性，那么flex-basis的大小就是项目内容(content)的大小；

* 如果同时设置了width和flex-basis的值，在实际应用时flex-basis还是会覆盖掉width；

* 可以使用min-width和max-width限制flex-basis的值；

* flex-basis是item被放进一个flex容器**之前**的大小，它无法保证item在flex容器中的大小！比如当一定数量的item放进空间不足flex容器中时，items就会按照压缩率(flex-shrink)压缩其大小来填充容器，默认情况下每个item的压缩率都是一样的；

* 当一定数量的item放进空间过剩的容器中时，我们可以使用flex-grow属性控制items的增长来填充可用的空间。flex-grow的默认值为0，意味着item不会增长。如果将每个item设置flex-grow：1，那么所有的item都会等比例增长以填充剩余的空间。

---

