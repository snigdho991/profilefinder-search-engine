<?php
	$seo = App\SiteSetting::find(1);
?>
	<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <meta name="title" content="{{ $seo->metatitle }}">
	    <meta name="keywords" content="{{ $seo->metakey }}">
	    <meta name="description" content="{{ $seo->metadesc }}"/>
	    <meta name="author" content="Snigdho Majumder"/>

	    <meta name="robots" content="index, follow"/>