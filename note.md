### 2019-1-15
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
* Flex是Flexible Box的缩写，翻译成中文就是“弹性盒子”，用来为盒装模型提供最大的灵活性。任何一个容器都可以指定为Flex布局。