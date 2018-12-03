<!DOCTYPE html>
<html lang="cs-CZ">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="https://cs.dbpedia.org/wiki/xmlrpc.php">
	
<title>Statistiky &#8211; Czech DBpedia</title>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="/js/sgvizler.js"></script>
	<script type="text/javascript" src="/js/select-option.js"></script>
	<script type="text/javascript" src="/js/sgvizler-default.js"></script>
		<script type="text/javascript" src="/js/id-show-hide-content.js"></script>

    <!-----------<script type="text/javascript" src="http://mgskjaeveland.github.io/sgvizler/v/0.6/sgvizler.js"></script>--------->
	<!----<script type="text/javascript" src="/js/select-option.js"></script>----->

		<script type="text/javascript" src="/js/id-show-hide-content.js"></script>

	<link rel="stylesheet" href="/css/stats.css" type="text/css">
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Czech DBpedia &raquo; RSS zdroj" href="https://cs.dbpedia.org/wiki/feed/" />
<link rel="alternate" type="application/rss+xml" title="Czech DBpedia &raquo; RSS komentářů" href="https://cs.dbpedia.org/wiki/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/cs.dbpedia.org\/wiki\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.11"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>

<link rel='stylesheet' id='sydney-bootstrap-css'  href='https://cs.dbpedia.org/wiki/wp-content/themes/sydney/css/bootstrap/bootstrap.min.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='sydney-body-fonts-css'  href='//fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C400italic%2C600&#038;ver=4.7.11' type='text/css' media='all' />
<link rel='stylesheet' id='sydney-headings-fonts-css'  href='//fonts.googleapis.com/css?family=Raleway%3A400%2C500%2C600&#038;ver=4.7.11' type='text/css' media='all' />
<link rel='stylesheet' id='sydney-style-css'  href='https://cs.dbpedia.org/wiki/wp-content/themes/sydney/style.css?ver=v2' type='text/css' media='all' />
<style id='sydney-style-inline-css' type='text/css'>
.site-header { background-color:rgba(119,107,196,0.9);}
.site-header.float-header {padding:20px 0;}
.site-title { font-size:32px; }
.site-description { font-size:16px; }
#mainnav ul li a { font-size:14px; }
h1 { font-size:52px; }
h2 { font-size:42px; }
h3 { font-size:32px; }
h4 { font-size:25px; }
h5 { font-size:20px; }
h6 { font-size:18px; }
body { font-size:14px; }
.header-image { background-size:cover;}
.header-image { height:300px; }
.site-header.fixed { position: absolute;}
.widget-area .widget_fp_social a,#mainnav ul li a:hover, .sydney_contact_info_widget span, .roll-team .team-content .name,.roll-team .team-item .team-pop .team-social li:hover a,.roll-infomation li.address:before,.roll-infomation li.phone:before,.roll-infomation li.email:before,.roll-testimonials .name,.roll-button.border,.roll-button:hover,.roll-icon-list .icon i,.roll-icon-list .content h3 a:hover,.roll-icon-box.white .content h3 a,.roll-icon-box .icon i,.roll-icon-box .content h3 a:hover,.switcher-container .switcher-icon a:focus,.go-top:hover,.hentry .meta-post a:hover,#mainnav > ul > li > a.active, #mainnav > ul > li > a:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .text-color, .social-menu-widget a, .social-menu-widget a:hover, .archive .team-social li a, a, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color:#383559}
.project-filter li a.active, .project-filter li a:hover,.preloader .pre-bounce1, .preloader .pre-bounce2,.roll-team .team-item .team-pop,.roll-progress .progress-animate,.roll-socials li a:hover,.roll-project .project-item .project-pop,.roll-project .project-filter li.active,.roll-project .project-filter li:hover,.roll-button.light:hover,.roll-button.border:hover,.roll-button,.roll-icon-box.white .icon,.owl-theme .owl-controls .owl-page.active span,.owl-theme .owl-controls.clickable .owl-page:hover span,.go-top,.bottom .socials li:hover a,.sidebar .widget:before,.blog-pagination ul li.active,.blog-pagination ul li:hover a,.content-area .hentry:after,.text-slider .maintitle:after,.error-wrap #search-submit:hover,#mainnav .sub-menu li:hover > a,#mainnav ul li ul:after, button, input[type="button"], input[type="reset"], input[type="submit"], .panel-grid-cell .widget-title:after { background-color:#383559}
.roll-socials li a:hover,.roll-socials li a,.roll-button.light:hover,.roll-button.border,.roll-button,.roll-icon-list .icon,.roll-icon-box .icon,.owl-theme .owl-controls .owl-page span,.comment .comment-detail,.widget-tags .tag-list a:hover,.blog-pagination ul li,.hentry blockquote,.error-wrap #search-submit:hover,textarea:focus,input[type="text"]:focus,input[type="password"]:focus,input[type="datetime"]:focus,input[type="datetime-local"]:focus,input[type="date"]:focus,input[type="month"]:focus,input[type="time"]:focus,input[type="week"]:focus,input[type="number"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="search"]:focus,input[type="tel"]:focus,input[type="color"]:focus, button, input[type="button"], input[type="reset"], input[type="submit"], .archive .team-social li a { border-color:#383559}
.site-header.float-header { background-color:rgba(119,107,196,0.9);}
@media only screen and (max-width: 1024px) { .site-header { background-color:#776bc4;}}
.site-title a, .site-title a:hover { color:#ffffff}
.site-description { color:#ffffff}
#mainnav ul li a, #mainnav ul li::before { color:#ffffff}
#mainnav .sub-menu li a { color:#ffffff}
#mainnav .sub-menu li a { background:#1c1c1c}
.text-slider .maintitle, .text-slider .subtitle { color:#ffffff}
body { color:#353535}
#secondary { background-color:#ffffff}
#secondary, #secondary a, #secondary .widget-title { color:#767676}
.footer-widgets { background-color:#252525}
.site-footer { background-color:#1c1c1c}
.site-footer,.site-footer a { color:#666666}
.overlay { background-color:#000000}
.page-wrap { padding-top:20px;}
.page-wrap { padding-bottom:20px;}



</style>
<link rel='stylesheet' id='sydney-font-awesome-css'  href='https://cs.dbpedia.org/wiki/wp-content/themes/sydney/fonts/font-awesome.min.css?ver=4.7.11' type='text/css' media='all' />
<!--[if lte IE 9]>
<link rel='stylesheet' id='sydney-ie9-css'  href='https://cs.dbpedia.org/wiki/wp-content/themes/sydney/css/ie9.css?ver=4.7.11' type='text/css' media='all' />
<![endif]-->
<script type='text/javascript' src='https://cs.dbpedia.org/wiki/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://cs.dbpedia.org/wiki/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='https://cs.dbpedia.org/wiki/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://cs.dbpedia.org/wiki/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://cs.dbpedia.org/wiki/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.7.11" />
<link rel="canonical" href="https://cs.dbpedia.org/wiki/kontakty/" />
<link rel='shortlink' href='https://cs.dbpedia.org/wiki/?p=27' />
<link rel="alternate" type="application/json+oembed" href="https://cs.dbpedia.org/wiki/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcs.dbpedia.org%2Fwiki%2Fkontakty%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://cs.dbpedia.org/wiki/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcs.dbpedia.org%2Fwiki%2Fkontakty%2F&#038;format=xml" />
<style type="text/css" id="custom-background-css">
body.custom-background { background-color: #5bb2ff;}
</style>
</head>

<body class="page-template-default page page-id-27 custom-background">

	<div class="preloader">
	    <div class="spinner">
	        <div class="pre-bounce1"></div>
	        <div class="pre-bounce2"></div>
	    </div>
	</div>
	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

		
	<div class="header-clone"></div>

	
	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
            <div class="container">
                <div class="row">
				<div class="col-md-4 col-sm-8 col-xs-12">
		        					<h1 class="site-title"><a href="https://cs.dbpedia.org/wiki/" rel="home">Czech DBpedia</a></h1>
					<h2 class="site-description">Česká DBpedia = strojově čitelná česká Wikipedie</h2>	        
		        				</div>
				<div class="col-md-8 col-sm-4 col-xs-12">
					<div class="btn-menu"></div>
					<nav id="mainnav" class="mainnav" role="navigation">
						<div class="menu-prvni-menu-container"><ul id="menu-prvni-menu" class="menu"><li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-14"><a href="http://cs.dbpedia.org/wiki/">Úvodní stránka</a></li>
<li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16"><a target="_blank" href="http://cs.dbpedia.org/sparql">SPARQL</a></li>
<li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a href="https://cs.dbpedia.org/wiki/datasets/">Datasety</a></li>
<li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a href="https://cs.dbpedia.org/wiki/stats/">Statistiky</a></li>
<li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-27 current_page_item menu-item-29"><a href="https://cs.dbpedia.org/wiki/kontakty/">Kontakty</a></li>
</ul></div>					</nav><!-- #site-navigation -->
				</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	
	<div class="sydney-hero-area">
				<div class="header-image">
			<div class="overlay"></div>			<img class="header-inner" src="" width="1920" alt="Czech DBpedia" title="Czech DBpedia">
		</div>
		
			</div>

	
	<div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">	
	<div id="primary" class="content-area col-md-9">
		<main id="main" class="post-wrap" role="main">

	<article id="post-27" class="post-27 page type-page status-publish hentry">		
	<header class="entry-header">	</header>			
<?php
       include('loading-stats.php');
       ?>    

	<footer class="entry-footer">
			</footer><!-- .entry-footer -->
</article><!-- #post-## -->

				
			
		</main><!-- #main -->
	</div><!-- #primary -->


<div id="secondary" class="widget-area col-md-3" role="complementary">
	<aside id="search-2" class="widget widget_search"><form role="search" method="get" class="search-form" action="https://cs.dbpedia.org/wiki/">
				<label>
					<span class="screen-reader-text">Vyhledávání</span>
					<input type="search" class="search-field" placeholder="Hledat &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Hledat" />
			</form></aside>		<aside id="recent-posts-2" class="widget widget_recent_entries">		<h3 class="widget-title">Nejnovější příspěvky</h3>		<ul>
					<li>
				<a href="https://cs.dbpedia.org/wiki/aktualizace-18-4-2018/">Aktualizace 18. 4. 2018</a>
						</li>
					<li>
				<a href="https://cs.dbpedia.org/wiki/vyextrahujte-si-vlastni-aktualni-dbpedia-snapshot/">Vyextrahujte si vlastní aktuální dbpedia snapshot</a>
						</li>
					<li>
				<a href="https://cs.dbpedia.org/wiki/aktualizace-1-2-2017/">Aktualizace 1. 2. 2017</a>
						</li>
					<li>
				<a href="https://cs.dbpedia.org/wiki/aktualizace-virtuosa/">Aktualizace Virtuosa</a>
						</li>
					<li>
				<a href="https://cs.dbpedia.org/wiki/novy-interface-pro-vizualizaci-ceskych-dbpedia-stranek/">Nový interface pro vizualizaci českých DBpedia stránek</a>
						</li>
				</ul>
		</aside>		<aside id="archives-2" class="widget widget_archive"><h3 class="widget-title">Archiv</h3>		<ul>
			<li><a href='https://cs.dbpedia.org/wiki/2018/04/'>Duben 2018</a></li>
	<li><a href='https://cs.dbpedia.org/wiki/2017/02/'>Únor 2017</a></li>
	<li><a href='https://cs.dbpedia.org/wiki/2015/09/'>Září 2015</a></li>
	<li><a href='https://cs.dbpedia.org/wiki/2015/01/'>Leden 2015</a></li>
	<li><a href='https://cs.dbpedia.org/wiki/2014/04/'>Duben 2014</a></li>
		</ul>
		</aside></div><!-- #secondary -->
			</div>
		</div>
	</div><!-- #content -->

	
	
    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			Spravováno Vysokou školou ekonomickou v Praze
			<span class="sep"> | </span>
			vaclav.zeman@vse.cz
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	
</div><!-- #page -->



<script type='text/javascript' src='https://cs.dbpedia.org/wiki/wp-content/themes/sydney/js/scripts.js?ver=4.7.11'></script>
<script type='text/javascript' src='https://cs.dbpedia.org/wiki/wp-content/themes/sydney/js/main.min.js?ver=20170127'></script>
<script type='text/javascript' src='https://cs.dbpedia.org/wiki/wp-content/themes/sydney/js/skip-link-focus-fix.js?ver=20130115'></script>
<script type='text/javascript' src='https://cs.dbpedia.org/wiki/wp-includes/js/wp-embed.min.js?ver=4.7.11'></script>

</body>
</html>
