<?php
class CMD
	//сПреобразовать($_сСтрока, $_сНаправление="вСтроку") //:вСтроку/вКоманду
	//rmLb($_str)
	//bIzEvent($_strEvent, $_strRequest)
	//arrEventLink($_arrParams, $_strGroove, $_strGrooveData='', $_bIzClearName=false, $strPage=0)
	//strQuery($_strEvent, $_strRequest)
	//сКодировать($_сСтрокаДляКодирования, $_сДействие='к', $_сКлючь="HiFiIntelligentClub") //E or  /d
	//strEncode2($_str)
	//arrGetEventSetter()
	//arrEventParams2Array($_strQuery)
	//arrRestrictAndReportActionAndParametrs($_arrIncome, $_strReplaceName='', $_strReplaceValue='')
	//arrPrepare($_strQuery, $_arrDataTypes=array())
	//arrPrepare2($_strQuery, $_arrDataTypes=array())
	//strArrayRec2JS($_arrParams, $_strLayerName='', $bIzFormat=false, $strFormatLR='')
	//strArray2JS($_arrParams, $_strArrName='')
	//_DropTheSessionDust()
	//strGetDefaultLanguage()
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
?>