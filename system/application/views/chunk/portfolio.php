<script>
$(function() {
	$("#div_pagination").paginate({
		count 		: 15,
		start 		: 15,
		display     : 10,
		border					: false,
		text_color  			: '#79B5E3',
		background_color    	: 'none',	
		text_hover_color  		: '#2573AF',
		background_hover_color	: 'none', 
		images		: false,
		mouse		: 'press',
		onChange  	: function(page){
			$('table[class*=pagedemo]').hide();
			$('table[id*=p'+ page +']').fadeIn('slow');
		  }
	});
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
	border:#CCCCCC solid 1px;
	padding:1px;
}
#mybutton{
	margin-top:10px;
}
#tabs table td{text-align:justify;}
</style>
<h1>Portfolio</h1>
<h3>Sova Infotech - Passion, Creativity, Professionalism & Success</h3><br />
<div id="portfolio">
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Portals</a></li>
            <li><a href="#tabs-2">SEO</a></li>
            <li><a href="#tabs-3">Web Templates</a></li>
            <li><a href="#tabs-4">Logos</a></li>
            <li><a href="#tabs-5">Brochures</a></li>
            <li><a href="#tabs-6">Flyers</a></li>
        </ul>
        <div id="tabs-1">
        	<table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/brightfuture.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Bright Future Consultancy</b></div>Bright Future Consultancy is a comprehensive education consultancy that helps students to choose appropriate career path, course, overseas and educational institutions along with end-to-end assistance in admission and enrolment. The ever expanding list of associated universities and colleges of BFC gives more choice to the students to choose. Their offices, associates and partners are situated across three continents, giving you an enhanced global exposure.<div><a href="http://brightfutureglobal.com" id="mybutton">Visit Site</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/1st_choice.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>1st Choice Consultancy</b></div>1st Choice Consultancy is a one stop solution for job-seekers as well as HR consultants/employers. On one hand, they guide experienced professionals and fresher candidates in finding an appropriate job/career and on the other help HR consultants and employers in getting the perfect candidate at the right time. They cater to a wide range of industries, like Accounting, Finance, Banking, Construction & Property, HR, IT and many more.<div><a href="http://1stchoiceconsultancy.com" id="mybutton">Visit Site</a></div></td>
              </tr>
            </table>
        </div>
        <div id="tabs-2">
        	<table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/bingo_outlook.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Bingo Outlook</b></div>Bingo Outlook is a comprehensive information centre for the online Bingo players. You will find online Bingo Reviews, News, Guide, Promotional Offers, Articles and many more at Bingo Outlook. It also offers comparison among various online Bingo sites so that players can compare them on various parameters and consequently choose the best site for betting their money.  Sova Infotech is doing On-Page Optimisation, Off-Page Optimisation and Content Development for them.<div><a href="http://bingooutlook.com" id="mybutton">Visit Site</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/goldfish_bingo.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Gold Fish bingo</b></div>Goldfish Bingo is one of the fastest emerging online Bingo websites. It offers wide array of games along with tantalising promotional offers. The 24x7 friendly customer support facility gives them added advantage over their peers. Sova Infotech has been working on their online promotion from the very inception of the site. Till now we have done On-page Optimisation, Directory Submission, Link Exchange, Article & Blog submission and many more.<div><a href="http://www.goldfishbingo.com" id="mybutton">Visit Site</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/1st_choice.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>1st Choice Consultancy[Upcoming project]</b></div>1st Choice Consultancy is a one stop solution for job-seekers as well as HR consultants/employers. They are a common electronic platform for HR consultants, employers and job-seekers, where all the concerned parties can find each other and interact to fulfil their respective needs. They also offer high quality Operations Consulting and Market Research services to various companies, helping them in streamlining their different processes. We will start working on the SEO works shortly.<div><a href="http://1stchoiceconsultancy.com" id="mybutton">Visit Site</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/brightfuture.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Bright Future Global[Upcoming project]</b></div>Bright Future Consultancy is a comprehensive education consultancy that helps students to choose appropriate career path, course, overseas and educational institutions along with end-to-end assistance in admission and enrolment. Their offices, associates and partners are situated across three continents, giving you an enhanced global exposure. Sova Infotech has designed and developed the website of BFC. Now, they have given their SEO and online promotional works to us, which we will start shortly.<div><a href="http://brightfutureglobal.com" id="mybutton">Visit Site</a></div></td>
              </tr>
            </table>
        </div>
        <div id="tabs-3">
            <table width="100%" border="0" id="p1" class="pagedemo">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/lawyear.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Law Firm</b></div>A renowned law firm aims to promote and defend Rule of Law fervently, offers professional services to its clients without doing any discrimination among them and also adheres to the finest ethics of the law society. A law firm has many more functions. Thus, presenting, designing and developing a website for law firms need special acumen. Sova Infotech has extensive experience in providing the perfect law firm site. Here is a sample template.<div><a href="<?=base_url()?>media/portfolio/large/lawyear.jpg" rel="webtemplate" title="Law Firm" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p1" class="pagedemo">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/mp_foods_2.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Restaurent</b></div>If you want to make a resounding web presence for your restaurant/ home-delivery service/ catering for parties and ceremonies, come to Sova Infotech for theme-based, appropriate and personalized web designing and development services.  Sova Infotech provides customized and affordable general/interactive/ecommerce website design and development services. Here is a template sample.<div><a href="<?=base_url()?>media/portfolio/large/mp_foods_2.jpg" rel="webtemplate" title="Restaurent" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p1" class="pagedemo">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/webtemplate7.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Restaurent</b></div>Sova Infotech is an expert in designing and developing ecommerce sites for restaurants, home-delivery services and catering for parties/ceremonies. We understand your needs thoroughly and remain in constant touch to provide you with appropriate design and development functionalities, as per your requirement. Have a look at one of our ecommerce site templates.<div><a href="<?=base_url()?>media/portfolio/large/webtemplate7.jpg" rel="webtemplate" title="Restaurent" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p2" class="pagedemo" style="display:none;">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/sattik_export_1.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Import/Export</b></div>Sova Infotech is specialised in designing customized websites meant for showcasing leather products. Our experienced designers have extensive experience in designing website templates (PSD, HTML, Flash and Flash Intro) for all types of export-oriented leather product sites. If you want to design or redesign your site for showcasing your leather products then Sova Infotech is the best and affordable solution at hand.<div><a href="<?=base_url()?>media/portfolio/large/sattik_export_1.jpg" title="Import/Export" rel="webtemplate" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p2" class="pagedemo" style="display:none;">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/sattik_export_2.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Import/Export</b></div>Sova Infotech has brought another customizable website template for showcasing leather products. In fact, we can prepare innumerable website template design as per your requirement. Our experienced and creative web designers can create website design templates for showcasing your leather products, both for export and domestic market, in accordance with your requirements. Get the best, affordable and customised web design templates from Sova Infotech.<div><a href="<?=base_url()?>media/portfolio/large/sattik_export_2.jpg" rel="webtemplate" title="Import/Export" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p2" class="pagedemo" style="display:none;">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/webtemplate1.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Real Estate</b></div>Designing and developing websites for Real Estates, Properties and Apartments is not a cake walk. It needs extensive experience, skill sets and creativeness to deliver the best. Our structured process, creative and quality work-force makes the entire process look seamless. Sova Infotech provides aesthetically designed and developed real estate websites at most affordable price. A sample website template on the Real Estate theme is given here for you to have a look.<div><a href="<?=base_url()?>media/portfolio/large/webtemplate1.jpg" rel="webtemplate" title="Real Estate" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p3" class="pagedemo" style="display:none;">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/webtemplate3.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Real Estate</b></div>Do you need a site to buy or sell properties? Sova Infotech specialises in designing and developing interactive real estate and property related websites. We design and develop functionalities of the site in such a manner that your viewers can get detailed information of finding a property /home at their preferred location within budget instantly.  In fact, information on daily mortgage rates is also highlighted in the homepage itself. Here is a template for preview.<div><a href="<?=base_url()?>media/portfolio/large/webtemplate3.jpg" rel="webtemplate" title="Real Estate" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p3" class="pagedemo" style="display:none;">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/webtemplate4.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Real Estate</b></div>Finding home, property and related information on real estate was never so easy. Sova Infotech is experienced enough in designing and developing real estate websites as per the needs and budget of the client. Our creativity and collective experience places us at a better position to others in delivering a unique design and development solution to the clients. Please check one of our theme-based website templates.<div><a href="<?=base_url()?>media/portfolio/large/webtemplate4.jpg" rel="webtemplate" title="Real Estate" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p3" class="pagedemo" style="display:none;">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/webtemplate2.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Business and Marketing</b></div>When it comes to design and development of sites on business and marketing, Sova Infotech is the name to reckon. We specially emphasise on theme-based design, aesthetics of the site and easy navigation structure. That’s why the business and marketing site designed and developed by us stands apart from the rest, giving a competitive advantage to our clients over their peers. Have a look at one of our sample business and marketing website templates.<div><a href="<?=base_url()?>media/portfolio/large/webtemplate2.jpg" rel="webtemplate" title="Business and Marketing" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p4" class="pagedemo" style="display:none;">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/small_web1.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>eCommerce beauty Product</b></div>Content Required<div><a href="<?=base_url()?>media/portfolio/large/large_web1.jpg" rel="webtemplate" title="eCommerce beauty Product" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p4" class="pagedemo" style="display:none;">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/small_web2.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Online Jewellery Shop</b></div>Content Required<div><a href="<?=base_url()?>media/portfolio/large/large_web2.jpg" rel="webtemplate" title="Online Jewellery Shop" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p4" class="pagedemo" style="display:none;">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/small_web3.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Online Hotel Booking</b></div>Content Required<div><a href="<?=base_url()?>media/portfolio/large/large_web3.jpg" rel="webtemplate" title="Online Hotel Booking" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p5" class="pagedemo" style="display:none;">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/small_web4.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Online Solicitor</b></div>Content Required<div><a href="<?=base_url()?>media/portfolio/large/large_web4.jpg" rel="webtemplate" title="Online Solicitor" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0" id="p5" class="pagedemo" style="display:none;">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/small_web5.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Online Finance</b></div>Content Required<div><a href="<?=base_url()?>media/portfolio/large/large_web5.jpg" rel="webtemplate" title="Online Finance" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <div style="margin-left:80px;"><div id="div_pagination"></div></div>
        </div>
        <div id="tabs-4">
        	<table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/1stchoicelogo.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>1st Choice Consultancy</b></div>1st Choice Consultancy is a one stop solution for job-seekers as well as HR consultants/employers. They are a common electronic platform for HR consultants, employers and job-seekers, where all the concerned parties can find each other and interact to fulfil their respective needs. They also offer high quality Operations Consulting and Market Research. 1st Choice Consultancy wanted a unique logo that gives them quick brand visibility. Here is the logo that they liked and approved.<div><a href="<?=base_url()?>media/portfolio/large/1stchoicelogo.jpg" rel="logo" title="1st Choice Consultancy" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/Logo-Design1.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Bright Future Consultancy</b></div>Bright Future Consultancy is a comprehensive education consultancy that helps students in achieving their dream of studying abroad. Right from providing consultancy on selection of career path, course and educational institutions to end-to-end assistance in admission and enrolment, BFC guides students to success. Thus, BFC management wanted such a logo that truly communicates their brand message. Here is the logo design of Bright Future Consultancy.<div><a href="<?=base_url()?>media/portfolio/large/Logo-Design1.jpg" rel="logo" title="Bright Future Consultancy" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/mplogo.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Catering</b></div>There are many catering services who offer exclusive catering services to parties and ceremonies. We have created logos related to catering industry. The logos are designed in such a manner that they communicate the message of their brand directly to the audience. Sova Infotech boasts of creating theme-based and creative logos that help a catering service provider in establishing their brand to their target audience.<div><a href="<?=base_url()?>media/portfolio/large/mplogo.jpg" title="Restaurent" rel="logo" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/Logo-Design2.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Restaurent</b></div>There are many restaurants across the world. However, only a very few of them have been able to establish their brand image. The first thing through which customers recognize a brand is the logo. Thus, strategically and creatively created theme-based logo can give huge mileage to a restaurant in establishing itself as a brand. Creative and experienced logo designers of Sova Infotech are apt to deliver creative logos on the basis of clients’ needs, aesthetics and theme.<div><a href="<?=base_url()?>media/portfolio/large/Logo-Design2.jpg" title="Restaurent" rel="logo" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/Logo-Design3.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Restaurent</b></div>When home-delivery service is there then why should you worry about throwing a party around? Are you worrying about cooking for so many of your friends and relatives who have come to your place? Home-delivery services make our lives easy by delivering tasty, quality and hygienic food to our place during parties, ceremonies, get-togethers and other events. Here is a sample logo.<div><a href="<?=base_url()?>media/portfolio/large/Logo-Design3.jpg" title="Restaurent" rel="logo" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
        </div>
        <div id="tabs-5">
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/Brochure-Design.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Helios College</b></div>Helios International College is an independent private higher education institution that provides wide array of courses. HIC wanted to reach more quality students through customised and attractive brochures. Sova Infotech has created brochures on the basis of the specific requirements of Helios International College. Please have a look at one of the brochures prepared by Sova Infotech.<div><a href="<?=base_url()?>media/portfolio/large/Brochure-Design.jpg" rel="broucher" title="Hellious College" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/Brochure-Design2.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Helios College</b></div>Helios International College is an independent private higher education institution providing highly focused quality MBA-course along with a wide range of courses. Sova Infotech has prepared customised MBA-specific brochure for HIC so that they can reach more and more prospective students and consequently convert them into leads. This is the brochure we are talking about.<div><a href="<?=base_url()?>media/portfolio/large/Brochure-Design2.jpg" rel="broucher" title="Hellious College" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
        </div>
        <div id="tabs-6">
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/flyer-Design1.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Bright Future Consultancy</b></div>If you want to communicate your message quickly and effectively to your target audience, fliers are the best business tools. Bright Future Consultancy is a comprehensive education consultancy that provides end-to-end guidance to students for studying abroad. Here is the flier that Sova Infotech had prepared for Bright Future Consultancy. We had prepared the flier in such a way that the target audience gets a preview of BFC at the fleet of a glance.<div><a href="<?=base_url()?>media/portfolio/large/flyer-Design1.jpg" rel="flyer" title="Bright Future Consultancy" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
            <table width="100%" border="0">
              <tr>
                <td style="width:150px;" valign="top"><img src="<?=base_url()?>media/portfolio/flyer-Design2.jpg" border="0"/></td>
                <td valign="top" style="padding-left:10px;"><div><b>Helios College</b></div>Helios International College is an independent private higher education institution that provides wide array of courses. HIC wanted us to highlight their USPs in their fliers in an attractive manner so that a niche market is created among their prospective students.   This simple but effective flier is designed by Sova Infotech to make their client reach their target audience quickly and effectively.<div><a href="<?=base_url()?>media/portfolio/large/flyer-Design2.jpg" rel="flyer" title="Hellious College" id="mybutton">Large View</a></div></td>
              </tr>
            </table>
        </div>
    </div>
</div>