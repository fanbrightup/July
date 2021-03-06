
 // context = document.getElementById('myCanvas').getContext("2d");
 var canvas = $('#myCanvas');
 var context = canvas.get(0).getContext("2d");
//  鼠标按下事件
$('#canvas').mousedown(function(e){
  var mouseX = e.pageX - this.offsetLeft;
  var mouseY = e.pageY - this.offsetTop;

  paint = true;
  addClick(e.pageX - this.offsetLeft,
  e.pageY - this.offsetTop);
  redraw();
});

//  鼠标移动事件
$(canvas).mousemove(function(e){
  if(paint){  //  是不是按下了鼠标
    addClick(e.pageX - this.offsetLeft,
    e.pageY - this.offsetTop,true);
    redraw();
  }
});

//  鼠标松开事件
$(canvas).mouseup(function(e){
  paint = false;
});

//  鼠标移开事件
$(canvas).mouseleave(function(e){
  paint = false;
});

//  addClick方法记录鼠标坐标点
var clickX = new Array();
var ClickY = new Array();
var clickDrag = new Array();
var paint;

function addClick(x,y,dragging){
  clickX.push(x);
  clickY.push(y);
  clickDrag.push(dragging);
}

//  redraw()方法
function redraw(){
  canvas.width = canvas.width;  //Clears the canvas
  context.strokeStyle = "#df4b26";
  context.lineJoin = "round";
  context.lineWidth = 5;

  for(var i = 0;i < clickX.length;i++){
    context.beginPath();
    if(clickDrag[i] && i){
      //  当是拖动而且i!=0时,从上一个点开始画线
      context.moveTo(clickX[i-1],clickY[i-1]);
    }else{
      context.moveTo(clickX[i] - 1,clickY[i]);
    }
    context.lineTo(clickX[i],clickY[i]);
    context.closePath();
    context.stroke;
  }
}
