<?php
/*echo '<pre>';
print_r($objEDRO->arrReality['strName']);
echo '</pre>';
exit;*/
//_Report(strGetDomainLang());

$str	='<!doctype html>'."\n";
$str	.='<html'."\n";
$str	.='lang="'.$objEDRO->arrReality['strLangSignal'].'"'."\n";
$str	.='xml:lang="'.$objEDRO->arrReality['strLangSignal'].'"'."\n";
$str	.='class="HiFiIntelligentClub"'."\n";
$str	.='style="'."\n";
$str	.='position:fixed;'."\n";
$str	.='	z-index:1;'."\n";
$str	.='	"'."\n";
$str	.='>'."\n";
$str	.='<head>'."\n";
		if($objEDRO->arrReality['strLangSignal']=='RU')
			{
			$strTitleStationNameSuffix	=' на ';
			}
		else
			{
			$strTitleStationNameSuffix	=' at ';
			}
		if(!empty($objEDRO->arrReality['strName']))
			{
			$strTitleStationName 		=$objEDRO->arrReality['strName'].$strTitleStationNameSuffix;
			}
		else
			{
			$strTitleStationName		='';
			}

$str	.='	<title>'.$strTitleStationName.' HiFiIntelligentClub.'.strGetDomainZone().'</title>'."\n";
$str	.='	<meta charset="utf-8"/>'."\n";
$str	.='	<!--link rel="apple-touch-startup-image" href=""-->'."\n";
$str	.='	<!--link rel="manifest" href="/manifest.json"/-->'."\n";

$str	.='	<meta name="apple-mobile-web-app-capable"	content="yes"/>'."\n";
$str	.='	<meta name="apple-mobile-web-app-title"		content="HiFiIntelligentClub">'."\n";

$str	.='	<meta http-equiv="expires"			content="Thu, 31 december 2020 19:56:06 GMT"/>'."\n";
$str	.='		<meta http-equiv="Content-type"			content="text/html; charset=utf-8"/>'."\n";

$str	.='		<meta name="milliseconds"			content=".1282">'."\n";
$str	.='		<meta name="viewport"				content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>'."\n";
$str	.='		<meta name="contact-webmaster-international"	content="assminog@gmail.com">'."\n";
$str	.='		<meta name="contact-webmaster-international"	content="tubmulur@yandex.ru">'."\n";
$str	.='		<meta name="contact-blog-vk"			content="https://vk.com/HiFiIntelligentClub">'."\n";
$str	.='		<meta name="contact-blog-facebook"		content="https://facebook.com/HiFiIntelligentClub">'."\n";
$str	.='		<meta name="contact-webmaster-vk"		content="https://vk.com/Hfic.Samin">'."\n";
$str	.='		<meta name="contact-webmaster-facebook"		content="https://facebook.com/Hfic.Samin">'."\n";
$str	.='		<meta name="project-sources"			content="https://github.com/tubmulur">'."\n";
$str	.='		<meta name="published onion"			content="http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion">'."\n";
$str	.='		<meta name="published Russian"			content="http://HiFiIntelligentClub.Ru">'."\n";
$str	.='		<meta name="published English"			content="http://HiFiIntelligentClub.COM">'."\n";
$str	.='		<script>'."\n";
$str	.='			var strSignalLang="'.$objEDRO->arrReality['strLangSignal'].'";'."\n";
$str	.='			var strSignalRole="'.$objEDRO->arrReality['strRoleSignal'].'";'."\n";
$str	.='		</script>'."\n";

$str	.= 							$strDynascreenStyle;
$str	.=						    EDRO::strObjectDeclare();
$str	.=						    EDRO::strObjectInit();
$str	.=						   Event::strObjectDeclare();
$str	.= 						 Objects::strAudioDeclare();
$str	.= 						 Objects::strCopyrightDeclare();
$str	.=					          Design::strObjectDeclare();
$str	.=						 Reality::strObjectDeclare();
$str	.=						 Objects::strObjectDeclare();
$str	.=					  HiFiNavigation::strObjectDeclare();
//$str	.=			      SystemEventIndicatorStream::strObjectDeclare();
$str	.=						  Player::strObjectDeclare();
$str	.=					      DynaScreen::strObjectDeclare();
$str	.=				DynaScreenEventIndicator::strObjectDeclare();
$str	.=				      StationSearchBlock::strObjectDeclare();
$str	.=	'</head>'."\n";
$str	.=	'<body'."\n";
$str	.=	'id	="HiFiIntelligentClub"'."\n";
$str	.=	'style	="'."\n";
$str	.=		'position		:fixed;'."\n";
$str	.=		'top			:0;'."\n";
$str	.=		'left			:0px;'."\n";
$str	.=		'width			:100vw;'."\n";
$str	.=		'height			:100vh;'."\n";
$str	.=		'margin			:0;'."\n";
$str	.=		'padding		:0;'."\n";
$str	.=		'"'."\n";
$str	.=	'class	="'.$objEDRO->arrReality['strLangSignal'].'"'."\n";
$str	.=	'>'."\n";

		if($objEDRO->arrReality['bIzDesktop'])
			{
			$str	.=Overlay::strHTML();
			}
		//echo $strKIIMWindowHTML;
		$str	.=SystemEventIndicatorStream::strHTML();
		$str	.=Event::strObjectInit();
		$str	.=Reality::strObjectInit();
		?>