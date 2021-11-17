<style type="text/css">
/*whole bottombar properties*/
#bottombar{
	position:relative;
	width:100%;
	height:250px;
	background-color:#6b0d10;
	color:white;
	margin:none;
	box-shadow:0px 0px 40px #6b0d10;
	font-size:17px;
	}
	
	/*bottombar shield icon*/
#bottombar_sh_icon{
	position:absolute;
	width:15%;
	height:60%;
	top:20%;
	margin-left:2%;
	
}
	
	/*bottombar left list*/
#bottombar_left{
	width:25%;
	position:absolute;
	right:54%;
	top:12%;
	padding-left:30px;
	}
	
	#bottombar_left a {
		color:white;
		}

#bottombar_middle{
	width:25%;
	position:absolute;
	right:27%;
	top:12%;
	}


#bottombar_right{
	width:25%;
	position:absolute;
	right:0%;
	top:12%;
	}
#bottombar_right h2{
	color:white;
	}
#bottombar_left h2{
	color:white;
	}
#bottombar_middle h2{
	color:white;
	}

/*to set the properties of contents in bottombar*/
#bottombar li {
	padding:3px;
	padding-left:2px;
	margin-left:0px;
}

#bottombar li:hover{
	color:grey;
	font-size:18px;
	text-shadow:0px 0px 2px black;
	
}
#bottombar li:hover a{
	padding-right:7%;
	display:inline-block;
	color:orange;
	background-color:rgba(0,0,0,.2);
}


/*last copyright line*/
#copyright{
	text-align:center;
	width:100%;
	vertical-align:bottom;
	position:absolute;
	bottom:1px;
	color:#efc2c2;
	}
	
#social_links{
	height:60px;
}
	
#social_links img{
	height:28px;
	align:left;
	margin:2px 5px 2px 5px;
}
	
#social_links img:hover{
	margin:2px 5px 0px 5px;
	}
	
#bottombar_right ul li a:active{
	
	
}

</style>
<div id="bottombar">


<div id="bottombar_sh_icon"><img src="icons/shield_icon.png" height="100%"></div>


<style type="text/css">
ul{
	padding-left:0px;
	margin-left:0px;
}
</style>



<div id="social_links" >
<!--these are the icons or links to social media sites that appear on the bottom bar -->
<a href="social.php" title="contact us on whatsapp" ><img src="./icons/whatsapp_icon.png"></a>

<a href="social.php" title="follow us on twitter"><img src="./icons/twitter_icon.png" ></a>

<a href="social.php" title="follow us on facebook"><img src="./icons/facebook_icon.png" ></a>

<a href="social.php" title="follow us on instagram"><img src="./icons/insta_icon.png" ></a>

<a href="social.php" title="follow us on youtube"><img src="./icons/youtube.png" ></a>
</div>
<!--left row ( information )-->
<div id="bottombar_left">
	
	<h2 style="padding-top:0px;margin-top:0px">Contact Us</h2>
	<ul type="none">
	<li style="color:inherit;font-size:inherit;text-shadow:0px 0px 0px green;">9500 Gilman Dr, La Jolla, San Diego, CA 92093, USA</li>
	<li style="color:inherit;font-size:inherit;text-shadow:0px 0px 0px green;">+91 8194968075</li>
	
	<a href="mailto:gurdeepmundi10@gmail.com" title="send us an email" ><input type="button" href="mailto:gurdeepmundi10@gmail.com" value="email us"></a>
	</ul>
	</div>
	<!--middle row of links -->
<div id="bottombar_middle">
	<h2 style="padding-top:0px;margin-top:0px">Navigation</h2>
	<ul type="none">
	
	<li><a href="courses.php">Courses </a></li>
	<li><a href="Admission.php">Admission </a></li>
	<li><a href="contact_us.php">contact us </a></li>
	<li><a href="amn/adm_login.php">Administrator Login</a></li>
	</ul>
	</div>
	<!--right row of links -->
<div id="bottombar_right">
	<h2 style="padding-top:0px;margin-top:0px">Online Courses</h2>
	<ul type="none" >
	<li><a href="https://www.edx.org/course/animation-cgi-motion-columbiax-csmm-104x-0" onclick="alert('We dont provide online courses yet but we will redirect you to edx.org because it is a good site for online courses')">Animation</a></li>
	<li><a href="https://www.edx.org/course?search_query=web+development" onclick="alert('We dont provide online courses yet but we will redirect you to edx.org because it is a good site for online courses')">Web Development</a></li>
	<li><a href="https://www.edx.org/course?search_query=software+development" onclick="alert('We dont provide online courses yet but we will redirect you to edx.org because it is a good site for online courses')">Software Development</a></li>
	<li><a href="https://www.edx.org/course?search_query=artificial+intelligence" onclick="alert('We dont provide online courses yet but we will redirect you to edx.org because it is a good site for online courses')">Artificial Intelligence</a></li>
	</ul>
	</div>

<p style="text-align:center;" id="copyright"><span style="font-size:20px;">©</span> 2017 Shield Institute of Technology</p>

</div>