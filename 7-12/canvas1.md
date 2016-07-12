声明canvas
---
`<canvas id="myCanvas" width="200" height="100"
style="border:1px solid #000000;"> </canvas>`

canvas 元素本身是没有绘图能力的。所有的绘制工作必须在 JavaScript 内部完成：

`<script>
var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
ctx.fillStyle="#FF0000";
ctx.fillRect(0,0,150,75);
</script>`

在Canvas上`画线`，我们将使用以下两种方法：
moveTo(x,y) 定义线条开始坐标
lineTo(x,y) 定义线条结束坐标
绘制线条我们必须使用到 "ink" 的方法，就像stroke().
<pre>
var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
ctx.moveTo(0,0);
ctx.lineTo(200,100);
ctx.stroke();</pre>

在canvas中绘制`圆形`, 我们将使用以下方法:
arc(x,y,r,start,stop)
实际上我们在绘制圆形时使用了 "ink" 的方法, 比如 stroke() 或者 fill().
<pre>
var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
ctx.beginPath();
ctx.arc(95,50,40,0,2*Math.PI);
ctx.stroke();</pre>

使用 canvas 绘制`文本`，重要的属性和方法如下：
font - 定义字体
fillText(text,x,y) - 在 canvas 上绘制实心的文本
strokeText(text,x,y) - 在 canvas 上绘制空心的文本

`渐变`可以填充在矩形, 圆形, 线条, 文本等等, 各种形状可以自己定义不同的颜色。
以下有两种不同的方式来设置Canvas渐变：
createLinearGradient(x,y,x1,y1) - 创建线条渐变
createRadialGradient(x,y,r,x1,y1,r1) - 创建一个径向/圆渐变
当我们使用渐变对象，必须使用两种或两种以上的停止颜色。
addColorStop()方法指定颜色停止，参数使用坐标来描述，可以是0至1.
使用渐变，设置fillStyle或strokeStyle的值为 渐变，然后绘制形状，如矩形，文本，或一条线。

创建一个`线性渐变`。使用渐变填充矩形:
<pre>
`var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
// Create gradient
var grd=ctx.createLinearGradient(0,0,200,0);
grd.addColorStop(0,"red");
grd.addColorStop(1,"white");
// Fill with gradient
ctx.fillStyle=grd;
ctx.fillRect(10,10,150,80);`</pre>

创建一个`径向/圆渐变`。使用渐变填充矩形：
<pre>
`var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");

// Create gradient
var grd=ctx.createRadialGradient(75,50,5,90,60,100);
grd.addColorStop(0,"red");
grd.addColorStop(1,"white");

// Fill with gradient
ctx.fillStyle=grd;
ctx.fillRect(10,10,150,80);`
</pre>
