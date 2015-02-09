<?php require_once( 'adminx/cms.php' ); ?>

<cms:template title='Blog' clonable='1'>
  <cms:editable name='blog_content' type='richtext' />
  
  <cms:editable name='blog_image'
    crop='1'
    width='610'
    height='150'
    type='image'
  />

  <cms:folder name="philosophy" title="Philosophy" />
  <cms:folder name="history" title="History" />
  <cms:folder name="jobs" title="Jobs" />
  <cms:folder name="staff" title="Staff" />
  <cms:folder name="clients" title="Clients" />
  
</cms:template>


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
<!-- <div align="center" width="1024" id="bag">
 -->ddd



</body>
</html>

<?php COUCH::invoke(); ?> 