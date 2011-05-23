<script>
$(function() {
	$("#tabs").tabs();
	$('a[id*="mybutton"]').button({
		icons:{
        	primary: "ui-icon-gear"
        }
	});
	$("#div_pagination").paginate({
		count 		: 2,
		start 		: 1,
		display     : 2,
		border					: false,
		text_color  			: '#79B5E3',
		background_color    	: 'none',	
		text_hover_color  		: '#2573AF',
		background_hover_color	: 'none', 
		images		: false,
		mouse		: 'press',
		onChange  	: function(page){
			$('li[class*=pagedemo]').hide();
			$('li[id*=p'+ page +']').fadeIn('slow');
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
#preview{
position:absolute;
border:1px solid #ccc;
background:#333;
padding:5px;
display:none;
color:#fff;
}
</style>
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Our Premium Templates</a></li>
    </ul>
    <div id="tabs-1">
        <ul id="myul" style="list-style:none;">
        	<li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/sattik_export_2.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/sattik_export_2.jpg" border="0"/></a></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/large_web1.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/small_web1.jpg" border="0"/></a></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/webtemplate1.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate1.jpg" border="0"/></a></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/1st_choice.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/1st_choice.jpg" border="0"/></a></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/brightfuture.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/brightfuture.jpg" border="0"/></a></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/lawyear.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/lawyear.jpg" border="0"/></a></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/mp_foods_2.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/mp_foods_2.jpg" border="0"/></a></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/large_web2.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/small_web2.jpg" border="0"/></a></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/large_web3.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/small_web3.jpg" border="0"/></a></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/large_web4.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/small_web4.jpg" border="0"/></a></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/large_web5.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/small_web5.jpg" border="0"/></a></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/webtemplate1.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate1.jpg" border="0"/></a></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate2.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate2.jpg" border="0"/></a></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate3.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate3.jpg" border="0"/></a></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate4.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate4.jpg" border="0"/></a></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate12.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate12.jpg" border="0"/></a></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate13.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate13.jpg" border="0"/></a></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate14.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate14.jpg" border="0"/></a></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate15.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate15.jpg" border="0"/></a></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate16.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate16.jpg" border="0"/></a></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate17.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate17.jpg" border="0"/></a></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate18.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate18.jpg" border="0"/></a></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate19.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate19.jpg" border="0"/></a></li>
        </ul>
        <div id="div_pagination" style="float:left;"></div>
    </div>
</div>