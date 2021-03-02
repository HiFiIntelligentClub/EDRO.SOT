<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//							 
//							  1            1         1  1         1            1
//							    E-E-E-E-E--E--E-E-E-E-EE-E-E-E-E--E--E-E-E-E-E
//							    E-2--------2--------2-EE-2--------2--------2-E
//strNDigit						  2 |-- D-D-D--D--D-D-D------- D-D-D--D--D-D-D---| 2
//							    E---D-3----3----3 D---EE---D-3----3----3 D---E
//							------------R--R--R----------------R--R--R------------
//							    E---D---R-444-R---D---EE---D---R-444-R---D---E
//							--1 E-2-D-3-R-4O4-R-3-D-2-EE-2-D-3-R-4O4-R-3-D-2-E 1--
//							    E---D---R-444-R---D---EE---D---R-444-R---D---E
//Level 0						------------R--R--R----------------R--R--R------------
//							    E---D-3----3----3-D---EE---D-3----3----3-D---E
//							  2 |---D-D--D D D--D-D--------D-D--D D D--D-D---| 2
//							    E-2--------2--------2-EE-2--------2--------2-E
//							    E-E-E-E--E-E-E--E-E-E-EE-E-E-E--E-E-E--E-E-E-E
//							  1            1         1  1         1            1
//							
//Reality_____________________________________________   o1   02    
/////////////////////////////////////////////////|	 1Ed->1E2D.
////////////////////////////////////////////////	 2Ro->3R4O
//||ЕДРО:ПОЛИМЕР	S EDRO dx		||	   
//||||||||||||||||||||||||||||			||	 
//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\|	R: SystemStartup EDRO.Start = S
//|o1		 |o2		|o3            |o4	  |o5		|o6				|o7
//|E.0levelFilter|E.0levelEvents|E..SystemStart|E..EDRO.S+|E..ReadFile	|E..StationList.Construct	|E..StationBick.Construct
//|D._		 |D._		|D.._	       |D.._	  |D.._Report	|D..strDesignStationList	|D..strStationBick
//|R.local	 |R.EDRO	|R..System     |R..INIT	  |R..EDRO	|R..EDRO			|R..EDRO
//|O._		 |O._		|O..KIIM       |O..EDRO   |O..ReadFile	|O..StationList			|O..StationBick
//|---------------------------------------------   ----
//					|    	    	
//					|   	   ^	^	^	^	^	^	^
//					'---------------------------------------------------------------------------
//
//
//
//
//[Vv]Event Global
class Functions
	{
	public	function strDataBase()
		{
		return 'HiFiIntelligentClub';
		}
	public	function strDomain()
		{
		return '192.168.1.198';
		//return 'https://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion/';
		//return 'tcp://hifiintelligentclub.ru:80';
		//return 'tcp://hifiintelligentclub.com:80';
		}
		/*function strDomain()
		{
		return 'https://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion/';
		}*/
	public	function bIzFormat()
		{
		return false;
		}
	public	function _Report($str)
		{
		//echo$str;
		//$strResult=date('Y-m-d_H:i:s').'<warning style="color:red;">'.$str.'</warning>'."\n";
		$strResult	=date('Y-m-d_H:i:s').$str."\n";
		file_put_contents('/home/HiFiIntelligentClub.Ru/tmp/N0_report.txt' , $strResult, FILE_APPEND);
		}
	public	function сКлючь()
		{
		return '4aPrIsAForaPr';
		}
	public	function сТекущееВремяСтемп()
		{
		return round(microtime(true), 4);
		}
	public	function arrAllEventIncomeParametrsFallBack()
		{
		$arrO	=  //[arrAction]['arrDesign']['strEvent']
			array(
			'arrReality'=>array(
				'strName'		=>array('int0FallBack'	=>'','int0MaxLength'	=>100,),//
				'strStyle'		=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),//
				'strGenre'		=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),//
				'strHiFiType'		=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),//
				'intBitrate'		=>array('int0FallBack'	=>'','int0MaxLength'	=>4,),
				'strCodec'		=>array('int0FallBack'	=>'','int0MaxLength'	=>16,),
				'int0Page'		=>array('int0FallBack'	=>0, 'int0MaxLength'	=>6,),
				'int1OnPage'		=>array('int0FallBack'	=>1, 'int0MaxLength'	=>3, 'int0MaxValue'	=>140,),
				'int1PlayingStationNum'	=>array('int0FallBack'	=>0, 'int0MaxLength'	=>10,),
				'strPlayingStationStyle'=>array('int0FallBack'	=>'','int0MaxLength'	=>65,),
				'strPlayingStationId'	=>array('int0FallBack'	=>'','int0MaxLength'	=>150,),
				'strListenerDate'	=>array('int0FallBack'	=>'','int0MaxLength'	=>150,),),
			'arrObjects'		=>array(
				'arrEventData'		=>array('arrEN'		=>array('strAlias'	=>false, 'strTitle'	=>'Title',),
							'arrRU'			=>array('strAlias'	=>false,
											'strTitle'	=>'Заголовок',),),
				'arrEventTestConditions'=>array('arrEventName'	=>array('int0MaxLength'	=>28,),
				'arrEventPage'		=>array('strFindTextToMarkExist' 	=>'HIC',),),
				'arrEventsOnErrors'	=>array('arrEventName'			
								=>array('strReport'		=>'Event name is too long.',
									'strPriority'		=>'Urgent',
									'strFallBack'		=>'/',),
				'arrEventPage'		=>array('strReport'		=>'Can not open event page: arrEventName',
								'strPriority'		=>'Urgent',
								'strFallBack'		=>'/',),),),
				);
		return $arrO;
		}
	public	function strMyJsonRec($_arrJson)
		{
		if(is_array($_arrJson))
			{
			$str	='{';
			foreach($_arrJson as $srtName=>$_Value)
				{
				if(!is_int($srtName))
					{
					$str	.='"'.сПреобразовать($srtName, "вКоманду").'":';
					}
				if(is_array($_Value))
					{
					$str	.=strMyJsonRec($_arrJson[$srtName]);
			}
				else
					{
					$str	.='"'.сПреобразовать($_Value, "вКоманду").'", ';
					}
				}
			$str	=substr($str,0,-2);
			$str	.='}, ';
			}
		return $str;
		}
	public	function strMyJson($_arrJson)
		{
		return substr(strMyJsonRec($_arrJson),0,-2);
		}
		
	public	function сЗаменаСлэшУЕ($_сВход)
		{
		//$сВход=str_replace('\u043e31\u043e\u043e28\u043e\u043e28\u043e','://', $_сВход); //Долбанная билиберда!
		//								 unset($_сВход);
		//$сВход=str_replace('\u043e31\u043e', ':' ,$сВход);
		//$сВход=str_replace('\u043e31\u043e8200\u043e28\u043e', '/' ,$сВход);
		return $_сВход;
		}
	public	function сЗаменаСлэшУ($_сВход)
		{
		//$сВозвр		=$_сВход;
		//if(strpos(json_encode($_сВход), '\u')!==FALSE)//Долбанная билиберда! Удалить!
		//	{
		//	$сВозвр		=mb_convert_encoding($_сВход, 'windows-1252', 'UTF-8');
		//	}
		return $_сВход;
		}
	public	function мЖанр_мЯзык_мТранскрипция($сВход) //inspired by Ferry Corsten and Armin van Buuren
		{// Function is in progress. Will be connected to ЕДРО:ПОЛИМЕР, to became complete solution.
		//$сВход
		$сВозврат	=$сВход;
		$мСтильТрансЯз=
		array(
			'trance'=>array('транс', 'екфтсу', 'nhfyc', 'tranc', 'екфтс'),
			'techno'=>array('техно', 'nt[yj', 'еусртщ', 'tehno', 'еуртщ'),
			);
		foreach($мСтильТрансЯз as $сСтиль=>$мТрансЯз)
			{
			//$мСтильТрансЯз
			if(фУникальный($мТрансЯз, $сСтиль)===FALSE)
				{
				$сВозврат	=$сСтиль;
				}
			}
		return $сВозврат;
		}
	public	function сДоСимвола($_сВход, $с_Символ='?') // Слово
		{
		$сСлово		='';
		if(empty($_сВход))
			{
			$сСлово='';
			return $сСлово;
			}
		$ч1Длинна	=strlen($_сВход);
		$ч0Длинна	=($ч1Длинна-1);
		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			$сСлово.=$_сВход[$ч0Шаг];
			if($ч0Шаг!=0&&($_сВход[$ч0Шаг]==$с_Символ))
				{
				$сСлово		=substr($сСлово,0,-1);
				return $сСлово;
				}
			else
				{
				}
			}
		return $сСлово;
		}
	public	function сОтСимвола($_сВход, $с_Символ='?') // Слово
		{
		$сСлово		='';
		$фСимволНайден	=false;
		if(empty($_сВход)){$сСлово='';return $сСлово;}
		
		$ч1Длинна	=strlen($_сВход);
		$ч0Длинна	=($ч1Длинна-1);
		
		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			if($_сВход[$ч0Шаг]==$с_Символ)
				{
				$фСимволНайден	=true;
				}
			if($фСимволНайден)
				{
				$сСлово		.=$_сВход[$ч0Шаг];
				}
			}
		
		return $сСлово;
		}
	public	function сНачДоСимвола($_сВход, $с_Символ='?') // Слово
		{
		$сСлово		='';
		if(empty($_сВход))
			{
			$сСлово='';
			return $сСлово;
			}
		$сВход		=(string)$_сВход;
		$ч1Длинна	=strlen($сВход);
		$ч0Длинна	=($ч1Длинна-1);
		
		for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
			{
			$сСлово.=$сВход[$ч0Шаг];
			if($ч0Шаг!=0&&($_сВход[$ч0Шаг]==$с_Символ))
				{
				$сСлово		=substr($сСлово,0,-1);
				return $сСлово;
				}
			else
				{
				}
			}
			return $сСлово;
		}
	public	function сНачОтСимвола($_сВход, $с_Символ='?') // Слово
		{
		$сСлово		='';
		$фСимволНайден	=false;
		if(empty($_сВход)){$сСлово='';return $сСлово;}
		$сВход		=(string)$_сВход;
		//echo $с_Символ."\n";
		$ч1Длинна	=strlen($сВход);
		$ч0Длинна	=($ч1Длинна-1);
		
		for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
			{
			//echo $сВход[$ч0Шаг]."\n";
			if($сВход[$ч0Шаг]==$с_Символ)
				{
				$фСимволНайден	=true;
				}
			if($фСимволНайден)
				{
				$сСлово		.=$сВход[$ч0Шаг];
				}
			}
		return $сСлово;
		}
	public	function сНачОтДоСимвола($_сСтр, $_сОт, $_сДо, $_nu1BeginOffset=1)
		{
		$сСтр			=$_сСтр;
		$сОт			=$_сОт;
		$сДо			=$_сДо;
		$сОтДо			='';
		$nu1BeginOffset		=$_nu1BeginOffset;
		$сКонецСтр		=сНачОтСимвола($сСтр, $сОт);
		if(strpos($сКонецСтр, $сДо)===FALSE)
			{
			$сОтДо		=substr($сКонецСтр, $nu1BeginOffset);
			}
		else
			{
			$сОтДо		=сНачДоСимвола(substr($сКонецСтр, $nu1BeginOffset), $сДо);
			}
		return $сОтДо;
		}
	public	function сРеверс($_сСтр)
		{
		$сРеверс	='';
		$сСтр		=(string)$_сСтр;
		$ч1Длинна	=strlen($сСтр);
		$ч0Длинна	=($ч1Длинна-1);
		$ч0Позиция	=$ч0Длинна;
		for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
			{
			$сРеверс	.=$сСтр[$ч0Позиция];
			$ч0Позиция--;
			}
		return $сРеверс;
		}
	public	function сКонцОтДоСимвола($_сСтр, $_сОт, $_сДо, $_nu1BeginOffset=1)
		{
		$сСтр	=сРеверс($_сСтр);
		$сСтр	=сНачОтДоСимвола($сСтр, $_сОт, $_сДо, $_nu1BeginOffset);
		$сСтр	=сРеверс($сСтр);
		return 	$сСтр;
		}
	public	function сКонцДоСимвола($_сСтр, $_сОт)
		{
		$сСтр	=сРеверс($_сСтр);
		$сСтр	=сНачДоСимвола($сСтр, $_сОт);
		$сСтр	=сРеверс($сСтр);
		return 	$сСтр;
		}
	public	function мУрлРазобратьПоток($_сСтр) 	//Разобрать стрим. Сергею Корякину и его коллеге в Ролексе Вадим Раскумандрину
		{				//и Люсьене Гусевой из Лапси привет.:)
						//Алексу Соловьёву тоже привет и всем девчёнкам колясочницам. Если я ещё раз у вас появлюсь,
						//скорее всего потому, что решил жениться на одной из вас, а может и на самой великой Люсьене, 
						//но мне кажется, она уже занята.  :)
						//Лучшие коляски, прошедшие краштест и дополнительный краштест в СПБ - это Lapsi.ru
						//Игорю Борисовичу тоже привет. Чекмарёв конкурентам не сдастся. Это все знают.
						//Согластно философии WhiteHat, если я зашёл на сайт и увидел ошибку, 
						//обязательно должен написать об этом.
						//Стараюсь на сайты вобще не ходить, но надо.
						//Хорошего дня.
		$м['strLinkAfter2Dot']	= сНачОтСимвола($_сСтр, '/', 2);
		$м['strAddress']	= сНачОтДоСимвола($_сСтр, '/', ':', 2);
		$м['intPort']		= сНачОтДоСимвола($м['strLinkAfter2Dot'], ';', '/', 1);
		if(strlen($м['intPort'])>6)
			{
			$м['intPort']	=FALSE;
			}
		
		$м['strGet']		= сНачОтСимвола($_сСтр, '/', 1);
		return $м;
		}
	public	function strGetDomainLang()
		{
		if(strpos(strtolower($_SERVER['SERVER_NAME']), 'hifiintelligentclub.ru')!==FALSE)
			{
			$strLang='RU';
			}
		elseif(strpos(strtolower($_SERVER['SERVER_NAME']), 'hifiintelligentclub.com')!==FALSE)
			{
			$strLang='EN';
			}
		elseif(strpos(strtolower($_SERVER['SERVER_NAME']), '192.168.1.198')!==FALSE)
			{
			$strLang='EN';
			}
		elseif(strpos(strtolower($_SERVER['SERVER_NAME']), 'ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion')!==FALSE)
			{
			$strLang='EN';
			}
		else	
			{
			$strLang='EN';
			_Report('strGetDomainName():'.$_SERVER['SERVER_NAME'].$strLang.' do not have RU or COM suffix and dont 192.168.1.198 or onion');
			}
		return $strLang;
		}
	public	function strGetDomainZone()
		{
		$strLang		=strGetDomainLang();
		if($strLang=='RU')
			{
			$strDomain='ru';
			}
		elseif($strLang=='EN')
			{
			$strDomain='com';
			}
		else
			{
			$strDomain='com';
			}
		return $strDomain;
		}
	public	function strGetFallBackLanguage()
		{
		$strZone	=strGetDomainLang();
		if($strZone=='ru')
			{
			$strFallBackLang='RU';
			}
		elseif($strZone=='onion')
			{
			$strFallBackLang='EN';
			}
		elseif($strZone=='com')
			{
			$strFallBackLang='EN';
			}
		else
			{
			$strFallBackLang='EN';
			}
		return $strFallBackLang;
		}
	public	function strGetServerName()
		{
		$_сВход		=$_SERVER['SERVER_NAME'];
		if($_сВход=='')
			{
			_Report('strGetServerName()$_SERVER[SERVER_NAME]==empty');
			}
		if(strpos($_сВход,'http')===FALSE)
			{
			_Report('strGetServerName() server do not have http prefix');
			}
		if(strpos($_сВход,'.')===FALSE)
			{
			_Report('strGetServerName() server do not have . prefix');
			}
		$strName	=сКонцОтДоСимвола($_сВход, '.', '/');
		return $strName;
		}
	public	function фCreateListen_lnSock($_сСтр)
		{
		echo $_сСтр."\n";
		$ф			= FALSE;
		$мУрлПоток		= мУрлРазобратьПоток($_сСтр);
		$intUDP			= 1;
		$strAddress		=$мУрлПоток['strAddress'];
		$intPort		=$мУрлПоток['intPort'];
		$strGet			=$мУрлПоток['strGet'];
		$intSockListen		= 3;
		$nu0			= 0;
	
		$lnSOCK	=socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
		//echo 'http://'.$strAddress.':'.$intPort.'/'.$strGet."\n";
		if($intPort===FALSE)
			{
			if(fopen('http://'.$strAddress, "r")===FALSE)
				{
				//echo "fopen FALSE"."\n";
				$ф			= FALSE;
				//return FALSE;
				}
			else
				{
				$ф			= TRUE;
				//echo "fopen TRUE"."\n";
				//return TRUE;
				}
			}
		else
			{
			$bIzSocket=socket_connect($lnSOCK, $strAddress, $intPort);
			if($lnSOCK)
				{
				$ф			= TRUE;
				//echo "fopen TRUE"."\n";
				//return TRUE;
				}
			else
				{
				$ф			= FALSE;
				//echo "fopen FALSE"."\n";
				//return FALSE;
				}
			if($bIzSocket)
				{
				$ф			= TRUE;
				//echo "fopen TRUE"."\n";
				//return TRUE;
				}
			else
				{
				$ф			= FALSE;
				//echo "fopen FALSE"."\n";
				//return FALSE;
				}
			}
		if($ф)
			{
			echo 'Result TRUE'."\n";
			}
		else
			{
			echo 'Result FALSE'."\n";
			}
		return $ф;
		}
	public	function фЖанрОтСлушателя($мВозможныеЖанры, $_сЖанрОтСлушателя)
		{
		$ф=TRUE;
		if(empty($мВозможныеЖанры))
			{
			return TRUE;
			}
		//print_r($мОбработанныеСвойства);
		$сЖанрОтСлушателя	=$_сЖанрОтСлушателя;
				   unset($_сЖанрОтСлушателя);
		foreach($мВозможныеЖанры as $сВозможныйЖанр)
			{
			if($сВозможныйЖанр==$сЖанрОтСлушателя)
				{
				//echo'$сОбработанноеСвойство:';
				//echo$сОбработанноеСвойство."\n";
				//echo'$сТекущееСвойство:';
				//echo$сТекущееСвойство."\n"."\n";
				//echo $сОбработанноеСвойство."\n";
				//echo $сТекущееСвойство."\n"."\n";
				return FALSE;
				}
			else
				{
				$ф=TRUE;
				}
			}
		return $ф;
		}
	public	function фДубль($_м_мСтанция, $_мСтанция, $_strGenre) // ifDoubles - will compare all genres of station and station name. 
		{//If equal - will be listed as different bitrate of the parent station. FallBack is higher bitrate.
		// Если название и жанры у станций одинаковы, значит станции одинаковы и будут отображаться, 
		//как разные битрейты станции с таким-же названием.
		$ф=FALSE;
		foreach($_м_мСтанция as $мСтанция)
			{
			if( 
				($мСтанция['id']	==	$_мСтанция['id'])	&&
				($мСтанция['genre']	==	$_strGenre)		&&
				($мСтанция['name']	==	$_мСтанция['server_name'])
			)
				{
				$ф=TRUE;
				_Report("Найден дубль: ".$_мСтанция['id'].":/".$мСтанция['server_name'].'/'.$_strGenre);
				break;
				}
			else
				{
				//$ф=FALSE;
				}
			}
		return $ф;
		}
	public	function фУникальный($мОбработанныеСвойства, $_сТекущееСвойство)
		{
		$ф=TRUE;
		if(empty($мОбработанныеСвойства))
			{
			return TRUE;
			}
		//print_r($мОбработанныеСвойства);
		//exit;
		//print_r($мОбработанныеСвойства);
		$сТекущееСвойство	=$_сТекущееСвойство;
			    	   unset($_сТекущееСвойство);
		foreach($мОбработанныеСвойства as $сОбработанноеСвойство)
			{
			//echo'1';
			//print_r($сОбработанноеСвойство);
			//echo'2';
			//print_r($сТекущееСвойство);
			if(mb_strtolower(trim($сОбработанноеСвойство))==mb_strtolower(trim($сТекущееСвойство)))
				{
				//echo'$сОбработанноеСвойство:';
				//echo$сОбработанноеСвойство."\n";
				//echo'$сТекущееСвойство:';
				//echo$сТекущееСвойство."\n"."\n";
				//echo $сОбработанноеСвойство."\n";
				//echo $сТекущееСвойство."\n"."\n";
				return FALSE;
				}
			else
				{
				$ф=TRUE;
				}
			}
		return $ф;
		}
	/*function arrAllEventIncomeActions()
		{
		return	;
		}*/
	
	//[..]Event Global
	function мФразы($_сФраза) /* Could be inputed by anyone and after that used in pfrase. Inspired by Armin van Buuren programm, I have heard in record of hour programm on Trance.kG*/
		{
		/*
		$ч1Длинна	=strlen($_сФраза);
	
		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			$сСлово		.=$_сВход[$ч0Шаг];
			echo $сСлово;
			}
		//$arrFreeSearchInputCharExpression=
		
		//foreach();
		//	{
		//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$2$3$4','Д');
		//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$1$3$4','р');
		//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$1$2$4','а');
		//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$1$2$3','м');
		//	}
		//$м[1]['Drum']['International']['arrPossible']	=array('D','Drum');
		//$м[1]['Drum']['International']['strMisstake']	=array('D?r?{u|a}?m?');
		//$м[1]['Drum']['EN']['arrPossible']		=array('D','Drum');
		//$м[1]['Drum']['EN']['strMisstake']		=array('D?r?{u|a}?m?');
		//$м[1]['Drum']['RU']['arrPossible']		=array('Д','Драм');
		//$м[1]['Drum']['RU']['strMisstake']		=array('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/','$1');
	
		//$м[1]['and']['EN']['arrPossible']		=array('&', "'&'");
		//$м[1]['and']['EN']['strMisstake']		=
		//$м[1]['and']['RU']['arrPossible']		=array('&', "'&'");
		//$м[1]['and']['RU']['strMisstake']		=
	
		//$м[1]['Bass']['EN']['strPossible']		=
		//$м[1]['Bass']['EN']['strMisstake']		=
		//$м[1]['Bass']['RU']['strPossible']		=
		//$м[1]['Bass']['RU']['strMisstake']		=
	
	
		//	=>'arrPossible'	=>array('Drum & Bass','D&B'),
		//		=>'strMisstake'	=>array('Drum & Base')
		//	);
		//$м[]=array('Top','100');
		return $м;
		*/
		}
	public	function сКодировка($с_Вход)
		{
		$чВыход	=FALSE;
		$ч1Длинна	=strlen($с_Вход);
		$сКодировка	=empty(substr($с_Вход, $ч1Длинна))?'Однобайтная':'Не однобайтная';
		if($сКодировка=='Не однобайтная')
			{//Мы любим счастливых и уставших от прогулок грибников,
			_Report($с_Вход.''.'Не однобайтная');
			exit;
			}
		return $сКодировка;
		}
	public	function нольЧИлиС($_сИмя, $_сДанные)
		{
		switch(strParType($_сИмя))
			{
			case 'int':
				if($_сДанные=='')
					{
					$сВыход		=0;
					}
				else
					{
					$сВыход		=$_сДанные;
					}
			break;
			case 'str':
				if($_сДанные=='')
					{
					$сВыход		="''";
					}
				else
					{
					$сВыход		="'".str_replace("'","\'",$_сДанные)."'";
					}
			break;
			}
		return $сВыход;
		}
	public	function сДляСравнения($сВход)
		{
		//радостно слушающих музыку, по всему миру.
				//Что бы не случилось. Хорошая Музыка выручит душу из любых передряг, 
				//может даже вернёт в этот мир......
				//Mr Hfic Samin after "Groove Jet" trip:
				//Jog dial was funny. Small Krz* LCD display was very, very big!!!
				//	noughty blue, right behinde my face, and the JOG DIAL itself, imagination 
				//	flash..where some where in my hand........ooogh! ..... but......
				//	all music were so silly cool, that i was laoghting all day long. Like!:))
				//	Where were no silences or pauses. Every touch works perfect.
				//	Only positive memories. Good emotions for me and my friends.
		
				//Mr Hfic Samin after "No f*cking developers maked their job right, b*t!" 
				//trip:
				//	Music stops. I can't start it again. Than, can't stop.....
				//	Carpets were like in the stomach of a monster......
				//	Bad day! Bad emotions! But.... Carpets and mobile is in a trashcan....
				//	Negative balance.
				//My figure prefere the first one.  Hfic.Samin. 2020
		$сВход	=str_replace($сВход, array( '.', ';', '@', ' '), '');
		return strtolower($сВход);
		}
	public	function cФразыЖанр_ИсправитьНаписание($_сВход) //Для предворительной обработки или пользовательского ввода, не для вывода в реальном времени кешированного каталога!
		{
		$мИсправить	=
		//Исправить	Исправлено
		array(
			'&amp;'			=>'&', 
			'hip hop'		=>'Hip-Hop', 
			'drum and base'		=>'Drum and Bass',
			"d'n'b"			=>'Drum and Bass',
			"dnb"			=>'Drum and Bass',
			"d&b"			=>'Drum and Bass',
			'drum and bas'		=>'Drum and Bass',
			'r@b'			=>'R&B',
			"r'nb"			=>"R'n'B",
			'70-80-90'		=>'70x 80x 90x',
			'60-70-80-90-20хх'	=>'60x 70x 80x 90x 20хх',
			'2000-x'		=>'2000x',
			'.'			=>'',
			'&#39;'			=>"'",
			"90'S"			=>"90's",
			"80's-90's-00's"	=>"80's 90's 00's"
			);
		foreach($мИсправить as $сИсправить=>$сИсправлено)
			{
			if(strpos(mb_strtolower($_сВход), mb_strtolower($сИсправить))!==FALSE)
				{
				$_сВход		=str_replace($сИсправить, $сИсправлено, mb_strtolower($_сВход));
				}
			}
		return $_сВход;
		}
	public	function мФразы_ИзвлечьИзвестную($_сВход)
		{
		$мФраза['сЧист']	=$_сВход;
		$мФраза['мФразы']	=array();
		$мИзвестные	=
		array(
			'Club House',
			'Classics 60s',
			'Classic Country',
			'Classical Guitar',
			'Hard Rock Classic',
			'Rock Classic',
			'Hard Rock',
			'Classic Cello',
			'Classic Hits',
			'Classic Rock',
			'Classic Punk',
			'Classic Metal',
			'Classic Christian',
			'Easy Listening',
			'Dance classics',
			'Rap/Hip Hop',
			'Reggae and Dancehall',
			'Blues and Rock',
			'Talk and Show',
			'Trap and House', 
			'Classic hits from the 70s',
			'Classic Hits',
			'Soul and Jazz', 
			'Jungle and Bass',
			'Rock and Roll' ,
			'Rhythm and Blues', 
			'Worship and Praise' ,
			'Enlightement and truth', 
			'B and R', 
			'Drum & Bass',
			'Drum And Bass', 
			'Top 10', 
			'Top 40', 
			'Top 100', 
			'O S T', 
			'Progressive trance', 
			'Progressive house',
			'Музыка для души',
			'Все и не только о чтении',
			'Лучшая музыка и всех направлений'
			);
		foreach($мИзвестные as $сИзвестная)
			{
			if(strpos(mb_strtolower($_сВход), mb_strtolower($сИзвестная))!==FALSE)
				{
				$_сВход			=str_replace($сИзвестная, '', $_сВход);
				$мФраза['сЧист']	=$_сВход;
				$мФраза['мФразы'][]	=$сИзвестная;
				}
			}
		if(strpos(mb_strtolower($мФраза['сЧист']), 'and')!==FALSE)
			{
			_Report('And^ '.$мФраза['сЧист']);
			//$мФраза['сЧист']	=str_replace(array('and','And','AND'), '', $мФраза['сЧист']);
			}
		return $мФраза;
		}
	public	function мСобратьФразы($_сВход, $_сБолМал='НеТрог') //'Бол'/'Мал'/'НеТрог'/'МалДиректор'
		{
		//echo $_сВход;
		//exit;
		$мСлово		=array();
		$мФраза		=array();
		$сСлово		='';
		if(empty($_сВход))
			{
			return $мФраза;
			}
		$//_сВход		=cФразыСтиль_ИсправитьНаписание($_сВход);
		$_сВход		=cФразыЖанр_ИсправитьНаписание($_сВход);
		$мВход		=мФразы_ИзвлечьИзвестную($_сВход);
					    	   unset($_сВход);
		$сВход		=$мВход['сЧист'];
		
		//$сВход		=$сВход.' ';
		$мФраза		=$мВход['мФразы'];
				   unset($мВход);
		$ч1Длинна	=strlen($сВход);
		$ч0Длинна	=($ч1Длинна-1);
		
		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			$сСлово		.=$сВход[$ч0Шаг];
			if(
			($ч0Шаг!=0)&&
				(	
				($сВход[$ч0Шаг]==" ")||
				($сВход[$ч0Шаг]==".")||
				($ч0Шаг==$ч0Длинна)
				)
				    )
				{
				$сСлово		=substr($сСлово,0,-1);
				if(фУникальный($мСлово, $сСлово)!==TRUE)
					{
					_Report('Дубль: '.$сВход.' -> '.$сСлово);
					}
				else
					{
					switch($_сБолМал)
						{
						case 'Бол':
							$мСлово[]	=mb_strtoupper($сСлово);
						break;
						case 'Мал':
							$мСлово[]	=mb_strtolower($сСлово);
						break;
						case 'НеТрог':
							$мСлово[]	=$сСлово;
						break;
						case 'МалДиректор':
							$мСлово[]	=сПреобразовать(mb_strtolower($сСлово), "вКоманду");
						break;
						}
					}
					$сСлово		='';
				}
			}
			/*echo'<pre>';
			print_r($мСлово);
			echo'</pre>';*/
			/*if(empty($мСлово))
				{
				$мСлово[]=$_сВход;
				}*/
		$мФраза		=$мСлово;
			//28 august 2020 Hfic Samin simplified solution. Will be beter next time. 
			//I doo my fast, as fast as possible. Extra fast. Extra thrust. 
			//Trust no one. Dj will save my soul today for vacancies. I hope it will....  :) 
			//Today is the last day. So it will not end without update packege. 
			//Make it good. We too.
		return $мФраза;
		}
	public	function мСобратьO2o($_сВход) // Слово
		{
		$мСлово		=array();
		$сСлово		='';
		if(empty($_сВход))
			{
			$мСлово[]='';
			return $мСлово;
			}
		
		$ч1Длинна	=strlen($_сВход);
		$ч0Длинна	=($ч1Длинна-1);
		
		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			$сСлово.=$_сВход[$ч0Шаг];
			//echo $ч0Шаг;
			//echo '<br>';
			if(
			$ч0Шаг!=0&&
				(
				$_сВход[$ч0Шаг]=="_"||
				$_сВход[$ч0Шаг]=="."
				)
			)
				{
				$сСлово		=substr($сСлово,0,-1);
				$мСлово[]	=$сСлово;
				$сСлово		='';
				//echo $ч0Шаг;
				//echo '<br>';
				}
			if($ч0Шаг==$ч0Длинна)
				{
				$мСлово[]	=$сСлово;
				}
			}
		if(!isset($мСлово[1]))
			{
			_Report($_сВход.'не даёт второго значения О2О');
			}
		return $мСлово;
		}
	
	public	function чРосХэш($_сВход) // 
		{//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2020
		$мСлово		=array();
		$сСлово		='';
		if($_сВход==='')
			{
			return 0;
			}
	
		$ч1Длинна	=strlen($_сВход);
		$ч0Длинна	=($ч1Длинна-1);
		$чСумма		=0;
		
		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			$чСумма		=($чСумма+ord($_сВход[$ч0Шаг]));
		
			if(($ч0Шаг!=0&&$_сВход[$ч0Шаг]==" ")||($ч0Шаг==$ч0Длинна))
				{
				$чХэш		.=$чСумма.'Ф';
				$чСумма		=0;
				}
			}
		return $чХэш;
		}
	public	function intRoundUp($_float)
		{
		$float	=$_float;
		   unset($_float);
		$intRoundedUp=FALSE;
		$intDotPos		=strpos($float,'.');
		if($intDotPos!==FALSE)
			{
			$float		=substr($float, 0, $intDotPos);
			$float++;
			$intRoundedUp	=$float;
			}
		else
			{
			$intRoundedUp	=$float;
			//$intPages
			}
		return $intRoundedUp;
		}
	
	public	function strNDigit($_intN, $_str, $strPos="fromBegin", $_strNULLSymbol='_') //suffix/prefix
		{
		$intN		=$_intN;
			   unset($_intN);
		$str		=$_str;
			   unset($_str);
		$strNULLSymbol	=$_strNULLSymbol;
			   unset($_strNULLSymbol);
		$strAdd='';
		$strOverflowAlert		='=';
		if(strlen($str)>$intN)
			{
			$strOverflowAlert='*';
			}
	
		for($intI=0;$intI<$intN;$intI++)
			{
			if(!isset($str[$intI]))
				{
				$strAdd.=$strNULLSymbol;
				}
			}
		switch($strPos)
			{
			case 'fromBegin':
				$str=$strOverflowAlert.$strAdd.$str;
			break;
			case 'fromEnd':
				$str=$strOverflowAlert.$str.$strAdd;
			break;
			}
		return $str;
		}
	public	function strNDigitVisible($_intN, $_str, $_strShowFrom='fromEnd')  //fromEnd/FromBegin
		{
		$intN		=$_intN;
			   unset($_intN);
		$str		=$_str;
			   unset($_str);
		$strShowFrom	=$_strShowFrom;
			   unset($_strShowFrom);
		switch($strShowFrom)
			{
			case 'fromBegin':
				$str=substr($str, 0, $intN);
			break;
			case 'fromEnd':
				$str=substr($str, -$intN);
			break;
			}
		return $str;
		}
	public	function strNDigitMainTrace($_float)
		{
		$float=$_float;
		 unset($_float);
		$int=floor($float);
	             unset($float);
		$strNDigit=strNDigit(2, $int, 'fromBegin','0');
		if($int>5)
			{
			$strAlertPrefix='??:';
			}
		elseif($int>=1)
			{
			$strAlertPrefix='_?:';
			}
		else
			{
			$strAlertPrefix='__:';
			}
		$str=$strAlertPrefix.$strNDigit;
		return $str;
		}
	public	function strNDigitMicroTrace($_int)
		{
		$int=$_int;
	       unset($_int);
		$strNDigit=strNDigit(3, $int, 'fromBegin','0');
		if($int>500)
			{
			$strAlertPrefix='??:';
			}
		elseif($int>100)
			{
			$strAlertPrefix='_?:';
			}
		else
			{
			$strAlertPrefix='__:';
			}
		$str=$strAlertPrefix.$strNDigit;
		return $str;
		}
	public	function сПреобразовать($_сСтрока, $_сНаправление="вСтроку") //:вСтроку/вКоманду
		{
		$сСтрока		=$_сСтрока;
	
		if($_сНаправление=='вСтроку'||$_сНаправление=='вКоманду')
			{
			$сНаправление	=$_сНаправление;
				   unset($_сНаправление);
			}
		$мПравилаПреобразования	=
				array(
					"о18о"=> "http://",
					"о19о"=> "https://",
					"о20о"=> "<" ,
					"о21о"=> ">" ,
					"о60о"=> "«",
					"о61о"=> "»", 
					"о22о"=> "\"",
					"о28о"=> "/" ,
					"о29о"=> "\\",
					"о24о"=> "?" ,
					"о25о"=> "&" ,
					"о26о"=> "=" ,
					"о27о"=> " " ,
					"о23о"=> "'" ,
					"о40о"=> ",",  //
					"о42о"=> "-",  //
					"о43о"=> ".",  //
					"о44о"=> "`",  //
					"о55о"=> "´",
					"о56о"=> "-",
					"о57о"=> "~",
					"о58о"=> ".",
					"о59о"=> "’",
					"о30о"=> ";",
					"о32о"=> ":",
					"о31о"=> "%",
					"о33о"=> "[",  //To integrate
					"о34о"=> "]",  //
					"о35о"=> "(",  //To integrate
					"о36о"=> ")",  //
					"о62о"=> "{", 
					"о63о"=> "}", 
					"о37о"=> "?",  //To integrate
					"о38о"=> "!",  //
					"о39о"=> "*",  //
					"о41о"=> "|",  //
					"о45о"=> "~",  //
					"о46о"=> "$",  //
					"о47о"=> "#",  //
					"о48о"=> "@",  //
					"о49о"=> "+",  //
					"о51о"=> "^",  //
					"о52о"=> "%",  //
					"о53о"=> "%",  //
					"о54о"=> "№",  //63
				);
		foreach($мПравилаПреобразования as $сПреобразованноВКоманду=>$сПодлежитПреобразованиюВКоманду)
			{
			switch($сНаправление)
				{
				case 'вСтроку':
					$сСтрока	=str_replace($сПреобразованноВКоманду, $сПодлежитПреобразованиюВКоманду, $сСтрока);
				break;
				case 'вКоманду':
					$сСтрока	=str_replace($сПодлежитПреобразованиюВКоманду, $сПреобразованноВКоманду, $сСтрока);
				break;
				}
			}
		return $сСтрока;
		}
	public	function сКодировать($_сСтрокаДляКодирования, $_сДействие='к', $_сКлючь="HiFiIntelligentClub") //E or  /d
		{
		unset($_сКлючь); //Depricated 28.august.2020 Hfic.Samin
		$сДляКодирования	=(string)$_сСтрокаДляКодирования;
			           unset($_сСтрокаДляКодирования);
		$сКлючь			=сКлючь();
		$сДействие		=$_сДействие;
				   unset($_сДействие);
	
		$сПослеКодирования	='';
	
		switch($сДействие)
			{
			case 'к':
			break;
			case 'д':
				$сДляКодирования=base64_decode(сПреобразовать($сДляКодирования,'вСтроку'));
			break;
			}
		$чДлинаКлюча		=strlen($сКлючь);
			
		$чДлинаСтрокиДляКодирования	=strlen($сДляКодирования);
		$чТекущаяПозицияКлюча		=0;
		for($чШаг=0;$чШаг<$чДлинаСтрокиДляКодирования;$чШаг++)
			{
			//echo '$сДляКодирования[$чШаг]^$сКлючь[$чТекущаяПозицияКлюча]'.$сДляКодирования[$чШаг].'-'.$сКлючь[$чТекущаяПозицияКлюча]."\n";
			$сПослеКодирования.=$сДляКодирования[$чШаг]^$сКлючь[$чТекущаяПозицияКлюча];
			if($чТекущаяПозицияКлюча==$чДлинаКлюча-1)
				{
				$чТекущаяПозицияКлюча=0;
				}
			else
				{
				$чТекущаяПозицияКлюча++;
				}
			}
		switch($сДействие)
			{
			case 'к':
				$сПослеКодирования=сПреобразовать(base64_encode($сПослеКодирования), 'вКоманду');
			break;
			case 'д':
			break;
			}
		return $сПослеКодирования;
		}
	public	function сЕХЕ($_сСтрокаДляКодирования)
		{
		$сДляКодирования		=(string)$_сСтрокаДляКодирования;
		$сКлючь				=(string)сКлючь();
		$ч1ДлинаКлюча			=strlen($сКлючь);
		$ч1ДлинаСтрокиДляКодирования	=strlen($сДляКодирования);
		$ч0ТекущаяПозицияКлюча		=0;
		for($ч0Шаг=0;$ч0Шаг<$ч1ДлинаСтрокиДляКодирования;$ч0Шаг++)
			{
			//$сКод	.=($сДляКодирования[$ч0Шаг]^$сКлючь[$ч0ТекущаяПозицияКлюча]).$сКлючь[$ч0ТекущаяПозицияКлюча];
			$сКод	.=$сДляКодирования[$ч0Шаг].$сКлючь[$ч0ТекущаяПозицияКлюча];
			if($ч0ТекущаяПозицияКлюча==($ч1ДлинаСтрокиДляКодирования-1))
				{
				$ч0ТекущаяПозицияКлюча	=0;
				}
			else
				{
				
				$ч0ТекущаяПозицияКлюча++;
				}
			}
		return	base64_encode($сКод);
		}
	public	function сЕХЕ2($_сСтрокаДляКодирования)
		{
		$сДляКодирования		=(string)base64_decode($_сСтрокаДляКодирования);
		//$сКлючь				=(string)сКлючь();
		$сДействие			=$_сДействие;
		$ч1ДлинаСтрокиДляКодирования	=strlen($сДляКодирования);
		$сКод				='';
		$odd				=0;
		for($ч0Шаг=0;$ч0Шаг<$ч1ДлинаСтрокиДляКодирования;$ч0Шаг++)
			{
			if($odd==0)
				{
				//$сКод	.=$сДляКодирования[$ч0Шаг]^$сДляКодирования[($ч0Шаг+1)];
				$сКод	.=$сДляКодирования[$ч0Шаг];
				$odd++;
				}
			else
				{
				$odd=0;
				}
			}
		return	$сКод;
		}
	public	function strEncode2($_str)
		{//Testing with JSON with pleasure. Is not used often, but I using it sometimes,
		//instead of Ruslan Mihailovich Pegov (strLength/3, 3 bytes, [UTF-16?]) rule.
		$str=base64_encode($_str);
		$str=str_replace('=','ravno_', $str);
		return $str;
		}
	public	function strEncode($_strString, $_strKey, $_strAct='e') //E or  /d
		{ //Depricated 28.august 2020 Hfic Samin
	
		$strString	=(string)$_strString;
			           unset($_strString);
		$strKey		=(string)$_strKey;
		                   unset($_strKey);
		$strAct		=$_strAct;
			   unset($_strAct);
		
		switch($strAct)
			{
			case 'e':
			break;
			case 'd':
				$strString=base64_decode(urldecode($strString));
			break;
			}
	
		$intKeyLength		=strlen($strKey);
		
		$intSourceStringLength	=strlen($strString);
		$strStringEncoded	='';
		$intKeyStep		=0;
		for($intI=0;$intI<$intSourceStringLength;$intI++)
			$strStringEncoded.=$strString[$intI]^$strKey[$intKeyStep];
			if($intKeyStep==$intKeyLength-1)
				{
				$intKeyStep=0;
				}
			else
				{
				$intKeyStep++;
				}
			}
		switch($strAct)
			{
			case 'e':
				$strStringEncoded=urlencode(base64_encode($strStringEncoded));
			break;
			case 'd':
			break;
			}
		return $strStringEncoded;
		}
	//
	//	Js Formatter
	//
	public	function rmLb($_str)
		{
		$str=$_str;
		unset($_str);
		return preg_replace('/[\r\n]/','',$str);
		}
	//
	//
	//
		
	public	function arrEventLink($_arrReality, $_strGroove, $_strGrooveData='', $_bIzClearName=false, $strPage=0)
		{
		$str;
		
		if(is_array($_arrReality))
			{
			$arrLinks	=$_arrReality;
				   unset($_arrReality);
			}
		else
			{
			$arrLinks	=array();
			}
		$strGrooveData		=$_strGrooveData;
		$strGrooveDataCmd	=сПреобразовать($_strGrooveData, "вКоманду");
						  unset($_strGrooveData);
		$strEventLink		='';
		$strEventParams		='objEvent.arrReality={';
		$strSearchParams	='';
	
		foreach($arrLinks as $strName=>$strData)
			{
			$strDataCmd	=сПреобразовать($strData, "вКоманду");
			
			if($strName==$_strGroove)
				{
				$strEventLink	.='&'.$strName.'='.$strGrooveDataCmd;
				$strEventParams	.=$strName.':'.нольЧИлиС($strName, $strGrooveData).',';
				}
			else
				{
				if($strName=='int0Page')
					{
					$strData=0;
					}
				/*if($_bIzClearName&&$strName=='strName')
					{
					$strData='';
					}*/
				$strEventLink	.='&'.$strName.'='.$strDataCmd;
				$strEventParams	.=$strName.':'.нольЧИлиС($strName, $strData).',';
				}
			}
			$strEventParams	=substr($strEventParams, 0, -1);
			$strEventParams	.='};';
			//$strEventParams	.='this.className	+=" loading"';
			$strEventParams	.='objEvent._ActualizeSearch();';
			$strEventParams	.='objEvent._UpdateURLDyn(true, this);';
			
			$strEventParams	.='return false;';
			$arr['strHref']		=' href="/search?'.substr($strEventLink, 1).'" ';
			$arr['strOnClick']	=' onClick="'.$strEventParams.'" ';
	
			//$arr['strHref']
			//$arr['strOnClick']
			// 'onClick="'.$strEventParams.'";';
			//echo $arr['onClick'];
		return $arr;
		}
	public	function strEventLink($arr)
		{
		return ' '.$arr['strHref'].' '.$arr['strOnClick'].' ';
		}
	//
	//	Управляющий сигнал
	//
	public	function strQuery($_strEvent, $_strRequest)
		{
		$strEvent=$_strEvent;
		    unset($_strEvent);
		//$strEvent=substr($_strEvent,1);
		
		$intEventLen=strlen($strEvent);
		$strQurey=substr($_strRequest,$intEventLen);
		return substr($strQurey,1);
		}
	public	/*!*/function strSafeUsers($_strRequest)
	/*!*//*+1+*/	{
	/*!*//*+2+*/	return str_replace(array('%3C','%3E',"<",">",'о20о','о21о', 'U+02C2', 'U+02C3', 'U+003E', 'U+003C'), "_", $_strRequest);
	/*!*//*+3+*/	}
	/*!*///function strGetRequest()
		/*!*//*+4+*///	{
		/*!*//*+5+*///	$strRequest= strSafeUsers($_SERVER['REQUEST_URI']);
	/*+6+*///	return $strRequest;
	/*!*//*+7+*///	}
	/*!*/
	/*function _ExitOnUndefunedAction($_strIncomeName)
		{
		$strIncomeName		=$_strIncomeName;
				   unset($_strIncomeName);
		$bHasAction	=false;
		$arrFallBackIncomeParams	=arrAllEventIncomeParametrsFallBack();
	
		foreach($arrFallBackIncomeParams['arrEvent'] as $strExistName)
			{
			if($strIncomeName==$strExistName)
				{
				$bHasAction	=true;
				}
			}
		if($bHasAction===false)
			{
			_Report($strIncomeName.' is not exist in the system;');
			exit;
			}
		}*/
	/*
	function arrGetEventSetter()
		{
		$arrEvent		=array();
		$arrEvent['strEvent']	='';
		$arrEvent['arrReality']	=array();
	
		$strRequest		=strGetRequest();
		$arrEvent		=arrRestrictAndReportActionAndParametrs(
						array(
							'strEvent'	=>urldecode(сДоСимвола($strRequest, '?')), //Why it is encoded? Shall find
							'arrReality'	=>arrEventParams2Array(substr(сОтСимвола($strRequest, '?'),1)),
						)
					);
		//echo '<pre>';
		//print_r($arrEvent);
		//echo '</pre>';
		//exit;
		return $arrEvent;
		}
	function arrEventParams2Array($_strQuery)
		{
		$arrResult	=array();
		$strQuery	=$_strQuery;
			   unset($_strQuery);
	
		$arrQuery=arrPrepare($strQuery);
		               unset($strQuery);
	
		foreach($arrQuery as $strQuery)
			{
			$arrBeforeValidate		=arrPrepare2($strQuery);
			$strParamName			=$arrBeforeValidate[0];
			$strParamValue			=$arrBeforeValidate[1];
			$arrResult[$strParamName]	=urldecode(urldecode(сПреобразовать($strParamValue, "вСтроку")));
			}
	
	return $arrResult;
		}
	
	function arrRestrictAndReportActionAndParametrs($_arrIncome, $_strReplaceName='', $_strReplaceValue='')
		{
		
		$arrResult['strEvent']		='';
		$arrResult['arrReality']	=array();
		$arrFallBack			=arrAllEventIncomeParametrsFallBack();
		//$arrFallBack['arrFallBack']
		if(is_array($_arrIncome))
			{
			$arrIncome		=$_arrIncome;
					   unset($_arrIncome);
			}
		else
			{
			$arrIncome		=array();
			}
		$strReplaceName			=$_strReplaceName;
					   unset($_strReplaceName);
		$strReplaceValue		=$_strReplaceValue;
					   unset($_strReplaceValue);
		//print_r($arrFallBack['arrEvent']);
		$bIzInAllowedActions		=FALSE;
		foreach($arrFallBack['arrEvent'] as $strAllowedActionName=>$arrEventElements)
			{
			if(mb_strtolower($arrIncome['strEvent'])==mb_strtolower($strAllowedActionName))
				{
				$bIzInAllowedActions	=TRUE;
				}
			elseif(isset($arrEventElements['arrEN']['strAlias'])&& (mb_strtolower($arrEventElements['arrEN']['strAlias'])==mb_strtolower($strAllowedActionName)))
				{
				$bIzInAllowedActions	=TRUE;
				}
			elseif(isset($arrEventElements['arrRU']['strAlias'])&& (mb_strtolower($arrEventElements['arrRU']['strAlias'])==mb_strtolower($strAllowedActionName)))
				{
				$bIzInAllowedActions	=TRUE;
				}
			else
				{
				$bIzInAllowedActions	=FALSE;
				}
			$arrResult['strEvent']	=$strAllowedActionName;
			}
		if(strlen($strAllowedActionName)>$arrFallBack['arrObjects']['arrEventTestConditions']['arrEventName']['int0MaxLength'])
			{
							_Report($arrFallBack['arrObjects']['arrEventsOnErrors']['arrEventName']['strReport'].': '.$strAllowedActionName);
			$bIzInAllowedActions		=FALSE;
			}
		if($bIzInAllowedActions===FALSE)
			{
			$arrResult['strEvent']		=$arrFallBack['arrObjects']['arrEventsOnErrors']['arrEventName']['strFallBack'];
							_Report($arrIncome['strEvent'].' '.$arrFallBack['arrObjects']['arrEventsOnErrors']['arrEventName']['strReport']);
							//header('Location: http://'.strDomain().'.'.strGetDomainZone().$arrResult['strEvent']);
							//header('Location: http://'.strDomain().$arrResult['strEvent']);
			}
		foreach($arrFallBack['arrReality'] as $strFallBackName=>$arrFallBackParams)
			{
			$arrResult['arrReality'][$strFallBackName]	=$arrFallBackParams['strFallBack'];
			if(isset($arrFallBackParams['int0MaxValue']))
				{
				if($arrFallBackParams['int0MaxValue']<=$arrResult['arrReality'][$strFallBackName])
					{
					$arrResult['arrReality'][$strFallBackName]	=$arrFallBackParams['int0MaxValue'];
					}
				}
			foreach($arrIncome['arrReality'] as $strIncomeName=>$strIncomeValue)
				{
				if($strFallBackName==$strIncomeName)
					{
					if(strlen($arrIncome['arrReality'][$strIncomeName])>$arrFallBack['arrReality'][$strFallBackName]['int0MaxLength'])
						{
													_Report($arrIncome['arrReality'][$strIncomeName].'length>'.$arrFallBack['arrReality'][$strFallBackName]['int0MaxLength']);
						$arrIncome['arrReality'][$strIncomeName]		=substr($arrIncome['arrReality'][$strIncomeName],0, $arrFallBack['arrReality'][$strFallBackName]['int0MaxLength']);
						}
					if(isset($arrFallBack['arrReality'][$strFallBackName]['int0MaxValue']))
						{
						if($strIncomeValue>=$arrFallBack['arrReality'][$strFallBackName]['int0MaxValue'])
							{
							_Report('$strIncomeValue>=$arrFallBack[arrReality][$strFallBackName][int0MaxValue] $strIncomeValue: '.$strIncomeValue.'>='.$arrFallBack['arrReality'][$strFallBackName]['int0MaxValue']);
								$strIncomeValue		=$arrFallBack['arrReality'][$strFallBackName]['int0MaxValue'];
								}
							else
								{
								//$strIncomeValue		=$arrFallBack['arrReality'][$strFallBackName]['maxValue'];
								//_Report($strIncomeValue.' >'.$arrFallBack['arrReality'][$strFallBackName]['maxValue']);
								}
							}	
						$arrResult['arrReality'][$strIncomeName]		=$strIncomeValue;
						}
					}
				}
			return $arrResult;
			}
		function arrPrepare($_strQuery, $_arrDataTypes=array())
			{
			$arrQuery=array();
			$strQuery=$_strQuery;
			    unset($_strQuery);
			
			if(strpos($strQuery, '&'))
				{
				$arrQuery=explode('&', $strQuery);
				}
			elseif(strpos($strQuery, '='))
				{
				$arrQuery[0]=$strQuery;
				//$arrQuery=explode('=', $strQuery);
				}
			else
				{
				}
			return $arrQuery;
			}
		function arrPrepare2($_strQuery, $_arrDataTypes=array())
			{
			$arrQuery=array();
			$strQuery=$_strQuery;
			    unset($_strQuery);
			if(strpos($strQuery, '='))
				{
				$arrQuery=explode('=', $strQuery);
				}
			else
				{
				}
			return $arrQuery;
			}*/
		
		
	public	function strParType($_strParName)
		{
		$strParName	=$_strParName;
			   unset($_strParName);
		$strParType	=substr($strParName,0, 3);
		switch($strParType)
			{ //EN
			case 'str': //String
				$strParType='str';
			break;
			case 'int': //Integer
				$strParType='int';
			break;
			case 'flo': //FLoat
				$strParType='flo';
			break;
			case 'arr': //Array
				$strParType='arr';
			break;
			case 'bIz': //Boolean
				$strParType='bIz';
			break;
			case 'obj': //Object
				$strParType='obj';
			break;
			case 'tmt': //Type my type
				$strParType='tmt';
			break;
			//RU
			case 'с': //String
				$strParType='str';
			break;
			case 'ч0': //Integer
				$strParType='int';
			break;
			case 'ч1': //Integer
				$strParType='int';
			break;
			case 'д': //FLoat
				$strParType='flo';
			break;
			case 'м': //Array
				$strParType='arr';
			break;
			case 'ф': //Boolean
				$strParType='bIz';
			break;
			case 'о': //Object
				$strParType='obj';
			break;
			case 'тмт': //Type my type
				$strParType='tmt';
			break;
			//FR 
			/*case 'с': //String
				$strParType='str';
			break;
			case 'ч0': //Integer
				$strParType='int';
			break;
			case 'ч1': //Integer
				$strParType='int';
			break;
			case 'д': //FLoat
				$strParType='flo';
			break;
			case 'м': //Array
				$strParType='arr';
			break;
			case 'ф': //Boolean
				$strParType='bIz';
			break;
			case 'о': //Object
				$strParType='obj';
			break;
			case 'тмт': //Type my type
				$strParType='tmt';
			break;*/
			}
		return $strParType;
		}
	public	function strArrayRec2JS($_arrReality, $_strLayerName='', $bIzFormat=false, $strFormatLR='')
		{
		$bIzFormat	=bIzFormat();
		$strFormatLR	='<br/>';
		$strLayerName	=$_strLayerName;
			   unset($_strLayerName);
		$arrReality	=$_arrReality;
			   unset($_arrReality);
		$strType	='str';
		$strArray	='';
		if(!empty($strLayerName))
			{
			$arrReality	=$arrReality[$strLayerName];
			}
		else
			{
			//$arrReality	=$arrReality;
			}
		foreach($arrReality as $strName=>$tmtData)
			{
			$tmtData	=нольЧИлиС($strName, $tmtData);
			$strType	=strParType($strName);
			if($strType=='arr')
				{
				//print_r($arrReality);
				$strArray	.=$strName.'=';
				$strArray	.='{';
				$strArray	.=$bIzFormat?$strFormatLR:'';
				$strArray	.=strArrayRec2JS($arrReality, $strName, $bIzFormat, $strFormatLR);
				$strArray	.='}';
				$strArray	.=$bIzFormat?$strFormatLR:'';
				}
			else
				{
				if($tmtData==='')
					{
					$tmtData="''";
					}
				$strArray	.="'".$strName."'".':'.$tmtData.',';
				$strArray	.=$bIzFormat?$strFormatLR:'';
				}
			}
		$strArray	=substr($strArray, 0, -1);
		return $strArray;
		}
	public	function strArray2JS($_arrReality, $_strArrName='')
		{
		//$bIzFormat	=false;
		$bIzFormat	=true;
		$strFormatLR	="\n".'<br/>';
		$strArrName	=$_strArrName;
			   unset($_strArrName);
	
		$str	.=$bIzFormat?$strFormatLR:'';
		$str	.=strArrayRec2JS($_arrReality, '', $bIzFormat, $strFormatLR);
		$str	.=$bIzFormat?$strFormatLR:'';
	
		$str	=str_replace(','.$strFormatLR.'}', $strFormatLR.'}', $str);
		return $str;
		}
		/*
		function _DropTheSessionDust()
			{
			//session_start();
			$strPlayingStationId	='';
			if(isset($_SESSION)&&isset($_SESSION['strListener'])&&(!empty($_SESSION['strListener'])))
				{
				//print_r($_SESSION);
				$strListener			=strSafeUsers(substr($_SESSION['strListener'],0, 15));
				if(isset($_SESSION['strPlayingStationId']))
					{
					$strPlayingStationId		=strSafeUsers(substr($_SESSION['strPlayingStationId'],0, 55));
					}
							          unset($_SESSION);
				$_SESSION['strListener']		=$strListener;
				$_SESSION['strPlayingStationId']	=$strPlayingStationId;
				}
			}
		*/
	}
?>