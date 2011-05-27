<script>
$(function() {
	$('#mybutton').button();
	$("div[id*=tabs]").tabs();
});
</script>
<img src="<?=base_url()?>media/images/quote.jpg" />
<h1 style="margin-top:30px;">Request a free Quote</h1>
<h3>Sova Infotech - Dynamic IT Solutions</h3><br />
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Get your quote</a></li>
    </ul>
    <div id="tabs-1">
    <form method="post" class="formular">
    <table class="get_a_quote_table" width="100%" border="0" cellpadding="6" cellspacing="3">
      <tbody><tr class="get_a_quote_header">
        <td colspan="2">Personal Details</td>
        </tr>
      <tr>
        <td>First name<strong>*</strong></td>
        <td width="64%"><label for="textfield5"></label>
          <input type="text" name="data[firstname]" id="firstname" class="validate[required] text-input"></td>
        </tr>
      <tr>
        <td>Last Name<strong>*</strong></td>
        <td><label for="textfield5"></label>
          <input type="text" name="data[lastname]" id="lastname" class="validate[required] text-input"></td>
        </tr>
      <tr>
        <td>Company Name</td>
        <td><input type="text" name="data[compname]" id="compname" class="text-input"></td>
        </tr>
      <tr>
        <td>Mobile Number<strong>*</strong></td>
        <td><input type="text" name="data[mobile]" id="mobile" class="validate[required] text-input"></td>
        </tr>
      <tr>
        <td>Email Address<strong>*</strong></td>
        <td><input type="text" name="data[email]" id="email" class="validate[required,custom[email]] text-input"></td>
        </tr>
      <tr>
        <td>Country</td>
        <td><select name="data[country]" id="select" class="text-input">
            <option>India</option>
            <option>United Kingdom</option>
            <option>United State</option>
          </select></td>
      </tr>
      <tr>
        <td>How did you find us?</td>
        <td><input type="text" name="data[how_find_us]" id="how_find_us" class="text-input"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr class="get_a_quote_header">
        <td colspan="2">Project Details</td>
        </tr>
      <tr valign="top">
        <td>Template Code</td>
        <td><input type="text" name="data[template_code]" value="<?=$this->uri->segment(3)?>" id="template_code" class="text-input"></td>
      </tr>
      <tr>
        <td valign="top">Details of project</td>
        <td><textarea type="textarea" name="data[project_details]" id="project_details" cols="40" rows="5" class="text-input"></textarea></td>
      </tr>
      <tr>
        <td>Site URL<em> if any</em></td>
        <td><input type="text" name="data[site_url]" id="site_url" class="text-input"></td>
      </tr>
      <tr>
        <td>Desired Start Date</td>
        <td><input type="text" name="data[proj_start_date]" id="proj_start_date" class="text-input"></td>
      </tr>
      <tr>
        <td>Estimated Budget</td>
        <td><input type="text" name="data[budget]" id="budget" class="text-input"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" id="mybutton" value="Quote Now"/><span><?=$msg?></span></td>
      </tr>
    </tbody>
    </table>
    </form>
    </div>
</div>