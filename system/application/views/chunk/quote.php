<script>
$(function() {
	$('#mybutton').button();
});
</script>
<img src="<?=base_url()?>media/images/quote.jpg" />
<h1 style="margin-top:30px;">Request a free Quote</h1>
<h3>Sova Infotech - Passion, Creativity, Professionalism & Success</h3><br />
<form method="post" class="formular">
<table class="get_a_quote_table" width="100%" border="0" cellpadding="6" cellspacing="3">
  <tbody><tr class="get_a_quote_header">
    <td colspan="3">Personal Details</td>
    </tr>
  <tr>
    <td width="35%">First name<strong>*</strong></td>
    <td width="4%">:</td>
    <td width="61%"><label for="textfield5"></label>
      <input type="text" name="data[firstname]" id="firstname" class="validate[required]"></td>
    </tr>
  <tr>
    <td>Last Name<strong>*</strong></td>
    <td>:</td>
    <td><label for="textfield5"></label>
      <input type="text" name="data[lastname]" id="lastname" class="validate[required]"></td>
    </tr>
  <tr>
    <td>Company Name</td>
    <td>:</td>
    <td><input type="text" name="data[compname]" id="compname"></td>
    </tr>
  <tr>
    <td>Mobile Number<strong>*</strong></td>
    <td>:</td>
    <td><input type="text" name="data[mobile]" id="mobile" class="validate[required]"></td>
    </tr>
  <tr>
    <td>Email Address<strong>*</strong></td>
    <td>:</td>
    <td><input type="text" name="data[email]" id="email" class="validate[required]"></td>
    </tr>
  <tr>
    <td>Country</td>
    <td>:</td>
    <td><select name="data[country]" id="select">
        <option>India</option>
        <option>United Kingdom</option>
        <option>United State</option>
      </select></td>
  </tr>
  <tr>
    <td>How did you find us?</td>
    <td>:</td>
    <td><input type="text" name="data[how_find_us]" id="how_find_us"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="get_a_quote_header">
    <td colspan="3">Project Details</td>
    </tr>
  <tr valign="top">
    <td>Template Code</td>
    <td>:</td>
    <td><input type="text" name="data[template_code]" value="<?=$this->uri->segment(3)?>" id="template_code"></td>
  </tr>
  <tr>
    <td valign="top">Details of project</td>
    <td valign="top">:</td>
    <td><textarea type="textarea" name="data[project_details]" id="project_details" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Site URL<em> if any</em></td>
    <td>:</td>
    <td><input type="text" name="data[site_url]" id="site_url"></td>
  </tr>
  <tr>
    <td>Desired Start Date</td>
    <td>:</td>
    <td><input type="text" name="data[proj_start_date]" id="proj_start_date"></td>
  </tr>
  <tr>
    <td>Estimated Budget</td>
    <td>:</td>
    <td><input type="text" name="data[budget]" id="budget"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" id="mybutton" value="Send Request"/><span><?=$msg?></span></td>
  </tr>
</tbody>
</table>
</form>