<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>风雪</title>
	<link rel="shortcut icon" href="/Home/images/favicon.ico">
	<!-- 标题前小图标 -->
	<script src="/Home/bs/js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Home/radio/css/main.css">
</head>

<style>
	
	.jAudio--playlist{
		height: 230px;
		overflow: auto;	
		-webkit-overflow-scrolling : touch;		/*	调试滚动速度	*/
	}
	.jAudio--player{
		
		margin-top:10px;
		margin-bottom:0;
	}
	#btn-next span:before, #btn-next span:after {
    border-left: 15px solid #333;
    border-right: 0;
	}
	
	#btn-prev span:before, #btn-prev span:after {
    border-right: 15px solid #333;
    border-left: 0;
	}
	
	#btn-play span:before {
    border-left: 15px solid #333;
    border-right: 0;
	}
</style>
<body>

<div class='jAudio--player'>

<audio></audio>

<div class='jAudio--ui'>

<div class='jAudio--thumb'></div>

<div class='jAudio--status-bar'>

<div class='jAudio--details'></div>
<div class='jAudio--volume-bar'></div>

<div class='jAudio--progress-bar'>
<div class='jAudio--progress-bar-wrapper'>
<div class='jAudio--progress-bar-played'>
<span class='jAudio--progress-bar-pointer'></span>
</div>
</div>
</div>

<div class='jAudio--time'>
<span class='jAudio--time-elapsed'>00:00</span>
<span class='jAudio--time-total'>00:00</span>
</div>

</div>

</div>


<div class='jAudio--playlist'>
</div>

<div class='jAudio--controls'>
<ul>
<li><button class='btn' data-action='prev' id='btn-prev'><span></span></button></li>
<li><button class='btn' data-action='play' id='btn-play'><span></span></button></li>
<li><button class='btn' data-action='next' id='btn-next'><span></span></button></li>
</ul>
</div>

</div>

<script src='/Home/radio/js/jquery-2.1.4.min.js'></script>
<script src='/Home/radio/js/jaudio.js'></script>
<script>
	var t = {
	playlist:[
		{
		  file: "/Home/radio/tracks/Elle.mp3",
		  thumb: "/Home/radio/thumbs/alone.jpg",
		  trackName: "Alone",
		  trackArtist: "Elle",
		  trackAlbum: "Single",
		},
		
		{
		  file: "/Home/radio/tracks/Seven Years.mp3",
		  thumb: "/Home/radio/thumbs/songtaste.jpg",
		  trackName: "Seven Years",
		  trackArtist: "kirsten gundersen",
		  trackAlbum: "Single",
		},
		{
		  file: "/Home/radio/tracks/Emotions.mp3",
		  thumb: "/Home/radio/thumbs/songtaste.jpg",
		  trackName: "Emotions",
		  trackArtist: "Kimmese,Antoneus",
		  trackAlbum: "Single",
		},
		{
		  file: "/Home/radio/tracks/alone again.mp3",
		  thumb: "/Home/radio/thumbs/alyssa.jpg",
		  trackName: "Alone Again",
		  trackArtist: "Alyssa Reid",
		  trackAlbum: "Single",
		},
		{
		  file: "/Home/radio/tracks/Elle.mp3",
		  thumb: "/Home/radio/thumbs/alone.jpg",
		  trackName: "Alone",
		  trackArtist: "Elle",
		  trackAlbum: "Single",
		},
	],
	autoPlay:true
	}

	$(".jAudio--player").jAudio(t);

</script>
<script type="text/javascript">
            var overscroll = function(el){
                el.addEventListener('touchstart', function(){
                var top = el.scrollTop;
                var totalScroll = el.scrollHeight;
                var currentScroll = top + el.offsetHeight;
                if(top === 0) {
                    el.scrollTop = 1;
                }else if(currentScroll === totalScroll){
                    el.scrollTop = top - 1;
                }
                });
                el.addEventListener('touchmove', function(evt){
                if(el.offsetHeight < el.scrollHeight){
                    evt._isScroller = true;
                }
                });
            }
            overscroll(document.querySelector('.jAudio--playlist'));//哪里需要可以局部滚动，添加一个“scroll”的class
            document.body.addEventListener('touchmove', function(evt) {
                if(!evt._isScroller){
                evt.preventDefault();
                }
            });
</script>
<script>
		
		$(function(){
			src=$("audio").attr({id:"bgm"});
			
		})
		document.addEventListener('DOMContentLoaded', function () { //添加监听DOM 结构是否加载完，（不包含图片和其他资源）
        function audioAutoPlay(bgm) {
            var audio = document.getElementById('bgm');//获取音乐标签的id
            audio.play(); //播放
            document.addEventListener("WeixinJSBridgeReady", function () { //监听微信准备就绪事件，只能在微信用
                audio.play(); //播放
            }, false);
        }
        audioAutoPlay(); 
		});
</script>
</body>
</html>