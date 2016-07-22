var show;
var lineWi=5;
var flag,run,rub_flag;
var isdraw=true;
var isclear=true;
if($("draw").getContext("2d")){
  var ctxt=$("draw").getContext("2d");
}
window.onload=function(){
  Draw(ctxt);
  rubber(ctxt);
  pencil();
  reset_bord(ctxt);
}
function Draw(obj){
  addEvent($("draw"),"mousedown",function(e){
    e=window.e||e;
    var startX=e.clientX-$("draw").offsetLeft;
    var startY=e.clientY-$("draw").offsetTop;
    flag=true;
      addEvent(this,"mousemove",function(e){
        e=window.e||e;
        var endX=e.clientX-$("draw").offsetLeft;
        var endY=e.clientY-$("draw").offsetTop;
        if(flag&&isdraw){
          obj.beginPath();
          obj.moveTo(startX,startY);
          obj.lineTo(endX,endY);
          obj.closePath();
          obj.lineWidth=lineWi;
          obj.lineJoin="round";
          obj.strokeStyle=show;
          obj.stroke();
        }
        startX=endX;
        startY=endY;
      },false);
      addEvent(this,"mouseup",function(e){
        flag=false;
        obj.save();// 保存画布
      })
      addEvent(this,"mouseleava",function(e){
        flag=false;
      })
  });
}
function rubber(obj){
  //  橡皮
  addEvent($("clear"),"click",function(e){
    e=window.e||e;
    this.className="active";
    $("pencil").className="";
    isdraw=false;// 关闭画图
    isclear=true;
    addEvent($("draw"),"mousedown",function(e){
      rub_flag=true;
      addEvent(this,"mousemove",function(e){
        e=window.e||e;
        var rub_X=e.clientX-$("draw").offsetLeft;
        var rub_Y=e.clientY-$("draw").offsetTop;
        if(rub_flag&&isclear){
          var r=lineWi/2;
          obj.clearRect(rub_x-r,rub_Y-r,lineWi,lineWi);
        }
      });
      addEvent(this,"mouseup",function(e){
        rub_flag=false;
      });
    });
  });
}
function pencil(){
  //  铅笔
  addEvent($("pencil"),"click",function(e){
    isclear=false;
    isdraw=true;
    Draw(ctxt);
    $("clear").className="";
    this.className="active";
  })
}
function reset_bord(obj){
  //重置画布
  addEvent($("remove"),"mousedown",function(e){
    this.className="active";
    obj.clearRect(0,0,$("draw").offsetWidth,$("draw").offsetHeight);
  });
  addEvent($("remove"),"mouseup",function(e){
    this.className="";
  });
}
function addEvent(element,event,callbackfunction){
  if(element.addEventListener){
    element.addEventListener(event,callbackfunction,false);
  }
  else if(element.attachEvent){
    element.attachEvent("on"+event,callbackfunction);
  }
  else{
    element["on"+event]=callbackfunction;
  }
}
function $(id){return document.getElementById(id);};
(function getcolor(){
  var basecolor=[ //颜色
	{"name":"red","color":"rgba(255,0,0,1)"},
	{"name":"orange","color":"rgba(255,128,0,1)"},
	{"name":"yellow","color":"rgba(255,255,0,1)"},
	{"name":"green","color":"rgba(0,128,0,1)"},
	{"name":"cyan","color":"rgba(0,255,0,1)"},
	{"name":"blue","color":"rgba(0,128,255,1)"},
	{"name":"purple","color":"rgba(128,0,64,1)"},
	{"name":"grey","color":"rgba(128,128,128,1)"},
	{"name":"black","color":"rgba(0,0,0,1)"},
	{"name":"white","color":"rgba(255,255,255,1)"}];
	var bs=[];
	var color=$("color").getElementsByTagName("li");
	for(var j=0;j<basecolor.length;j++){
		bs.push(basecolor[j].color);
	}
	for(var i=0;i<color.length;i++){
		color[i].style.background=bs[i];
		color[i].setAttribute("index",i);
		addEvent(color[i],"click",function(){
			show=bs[this.getAttribute("index")]
			$("usecolor").style.background=show;
		})
	}
})();
(function getwidth(){
  //  线条粗细
  var maxX=$("level").offsetWidth-$("range").offsetWidth;
  addEvent($("range"),"mousedown",function(e){
    e=window.e||e;
    var offX=e.clientX-$("range").offsetLeft;
    var nowX;
    run=true;
    e.preventDefault();
    addEvent(this,"mousemove",function(e){
      e=window.e||e;
      if(run){
        nowX=e.clientX=offX;
        if(nowX<0) nowX = 1;
        else if(nowX>maxX) nowX=maxX;
        this.style.left=nowX+"px";
      }
      lineWi=Math.floor(nowX/maxX*50);
    })
    addEvent(this,"mouseup",function(e){
      run=false;
    })
    addEvent(this,"mouseleave",function(e){
      run=false;
    })
  })
})();
