<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//strNDigit
//
//
//
//Level 0
//[Vv]Event Global

// CLASSES:
// 1./*HIC*/ 		//Главные параметры и функции смистемы HiFiIntelligentClub
// 2./*CMD*/ 		//Работа с входящей коммандой
// 3./*GENRE*/ 		//Работа со стилями и жанрами
// 4./*PHRASE*/ 	//Работа с фразой
// 5./*CONNECTION*/ 	//Работа с соединением
// 6./*MANY*/ 		//Работа с множеством
// 7./*О2О*/ 		//Работа с О2О
// 8./*FLOAT*/ 		//Работа с плавающей запятой
// 9./*DIGIT*/ 		//Цифровой экран
// 10/*.ALLINPUT*/ 	//(Все входящие данные)
// 11/*.URL*/ 		//Строка браузера URL
// 12/*.RCE*/ 		//Функции Благословенного RCE.Framework
// 13./*STATION*/	//Параметры станции
class HIC
	{
	public static function сКлючь() 
		{
		return '4aPrIsAForaPr';
		}
	public static function _Report($str)
		{
		//echo$str;
		//$strResult=date('Y-m-d_H:i:s').'<warning style="color:red;">'.$str.'</warning>'."\n";
		$strResult	=date('Y-m-d_H:i:s').$str."\n";
		file_put_contents('/home/HiFiIntelligentClub.Ru/tmp/N0_report.txt' , $strResult, FILE_APPEND);
		}
	public static function arrAllEventIncomeParametrsDefault()
		{
		$arrAllIncome	=
		array(
			'arrAction'=>
			array(
				'arrAllowed'=>
				array(
					'/',
					'/search',
					'/Hfic_Samin.jpg',
					'/favicon.ico',
					'/getStation',
					'/getTest',
					'/ServerOnline',
					'/listeners',
					'/robots.txt',
					'/HiFiIntelligentClub.tar.gz'
					),
				'default'	=>'/',
				'maxLength'	=>28,
				),
			'arrParams'=>
			array(
				'strName'	=>
				array(
					'default'	=>'',
				'maxLength'	=>100,
					),//
				'strStyle'	=>
				array(
					'default'	=>'',
					'maxLength'	=>65,
					),//
				'intBitrate'	=>
				array(
					'default'	=>'',
					'maxLength'	=>4,
					),
				'strCodec'	=>
				array(
					'default'	=>'',
					'maxLength'	=>16,
					),
				'int0Page'	=>
				array(
					'default'	=>0,
					'maxLength'	=>6,
					),
				'int1OnPage'	=>
				array(
					'default'	=>1,
					'maxLength'	=>3,
					'maxValue'	=>40,
					),
				'int0PlayingStationNum'=>
				array(
					'default'	=>0,
					'maxLength'	=>10,
					),
				'strPlayingStationStyle'=>
				array(
					'default'	=>'',
					'maxLength'	=>65,
					),
				'strPlayingStationId'=>
				array(
					'default'	=>'',
					'maxLength'	=>150,
					)
				)
			);
		return $arrAllIncome;
		}
	}
class CMD
	{
	public static function сПреобразовать($_сСтрока, $_сНаправление="вСтроку") //:вСтроку/вКоманду
		{
		$сСтрока		=$_сСтрока;
	
		if($_сНаправление=='вСтроку'||$_сНаправление=='вКоманду')
			{
			$сНаправление	=$_сНаправление;
			   unset($_сНаправление);
			}
		$мПравилаПреобразования	=
				array(
					"о20о"=> "<" ,
					"о21о"=> ">" ,
					"о22о"=> "\"",
					"о23о"=> "'" ,
					"о24о"=> "?" ,
					"о25о"=> "&" ,
					"о26о"=> "=" ,
					"о27о"=> " " ,
					"о28о"=> "/" ,
					"о29о"=> "\\",
					"о30о"=> ";",
					"о31о"=> "%",
					"о31о"=> ":",
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
	public static function rmLb($_str)
		{
		$str=$_str;
		unset($_str);
		return preg_replace('/[\r\n]/','',$str);
		}
//
//
//
	public static function bIzEvent($_strEvent, $_strRequest)
		{
		$strEvent		=substr($_strEvent,1);
		                          unset($_strEvent);
		$strEventExpression	=str_replace('/','\/', $strEvent);
		$strRequest		=$_strRequest;
		                   unset($_strRequest);
		
		//echo $strEvent; echo'<br/>';
		//echo '/^(\/'.$strEvent.')(\?.*)|$/';
		//echo '<br/>';
		//echo$strEvent=str_replace('/','\/',$strEvent);
	        	//   unset($_strEvent);
		$bIzMutch=false;
		$strEventExtracted=preg_replace('/^(\/'.$strEventExpression.')(\?.*)|$/','$1', $strRequest);
		if($strEventExtracted=='/'.$strEvent)
			{
			$bIzMutch=true;
			}
		return $bIzMutch;
		}
	public static function arrEventLink($_arrParams, $_strGroove, $_strGrooveData='', $_bIzClearName=false, $strPage=0)
		{
		$str;
		
		if(is_array($_arrParams))
			{
			$arrLinks	=$_arrParams;
				   unset($_arrParams);
			}
		else
			{
			$arrLinks	=array();
			}
		$strGrooveData		=$_strGrooveData;
		$strGrooveDataCmd	=сПреобразовать($_strGrooveData, "вКоманду");
						  unset($_strGrooveData);
		$strEventLink		='';
		$strEventParams		='objEvent.arrParams={';
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
			$strEventParams	.='objEvent._ActualizeSearch();';
			$strEventParams	.='objEvent._UpdateURLDyn();';
			$strEventParams	.='return false;';
			$arr['strHref']		=' href="/search?'.substr($strEventLink, 1).'" ';
			$arr['strOnClick']	=' onClick="'.$strEventParams.'" ';
	
			//$arr['strHref']
			//$arr['strOnClick']
			// 'onClick="'.$strEventParams.'";';
			//echo $arr['onClick'];
		return $arr;
		}
	public static function strQuery($_strEvent, $_strRequest)
		{//	Управляющий сигнал
		$strEvent=$_strEvent;
		    unset($_strEvent);
		//$strEvent=substr($_strEvent,1);
		
		$intEventLen=strlen($strEvent);
		$strQurey=substr($_strRequest,$intEventLen);
		return substr($strQurey,1);
		}
	public static function сКодировать($_сСтрокаДляКодирования, $_сДействие='к', $_сКлючь="HiFiIntelligentClub") //E or  /d
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

	public static function strEncode2($_str)
		{//Testing with JSON with pleasure. Is not used often, but I using it sometimes,
		//instead of Ruslan Mihailovich Pegov (strLength/3, 3 bytes, [UTF-16?]) rule.
		$str=base64_encode($_str);
		$str=str_replace('=','ravno_', $str);
		return $str;
		}
	public static function strEncode($_strString, $_strKey, $_strAct='e') //E or  /d
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
			{
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
	//	Js Formatter
	public static function arrGetEventSetter()
	/*!0!*/{
	/*!1!*/$arrEvent			=array();
	/*!2!*/$arrEvent['strAction']		='';
	/*!3!*/$arrEvent['arrParams']		=array();
	/*!4!*/
	
	/*!5!*/$strRequest			=strGetRequest();
	
	/*!6!*/$arrEvent['strAction']		=сДоСимвола($strRequest, '?');
	
	
		/*!8!*/		/*!!!!*/	/*!!!!*/
	/*!9+*/	//_ExitOnUndefunedAction($arrEvent['strAction']); //For small low cost setup*/
	/*!10*/		/*!!!!*/	/*!!!!*/
	
	/*!11*/$strEventParams			=substr(сОтСимвола($strRequest, '?'),1);
	
	/*!12*/$arrEvent['arrParams']		=arrEventParams2Array($strEventParams);
	
	/*13+*/$arrEvent			=arrRestrictAndReportActionAndParametrs($arrEvent); //For URLID 1mln+ mode
	//	echo '<pre>';
	//	print_r($arrEvent);
	//	echo '</pre>';
	//
	/*	echo'<script>'.$arrEvent['arrParams'].'</script>';
		echo'<script>objEvent._UpdateURLDyn()</script>';*/
	
	/*14!*/return $arrEvent;
	/*15!*/}
	public static function arrEventParams2Array($_strQuery)
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
			if(strpos($arrResult[$strParamName],'27'))
				{
				echo $arrResult[$strParamName];
				exit;
				}
			//$arrResult[$strParamName]	=urldecode($strParamValue);
			//$intLength			=$this->arrEvents[$strEvent][$strParamName]['intLength'];
			//$strValidate			=$this->arrEvents[$strEvent][$strParamName]['strValidate'];
			//$strParamValue		=substr($strParamValue,0, $intLength);
			//$strParamValue		=preg_replace($strValidate,'',$strParamValue);
			//$arrResult[$strParamName]	=$strParamValue;
			}
	
		return $arrResult;
		}
	
	public static function arrRestrictAndReportActionAndParametrs($_arrIncome, $_strReplaceName='', $_strReplaceValue='')
		{
	
		$arrResult	=array();
		$arrDefault	=arrAllEventIncomeParametrsDefault();
		//; //**
	
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
		//print_r($arrDefault['arrAction']);
		//print_r($arrIncome);

	/*    */$strAction	='arrAction';
	/*    */if(isset($arrIncome['strAction'])&&!empty($arrIncome['strAction'])&&isset($arrDefault[$strAction])&&!empty($arrDefault[$strAction])&&is_array($arrDefault[$strAction])&&in_array($arrIncome['strAction'], $arrDefault[$strAction]['arrAllowed']))
	/* E  */	{
	/* V  */	if(isset($arrDefault[$strAction]['maxLength']))
	/* E  */		{
	/* N  */		if(strlen($arrIncome['strAction'])>$arrDefault[$strAction]['maxLength'])
	/* T  */			{
	/*    */			 _Report($arrIncome['strAction'].'length>'.$arrDefault[$strAction]['maxLength']);
					$arrResult['strAction']	=substr($arrIncome['strAction'],0, $arrDefault[$strAction]['maxLength']);
	/* I  */	
	/* N  */			}
	/* C  */		else
	/* O  */			{
	/* M  */			$arrResult['strAction']	=$arrIncome['strAction'];
	/* E  */			}
	/*    */		}
	/* A  */	else
	/* C  */		{
	/* T  */		_Report('else isset($arrDefault[$strAction][\'maxLength\'])');
	/* I  */		}
	/* O  */	}
	/* N  */else
	/*    */	{
	/*    */		_Report($strAction.' is not in allowed list');
	/*    */	//exit;
	/*    */	}
		//echo '<pre>';
		//print_r($arrResult);
		//echo '</pre>';
	
		unset($strAction);
		      $strAction	='arrParams';
		if(isset($arrDefault[$strAction])&&!empty($arrDefault[$strAction])&&is_array($arrDefault[$strAction]))
			{
			foreach($arrDefault[$strAction] as $strDefaultName=>$arrDefaultParams)
				{
				$arrResult[$strAction][$strDefaultName]	=$arrDefaultParams['default'];
				if(isset($arrDefaultParams['maxValue']))
					{
					//echo $arrDefaultParams['maxValue'];
					if($arrDefaultParams['maxValue']<=$arrResult[$strAction][$strDefaultName])
						{
						$arrResult[$strAction][$strDefaultName]=$arrDefaultParams['maxValue'];
						}
					}
				foreach($arrIncome[$strAction] as $strIncomeName=>$strIncomeValue)
					{
					if($strDefaultName==$strIncomeName)
						{
						if(strlen($arrIncome[$strAction][$strIncomeName])>$arrDefault[$strAction][$strDefaultName]['maxLength'])
							{
							 _Report($arrIncome[$strAction][$strIncomeName].'length>'.$arrDefault[$strAction][$strDefaultName]['maxLength']);
							$arrIncome[$strAction][$strIncomeName]	=substr($arrIncome[$strAction][$strIncomeName],0, $arrDefault[$strAction][$strDefaultName]['maxLength']);
					
							}
	
							//echo $strDefaultName.' '.$strIncomeName.' '.$strIncomeValue;
						//echo '<pre>';
						//	print_r($arrDefault[$strAction][$strDefaultName]);
						//echo '</pre>';
						//echo $arrDefault[$strAction][$strDefaultName]['maxValue'];
						if(isset($arrDefault[$strAction][$strDefaultName]['maxValue']))
							{
							//echo '12111111111111111111111111111111111111113';	
							//echo $strIncomeValue.' '.$arrDefault[$strAction][$strDefaultName]['maxValue'];
							if(($strIncomeValue<=$arrDefault[$strAction][$strDefaultName]['maxValue']))
								{
								//$strIncomeValue	=$arrDefault[$strAction][$strDefaultName]['maxValue'];
								}
							else
								{
								$strIncomeValue	=$arrDefault[$strAction][$strDefaultName]['maxValue'];
								_Report($strIncomeValue.' >'.$arrDefault[$strAction][$strDefaultName]['maxValue']);
								}
							}
						$arrResult[$strAction][$strIncomeName]	=$strIncomeValue;
						}
					}
				}
			}
		return $arrResult;
	    	}
	public static function arrPrepare($_strQuery, $_arrDataTypes=array())
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
	public static function arrPrepare2($_strQuery, $_arrDataTypes=array())
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
		}
	public static function strArrayRec2JS($_arrParams, $_strLayerName='', $bIzFormat=false, $strFormatLR='')
		{
		$strLayerName	=$_strLayerName;
			   unset($_strLayerName);
		$arrParams	=$_arrParams;
			   unset($_arrParams);
		$strType	='str';
		$strArray	='';
		if(!empty($strLayerName))
			{
			$arrProcParams	=$arrParams[$strLayerName];
			}
		else
			{
			$arrProcParams	=$arrParams;
			}
		foreach($arrProcParams as $strName=>$tmtData)
			{
			$tmtData	=нольЧИлиС($strName, $tmtData);
			$strType	=strParType($strName);
			if($strType=='arr')
				{
				$strArray	.=$strName.'=';
				$strArray	.='{';
				$strArray	.=$bIzFormat?$strFormatLR:'';
				$strArray	.=strArrayRec2JS($arrParams, $strName, $bIzFormat, $strFormatLR);
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
	public static function strArray2JS($_arrParams, $_strArrName='')
		{
		//$bIzFormat	=false;
		$bIzFormat	=true;
		$strFormatLR	="\n".'<br/>';
		$strArrName	=$_strArrName;
			   unset($_strArrName);
    
		$str	.=$bIzFormat?$strFormatLR:'';
		$str	.=strArrayRec2JS($_arrParams, '', $bIzFormat, $strFormatLR);
		$str	.=$bIzFormat?$strFormatLR:'';
	
		$str	=str_replace(','.$strFormatLR.'}', $strFormatLR.'}', $str);
		return $str;
		}
	public static function _DropTheSessionDust()
		{
		$strPlayingStationId	='';
		if(isset($_SESSION)&&isset($_SESSION['strListener'])&&(!empty($_SESSION['strListener'])))
		/*+1+*/	{
			//print_r($_SESSION);
		/*+2+*/	$strListener			=strSafeUsers(substr($_SESSION['strListener'],0, 15));
			if(isset($_SESSION['strPlayingStationId']))
				{
			/*+3+*/	$strPlayingStationId		=strSafeUsers(substr($_SESSION['strPlayingStationId'],0, 55));
				}
		/*+4+*/				          unset($_SESSION);
		/*+5+*/	$_SESSION['strListener']		=$strListener;
		/*+6+*/	$_SESSION['strPlayingStationId']	=$strPlayingStationId;
		/*+7+*/	}
		}
	public static function strGetDefaultLanguage()
		{
		$strZone	=strGetDomainName();
		if($strZone=='ru')
			{
			$strDefaultLang='ru';
			}
		elseif($strZone=='onion')
			{
			$strDefaultLang='en';
			}
		elseif($strZone=='com')
			{
			$strDefaultLang='en';
			}
		else
			{
			$strDefaultLang='en';
			}
		return strtoupper($strDefaultLang);
		}
	}
class STATION
	{
	public static function сЗаменаСлэшУЕ($_сВход) 
		{
		$сВход=str_replace('\u043e31\u043e\u043e28\u043e\u043e28\u043e','://', $_сВход);
										 unset($_сВход);
		$сВход=str_replace('\u043e31\u043e', ':' ,$сВход);
		$сВход=str_replace('\u043e31\u043e8200\u043e28\u043e', '/' ,$сВход);
		return $сВход;
		}
	}
class GENRE
	{
	public static function мЖанр_мЯзык_мТранскрипция($сВход) //inspired by Ferry Corsten and Armin van Buuren 
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
	}
class PHRASE
	{
	public static function сНачДоСимвола($_сВход, $с_Символ='?') // Слово 
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
	public static function сНачОтСимвола($_сВход, $с_Символ='?') // Слово 
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
	
	public static function сНачОтДоСимвола($_сСтр, $_сОт, $_сДо, $_nu1BeginOffset=1) 
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
	public static function сРеверс($_сСтр) 
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
	public static function сКонцОтДоСимвола($_сСтр, $_сОт, $_сДо, $_nu1BeginOffset=1) 
		{
		$сСтр	=сРеверс($_сСтр);
		$сСтр	=сНачОтДоСимвола($сСтр, $_сОт, $_сДо, $_nu1BeginOffset);
		$сСтр	=сРеверс($сСтр);
		return 	$сСтр;
		}
	public static function сКонцДоСимвола($_сСтр, $_сОт)
		{
		$сСтр	=сРеверс($_сСтр);
		$сСтр	=сНачДоСимвола($сСтр, $_сОт);
		$сСтр	=сРеверс($сСтр);
		return 	$сСтр;
		}
	public static function мФразы($_сФраза) /* Could be inputed by anyone and after that used in pfrase inspired Armin van Buuren */
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
	public static function сКодировка($с_Вход)
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
	public static function нольЧИлиС($_сИмя, $_сДанные)
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
	public static function сДляСравнения($с_Вход)
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
		return strtolower($с_Вход);
		}
	public static function мСобратьФразы($_сВход, $_сБолМал='Нетрог') //'Бол'/'Мал'/'Нетрог'/'МалДиректор'
		{
		$мСлово		=array();
		$мФраза		=array();
		$сСлово		='';
		if(empty($_сВход))
			{
			$мФраза[]='';
			return $мФраза;
			}
		$сВход		=$_сВход.' ';
		$ч1Длинна	=strlen($сВход);
		$ч0Длинна	=($ч1Длинна-1);
    
		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			$сСлово.=$сВход[$ч0Шаг];
	
			if($ч0Шаг!=0&&($сВход[$ч0Шаг]==" "||$сВход[$ч0Шаг]=="."))
				{
				$сСлово		=substr($сСлово,0,-1);
				if(in_array($сСлово, $мСлово))
					{
					//echo'Дубль!'."\n";
					//Дубль
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
						case 'Нетрог':
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
		$мФраза=$мСлово;
		//28 august 2020 Hfic Samin simplified solution. Will be beter next time. 
		//I doo my fast, as fast as possible. Extra fast. Extra thrust. 
		//Trust no one. Dj will save my soul today for vacancies. I hope it will....  :) 
		//Today is the last day. So it will not end without update packege. 
		//Make it good. We too.
		return $мФраза;
		}
	public static function сДоСимвола($_сВход, $с_Символ='?') // Слово
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
	public static function сОтСимвола($_сВход, $с_Символ='?') // Слово
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
	public static function чРосХэш($_сВход) // 
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
	}
class URL
	{
	public static function мУрлРазобратьПоток($_сСтр) 	//Разобрать стрим. Сергею Корякину и его коллеге в Ролексе Вадим Раскумандрину
		{				//и Люсьене Гусевой из Лапси привет.:)
						//Алексу Соловьёву тоже привет и всем девчёнкам колясочницам. Если я ещё раз у вас появлюсь,
						//скорее всего потому, что решил жениться на одной из вас. :)
						//Лучшие коляски, прошедшие краштест и дополнительный краштест в СПБ - это Lapsi.ru
						//Игорю Борисовичу тоже привет. Чекмарёв конкурентам не сдастся. Это все знают.
						//Согластно философии WhiteHat, если я зашёл на сайт и увидел ошибку, 
						//обязательно должен написать об этом.
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
	public static function strGetDomainName()
		{
		$strLang=preg_replace('/(.+)\.([a-zA-Z]{2,7})$/', '$2', $_SERVER['SERVER_NAME']);
		return $strLang;
		}
	public static function strGetServerName()
		{
		$strName=preg_replace('/(http?://)(.+)\.([a-zA-Z]{2,3})$/', '$2', $_SERVER['SERVER_NAME']);
		return $strName;
		}
	}
class CONNECTION
	{
	public static function фCreateListen_lnSock($_сСтр)
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
	}
class INPUT
	{
	public static function strSafeUsers($_strRequest)
/*!*//*+1+*/	{
/*!*//*+2+*/	return str_replace(array('%3C','%3E',"<",">",'о20о','о21о', 'U+02C2', 'U+02C3', 'U+003E', 'U+003C'), "_", $_strRequest);
/*!*//*+3+*/	}
	public static function фЖанрОтСлушателя($мВозможныеЖанры, $_сЖанрОтСлушателя)
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
	public static function strGetRequest()
		{
		$strRequest= strSafeUsers($_SERVER['REQUEST_URI']);
		return $strRequest;
		}
	}
class MANY
	{
	public static function фДубль($_м_оСтанция, $_оСтанция) // ifDoubles - will compare all genres of station and station name. 
		{//If equal - will be listed as different bitrate of the parent station. Default is higher bitrate.
		// Если название и жанры у станций одинаковы, значит станции одинаковы и будут отображаться, 
		//как разные битрейты станции с таким-же названием.
		$ф=FALSE;
		foreach($_м_оСтанция as $оСтанция)
			{
			if(($оСтанция->genre==$_оСтанция->genre)&&($оСтанция->server_name==$_оСтанция->server_name))
				{
				$ф=TRUE;
				_Report("Найден дубль: ".$_оСтанция->genre."/".$_оСтанция->server_name);
				break;
				}
			else
				{
				//$ф=FALSE;
				}
			}
		return $ф;
		}
	public static function фУникальный($мОбработанныеСвойства, $_сТекущееСвойство)
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
			if(trim($сОбработанноеСвойство[0])==trim($сТекущееСвойство[0]))
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
	}
class О2О
	{
	public static function мСобратьO2o($_сВход) // Слово
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
			if($ч0Шаг!=0&&($_сВход[$ч0Шаг]=="_"||$_сВход[$ч0Шаг]=="."))
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
		return $мСлово;
		}
	}
class FLOAT
	{
	public static function intRoundUp($_float)
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
	}
class PARAM
	{
	public static function strParType($_strParName)
		{
		$strParName	=$_strParName;
			   unset($_strParName);
		$strParType	=substr($strParName,0, 3);
		switch($strParType)
			{
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
			}
		return $strParType;
		}
	}
class DIGIT
	{
	public static function strNDigit($_intN, $_str, $strPos="fromBegin", $_strNULLSymbol='_') //suffix/prefix
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
	public static function strNDigitVisible($_intN, $_str, $_strShowFrom='fromEnd')  //fromEnd/FromBegin
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
	public static function strNDigitMainTrace($_float)
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
	public static function strNDigitMicroTrace($_int)
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
	}
?>