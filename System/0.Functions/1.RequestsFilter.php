<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//Zero load 
//Money saver+;

session_start();
_DropTheSessionDust();


$arrEvent		=arrGetEventSetter();
//echo '<pre>';
//print_r($arrEvent);
//echo '</pre>';
//print_r($arrEvent);
//echo '123';
//exit;
//echo '123';
//exit;
$strEventSetter		=$arrEvent['strEvent'];
$arrReality		=$arrEvent['arrReality'];

//echo $strEventSetter;
//print_r($arrReality);
//exit;

if(bIzEvent('/robots.txt', $strEventSetter))
	{
	header('Content-Type: text/plain');
	echo readfile('/home/HiFiIntelligentClub.Ru/robots.txt');
	exit(0);
	}
elseif(bIzEvent('/RedirectFromError', $strEventSetter))
	{
	//echo'123';
	//
	//header('Content-Type: image/png');
	//echo readfile('/home/HiFiIntelligentClub.Ru/favicon.png');
	//exit(0);
	}
elseif(bIzEvent('/favicon.ico', $strEventSetter))
	{
	header('Content-Type: image/png');
	echo readfile('/home/HiFiIntelligentClub.Ru/favicon.png');
	exit(0);
	}
elseif(bIzEvent('/Hfic_Samin.jpg', $strEventSetter))
	{
	header('Content-Type: image/jpeg');
	echo readfile('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
	exit(0);
	}
elseif(bIzEvent('/getStation', $strEventSetter))
	{
	//print_r($arrReality);
	header('Content-Type: application/json');
	//$strEnc			=сПреобразовать($arrReality['strPlayingStationId'], 	"вСтроку");
	$strDec			=сКодировать($arrReality['strPlayingStationId'], 'д');
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
	echo json_encode($strDec.'?strUserEvent=HiFiIntelligentClub&msg=Have_a_good_day.');
	exit;
	}
elseif(bIzEvent('/getTest', $strEventSetter))
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
/*elseif(bIzEvent('/HiFiIntelligentClub.tar.gz', $strEventSetter))
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
elseif(bIzEvent('/HficAssminogZzzuzzZ.mp3', $strEventSetter))
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
	}
elseif(bIzEvent('/HficAssminogZzzuzzZ2.mp3', $strEventSetter))
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
elseif(bIzEvent('/fireUpStation', $strEventSetter))
	{
	//print_r($arrReality);
	$strEnc			=сКодировать($arrReality['strPlayingStationId'], $_сДействие='д');
	echo json_encode($strEnc);
	exit(0);
	}
elseif(bIzEvent('/ServerOnline', $strEventSetter))
	{
	echo json_encode(array('ok'));
	//header('Content-Type: image/jpeg');
	//echo readfile('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
	exit(0);
	}
elseif(bIzEvent('/listeners', $strEventSetter))
	{
	echo 'Listeners';
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