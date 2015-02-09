<?php require_once( 'adminx/cms.php' ); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>基隆市區域計畫</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/sub.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
<link href="css/text.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.style1 {            width: 107px;
}
</style>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onload="MM_preloadImages('images/menu/item_1r.jpg','images/menu/item_2r.jpg','images/menu/item_3r.jpg','images/menu/item_4r.jpg','images/menu/item_5r.jpg','images/menu/item_6r.jpg','images/menu/item_7r.jpg')">
<div align="center" width="1024" id="bag">
<table>
	<tr><td height="753">
    <div id="item">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
	  <tr>
	    <th align="center" scope="col"><table width="1026" border="0" cellpadding="0" cellspacing="0">
	      <tr>
	        <th scope="col"><a href="index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','images/menu/item_1r.jpg',1)"><img src="images/menu/item_1.jpg" width="271" height="71" id="Image1" /></a><a href="localplan_01.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','images/menu/item_2r.jpg',1)"><img src="images/menu/item_2.jpg" width="160" height="71" id="Image2" /></a><a href="manage_01.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/menu/item_3r.jpg',1)"><img src="images/menu/item_3.jpg" width="140" height="71" id="Image3" /></a><a href="information_01.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/menu/item_4r.jpg',1)"><img src="images/menu/item_4.jpg" width="109" height="71" id="Image4" /></a><a href="link_01.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/menu/item_5r.jpg',1)"><img src="images/menu/item_5.jpg" width="108" height="71" id="Image5" /></a><a href="expression_01.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/menu/item_6r.jpg',1)"><img src="images/menu/item_6.jpg" width="107" height="71" id="Image6" /></a><a href="download_01.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','images/menu/item_7r.jpg',1)"><img src="images/menu/item_7.jpg" width="130" height="71" id="Image7" /></a></th>
	        </tr>
	      </table></th>
	    </tr>
	  <tr>
	    <th height="392" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
        <div id="side_menu">
          <div class="menu">
           <ul>
              <li>　　　　</li>              
              <li class="current"><a href="expression_01.php">意見表達</a></li>                      
            </ul>
          </div>
        </div>
          <div id="side_content">
             <div class="posttext">
                <table width="740" border="0" cellpadding="0" cellspacing="0" class="content">
                  <tr>
                    <th height="300" colspan="2" align="left">
                    <cms:form action="" id="contact_form" method="post"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="21%" align="left" scope="col">*姓名：</td>
                        <td width="79%" align="left" scope="col">
                        <cms:input name="name" id="name" type="text" size="25" placeholder="請輸入姓名或稱謂" required='1'/>
                        (*為必填)</td>

                        <cms:if k_error_name>
                          <p id='name_error' class='error' style="display:block">* 請填寫姓名</p>
                        </cms:if>

                      </tr>
                      <tr>
                        <td align="left">*主要電子郵件：</td>
                        <td align="left"><cms:input name="email_main" id="email_main" type="text" size="25" placeholder="請輸入主要電子郵件" required='1'/></td>
                        <cms:if k_error_email_main>
                          <p id='email_main_error' class='error' style="display:block">* 請填寫主要電子郵件</p>
                        </cms:if>
                      </tr>
                      <tr>
                        <td align="left">次要電子郵件：</td>
                        <td align="left"><cms:input name="email_opt" id="email_opt" type="text" size="25" placeholder="請輸入次要電子郵件" /></td>
                      </tr>

                      <tr>
                        <td align="left">*連絡電話：</td>
                        <td align="left"><cms:input name="phone" id="phone" type="text" size="25" placeholder="請輸入連絡電話" required='1'/></td>
                        <cms:if k_error_phone>
                          <p id='phone_error' class='error' style="display:block">* 請填寫連絡電話</p>
                        </cms:if>
                      </tr>
                      <tr>
                        <td align="left">*意見表達：</td>
                        <td align="left"><cms:input type="textarea" name="msg" id="textarea" cols="45" rows="15"  required='1'></cms:input></td>
                         <cms:if k_error_msg>
                          <p id='msg_error' class='error' style="display:block">* 請填寫意見表達</p>
                        </cms:if>
                      </tr>
                      <tr>
                        <td align="left">*驗證碼：</td>
                        <td> <cms:input type='captcha' name='my-captcha' format='ir-t' /></td>
                        <cms:if k_error_my-captcha>
                          <p id='my-captcha_error' class='error' style="display:block">* 驗證碼錯誤</p>
                        </cms:if>

<!--                         <td align="left"><img src="http://www.businesstoday.com.tw/getImage" alt="驗證碼" id="identifyImg2" /><img src="http://www.businesstoday.com.tw/mpstyle/default/images/icon_afresh.gif" alt="afresh" id="imgFresh2" /> 
                          <input type="text" placeholder="請輸入驗證碼" size="15" id="imgValue2" />
                          <span id="chkImg2"></span></td>
 -->                      </tr>

                      <cms:if k_success > 
                        <p id='mail_success' class='success' style="display:block">您的訊息已送出，我們會儘速處理您的意見。</p>
                        
                        <cms:send_mail from=k_email_from to=k_email_to subject='意見表達'>
                          來自網站上的意見表達 >>>>
                          <cms:show k_success />
                        </cms:send_mail>
                      </cms:if>


                      <tr>
                        <td align="left">&nbsp;</td>
                        <td align="left">
                          <cms:input type="submit" name="button" id="button" value="送出" />
                        </td>
                      </tr>
                    </table>
                    </cms:form></th>                    
                  </tr>                 
                </table>
              </div>
             
            </div></th>
	  </tr>
      </table>
     
    </div>
    </td></tr>
</table>
<table><tr><td align="center" valign="middle" class="footer" >
  <p><br />
    基隆市政府 電話：02-2424-5001  傳真  02-2429-5179<br />
    規劃單位：財團法人國土規劃及不動產資訊中心電話：02-2367-2179    傳真 02-2362-8974<br />
    Copyright © 2015財團法人國土規劃及不動產資訊中心. All rights reserved<br />
  </p></td></tr></table><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
</div>

</body>
</html>
<?php COUCH::invoke(); ?> 
