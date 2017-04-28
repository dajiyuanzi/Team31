<?php
require_once ('Regist.php');
?>
<head>
<meta http-equiv="Content-Type" content="text/html" />
<title>Register</title>
<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function chk(theForm){
	if (theForm.member_user.value.replace(/(^\s*)|(\s*$)/g, "") == ""){
		alert("The user name must be filled in！");
		theForm.member_user.focus();
		return (false);
	}

	if (theForm.member_password.value.replace(/(^\s*)|(\s*$)/g, "") == ""){
		alert("The password must be filled in！");
		theForm.member_password.focus();
		return (false);
	}
	}

</script>

</head>
<body>
<form id="theForm" name="theForm" method="post" action="" onSubmit="return chk(this)" runat="server" style="margin-bottom:0px;">
  <table width="500" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#B3B3B3">
    <tr>
      <td colspan="2" align="center" bgcolor="#EBEBEB">User Register</td>
    </tr>
    <tr>
      <td width="60" align="right" bgcolor="#FFFFFF">User name:</td>
      <td width="317" bgcolor="#FFFFFF"><input name="member_user" type="text" id="member_user" size="20" maxlength="20" />
	  <font color="#FF0000"> *</font>(Consisting of numbers or letters!)</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">Password:</td>
      <td bgcolor="#FFFFFF"><input name="member_password" type="password" id="member_password" size="20" maxlength="20" />
      <font color="#FF0000"> *</font>(Consisting of numbers or letters)</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">Confirm password:</td>
      <td bgcolor="#FFFFFF"><input name="pass" type="password" id="pass" size="20" />
      <font color="#FF0000"> *</font>(Enter the password again)</td>
    </tr>
   <tr>
      <td align="right" bgcolor="#FFFFFF"> Gender:</td>
      <td align="left" bgcolor="#FFFFFF">
          <input name="member_sex" type="radio" id="0" value="Male" checked="checked" />
          Male
          <input type="radio" name="member_sex" value="Female" id="1" />
          Female</label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">Phone number:</td>
      <td bgcolor="#FFFFFF"><input name="member_phone" type="text" id="member_phone" size="20"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">Email:</td>
      <td bgcolor="#FFFFFF"><input name="member_email" type="text" id="member_email" size="20"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFFFFF"><input type="reset" name="button" id="button" value="Reset" />
      <input type="submit" name="submit" id="submit" value="Regist" /></td>
if($result)
echo "<script>alert('Registered successfully');location='member.php';</script>";
else
{
	echo "<script>alert('Fail');location='index.php';</script>";
	mysql_close();
}
    </tr>
  </table>
</form>
</form>
</body>
</html>
