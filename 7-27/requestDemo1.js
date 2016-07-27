var http=require('http')
var querystring = require('querystring')
var postData =querystring.stringify({
'content':'老范在此',
'mid':8837
})
var options ={
hostname : 'www.imooc.com',
port:80,
path :'/course/docomment',
method:'POST',
headers:{
'Accept':'application/json, text/javascript, */*; q=0.01',
'Accept-Encoding':'gzip, deflate',
'Accept-Language':'zh-CN,zh;q=0.8,en;q=0.6',
'Connection':'keep-alive',
'Content-Length':'postData.length',


'Content-Type':'application/x-www-form-urlencoded; charset=UTF-8',
'Cookie':'imooc_uuid=c6c6c52d-a8ac-41e6-81b5-1dce636b568c; imooc_isnew=1; imooc_isnew_ct=1469591934; loginstate=1; apsid=ZhNDY5ODZhZDI5NTVhNjkwZTQ1NWJhNDlhMjhiZDYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMzAzOTc5MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABmYW5icmlnaHRAMTI2LmNvbQAAAAAAAAAAAAAAAAAAADFiZGVhNjlmODM1MGMxNjljYjQ1NmU1NjU4N2E5YzI5hDGYV4QxmFc%3DN2; last_login_username=fanbright%40126.com; PHPSESSID=qlpmn7rnakdlbr2e1abqkgui13; IMCDNS=0; Hm_lvt_f0cfcccd7b1393990c78efdeebff3968=1469591936,1469596546; Hm_lpvt_f0cfcccd7b1393990c78efdeebff3968=1469596551; cvde=57984380908bb-6',
'Host':'www.imooc.com',
'Origin':'http://www.imooc.com',
'Referer':'http://www.imooc.com/video/8837',
'User-Agent':'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.82 Safari/537.36',
'X-Requested-With':'XMLHttpRequest'
}
}

var req =http.request(options,function(res){
console.log('status:'+res.statusCode);
console.log('headers:'+JSON.stringify(res.headers));


res.on('data',function(chunk){
console.log(Buffer.isBuffer(chunk))
console.log(typeof chunk);
})

res.on('end',function(){
console.log('评论完毕')
});
res.on('error',function(e){
console.log('Error:'+e.message)
})
})
req.write(postData);
req.end();
