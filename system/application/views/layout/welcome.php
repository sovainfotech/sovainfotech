<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title><?=$metatitle?></title>
  <meta http-equiv="Content-Type" content="text/html" />
  <meta name="keywords" content="<?=$metakeywords?>" />
  <meta name="description" content="<?=$metadescription?>" />
  <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>favicon.ico"/> 
  <link rel="stylesheet" href="<?=base_url()?>media/css/jquery-ui-1.8.11.custom.css" type="text/css" media="all" /> 
  <link href="<?=base_url()?>media/css/style.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url()?>media/css/coin-slider-styles.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url()?>media/css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url()?>media/css/divpagi.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url()?>media/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url()?>media/css/fieldsetforms.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="<?=base_url()?>media/js/jquery-1.5.1.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>media/js/coin-slider.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>media/js/jquery-ui-1.8.11.custom.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>media/js/swfobject.js"></script>
  <script type="text/javascript" src="<?=base_url()?>media/js/imagepreview.js"></script>
  <script type="text/javascript" src="<?=base_url()?>media/js/jquery.lightbox-0.5.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>media/js/jquery.paginate.js"></script>
  <script type="text/javascript" src="<?=base_url()?>media/js/formvalidation/jquery.validationEngine.js"></script>
  <script type="text/javascript" src="<?=base_url()?>media/js/formvalidation/jquery.validationEngine-en.js"></script>
  <script type="text/javascript">
	$(document).ready(function() {
		$('#coin-slider').coinslider({ width: 561, height: 203, navigation: true, delay: 2000, effect:'rain', links : false, hoverPause: false, spw: 7, sph: 5, opacity: 0.7, titleSpeed: 500, sDelay: 50 });
		$(".formular").validationEngine();
		$('a[rel*=webtemplate]').lightBox({
			imageLoading:'<?=base_url()?>media/images/lightbox-loading.gif',
			imageBtnClose:'<?=base_url()?>media/images/lightbox-btn-close.gif',
			imageBtnPrev:'<?=base_url()?>media/images/lightbox-btn-prev.gif',
			imageBtnNext:'<?=base_url()?>media/images/lightbox-btn-next.gif',
			containerResizeSpeed: 350,
			txtImage: 'Web Template'
		});
		$('a[rel*=logo]').lightBox({
			imageLoading:'<?=base_url()?>media/images/lightbox-loading.gif',
			imageBtnClose:'<?=base_url()?>media/images/lightbox-btn-close.gif',
			imageBtnPrev:'<?=base_url()?>media/images/lightbox-btn-prev.gif',
			imageBtnNext:'<?=base_url()?>media/images/lightbox-btn-next.gif',
			containerResizeSpeed: 350,
			txtImage: 'Logo'
		});
		$('a[rel*=broucher]').lightBox({
			imageLoading:'<?=base_url()?>media/images/lightbox-loading.gif',
			imageBtnClose:'<?=base_url()?>media/images/lightbox-btn-close.gif',
			imageBtnPrev:'<?=base_url()?>media/images/lightbox-btn-prev.gif',
			imageBtnNext:'<?=base_url()?>media/images/lightbox-btn-next.gif',
			containerResizeSpeed: 350,
			txtImage: 'Broucher'
		});
		$('a[rel*=flyer]').lightBox({
			imageLoading:'<?=base_url()?>media/images/lightbox-loading.gif',
			imageBtnClose:'<?=base_url()?>media/images/lightbox-btn-close.gif',
			imageBtnPrev:'<?=base_url()?>media/images/lightbox-btn-prev.gif',
			imageBtnNext:'<?=base_url()?>media/images/lightbox-btn-next.gif',
			containerResizeSpeed: 350,
			txtImage: 'Flyer'
		});
		$('a[rel*=template]').lightBox({
			imageLoading:'<?=base_url()?>media/images/lightbox-loading.gif',
			imageBtnClose:'<?=base_url()?>media/images/lightbox-btn-close.gif',
			imageBtnPrev:'<?=base_url()?>media/images/lightbox-btn-prev.gif',
			imageBtnNext:'<?=base_url()?>media/images/lightbox-btn-next.gif',
			containerResizeSpeed: 350,
			txtImage: 'Our Premium Templates'
		});
		$('div[id*="accordion"]').accordion({
			autoHeight: false,
			navigation: true
		});
		$('input[id*="mybutton"]').button();
	});
  </script>
  <script type="text/javascript"> 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20814353-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 </script>
</head>
<body>
    <div id="maincontain">
    	<!--Header Start-->
        <div id="header">
        	<div class="logo"><a href="<?=base_url()?>" title="Development, Web Designing and SEO"><img src="<?=base_url()?>media/images/sova-infotech.png" alt="Sova Infotech" border="0" /></a></div>
            <div class="header_right">
            	<!--Social Network Start-->
            	<div class="social_networs_area">
                	<div class="socialbg_l"></div>
                    <div class="socialbg_mid">
                        <a href="<?=base_url()?>"><img src="<?=base_url()?>media/images/home.png" alt="" title="" /></a>
                        <a href="<?=site_url('sova/sitemap')?>"><img src="<?=base_url()?>media/images/sitemap.png" alt="" title="" /></a>
                    </div>
                    <div class="socialbg_r"></div>
                </div>
                <!--Social Network End-->
                <div class="clear"></div>
                <!--Contacts-->
                <div class="contact_nos" style="width:190px;">
                	<div class="phone" style="background:url(<?=base_url()?>media/images/uk.png) left no-repeat; padding-left:40px; clear:both; margin-bottom:10px; float:left;">
                        <div>020 7702 2700</div>
                        <div class="email"> <a href="mailto:info@sovainfotech.com">info@sovainfotech.com</a></div>
                    </div>
                    <div class="phone" style="background:url(<?=base_url()?>media/images/india.png) left no-repeat; padding-left:40px; float:left;">
                        <div>033 2570 2393</div>
                        <div class="email"> <a href="mailto:india@sovainfotech.com">india@sovainfotech.com</a></div>
                    </div>
                </div>
                <!--End Contacts-->
            </div>
        </div>
        <!--Header End-->
        <!--Navigation Menu-->
        <div id="nav">
            <ul>
                <li class="round_l"><a href="<?=base_url()?>"<?=$this->uri->segment(2)=='' ? ' class="active round_l"' : ''?>>Home</a></li>
              	<li class="border"></li>
                <li><a href="<?=site_url('sova/aboutus')?>"<?=$this->uri->segment(2)=='aboutus' ? ' class="active"' : ''?>>About Us</a></li>
                <li class="border"></li>
                <li><a href="<?=site_url('sova/services')?>"<?=$this->uri->segment(2)=='services' ? ' class="active"' : ''?>>&nbsp;&nbsp;Services&nbsp;&nbsp;</a></li>
                <li class="border"></li>
                <li><a href="<?=site_url('sova/web2basedwebdesign')?>"<?=$this->uri->segment(2)=='web2basedwebdesign' ? ' class="active"' : ''?>>Web Designing</a></li>
                 <li class="border"></li>
                <li><a href="<?=site_url('sova/softdevelopment')?>"<?=$this->uri->segment(2)=='softdevelopment' ? ' class="active"' : ''?>>Software Development</a></li>
                <li class="border"></li>
                <li><a href="<?=site_url('sova/internetmarketing')?>"<?=$this->uri->segment(2)=='internetmarketing' ? ' class="active"' : ''?>>&nbsp;&nbsp;&nbsp;&nbsp;SEO&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li class="border"></li>
                <li><a href="<?=site_url('sova/templatestock')?>"<?=$this->uri->segment(2)=='templatestock' ? ' class="active"' : ''?>>Our Template Stock</a></li>
                <li class="border"></li>
                <li><a href="<?=site_url('sova/portfolio')?>"<?=$this->uri->segment(2)=='portfolio' ? ' class="active"' : ''?>>Portfolio</a></li>
                <li class="border"></li>
                <li><a href="<?=site_url('sova/quote')?>"<?=$this->uri->segment(2)=='quote' ? ' class="active"' : ''?>>&nbsp;&nbsp;&nbsp;&nbsp;Free Quote&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li class="border"></li>
                <li class="round_r"><a href="<?=site_url('sova/contactus')?>"<?=$this->uri->segment(2)=='contactus' ? ' class="active round_r"' : ''?>>Contact Us</a></li>
            </ul>
         </div>
         <!--End Navigation Menu-->
         <!--Body Start-->
         <div id="body">
         	<!--Body Left Part-->
            <div class="left">
            	<!--Services Page-->
                <div class="box_area">
                	<div class="box_area_header">Our Services</div>
                    <div class="box_area_txt_area">
                    	<ul class="category">
                            <li class="background-none" style="background:url(<?=base_url()?>media/images/web-design-icon.png) left no-repeat;  padding-left:34px; padding-bottom:13px;"><h2>Web Design</h2></li>
                            <li class="dotted-border-blue"></li>
                            <li><a href="<?=site_url('sova/web2basedwebdesign')?>">Web 2.0 based designing</a></li>
                            <li class="dotted-border"></li>
                            <li><a href="<?=site_url('sova/ecommerce')?>">Ecommerce, Blog, CMS</a></li>
                            <li class="dotted-border"></li>
                            <li><a href="<?=site_url('sova/templatedesign')?>">HTML, CSS Template</a></li>
                            <li class="dotted-border-blue"></li>
                            <li><a href="<?=site_url('sova/flashdesign')?>">Flash</a></li>
                            <li class="dotted-border-blue"></li>
                            <li class="background-none" style="background:url(<?=base_url()?>media/images/web-development.png) left no-repeat;  padding-left:34px; padding-bottom:13px;"><h2>Web Development</h2></li>
                            <li class="dotted-border-blue"></li>
                            <li><a href="<?=site_url('sova/chromeplugins')?>">Chrome Plugins</a></li>
                            <li class="dotted-border"></li>
                            <li><a href="<?=site_url('sova/cms')?>">PHP [Drupal,WordPress]</a></li>
                            <li class="dotted-border"></li>
                            <li><a href="<?=site_url('sova/microsoftnet')?>">Microsoft .NET</a></li>
                            <li class="dotted-border"></li>
                            <li><a href="<?=site_url('sova/sharepoint')?>">Microsoft SharePoint 2010</a></li>
                            <li class="dotted-border-blue"></li>
                            <li><a href="<?=site_url('sova/flex')?>">Adobe Flex 3.0</a></li>
                            <li class="dotted-border-blue"></li>
                            <li class="background-none" style="background:url(<?=base_url()?>media/images/mobile.png) left no-repeat;  padding-left:34px; padding-bottom:13px;"><h2>Mobile Development</h2></li>
                            <li class="dotted-border-blue"></li>
                            <li><a href="<?=site_url('sova/android')?>">Android Application</a></li>
                            <li class="dotted-border"></li>
                            <li><a href="<?=site_url('sova/iphone')?>">iPhone Application</a></li>
                            <li class="dotted-border"></li>
                            <li><a href="<?=site_url('sova/bada')?>">Samsung Bada Application</a></li>
                            <li class="dotted-border-blue"></li>
                            <li class="background-none" style="background:url(<?=base_url()?>media/images/web-development-icon.png) left no-repeat;  padding-left:34px; padding-bottom:13px;"><h2>Internet Marketing</h2></li>
                            <li class="dotted-border-blue"></li>
                            <li><a href="<?=site_url('sova/internetmarketing')?>">Search Engine Optimization [SEO]</a></li>
                            <li class="dotted-border-blue"></li>
                            <li class="background-none" style="background:url(<?=base_url()?>media/images/web-design-icon.png) left no-repeat;  padding-left:34px; padding-bottom:13px;"><h2>Print & Graphics</h2></li>
                            <li class="dotted-border-blue"></li>
                            <li><a href="<?=site_url('sova/publish')?>">Logo, Broucher Design</a></li>
                        </ul>
                    </div>
                    <div class="box_area_buttom"></div>
                </div>
                <div class="box_area">
                	<div class="box_area_header">Newsletter</div>
                    <div class="box_area_txt_area">
                    	<form method="post" class="formular">
                        <div style="font-size:12px;">Name</div>
                        <div><input name="" type="text" size="24" class="validate[required]" id="name"/></div>
                        <div style="font-size:12px; margin-top:5px;">Email</div>
                        <div><input name="" type="text" size="24" class="validate[required]" id="email"/></div>
                        <div style="margin-top:5px;"><input type="submit" value="Submit" id="mybutton"/></div>
                        </form>
                    </div>
                    <div class="box_area_buttom"></div>
                </div>
                <!--Services Page End-->
            </div>
            <!--End Body Left Part-->
            <!--Body Middle Part-->
            <div class="mid">
					<div class="mid-mid">
                	<?php if($this->uri->segment(2) <> 'templatestock' && $this->uri->segment(2) <> 'quote'):?>
                    <!--Slider-->
                    <div id='coin-slider'>
                        <img src='<?=base_url()?>media/pictures/1.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/15.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/2.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/5.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/3.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/4.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/6.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/7.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/8.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/9.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/10.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/11.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/12.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/13.jpg' alt=""/>
                        <img src='<?=base_url()?>media/pictures/14.jpg' alt=""/>
                    </div>
                    <!--End Slider-->
                    <div class="clear">&nbsp;</div>
					<?php endif;?>
					<?=$content?>                    
                    <br />
                </div>
            </div>
            <!--End Body Middle Part-->
            <!--Body Right Part-->
            <div class="right">
            	<?php if($this->uri->segment(2)):?>
                <div class="box_area">
                	<div class="box_area_header">You are here</div>
                    <div class="box_area_txt_area">
                        <a href="<?=base_url()?>">Home</a> &raquo; <strong><?=$this->uri->segment(2);?></strong>
                    </div>
                    <div class="box_area_buttom"></div>
                </div>
                <?php endif;?>
                <div class="box_area">
                   <a href="<?=site_url('sova/templatestock')?>"><img src="<?=base_url()?>media/images/template.gif" border="0"/></a>
                </div>
                <div class="box_area">
                   <a href="<?=site_url('sova/quote')?>"><img src="<?=base_url()?>media/images/sale.gif" border="0"/></a>
                </div>
                <div class="box_area">
                	<div class="box_area_header">Live Chat</div>
                    <div class="box_area_txt_area">
                        <a href="javascript:void(window.open('http://sovainfotech.com/onlinechat/chat.php?code=U0VSVkVSUEFHRQ__','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=yes,status=yes,scrollbars=yes'))">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?=base_url()?>media/images/chat_icon.jpg" alt="live chat with us" title="Live Chat with Us" /></a>
                    </div>
                    <div class="box_area_buttom"></div>
                </div>
                <div class="box_area">
                    <div class="box_area_header">Follow us in Twitter</div>
                    <div class="box_area_txt_area">
                        <a href="http://twitter.com/sovainfotech" target="_blank"><img src="<?=base_url()?>media/images/twitter.png" alt="Twitter" title="Twitter" border="0" style="margin:10px 0px 10px 7px;"/></a>
                    </div>
                    <div class="box_area_buttom"></div>
                </div>
                <div class="box_area">
                	<div class="box_area_header">Follow in Facebook</div>
                    <div class="box_area_txt_area">
                        <a href="http://www.facebook.com/pages/Sova-Infotech/177758612265902?v=wall" target="_blank"><img src="<?=base_url()?>media/images/1296799290_facebook-large_blue.png" alt="Facebook" title="Facebook" border="0" style="position:relative; left:12px; margin:10px 0px 6px 0px;"/></a>
                    </div>
                    <div class="box_area_buttom"></div>
                </div>
                <div class="box_area">
                	<div class="box_area_header">Follow in Delicious</div>
                    <div class="box_area_txt_area">
                        <a href="http://www.delicious.com/sovainfotech" target="_blank"><img src="<?=base_url()?>media/images/1297261508_delicious-large_blue.png" alt="Delicious" title="Delicious" border="0" style="position:relative; left:12px; margin:5px 0px 5px 0px;"/></a>
                    </div>
                    <div class="box_area_buttom"></div>
                </div>
                <div class="box_area">
                	<div class="box_area_header">Others</div>
                    <div class="box_area_txt_area">
                        <div style="margin-left:1px; margin-top:20px;"><img src="<?=base_url()?>media/images/valid-html40-blue.png" border="0"/> <img src="<?=base_url()?>media/images/valid-xhtml10-blue.png" border="0"/></div>
                    	<div style="margin-left:50px; margin-top:20px;"><A HREF="http://www.copyscape.com/online-plagiarism/"><IMG SRC="<?=base_url()?>media/images/copyscape_seal.gif" ALT="Protected by Copyscape Online Plagiarism Check" TITLE="Protected by Copyscape Plagiarism Checker - Do not copy content from this page." WIDTH="88" HEIGHT="31" BORDER="0"></A></div>
                    </div>
                    <div class="box_area_buttom"></div>
                </div>
            </div>
            <!--End Body Right Part-->
         </div>
         <!--Body Finish-->
         <div class="footer-dev-work" align="center"><img src="<?=base_url()?>media/images/logo_banner.jpg" rel="nofollow" border="0" usemap="#Map" alt="Service Image" />
         <map name="Map" id="Map">
        	<area shape="rect" coords="5,3,93,41" href="http://drupal.org" rel="nofollow" title="Drupal" alt="Drupal" style="border:#CCCCCC solid 1px;" />
            <area shape="rect" coords="102,3,192,42" href="http://cakephp.org/" title="Cake PHP" alt="Cake PHP" rel="nofollow"/>
            <area shape="rect" coords="203,4,290,41" href="http://joomla.org" title="Joomla" alt="joomla" rel="nofollow"/>
            <area shape="rect" coords="299,4,388,41" href="http://www.magentocommerce.com/" title="Magento" alt="Magento" rel="nofollow"/>
            <area shape="rect" coords="399,5,484,40" href="http://oscommerce.com" alt="osCommerce" title="osCommerce" rel="nofollow"/>
            <area shape="rect" coords="497,4,582,40" href="http://wordpress.org" alt="" title="wordpress" rel="nofollow"/>
            <area shape="rect" coords="593,5,684,39" href="http://android.com" alt="Android" title="Android" rel="nofollow"/>
            <area shape="rect" coords="693,5,782,40" href="http://sharepoint.microsoft.com/en-us/Pages/default.aspx" alt="SharePoint" title="Sharepoint 2010" rel="nofollow"/>
            <area shape="rect" coords="793,5,883,41" href="http://sharepoint.microsoft.com/en-us/Pages/default.aspx" title="Sharepoint Server" alt="SharePoint" rel="nofollow"/>
           <area shape="rect" coords="891,5,980,41" href="http://codeigniter.com" alt="CodeIgniter" title="CodeIgniter" rel="nofollow"/>
         </map>
         </div>
		<!--Footer Start-->
         <div id="footer">
         	<div class="top">&nbsp;</div>
            <div class="mid">
                <div class="clear">&nbsp;</div>
                <p class="footer-menu">
                    <a href="<?=base_url()?>">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=site_url('sova/aboutus')?>">About Sova Infotech</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=site_url('sova/clients')?>">Our Clients</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=site_url('sova/career')?>">Career</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=site_url('sova/contactus')?>">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=site_url('sova/sitemap')?>">Sitemap</a>
                </p>
                <p class="copyright"><span style="color:#999999;">Copyright &copy; 2010 Sova Infotech. All Rights Reserved.</span><br /><span>All trademarks and registered marks are the properties of their respective companies.</span></p>               
            </div>
         </div>
         <!--Footer End-->
    </div>
</body>
</html>