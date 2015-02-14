<?php require_once( 'adminx/cms.php' ); ?>
<cms:template title='消息公告/新聞稿' clonable='1'>

  <cms:editable name='blog_content' type='richtext' />
  
  <cms:editable name='blog_image'
    crop='1'
    width='610'
    height='150'
    type='image'
  />
  
  <cms:folder name="news" title="最新消息" />
  <cms:folder name="press" title="新聞稿" />

</cms:template>
<cms:if k_is_page >

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>基隆市區域計畫</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/sub.css" />
<link href="css/text.css" rel="stylesheet" type="text/css" />
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
	<tr><td height="866">
    <div id="item">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
	  <tr>
	    <th align="center" scope="col"><table width="1026" border="0" cellpadding="0" cellspacing="0">
	      <tr>
	        <th scope="col"><a href="index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','images/menu/item_1r.jpg',1)"><img src="images/menu/item_1.jpg" width="271" height="71" id="Image1" /></a><a href="localplan_01.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','images/menu/item_2r.jpg',1)"><img src="images/menu/item_2.jpg" width="160" height="71" id="Image2" /></a><a href="manage_01.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/menu/item_3r.jpg',1)"><img src="images/menu/item_3.jpg" width="140" height="71" id="Image3" /></a><a href="information_01.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/menu/item_4r.jpg',1)"><img src="images/menu/item_4.jpg" width="109" height="71" id="Image4" /></a><a href="link_01.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/menu/item_5r.jpg',1)"><img src="images/menu/item_5.jpg" width="108" height="71" id="Image5" /></a><a href="expression_01.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/menu/item_6r.jpg',1)"><img src="images/menu/item_6.jpg" width="107" height="71" id="Image6" /></a><a href="download_01.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','images/menu/item_7r.jpg',1)"><img src="images/menu/item_7.jpg" width="130" height="71" id="Image7" /></a></th>
	        </tr>
	      </table></th>
	    </tr>
	  <tr>
	    <th height="503" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
        <div id="side_menu">
          <div class="menu">
           <ul>
              <li>　　　　</li>
              <li class="current"><a href="information_01.php">新聞稿/最新消息</a></li>
              <li><a href="information_02.html">基隆市區域計畫委員名單</a></li>
              <li><a href="information_03.html">計畫辦理進度</a></li>                      
            </ul>
          </div>
        </div>
          <div id="side_content">
             <div class="posttext">
                <table width="740" border="0" cellpadding="0" cellspacing="0" class="content">
                  <tr>
                    <th height="300" colspan="2" align="right"><table><tr>
                      <td width="714">

                          <!-- Blog Post -->
                          <cms:pages masterpage='information_01.php' limit = '5' >
                            <div class="post">
                              <!-- Post Title -->
                              <h3 class="title"><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h3>
                              <!-- Post Title -->
                              <cms:if k_page_foldertitle >
                                <cms:set my_category=k_page_foldertitle />
                              <cms:else />
                                <cms:set my_category='其他' />
                              </cms:if>
                              <p class="sub"><a href="#"><cms:show my_category /></a> &bull; <cms:date k_page_date format='jS M, y'/> &bull;</p>
                              <div class="hr dotted clearfix">&nbsp;</div>
                              <!-- Post Title -->
                              <img class="thumb" src="<cms:show blog_image />" alt=""/>
                              <!-- Post Content -->
                              <cms:show blog_content />
                              <!-- Post Links -->
                              <p class="clearfix">
                                <a href="<cms:link masterpage='information_01.php' />" class="button float" >&lt;&lt; 回到最新消息...</a>
                              </p>
                            </div>
                          </cms:pages>
                    </table>

                      <br />      
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
<cms:else />
  <cms:embed 'information_01_list.html' />
</cms:if>
<?php COUCH::invoke(); ?> 