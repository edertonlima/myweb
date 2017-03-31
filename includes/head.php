<?php
	if((IsSet($titulo)) && ($titulo !== "")){ $titulo .= ""; }else{ $titulo = ""; }
	$description = "";
	$keywords = "";
?> 

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="<?php echo $description ?>" />
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="robots" content="index,follow" />
<meta name="author" content="" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo $titulo ?>" />
<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->

<title><?php echo $titulo; ?></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="agencia/css/style.css" media="screen" />

<!-- jQuery -->
<script type="text/javascript" src="agencia/js/jquery.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
    hEle = $('h1').height();
    hBody = $(document).height();
    mEle = (hBody-hEle-104)/2;
    $('h1').css('margin-top', mEle);
});

$( window ).resize(function() {
    hEle = $('h1').height();
    hBody = $(document).height();
    mEle = (hBody-hEle-104)/2;
    $('h1').css('margin-top', mEle);
});
</script>