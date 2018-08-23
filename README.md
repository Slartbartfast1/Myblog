## 我是怎么开始的

自从学习前端开始,就有自己搭建网站的想法,

有了一个目标之后,一切努力都变得顺其自然

于是图书馆埋头苦肝,每天十二个小时,

连续奋战一个多月之后

我现在的状态是这样的==>😵眼眶发黑,头发茂密,面色憔悴

嗯,是程序猿没错了😰

不过在这一个月里我也对web端到服务端都有了一定的了解,

也具备了搭建一个小型网站的一些技术栈,

于是就开始了浩浩荡荡的面向百度编程项目**.**

在图书馆和咖啡厅和思源楼(起太晚,图书馆九点就没位置了)奋战N日,

消耗N杯咖啡之后,这个网站终于成型了;

NO wordpress , NO hexo .

It's Slartbartfast'sBlog.

 

## 网站长什么样

 

### 前端页面

首页(滚动截屏有一部分图像撕裂了 ) 

![img](https://upload-images.jianshu.io/upload_images/13265578-b595d99ab8eb1590.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/700)

分类页

![img](https://upload-images.jianshu.io/upload_images/13265578-911352ba9fa35c1c.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/700)

音乐盒 主要是视差效果

![img](https://upload-images.jianshu.io/upload_images/13265578-19ac51d56692ed37.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/700)

豆瓣

![img](https://upload-images.jianshu.io/upload_images/13265578-94f4ea7814c0abc9.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/515)

留言板

![img](https://upload-images.jianshu.io/upload_images/13265578-9868bb797f384577.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/700)

### 后台管理系统

登录页

![img](https://upload-images.jianshu.io/upload_images/13265578-5314a8718b478317.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/684)

仪表盘

![img](https://upload-images.jianshu.io/upload_images/13265578-4404a17766829acf.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/669)

文章管理

![img](https://upload-images.jianshu.io/upload_images/13265578-0ac210855b1eab40.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/684)

文章发布

![img](https://upload-images.jianshu.io/upload_images/13265578-166580defddcc443.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/538)

评论管理

![img](https://upload-images.jianshu.io/upload_images/13265578-c3d6238c8f0d3e2b.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/684)

其他的还有 首页轮播图设置 文章编辑页 分类添加 编辑页 以及音乐上传和管理,

都长一个样就不一一列举了

## 总结用到的技术栈

**前端:**

主要还是bootstrap和jquery,bootstrap刚开始用的不太熟,

导致重构比较麻烦,现在的页面代码还比较凌乱,不过借用老罗的一句话:又不是不能用.....

等以后有时间,再把整个网站重构一下吧

语言:HTML CSS JavaScript

框架:Bootstrap 4.0

语言库:jquery 3.3

模板引擎:jsrender

动画:一部分是自己写的,一部分使用的animate.css和wow.js

分页器和留言系统:分页器样式用的bootstrap的,逻辑自己写的,留言功能没有邮箱提醒,待完善

代码高亮:highlight.js

富文本编辑器:wangEditor

**后端:**

整个后端完全PHP手撕,没有用框架和模板,以后一定再深入学习,

毕竟一个好的框架能节省不少时间

服务器:Linux Centos 6.0

服务器软件:Apache 2.4

服务端语言:PHP 7.2

数据库:MYSQL 8.0

图表:Echarts

富文本编辑器:wangEditor

进度条:NProgress

**页面动态内容呈现:**

前端和后端大部分管理页:用PHP进行数据库条件查询进行页面渲染

登录页头像预览和评论管理:AJAX

豆瓣影讯:利用豆瓣提供的API 发送跨域请求jsonp用jsrender渲染

## 感受

我的学习的东西还远远不够,代码的质量也亟待改进,debug的习惯也不是很好,

为一个错误抓耳挠腮半天结果发现是写错一个字母的情况屡屡发生,

页面也是充斥着直男的审美观(以后一定一定一定学习设计)

但是作为自学完成的第一个像样的项目来说,心中还是有些许的成就感的

希望我对技术的这份热情能持续下去吧.

## 以后的目标

1.每过一段时间重构一次网站,让代码更加成熟,布局更加合理.

2.学到新的知识增加新的功能在博客上,以用代练.

3.学习设计规范,让页面更加美观.

4.坚持更新文章,总结知识点,写下成长历程.