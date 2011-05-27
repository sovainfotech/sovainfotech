<script>
$(function() {
	$("div[id*=tabs]").tabs();
});
</script>
<style>
#absolute{
	position:relative;
}
span{
	position:relative; top:-2px; left:10px;
}
</style>
<h1>Contact Sova Infotech</h1>
<h3>Sova Infotech - Dynamic IT Solutions<div style="position:absolute;"><div style="position:relative; top:-53px; left:400px;"><script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script><a href="skype:sandip.paul85?call"><img src="http://mystatus.skype.com/balloon/sandip%2Epaul85" style="border: none;" width="150" height="60" alt="My status" /></a></div></div></h3><br />
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">United Kingdom</a></li>
        <li><a href="#tabs-2">India</a></li>
    </ul>
    <div id="tabs-1">
    <table width="100%" border="0">
      <tr>
        <td valign="top" width="60"><img src="<?=base_url()?>media/images/uknew.png" border="0"/></td>
        <td valign="top"><div><b style="font-size:14px;">Sova Infotech Limited</b></div>
        <div>Suite 508<br />
          1 Alie Street<br />
          London E1 8DE<br />
          UNITED KINGDOM</div>
        <div><img src="<?=base_url()?>media/images/tele.png" id="absolute" border="0"/><span><b>T:</b> +020 7096 1019</span></div><div><img src="<?=base_url()?>media/images/fax.png" id="absolute" border="0"/><span><b>F:</b> +44 (0) 20 7702 4125</span></div><div><img src="<?=base_url()?>media/images/newemail.png" id="absolute" border="0"/><span><b>E:</b> <a href="mailto:info@sovainfotech.com">info@sovainfotech.com</a></span></div></td>
      </tr>
    </table>
    </div>
    <div id="tabs-2">
    <table width="100%" border="0">
      <tr>
        <td valign="top" width="60"><img src="<?=base_url()?>media/images/indianew.png" border="0"/></td>
        <td valign="top"><div><b style="font-size:14px;">Sova Infotech pvt Ltd</b></div>
        <div>Anuj Complex<br />
          HI/16 S. L. Sarani<br />
          Kolkata-59<br />
		  INDIA</div>
        <div><img src="<?=base_url()?>media/images/tele.png" id="absolute" border="0"/><span><b>T:</b> +91 (0) 33 2570 2393</span></div><div><img src="<?=base_url()?>media/images/fax.png" id="absolute" border="0"/><span><b>F:</b> +91 (0) 33 2570 2632</span></div><div><img src="<?=base_url()?>media/images/newemail.png" id="absolute" border="0"/><span><b>E:</b> <a href="mailto:india@sovainfotech.com">india@sovainfotech.com</a></span></div></td>
      </tr>
    </table>
    </div>
</div><br />
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Quick contact form</a></li>
    </ul>
    <div id="tabs-1">
    <form method="post" class="formular">
    <table class="get_a_quote_table" width="100%" border="0" cellpadding="6" cellspacing="3">
      <tbody><tr class="get_a_quote_header">
        <td colspan="3">Personal Details</td>
        </tr>
      <tr>
        <td width="36%">First name<strong>*</strong></td>
        <td colspan="2"><label for="textfield5"></label>
          <input type="text" name="data[firstname]" id="firstname" class="validate[required] text-input"></td>
        </tr>
      <tr>
        <td>Last Name<strong>*</strong></td>
        <td colspan="2"><label for="textfield5"></label>
          <input type="text" name="data[lastname]" id="lastname" class="validate[required] text-input"></td>
        </tr>
      <tr>
        <td>Company Name</td>
        <td colspan="2"><input type="text" name="data[compname]" id="compname" class="text-input"></td>
        </tr>
      <tr>
        <td>Mobile Number<strong>*</strong></td>
        <td colspan="2"><input type="text" name="data[mobile]" id="mobile" class="validate[required] text-input"></td>
        </tr>
      <tr>
        <td>Email Address<strong>*</strong></td>
        <td colspan="2"><input type="text" name="data[email]" id="email" class="validate[required,custom[email]] text-input"></td>
        </tr>
      <tr>
        <td>Country</td>
        <td colspan="2"><select name="data[country]" id="select" class="text-input">
            <option>India</option>
            <option>United Kingdom</option>
            <option>United State</option>
          </select></td>
      </tr>
      <tr>
        <td>How did you find us?</td>
        <td colspan="2"><input type="text" name="data[how_find_us]" id="how_find_us" class="text-input"></td>
      </tr>
      <tr>
        <td valign="top">Service of Interests</td>
        <td width="1%" valign="top"><input name="data[service_interest_1]" type="checkbox" value="SEO"/></td>
        <td width="63%" valign="top">SEO-Search Engine Optimization</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td><input name="data[service_interest_2]" type="checkbox" value="Pay-Per-Click Management"/></td>
        <td>Pay-Per-Click Management</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td><input name="data[service_interest_3]" type="checkbox" value="Website Design" /></td>
        <td>Website Design</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td><input name="data[service_interest_4]" type="checkbox" value="E-Commerce Solutions" /></td>
        <td>E-Commerce Solutions</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td><input name="data[service_interest_5]" type="checkbox" value="Other Services"/></td>
        <td>Other Services</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><input type="submit" id="mybutton" value="Contact Me"/><span><?=$msg?></span></td>
      </tr>
    </tbody>
    </table>
    </form>
    </div>
</div>