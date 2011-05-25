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
#myul li{ float:left; margin:8px; height:270px;}
#myul li div{font-size:11px;}
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
        	<li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/sattik_export_2.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/sattik_export_2.jpg" border="0"/></a><div><strong>Category:</strong> Shoping</div><div><strong>Item:</strong> C001</div><div><a href="<?=site_url('sova/quote/C001')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/large_web1.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/small_web1.jpg" border="0"/></a><div><strong>Category:</strong> Beauty Shop</div><div><strong>Item:</strong> C002</div><div><a href="<?=site_url('sova/quote/C002')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/webtemplate1.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate1.jpg" border="0"/></a><div><strong>Category:</strong> Real Estate</div><div><strong>Item:</strong> C003</div><div><a href="<?=site_url('sova/quote/C003')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/1st_choice.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/1st_choice.jpg" border="0"/></a><div><strong>Category:</strong> Consultancy</div><div><strong>Item:</strong> C004</div><div><a href="<?=site_url('sova/quote/C004')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/brightfuture.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/brightfuture.jpg" border="0"/></a><div><strong>Category:</strong> Education</div><div><strong>Item:</strong> C005</div><div><a href="<?=site_url('sova/quote/C005')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/lawyear.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/lawyear.jpg" border="0"/></a><div><strong>Category:</strong> Judicial</div><div><strong>Item:</strong> C006</div><div><a href="<?=site_url('sova/quote/C006')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/mp_foods_2.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/mp_foods_2.jpg" border="0"/></a><div><strong>Category:</strong> Food</div><div><strong>Item:</strong> C007</div><div><a href="<?=site_url('sova/quote/C007')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/large_web2.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/small_web2.jpg" border="0"/></a><div><strong>Category:</strong> Jewellery</div><div><strong>Item:</strong> C008</div><div><a href="<?=site_url('sova/quote/C008')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/large_web3.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/small_web3.jpg" border="0"/></a><div><strong>Category:</strong> Hotel</div><div><strong>Item:</strong> C009</div><div><a href="<?=site_url('sova/quote/C009')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/large_web4.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/small_web4.jpg" border="0"/></a><div><strong>Category:</strong> Solicitor</div><div><strong>Item:</strong> C010</div><div><a href="<?=site_url('sova/quote/C010')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/large_web5.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/small_web5.jpg" border="0"/></a><div><strong>Category:</strong> Business</div><div><strong>Item:</strong> C011</div><div><a href="<?=site_url('sova/quote/C011')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p1" class="pagedemo"><a href="<?=base_url()?>media/portfolio/large/webtemplate2.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate2.jpg" border="0"/></a><div><strong>Category:</strong> Business</div><div><strong>Item:</strong> C012</div><div><a href="<?=site_url('sova/quote/C012')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate3.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate3.jpg" border="0"/></a><div><strong>Category:</strong> Real Estate</div><div><strong>Item:</strong> C013</div><div><a href="<?=site_url('sova/quote/C013')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate4.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate4.jpg" border="0"/></a><div><strong>Category:</strong> Real Estate</div><div><strong>Item:</strong> C014</div><div><a href="<?=site_url('sova/quote/C014')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate12.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate12.jpg" border="0"/></a><div><strong>Category:</strong> Business</div><div><strong>Item:</strong> C015</div><div><a href="<?=site_url('sova/quote/C015')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate13.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate13.jpg" border="0"/></a><div><strong>Category:</strong> Business</div><div><strong>Item:</strong> C016</div><div><a href="<?=site_url('sova/quote/C016')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate14.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate14.jpg" border="0"/></a><div><strong>Category:</strong> Shoping</div><div><strong>Item:</strong> C017</div><div><a href="<?=site_url('sova/quote/C017')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate15.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate15.jpg" border="0"/></a><div><strong>Category:</strong> Education</div><div><strong>Item:</strong> C018</div><div><a href="<?=site_url('sova/quote/C018')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate16.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate16.jpg" border="0"/></a><div><strong>Category:</strong> Education</div><div><strong>Item:</strong> C019</div><div><a href="<?=site_url('sova/quote/C019')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate17.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate17.jpg" border="0"/></a><div><strong>Category:</strong> Foods</div><div><strong>Item:</strong> C020</div><div><a href="<?=site_url('sova/quote/C020')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate18.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate18.jpg" border="0"/></a><div><strong>Category:</strong> Law</div><div><strong>Item:</strong> C021</div><div><a href="<?=site_url('sova/quote/C021')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
            <li id="p2" class="pagedemo" style="display:none;"><a href="<?=base_url()?>media/portfolio/large/webtemplate19.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate19.jpg" border="0"/></a><div><strong>Category:</strong> Template</div><div><strong>Item:</strong> C022</div><div><a href="<?=site_url('sova/quote/C022')?>"><strong style="color:#CC9900;">Get Price</strong></a></div></li>
        </ul>
        <div id="div_pagination" style="float:left;"></div>
    </div>
</div>