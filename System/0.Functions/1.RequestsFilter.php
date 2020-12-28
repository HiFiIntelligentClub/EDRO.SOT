<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//Zero load 
//Money saver+;
//			  1            1            1
//			    E E E E E  E  E E E E E
//			    E 2        2        2 E
//strNDigit		        D D D  D  D D D
//			    E   D 3    3    3 D   E
//			        D   R--R--R   D
//			    E   D   R 444 R   D   E
//			  1 E 2 D 3 R 4O4 R 3 D 2 E 1
//			    E   D   R 444 R   D   E
//Level 0		        D   R--R--R   D
//			    E   D 3 |  3  | 3 D   E
//			        D D |D D D| D D
//			    E 2     |  2  |     2 E
//			    E E E E |E E E| E E E E
//			  1         |  !  |         1
//Reality___________________________|_____|______________
/////////////////////////////////////////////////////////|
//		ЕДРО:ПОЛИМЕР	S EDRO dx		||
//							||
//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\|
//[Vv]Event Global

_DropTheSessionDust(); //Zero level functions EDRO.SOT

$arrEvent		=arrGetEventSetter();
$strEvent		=$arrEvent['strEvent'];
$arrReality		=$arrEvent['arrReality'];

//Iinted from /home/HiFiIntelligentClub.Ru/index.php


if('/robots.txt'==$strEvent)
	{
	header('Content-Type: text/plain');
	echo readfile('/home/HiFiIntelligentClub.Ru/robots.txt');
	exit(0);
	}
elseif('/favicon.ico'==$strEvent)
	{
	header('Content-Type: image/png');
	echo readfile('/home/HiFiIntelligentClub.Ru/favicon.png');
	exit(0);
	}
elseif('/Hfic_Samin.jpg'==$strEvent)
	{
	header('Content-Type: image/jpeg');
	echo readfile('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
	exit(0);
	}
//elseif(bIzEvent('/RedirectFromError', $strEvent))
//	{
	//echo'123';
	//
	//header('Content-Type: image/png');
	//echo readfile('/home/HiFiIntelligentClub.Ru/favicon.png');
	//exit(0);
//	}

elseif('/getStation'==$strEvent)
	{
	//print_r($arrReality);
	//header('Content-Type: application/json');
	//$strEnc			=сПреобразовать($arrReality['strPlayingStationId'], 	"вСтроку");
	$strDec			=сКодировать($arrReality['strPlayingStationId'], 'д');
	echo $strDec.'?strUserEvent=HiFiIntelligentClub&msg=Tihis is  the beta of the future version 2.0. Used from TOR browser(torproject.org), on http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion domain. Very good. Future is coming! Working version are here: HiFiIntelligentClub.COM Hfic.Samin';
	//echo json_encode($strDec);
	////////1.IN.E getStation
	// PLAY 2.TO.D DB.Event
	// HiFi 3.IN.R Ls.Enviroment[Browser, Used device]
	////////4.TO.O Write to correct table
	///////E.D.R->O E.[H|A][conn|reject][play|stop]  H A C R P S
	//H C +  A C -	Результат = отображение на экране рейтинга. Сортировка по рейтингу итд.
	//H R -  A R -  Верхний уровень таблицы plus minus
	//H P +  A P - PLS.connect.playTime.sendedDjEvent
	//H S 0  A S - MNS.dropConnection.lostConnection.resumeConnection.resumePlaying.stopPlaying.notAvaliable.
	    ////\\\\
	//StationLink/PLS/[connect|playTime|sendedDjEvent][Browser|Device]/orderbyDate/
	//StationLink/MNS/[dropConnection|lostConnection|resumeConnection|resumePlaying|stopPlaying|notAvaliable][Browser|Device]/orderbyDate/
	//echo strMyJson($strDec.'?strUserEvent=HiFiIntelligentClub&msg=Tihis is  the beta of the future version 2.0. Used from TOR browser(torproject.org), on http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion domain. Very good. Future is coming! Working version are here: HiFiIntelligentClub.COM Hfic.Samin');
	exit;
	}
elseif('/getNews'==$strEvent)
	{
	require_once('/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php');
	require_once('/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php');
	require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/0.KIIM.php');
	$objKIIM=KIIM::objStart(false , array(
	'_strClass'		=>'KIIM',
	'_strMethod'		=>'getNews',
	'_strMessage'		=>'',
	'_strVectorPoint'	=>'',
	));
	//require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/1.objKIIM.activation.php');
	//require_once('/home/EDRO.SetOfTools/System/5.Templates/0.strKIIM.Template.php');
	require_once('/home/EDRO.SetOfTools/System/3.Buffer/1.EDRO_Buffering.php');

	$objEDRO		=new Event($objKIIM);
	echo $str		=FileRead::strGetDesignHTML(array(), '/home/EDRO/4.Objects/Read/Cloud/Disk/Pages/_UpdateMessage.php', $objEDRO);

	KIIM::objFinish($objKIIM, array(
		'_strClass'		=>'KIIM',
		'_strMethod'		=>'getNews',
		'_strMessage'		=>'',
		'_strVectorPoint'	=>'',
		));
	exit;
	}
elseif('/getListeners'==$strEvent)
	{
	
	$str	=Listeners::strHTML($objKIIM, $objEDRO->arrReality['arrCurrentListeners'], $objEDRO->arrEvent['arrReality']);
	exit(0);
	}
elseif('/getTest'==$strEvent)
	{
	//print_r($arrReality);
	//header('Content-Type: application/json');
	//echo '123';
	//echo $arrReality['strPlayingStationId'];
	$strEnc				=сПреобразовать($strListenUrl, 	"вСтроку");
	//echo $strEnc			=сКодировать($arrReality['strPlayingStationId'], $_сДействие='д');
	echo json_encode($strEnc);
	exit;
	}
/*elseif(bIzEvent('/HiFiIntelligentClub.tar.gz', $strEvent))
	{
	//echo'123';
	//print_r($arrReality);
	exit(0);
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="HiFiIntelligentClub.tar.gz"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Content-Length:'. filesize('/home/HiFiIntelligentClub.Ru/HiFiIntelligentClub.tar.gz'));
	//header('');
	readfile('/home/HiFiIntelligentClub.Ru/HiFiIntelligentClub.tar.gz');
	exit(0);
	}*/
/*elseif(bIzEvent('/HficAssminogZzzuzzZ.mp3', $strEvent))
	{
	//echo'123';
	//print_r($arrReality);
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="/HficAssminogZzzuzzZ.mp3"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Content-Length:'. filesize('/home/HiFiIntelligentClub.Ru/tmp/HficAssminogZzzuzzZ.mp3'));
	//header('');
	readfile('/home/HiFiIntelligentClub.Ru/tmp/HficAssminogZzzuzzZ.mp3');
	exit(0);
	}*/
elseif('/HficAssminogZzzuzzZ2.mp3'==$strEvent)
	{
	//echo'123';
	//print_r($arrReality);
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="/HficAssminogZzzuzzZ2.mp3"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Content-Length:'. filesize('/home/HiFiIntelligentClub.Ru/tmp/HficAssminogZzzuzzZ2.mp3'));
	//header('');
	readfile('/home/HiFiIntelligentClub.Ru/tmp/HficAssminogZzzuzzZ2.mp3');
	exit(0);
	}
elseif('/fireUpStation'==$strEvent)
	{
	//print_r($arrReality);
	$strEnc			=сКодировать($arrReality['strPlayingStationId'], $_сДействие='д');
	echo json_encode($strEnc);
	exit(0);
	}
elseif('/ServerOnline'==$strEvent)
	{
	echo json_encode(array('ok'));
	//header('Content-Type: image/jpeg');
	//echo readfile('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
	exit(0);
	}

/*
if(bIzEvent('/', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/stationList', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/FileList', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/search', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/station/search', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/BentleyMusic - Квартирный вопрос', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/Master', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/Follow', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/Buy', $strRequest))
	{
	exit(0);//Deny
	}
elseif(bIzEvent('/News', $strRequest))
	{
	exit(0);//Deny
	}
elseif(bIzEvent('/Podcast', $strRequest))
	{
	exit(0);//Deny
	}
elseif(bIzEvent('/favicon.ico', $strRequest))
	{
	//Allow
	}
elseif(bIzEvent('/robots.txt', $strRequest))
	{
	//Allow
	}
else
	{
	exit(0);//Deny
	}
*/
?>