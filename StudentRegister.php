<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';


if (isset($_POST['txtUserName'])) {
//	echo $_POST['txtUserName'];
	
	$result = doRegister();
	
	if ($result != '') {
		$errorMessage = $result;
	}
	
}
?>
<html>
<head>
<title>NSIT OCRC</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="include/admin.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo WEB_ROOT;?>include/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
          <h1><a href="login.php"><img src="images/NSit Logo.png" alt="image" width="70" height="70"/>NSIT OCRC <small> Your Complaint is in safe hands. </small></a></h1> <!--<small> Netaji Subhas Institute Of Technology</small></a></h1> -->
      </div>
        <div class="menu_nav">
       <ul>
          
          
          <li><a href="Meet the team.html">Meet The Team</a></li>
          <li><a href="aboutNSIT.html">About Nsit</a></li>
          <li class="active"><a href="login.php">Home</a></li>
	
      </ul>     
        <div class="clr"></div>
      </div>
      
        <div class="header_img"><a href="login.php"><img src="images/3_1.jpg" alt="image" height="350" width="1400" /></a>
  
      </div>
      
    </div>
  </div>

   <table width="102%" border="0" cellspacing="0" cellpadding="20" align="center">
    <tr> 
     <td class="contentArea"> 
	 <form method="post" name="frmUserReg" id="frmUserReg" action="">
       <p>&nbsp;</p>
       <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#000000" class="entryTable">
        <tr id="entryTableHeader"> 
         <td>:: Student Registration ::</td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
		 
		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           <tr align="center"> 
            <td colspan="2"><div align="right"><a href="login.php">Back</a></div></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;User Name</td>
             <td class="content"><input name="txtUserName" type="text" class="box" id="txtUserName" size="30" maxlength="20"></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Password</td>
             <td class="content"><input name="txtPassword" type="password" class="box" id="txtPassword" value="" size="30" maxlength="20" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label"> &nbsp;User Type </td>
             <td class="content"><select name="utype">
               <option value="student">&nbsp;&nbsp; Student &nbsp;</option>
               </select>			  </td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Roll No. </td>
             <td class="content"><input name="txtRoll" type="text" class="box" id="txtMob" value="" size="30" maxlength="20" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Branch. </td>
             <td class="content"><input name="txtbranch" type="text" class="box" id="txtMob" value="" size="30" maxlength="20" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Sem/Year </td>
             <td class="content"><input name="txtyear" type="text" class="box" id="txtMob" value="" size="30" maxlength="20" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Mobile No. </td>
             <td class="content"><input name="txtMob" type="text" class="box" id="txtMob" value="" size="30" maxlength="20" /></td>
           </tr>
		   
           <tr class="entryTable">
             <td class="label"> &nbsp;E-mail</td>
            <td class="content"><input name="Email" type="text" class="box" id="Email" value="" size="30" maxlength="60"></td>
           </tr>
           
           <tr>
             <td width="200">&nbsp;</td>
             <td width="372">&nbsp;</td>
           </tr>
           <tr> 
            <td>&nbsp;</td>
            <td><input name="btnLogin" type="submit" id="btnLogin" value=" Register Now " ></td>
           </tr>
          </table></td>
        </tr>
       </table>
       <p>&nbsp;</p>
      </form></td>
    </tr>
   </table></td>
 </tr>
</table>
<p>&nbsp;</p>
<p>&copy Copyright <a href="Meet the team.html"  >Mohd Naveed (296/COE/12) ** Hitesh Saini (276/COE/12)</a></p> 
</body>
</html>
