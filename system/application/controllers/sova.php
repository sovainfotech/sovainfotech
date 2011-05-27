<?php
class Sova extends Controller {
	function Sova(){
		parent::Controller();	
	}
	function index(){
		$templatevar['metatitle'] = 'Web Design, Web Development, Internet Marketing company in India Sova Infotech';
		$templatevar['metakeywords'] = 'web design company, web development India, Internet marketing, web site design services, web designer, content management system, cms, e-commerce, search engine optimisation, seo, sova infotech';
		$templatevar['metadescription'] = 'Sova Infotech is a professional and affordable web design services, web site development, internet marketing company from India. SEO, CMS, E-commerce, Template design and all web based services are also offered by Sova Infotech in low cost. Sova Infotech is the leading web site design company from India.';
		$templatevar['content'] = $this->load->view('chunk/home',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function aboutus(){
		$templatevar['metatitle'] = 'About Sova Infotech';
		$templatevar['metakeywords'] = 'Sova Infotech, sovainfotech.com, sova infotech info, About Sova Infotech, web design, website development, internet marketing.';
		$templatevar['metadescription'] = 'About Sova Infotech – Sova Infotech is number one complete web solution company in India. Visit us for more information on business web site design, website development, internet marketing etc.';
		$templatevar['content'] = $this->load->view('chunk/aboutus',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function services(){
		$templatevar['metatitle'] = 'Services | Sova Infotech';
		$templatevar['metakeywords'] = 'Content Management System, web Content Management Systems, cms, best Content Management System, Content Management System (CMS), SovaInfotech, web design, India';
		$templatevar['metadescription'] = 'Content Management System (CMS) developed by Sova Infotech is a Search Engine friendly Content Management solution help us to bringing out the best of web content. Content Management System (CMS) developed by Sova Infotech can be applied for existing website design also.';
		$templatevar['content'] = $this->load->view('chunk/services',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function webdesign(){
		$templatevar['metatitle'] = 'Professional Website Design Company in India offering Web Design Service - Sova Infotech.';
		$templatevar['metakeywords'] = 'web design, web site design, web page design, web design company, web design services, development, India web designs company, Sova Infotech, affordable web site design, web design template, web design firm, web designers, web designing, website designing agency, web developer.';
		$templatevar['metadescription'] = 'Sova Infotech is a professional website design company based in India offering cheap, affordable business web design and development. Our expert areas are in web site design, web design template, web design services, search engine Optimisation, web development.';
		$templatevar['content'] = $this->load->view('chunk/webdesign',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function webdevelopment(){
		$templatevar['metatitle'] = 'Web Development Company in India offering Website Development and Design Service - Sova Infotech';
		$templatevar['metakeywords'] = 'Web Development, web development services, web site development, web development company, web development firm, web developer, web application development, web design development, ecommerce web development, seo, php, web developer, India';
		$templatevar['metadescription'] = 'Sova Infotech is a professional web development company based in India offering cheap, affordable business website development and web design services. Our expert areas are in web development, ecommerce web development, web site design, web design template, web design services, search engine Optimisation.';
		$templatevar['content'] = $this->load->view('chunk/webdevelopment',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function internetmarketing(){
		$templatevar['metatitle'] = 'Internet Marketing | Search Engine Marketing | SEO | Web Marketing Company – Sova Infotech';
		$templatevar['metakeywords'] = 'Internet Marketing, Internet Marketing Company India, Internet Marketing specialist, Internet Marketing expert, website promotion, internet marketing services, Sova Infotech, best Internet Marketing, Internet Marketing consultants, seo, online internet marketing, research, internet marketing for online business, search engine optimisation, social media optimisation, search engine marketing';
		$templatevar['metadescription'] = 'Internet Marketing company in India Sova Infotech offers the best in Internet Market world. In Sova Infotech our SEO (Search Engine Optimisation), Web Marketing expert team help our client business website in top in search engines';
		$templatevar['content'] = $this->load->view('chunk/internetmarketing',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function printgraphics(){
		$templatevar['metatitle'] = 'Print and Graphics Design | Logo Design | Brochure Design | Sova Infotech India';
		$templatevar['metakeywords'] = 'print, graphics, design, Print & Graphics Design, graphic design, graphic design firm, graphic design services, graphic design print, graphic web design, graphic designer, printing graphic design, graphic design company, website graphic design, graphic logo design, graphic printing and design, Printing Company, Print Media Advertising Agency, Brochure design India, Catalogs Design India';
		$templatevar['metadescription'] = 'Print and Graphics design company Sova Infotech in India provide all type of Print and Graphics design services to every kind of business. Our services include printing design, graphics design, logo design, brochure design, ad design and print and more.';
		$templatevar['content'] = $this->load->view('chunk/printgraphics',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function contentdevelopment(){
		$templatevar['metatitle'] = 'Website Content Development | Content Development India | Sova Infotech';
		$templatevar['metakeywords'] = 'content, website content development, content development, website content, website content developer, website content writer, website content development India, sova infotech';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/contentdevelopment',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function contactus(){
		$this->load->library('email');
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		if($_POST['data']){
			foreach($_POST['data'] as $key=>$value){
				$val .= $key.': '.$value.'<br/>';
			}
			$var['msg'] = 'Our responsible person will contact to you as soon as possible.';
			$this->email->from('washim@sovainfotech.com', 'Tech Support@Sova Infotech - Contact Now');
			$this->email->to('info@sovainfotech.com');
			$this->email->cc('sandip@sovainfotech.com,washim@sovainfotech.com,ramen@sovainfotech.com'); 
			$this->email->subject('Client need to contact with us for new services');
			$body = '<p>Hello Member,<br>
					  &nbsp;&nbsp;&nbsp;I would like to inform you that following client want to contact with us. Please contact with this person as soon as possible. Following requirements clients appreciated...<br>
					  --------------------------------------------------------------------------------------------------------------------------<br>
					  '.$val.'
					  --------------------------------------------------------------------------------------------------------------------------</p>
					<p>Thanks and Regards,<br>
					Washim Ahmed<br>
					Tech Support Sova Infotech<br>
					washim@sovainfotech.com</p>
					';
			$this->email->message($body);
			$this->email->send();
		}
		$templatevar['metatitle'] = 'Contact Us | Sova Infotech';
		$templatevar['metakeywords'] = 'content, website content development, content development, website content, website content developer, website content writer, website content development India, sova infotech';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/contactus',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function portfolio(){
		$templatevar['metatitle'] = 'Portfolio | Sova Infotech';
		$templatevar['metakeywords'] = 'web design company, web development India, Internet marketing, web site design services, web designer, content management system, cms, e-commerce, search engine optimisation, seo, sova infotech';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/portfolio',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function career(){
		$templatevar['metatitle'] = 'Career | Sova Infotech';
		$templatevar['metakeywords'] = 'web design company, web development India, Internet marketing, web site design services, web designer, content management system, cms, e-commerce, search engine optimisation, seo, sova infotech';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/career',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function quote(){
		$this->load->library('email');
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		if($_POST['data']){
			foreach($_POST['data'] as $key=>$value){
				$val .= $key.': '.$value.'<br/>';
			}
			$var['msg'] = 'Our responsible person will get back to you with all quote details.';
			$this->email->from('washim@sovainfotech.com', 'Tech Support@Sova Infotech - Free Quotation');
			$this->email->to('info@sovainfotech.com');
			$this->email->cc('sandip@sovainfotech.com,washim@sovainfotech.com,ramen@sovainfotech.com'); 
			$this->email->subject('Free Quotaion required for Client');
			$body = '<p>Hello Member,<br>
					  &nbsp;&nbsp;&nbsp;I would like to inform you that following free quotation has created from sovainfotech.com.<br>
					  --------------------------------------------------------------------------------------------------------------------------<br>
					  '.$val.'
					  --------------------------------------------------------------------------------------------------------------------------</p>
					<p>Thanks and Regards,<br>
					Washim Ahmed<br>
					Tech Support Sova Infotech<br>
					washim@sovainfotech.com</p>
					';
			$this->email->message($body);
			$this->email->send();
		}
		$templatevar['metatitle'] = 'Free Quote | Sova Infotech';
		$templatevar['metakeywords'] = 'web design company, web development India, Internet marketing, web site design services, web designer, content management system, cms, e-commerce, search engine optimisation, seo, sova infotech';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/quote',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function web2basedwebdesign(){
		$templatevar['metatitle'] = 'Web Design – Web 2.0 based designing company Sova Infotech in India.';
		$templatevar['metakeywords'] = 'Web 2.0 based designing, web design, web 2.0 developers india, web 2.0 design companies in india, web 2.0 logo designing, web graphics, web 2.0 style, web 2.0 social networking site development, sova infotech.';
		$templatevar['metadescription'] = 'In internet web developing area Web 2.0 based designing and development technology is widely used. In India Sova Infotech is a leading website designing and development company specializes in Web 2.0 design, Web 2.0 development and web design services.';
		$templatevar['content'] = $this->load->view('chunk/web2basedwebdesign',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function websitemaintenance(){
		$templatevar['metatitle'] = 'Web Design – Website maintenance services provided by Sova Infotech in India';
		$templatevar['metakeywords'] = 'website maintenance, website maintenance services, website design, website management, web maintenance, website maintenance India, affordable Website Maintenance, website maintenance plan, website maintenance fees, website maintenance costs';
		$templatevar['metadescription'] = 'In internet web developing area Web designing, development technology and website maintenance services are widely used. In India Sova Infotech is a leading website designing and development company offering affordable and complete Website Maintenance services for website owners.';
		$templatevar['content'] = $this->load->view('chunk/websitemaintenance',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function ecommerce(){
		$templatevar['metatitle'] = 'Sova Infotech - E-commerce web design and development company in India';
		$templatevar['metakeywords'] = 'ecommerce, ecommerce website design, website development, ecommerce website builder, e-commerce, e-commerce India, e-commerce solutions, Sova Infotech, e-commerce website';
		$templatevar['metadescription'] = 'Sova Infotech is an E-commerce web design and development company based in India provides the best e-commerce business websites for you. Sova Infotech offers you affordable and cheap E-commerce web design services.';
		$templatevar['content'] = $this->load->view('chunk/ecommerce',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function blogdesign(){
		$templatevar['metatitle'] = 'Sova Infotech – Unique Blog Design services in India';
		$templatevar['metakeywords'] = 'Blog Design, Blog Designers, blog web design, Blog Design templates, free blog design, Blog Design services, business blog design, custom blog design, website blog design, blog website design, blog templates, SovaInfotech';
		$templatevar['metadescription'] = 'Sova Infotech is an Unique Blog Design development and services provider in India. Visit Sova Infotech to view our portfolio of Blog Designs. We are offering cheap, affordable Blog design and development';
		$templatevar['content'] = $this->load->view('chunk/blogdesign',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function cms(){
		$templatevar['metatitle'] = 'Content Management System (CMS) | Sova Infotech India';
		$templatevar['metakeywords'] = 'Content Management System, web Content Management Systems, cms, best Content Management System, Content Management System (CMS), SovaInfotech, web design, India';
		$templatevar['metadescription'] = 'Content Management System (CMS) developed by Sova Infotech is a Search Engine friendly Content Management solution help us to bringing out the best of web content. Content Management System (CMS) developed by Sova Infotech can be applied for existing website design also.';
		$templatevar['content'] = $this->load->view('chunk/cms',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function templatedesign(){
		$templatevar['metatitle'] = 'Buy the best Template Design at Sova Infotech in India for your Website';
		$templatevar['metakeywords'] = 'Template Designs, Website Template, web design template, template web design, website templates for designers, html template, website layouts, web design, sovainfotech';
		$templatevar['metadescription'] = 'Sova Infotech is one of the leading Website Template design and development company in India. You can buy the best and cheap Template Designs. Template Designs, Web development, Web design services at Sova Infotech are very professional and the leading templates provider.';
		$templatevar['content'] = $this->load->view('chunk/templatedesign',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function flashdesign(){
		$templatevar['metatitle'] = 'Flash Multimedia web development and website design services | Sova Infotech | India';
		$templatevar['metakeywords'] = 'Flash & Multimedia, Flash, Multimedia, Flash Multimedia, Flash web designing, flash animation, flash development, flash multimedia templates website builder, Flash Landing pages, Flash Presentations, Sova Infotech, India';
		$templatevar['metadescription'] = 'At Sova Infotech you will find the best Flash & Multimedia web development and website design services.  Sova Infotech offers creative Flash Multimedia templates website builder, Flash Landing Pages and Flash Presentation.';
		$templatevar['content'] = $this->load->view('chunk/flashdesign',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function customeapps(){
		$templatevar['metatitle'] = 'Custom Application Development | Sova Infotech | India';
		$templatevar['metakeywords'] = 'Custom Application Development, app development, custom application development services, application development, cloud computing, crm, customer relationship management, business application development, custom web development, application developer, customized application development, custom web application, custom application web development, web-based application development';
		$templatevar['metadescription'] = 'Custom Application Development Services company in India Sova Infotech is a leading outsourcing Company for custom web and software development. Custom Application Development and Service offerings the best in Sova Infotech. We provide customer relationship management, business application development, custom web development at very low cost';
		$templatevar['content'] = $this->load->view('chunk/customeapps',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function phpdev(){
		$templatevar['metatitle'] = 'PHP Development company India | PHP Web Development | Sova Infotech';
		$templatevar['metakeywords'] = 'PHP Development, php web development, php development company, sova infotech, India, php application development, php website development, php software development, outsource php development, web development, web designers, custom web development, php web development india, php development tools, PHP developers';
		$templatevar['metadescription'] = 'PHP Web development company in India Sova Infotech offers the best PHP Web Development, PHP Application development services from professional PHP developers. Sova Infotech own the best in PHP web development and PHP web site design.';
		$templatevar['content'] = $this->load->view('chunk/phpdev',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function drupalapps(){
		$templatevar['metatitle'] = 'Drupal CMS Customisation | Drupal Web Development India| Drupal Web Design';
		$templatevar['metakeywords'] = 'Drupal CMS Customisation, drupal, content management software, drupal cms, open source cms, cms website, drupal web development, drupal templates, drupal developer, hosted cms, drupal web design, wysiwyg cms, drupal cms development, drupal websites, drupal design, cms tools, joomla design, drupal themes, drupal India, seo';
		$templatevar['metadescription'] = 'Drupal CMS Customisation, Drupal Web Design, Drupal Web Development, drupal template design services in India are provided by Sova Infotech at affordable rates by our industry best Drupal Designer and Developers.';
		$templatevar['content'] = $this->load->view('chunk/drupalapps',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function seo(){
		$templatevar['metatitle'] = 'Search Engine Optimisation | SEO | Web Marketing Company Sova Infotech in India';
		$templatevar['metakeywords'] = 'Search Engine Optimisation, SEO, search engine Optimisation services, search engine Optimisation company, search engine Optimisation specialist, google search engine Optimisation, website search engine Optimisation, search engine Optimisation company, India search engine Optimisation, London search engine, seo consultant, seo marketing, affordable search engine Optimisation, web marketing, professional seo services, seo expert, search engine optimizer, Sova Infotech SEO';
		$templatevar['metadescription'] = 'Sova Infotech is India’s leading Search Engine Optimisation company offers complete package on Web Marketing/Internet Marketing services at affordable cost on both On-Page and Off-Page Optimisation including Website Research, Keyword Selection, SEO, SMO, PPC';
		$templatevar['content'] = $this->load->view('chunk/seo',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function socialmedia(){
		$templatevar['metatitle'] = 'Social Media Optimisation | SMO Services | Sova Infotech | India';
		$templatevar['metakeywords'] = 'Social Media Optimisation (SMO) services offered by the leading web design and website development company in India Sova Infotech by industry expert SMO, Social Media marketing professionals. Marketing your business website through social media optimisation';
		$templatevar['metadescription'] = 'Social Media Optimisation, social media optimisation company, SMO, Sova Infotech, social media seo, smo services, social media for business, social media consultant, marketing with social media, smo expert';
		$templatevar['content'] = $this->load->view('chunk/socialmedia',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function seomarketing(){
		$templatevar['metatitle'] = 'Search Engine Marketing | SEM Services | SEM Optimization | Sova Infotech';
		$templatevar['metakeywords'] = 'Search Engine Marketing, SEM, search engine marketing specialists, sem company, sem solution, search engine marketing services, sem optimization, search engine marketing India, London, sem agency, seo search engine marketing, web search engine marketing, search engine marketing expert, seo, sova infotech, ppc';
		$templatevar['metadescription'] = 'Sova Infotech is a Search Engine Marketing optimisation company based in India offered the complete SEM solutions (search engine marketing). Web services provided by Sova Infotech including search engine optimisation, search engine marketing, web design, web site development, web site hosting, web site optimisation and more';
		$templatevar['content'] = $this->load->view('chunk/seomarketing',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function emailmarketing(){
		$templatevar['metatitle'] = 'Email Marketing – Business Internet Email Marketing service company Sova Infotech';
		$templatevar['metakeywords'] = 'Email Marketing, email marketing services, email marketing solution, email marketing company, Sova Infotech, email marketing templates, online email marketing, direct email marketing, b2b email marketing, email marketing system, email marketing campaign, business to business email marketing, affordable email marketing, India, web based, business email marketing, email marketing lists';
		$templatevar['metadescription'] = 'India base Internet Email Marketing business company Sova Infotech offer you complete solution for your online Email Marketing business. We provide a unique Email Marketing Template for your business email. Keeps your business in top by our regular email marketing strategies.';
		$templatevar['content'] = $this->load->view('chunk/emailmarketing',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function banneradv(){
		$templatevar['metatitle'] = 'Banner Advertising – Online Banner Advertising company Sova Infotech';
		$templatevar['metakeywords'] = 'Banner Advertising, online banner advertising, web banner advertising, banner advertisement, pay per click banner advertising, web banner, ad banner, banner maker, internet advertising, advertising banner online India, advertising banner online UK, Banner Advertising company, Internet marketing, banner advertising services';
		$templatevar['metadescription'] = 'Banner Advertising company Sova Infotech in India is the leading web banner advertising company creates unique and affordable web banner for your business website. Visit Sova Infotech to check and avail all the latest offers on Banner Advertising.';
		$templatevar['content'] = $this->load->view('chunk/banneradv',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function logodesign(){
		$templatevar['metatitle'] = 'Logo and Brand Identity Design company Sova Infotech in India';
		$templatevar['metakeywords'] = 'Logo, Brand Identity, Design, logo design, brand identity design, print, graphics design, sova infotech, business logo design, logo design services, company logo design, graphic logo design, website logo design, logo designers';
		$templatevar['metadescription'] = 'Sova Infotech in India offers Logo and Brand Identity Design for your business at affordable cost. Graphics design, business logo design, company logo design, graphic logo design, website logo design services are offered by Sova Infotech.';
		$templatevar['content'] = $this->load->view('chunk/logodesign',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function broucherdesign(){
		$templatevar['metatitle'] = 'Brochures and Print Collateral Design | Business Brochure Design';
		$templatevar['metakeywords'] = 'brochures, print collateral, design, Brochures and Print Collateral Design, brochure designing and printing, brochure design service, brochure design templates, brochure design printing, business brochure design.';
		$templatevar['metadescription'] = 'Brochures and Print Collateral Design services for your business and your company at affordable cost are provided by Sova Infotech in India.';
		$templatevar['content'] = $this->load->view('chunk/broucherdesign',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function bookpublish(){
		$templatevar['metatitle'] = 'Publishing and Book Design – Sova Infotech';
		$templatevar['metakeywords'] = 'book design, publishing, Publishing & Book Design, book cover design, sova infotech, India, web site design, brochures, print collateral, design, brochure design service, brochure design printing, business brochure design';
		$templatevar['metadescription'] = 'Publishing and Book Design service offered by Sova Infotech is the best and unique to make your book design more popular.';
		$templatevar['content'] = $this->load->view('chunk/bookpublish',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function printproduction(){
		$templatevar['metatitle'] = 'Print production services by Sova Infotech India';
		$templatevar['metakeywords'] = 'print, production, Print production, print production services, web development services, managed print services, print services, website content management, india, sovainfotech';
		$templatevar['metadescription'] = 'Print production company Sova Infotech offers all type of print production services for your project to get printed.';
		$templatevar['content'] = $this->load->view('chunk/printproduction',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function digitalprintsolution(){
		$templatevar['metatitle'] = 'Digital Print Solutions | Sova Infotech';
		$templatevar['metakeywords'] = 'print, digital, Digital Print Solutions, digital printing, digital printing services, digital printing company, digital printing online, cheap digital printing, quality digital printing, printing solutions';
		$templatevar['metadescription'] = 'Digital Print company sova infotech is a specialist in Digital Print Solutions. Sova Infotech is your one stop solution for Digital Print.';
		$templatevar['content'] = $this->load->view('chunk/digitalprintsolution',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function contentdev(){
		$templatevar['metatitle'] = 'Content Development | Content Development Services | Sova Infotech';
		$templatevar['metakeywords'] = 'content development, content, website content development, blog, article, press release, e-newsletter, b2b copywriting, sova infotech, content development services, content developer, web content writer, seo, ghost writing, seo content writing';
		$templatevar['metadescription'] = 'Content Development company Sova Infotech in India offering content development services including web content development, blog & article content, Press release, e-Newsletter, b2b copywriting. SEO, Internet marketing, Web development, website design and more services are offered by Sova Infotech in affordable cost.';
		$templatevar['content'] = $this->load->view('chunk/contentdev',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function blogdev(){
		$templatevar['metatitle'] = 'Blog Writing | Article Writing | Content Development Services | Sova Infotech India';
		$templatevar['metakeywords'] = 'blog, article, article writing company, blog content, article content, blog writing, article writing, blogging, website content, blog content writer, blog writing services, unique article content, article content writing service, professional articles';
		$templatevar['metadescription'] = 'Blog and Article content writing services are offered by Sova Infotech in India in affordable cost. We offer content writing services for your Blog and Article for professional and seo purpose. SEO optimised Article and Blog for your business needs are written by our content developer.';
		$templatevar['content'] = $this->load->view('chunk/blogdev',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function pressrelease(){
		$templatevar['metatitle'] = 'Press Release Writing | Press Release marketing | Sova Infotech';
		$templatevar['metakeywords'] = 'press release, press release writing, press release marketing, press release services, write press release, press release agencies, sova infotech';
		$templatevar['metadescription'] = 'Press Release writing and Press Release marketing company in India is Sova Infotech. Press Release, News Release, media release for your business.';
		$templatevar['content'] = $this->load->view('chunk/pressrelease',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function newsletter(){
		$templatevar['metatitle'] = 'e-Newsletter | Email Newsletter | Email Marketing company Sova Infotech';
		$templatevar['metakeywords'] = 'e-Newsletter, newsletter content, business newsletter articles, newsletter company, online marketing service, e marketing company, email marketing web, email newsletter content, e marketing service, seo marketing company';
		$templatevar['metadescription'] = 'e-Newsletter, Email Newsletter, Email Marketing company in India Sova Infotech offers the best in the industry. Get quality email newsletters for your company by a professional email newsletter company Sova Infotech.';
		$templatevar['content'] = $this->load->view('chunk/newsletter',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function b2bcopyright(){
		$templatevar['metatitle'] = 'B2B copywriting | B2B Copywriter | Web Copywriting | Sova Infotech';
		$templatevar['metakeywords'] = 'b2b copywriting, marketing copywriter, copywriter, b2b copywriter, web copywriter, online copywriter, business copywriting, copywriting services, email copywriter, direct mail copywriting, seo copywriting, website copywriting, search engine copywriting';
		$templatevar['metadescription'] = 'Sova Infotech in India is the top B2B copywriting and web copywriting agency offers the best copywriting services by experienced copywriter. Marketing copywriter, online copywriter, business copywriter, email copywriter, seo copywriting services at Sova Infotech.';
		$templatevar['content'] = $this->load->view('chunk/b2bcopyright',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function android(){
		$templatevar['metatitle'] = 'Android Application | Sova Infotech';
		$templatevar['metakeywords'] = 'PHP Development, php web development, php development company, sova infotech, India, php application development, php website development, php software development, outsource php development, web development, web designers, custom web development, php web development india, php development tools, PHP developers';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/android',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function iphone(){
		$templatevar['metatitle'] = 'iPhone Application | Sova Infotech';
		$templatevar['metakeywords'] = 'PHP Development, php web development, php development company, sova infotech, India, php application development, php website development, php software development, outsource php development, web development, web designers, custom web development, php web development india, php development tools, PHP developers';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/iphone',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function bada(){
		$templatevar['metatitle'] = 'Samsung Bada Application | Sova Infotech';
		$templatevar['metakeywords'] = 'PHP Development, php web development, php development company, sova infotech, India, php application development, php website development, php software development, outsource php development, web development, web designers, custom web development, php web development india, php development tools, PHP developers';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/bada',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function chromeplugins(){
		$templatevar['metatitle'] = 'Chrome Plugins Development | Sova Infotech';
		$templatevar['metakeywords'] = 'PHP Development, php web development, php development company, sova infotech, India, php application development, php website development, php software development, outsource php development, web development, web designers, custom web development, php web development india, php development tools, PHP developers';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/chromeplugins',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function microsoftnet(){
		$templatevar['metatitle'] = '.NET Development | Sova Infotech';
		$templatevar['metakeywords'] = 'PHP Development, php web development, php development company, sova infotech, India, php application development, php website development, php software development, outsource php development, web development, web designers, custom web development, php web development india, php development tools, PHP developers';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/microsoftnet',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function sharepoint(){
		$templatevar['metatitle'] = 'Microsoft Sharepoint Development | Sova Infotech';
		$templatevar['metakeywords'] = 'PHP Development, php web development, php development company, sova infotech, India, php application development, php website development, php software development, outsource php development, web development, web designers, custom web development, php web development india, php development tools, PHP developers';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/sharepoint',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function flex(){
		$templatevar['metatitle'] = 'Flex Development | Sova Infotech';
		$templatevar['metakeywords'] = 'PHP Development, php web development, php development company, sova infotech, India, php application development, php website development, php software development, outsource php development, web development, web designers, custom web development, php web development india, php development tools, PHP developers';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/flex',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function pricing(){
		$templatevar['metatitle'] = 'Service & Pricing | Sova Infotech';
		$templatevar['metakeywords'] = 'PHP Development, php web development, php development company, sova infotech, India, php application development, php website development, php software development, outsource php development, web development, web designers, custom web development, php web development india, php development tools, PHP developers';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/pricing',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function publish(){
		$templatevar['metatitle'] = 'Logo, Broucher Design | Sova Infotech';
		$templatevar['metakeywords'] = 'PHP Development, php web development, php development company, sova infotech, India, php application development, php website development, php software development, outsource php development, web development, web designers, custom web development, php web development india, php development tools, PHP developers';
		$templatevar['metadescription'] = 'Sova Infotech offers website content development service for your website in affordable cost by our expert content developer team. Visit Sova Infotech to avail the best Website Content Development package.';
		$templatevar['content'] = $this->load->view('chunk/publish',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function sitemap(){
		$templatevar['metatitle'] = 'Sitemap | Sova Infotech';
		$templatevar['metakeywords'] = 'Sitemap';
		$templatevar['metadescription'] = 'Sitemap';
		$templatevar['content'] = $this->load->view('chunk/sitemap',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function clients(){
		$templatevar['metatitle'] = 'Clients | Sova Infotech';
		$templatevar['metakeywords'] = 'Clients';
		$templatevar['metadescription'] = 'Clients';
		$templatevar['content'] = $this->load->view('chunk/clients',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function blogs(){
		$templatevar['metatitle'] = 'Blogs | Sova Infotech';
		$templatevar['metakeywords'] = 'Blogs';
		$templatevar['metadescription'] = 'Blogs';
		$templatevar['content'] = $this->load->view('chunk/blogs',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function templatestock(){
		$templatevar['metatitle'] = 'Template Stock | Sova Infotech';
		$templatevar['metakeywords'] = 'Template Stock';
		$templatevar['metadescription'] = 'Template Stock';
		$templatevar['content'] = $this->load->view('chunk/templatestock',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
	function softdevelopment(){
		$templatevar['metatitle'] = 'Software Development | Sova Infotech';
		$templatevar['metakeywords'] = 'Software Development';
		$templatevar['metadescription'] = 'Software Development';
		$templatevar['content'] = $this->load->view('chunk/softdevelopment',$var,true);
		$this->load->view('layout/welcome',$templatevar);
	}
}
?>