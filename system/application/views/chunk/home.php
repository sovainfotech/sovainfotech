<script>
$(function() {
	$("#tabs").tabs();
	$('a[id*="mybutton"]').button({
		icons:{
        	primary: "ui-icon-gear"
        }
	});
});
</script>
<style>
#tabs img{
	border:#CCCCCC solid 2px;
	padding:3px;
	-moz-border-radius:4px;	-webkit-border-radius:4px;	-khtml-border-radius:4px;
}
#mybutton{
	margin-top:10px;
}
#tabs{ float:left; width:100%;}
#tabs table td{text-align:justify;}
#myul li{ float:left; margin:8px;}
</style>
<h1>Welcome to Sova Infotech</h1>
<h3>Web Development, Design, Internet Marketing & SEO – One Stop Solution</h3><br />
<p style="text-align:justify;">Sova Infotech has a team of experienced, skilled and knowledgeable professionals who work coherently to give you the best possible web site design, development and online promotional services. <br /><br />We are specialists in creating e-commerce websites to help businesses increase their sales. Our web designers and developers are experts in developing and designing websites with the help of open source Content management System (CMS), like Drupal and Joomla. <br /><br />We are specialists in different aspects of copywriting and internet marketing too. We not only specialise in Search Engine Optimisation (SEO) but also in Search Engine Marketing, Email Marketing, Social Media Optimisation, Conversion Optimisation and many more. Please go through our services to know more about us.</p><br />
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Our Premium Templates</a></li>
    </ul>
    <div id="tabs-1">
        <ul id="myul" style="list-style:none;">
        	<li><a href="<?=base_url()?>media/portfolio/large/sattik_export_2.jpg" rel="template"><img src="<?=base_url()?>media/portfolio/sattik_export_2.jpg" border="0"/></a></li>
            <li><a href="<?=base_url()?>media/portfolio/large/large_web1.jpg" rel="template"><img src="<?=base_url()?>media/portfolio/small_web1.jpg" border="0"/></a></li>
            <li><a href="<?=base_url()?>media/portfolio/large/webtemplate1.jpg" rel="template"><img src="<?=base_url()?>media/portfolio/webtemplate1.jpg" border="0"/></a></li>
        </ul>
    </div>
    <div style="margin:0px 5px 15px 25px;"><a href="#" id="mybutton"><strong>More Templates &raquo;</strong></a></div>
</div>