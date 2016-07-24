var http = require('http')
var cheerio = require('cheerio')
var url = "http://www.imooc.com/learn/348"

function filerChapters(html) {
    var $ = cheerio.load(html)
    var chapters = $('.chapter')
    var courseData = []

    chapters.each(function(item) {
        var chapter = $(this)
        var chapterTitle = chapter.find('strong').text()
        var videos = chapter.find('.video').children('li')
        var chapterData = {
            chapterTitle: chapterTitle,
            vidieos: []
        }

        videos.each(function(item) {
            var video = $(this).find('.studyvideo')
            var videoTitle = video.text()
            var videoid = video.attr('href').split('video/')[1]
            chapterData.vidieos.push({
                title: videoTitle,
                id: videoid
            })
        })

        courseData.push(chapterData)
    })
    return courseData
}

//  将挑选后的信息打印出来,并简单排版
function printCourseInfo(courseData) {
    courseData.forEach(function(item) {
        var chapterTitle = item.chapterTitle
        console.log(chapterTitle + '\n')
        item.vidieos.forEach(function(video) {
            console.log('     '+'【' + video.id + '】' + video.title + '\n')
        })
    })
}
//  获取网页
http.get(url, function(res) {
    var html = "";
    res.on("data", function(data) {
        html += data;
    })
    res.on("end", function() {
        var courseData = filerChapters(html)
        printCourseInfo(courseData)
    })
}).on('error', function() {
    console.log("获取出错")
})
