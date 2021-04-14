#!/usr/bin/php
<?php                  /*_
© Andrey Chekmaryov 2021
 ////
//        /\
//      <  **>
 //////   jl
./././././././
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Email:    assminog@gmail.com,|Telegram: https://t.me/HficSamin  |VK:     	https://vk.com/Hfic.Samin
	  tubmulur@yandex.ru |				        | 		https://vk.com/HiFiIntelligentClub
Phone:    +7(911)787-44-57,  |Whatsapp: +7(911)787-44-57	|Facebook: 	https://facebook.com/Hfic.Samin	
			     |					|		https://facebook.com/HiFiIntelligentClub
                             |					| 
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru  <- Not workimg out of money. Registered untill
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM <- Not workimg out of money.
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion <- Free of charge,not working.
														  Will be started soon for
        	        													  listening with pleasure.
														  International streams 
	        													  divided by categories 
														  described as ICQR.
			    |E    |D     |R      |O      |
||||||||||||||||||||||||||||Event|Design|Reality|Objects||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/

function сВремя(){return round(microtime(true), 4);}

function _Журнал($фДебаг=TRUE)
	{
	$сРасположениеСчётчикВход	='/home/EDRO.SetOfTools/3.Reports/0.CountUp/Вход.plmr';
	$сРасположениеСчётчикВходИстор	='/home/EDRO.SetOfTools/3.Reports/1.CountUpHistory/Вход.plmr';
	//echo $сРасположениеСчётчикВход;
	$ч0СчётчикВход			=file_get_contents($сРасположениеСчётчикВход);
					file_put_contents($сРасположениеСчётчикВход, ($ч0СчётчикВход+1));
	if($фДебаг)
		{
		 /*DEBUG*/ file_put_contents($сРасположениеСчётчикВходИстор,"\n=====\n".'	Start:		'.date("Y-m-d H:i:s").сВремя()."\n", FILE_APPEND);
		}
	}
$сКиМ		="/home/EDRO.SetOfTools/0.Система/0.ErrorReporter/0._Report.php";
		if(file_get_contents($сКиМ)===FALSE)	{exit;}
		else					{require$сКиМ;echo '[V][.]Журналирование ошибок загружено'."\n";}

$сКиМ		="/home/EDRO.SetOfTools/0.Система/1.КиМ/0.КиМ.php";
		if(file_get_contents($сКиМ)===FALSE)	{exit;}
		else					{require$сКиМ;echo '[V][.]КиМ загружен'."\n";}


/////////////////////////////////////////////////////////////////////////////////////////  ////// /
$оКиМ			= КиМ::оНачПроц('1.Загрузить библиотеки');				////////  //////  /
$оКиМ->ч0ЖдёмЧастей	= 17;							    //      //  /
$оКиМ->сИмяФайла	= '/home/EDRO.SetOfTools/0.Система/2.Loader/0.loader.php';	   //      /////// /
			$оКиМ->сНач();						  //      ////// /
			$оКиМ->_КонПроц();					///////
////////////////////////////////////////////////////////////////////////////////////////
while(true)
	{
	ЕДРО::ПОЛИМЕР();
	}
//bIzApple('strHTTP_USER_AGENT');

/*$оКиМ			= КиМ::оНачПроц('2.Выставить точку входа');
$оКиМ->ч0ЖдёмЧастей	= 1;
$оКиМ->сИмяФайла	= '/home/EDRO.SetOfTools/2.Broadcast/0.rOrganizeListenersRadioRequests.php';	   //      /////// /
$rRadio			= $оКиМ->сНач();
			$оКиМ->_КонПроц();*/

/*$оКиМ			= КиМ::оНачПроц('2.Запуск текстового вещающего сервера EDRO');
$оКиМ->ч0ЖдёмЧастей	= 1;
$оКиМ->сИмяФайла	= '/home/EDRO.SetOfTools/2.Broadcast/1.EDRO_Start_Text_Serve.php';	   //      /////// /
$rRadio			= $оКиМ->сНач();
			$оКиМ->_КонПроц();*/

//$оКиМ			= КиМ::оНачПроц('Собрать объект ЕДРО:ПОЛИМЕР');
//$MyXML	=new MyXML('<ass>123</ass>','ass');
//print_r($MyXML);
//$oEDRO	=new EDRO();
//print_r($oEDRO);
//print_r($oEDRO);
exit;
////////////////////////////////////////////////////////////////////////////////////////
//$оКиМ			= КиМ::оНачПроц('Set text broadcast proxy');	///		//
//$оКиМ->ч0ЖдёмЧастей	= 1;							//   //
//$оКиМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/8.Вещание/0.Prepare.php';	//   //
//			$оКиМ->_КонПроц();				//		//
/////////////////////////////////////////////////////////////////////////////////////////
				    				//	LL 
											//
											//
											//
			///////////							//
			 // // //							//
			 // // //							//
			///////////							

//$оКиМ			= КиМ::оНачПроц('Listener provider to HIC sound amusement conveer line.');





$оКиМ			= new КиМ('Собрать EDRO');
$оКиМ->oE		= new Event();

//$оКиМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/5.Styles/0.CSS.Styles.php';
//$strStyles		= $оКиМ->сНач();
			$оКиМ->_КонПроц();

//$оКиМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/6.HTML_Interfaces/0.HTML_HeadInterface.php';
//			$оКиМ->сНач();
//			$оКиМ->_КонПроц();

//			$оКиМ->_КонПроц();
?>