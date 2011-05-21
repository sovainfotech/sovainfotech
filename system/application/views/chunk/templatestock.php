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
        	<li><a href="<?=base_url()?>media/portfolio/large/sattik_export_2.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/sattik_export_2.jpg" border="0"/></a></li>
            <li><a href="<?=base_url()?>media/portfolio/large/large_web1.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/small_web1.jpg" border="0"/></a></li>
            <li><a href="<?=base_url()?>media/portfolio/large/webtemplate1.jpg" class="preview"><img src="<?=base_url()?>media/portfolio/webtemplate1.jpg" border="0"/></a></li>
        </ul>
    </div>
</div>