
<div align="center" class="heading_gray">
<h3>Grade Wise Report</h3>
</div>
<br />

<?php echo form_open('report/resultindex/gradewise_report', array('id' => 'gradewise','target'=>'_blank'));
echo blue_box_top();
?>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="4" align="center" class="heading_tab" style="margin-top:15px;">
  <tr>
    <th colspan="4" align="left">School in Grade Wise Report</th>
  </tr>
  <tr>
   
    <td width="21%" align="left" class="table_row_first"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School Code  :</td>
    <td width="23%" align="left" class="table_row_first"><?php echo form_input("txtSchoolCode", @$school_details[0]['school_code'], 'class="input_box" id="txtSchoolCode"
	onkeypress="javascript:return numbersonly(this, event, false);"   onBlur="javascript:fetch_schooldetails(this.value)"');?> </td>
    <td width="55%" class="table_row_first"><div id="cmbitem"> </div><td width="1%">
  </tr>
  <tr>
    <td align="center" colspan="3"><?php echo form_submit('Report', 'Report', 'onClick="javascript: return gradewise()"');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
  </tr>
   <tr>
    <td align="center" colspan="3"><a href="gradewise_report" target="_blank">All School </a>
    </td></tr>
</table>
<?php
echo blue_box_bottom();
echo form_close();
?>