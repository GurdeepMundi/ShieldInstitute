<style type="text/css">

@-webkit-keyframes scroll {
	0%{
	-webkit-transform: translate(300px,0);
	}
	100%{
		-webkit-transform: translate(-120%,0);
	}
	}

.marquee{
	display:block;
	width:70%;
	height:60%;
	border:1px #6b0d10 solid;
	white-space:nowrap;
	overflow:hidden;
	box-shadow:1px 1px 4px #6b0d10;
	position:absolute;
	left:17%;
	border-radius:8px;
	top:20%;
	margin:0%;
	background-color:cc9966;
	}

.marquee span{
	display:inline-block;
	-webkit-animation:scroll 30s infinite linear;
	padding-left:300px;
}

.marquee span span{
	padding-left:30%;
	}

#news-bar{
	position:relative;
	height:60px;
	font-size:20px;
	color:#6b0d10;
	margin:20px 0px;
}

#news-icon{
	position:absolute;
	left:9%;
	margin:0%;
	top:15%;
	height:80%;
	width:8%;
	-webkit-filter: drop-shadow(#6b0d10);
	filter: drop-shadow(#6b0d10);
	
	}
</style>
<?php $news1 = file_get_contents("./components/news_bar_files/news1.txt");
$news2= file_get_contents("./components/news_bar_files/news2.txt");
$news3= file_get_contents("./components/news_bar_files/news3.txt");
 ?>
<div id="news-bar">
<img id="news-icon" src="icons/news-icon2.png">
<p class="marquee">
<span>
	<span><?php echo $news1; ?></span>
	<span><?php echo $news2; ?></span>
	<span><?php echo $news3; ?></span>
	
</span>
</p>
</div>

