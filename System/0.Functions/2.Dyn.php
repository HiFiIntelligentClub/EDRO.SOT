<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//http://hifiintelligentclub.com/strArtistName
//    ?strName			=
//    &strStyle			=
//    &strGenre			=trance
//    &strHiFiType		=/HiFi%20beginner
//    &intBitrate		=0
//    &strCodec			=
//    &int0Page			=38
//    &int1OnPage		=1
//    &int0PlayingStationNum	=
//    &strPlayingStationStyle	=
//    &strPlayingStationId	=XBUkAnNcbn9eXFBiQxpQY0RnQnh3VUpRYkQbDTkELAо26оо26о
//    &strStationId		=XBUkAnNcbn9eXFBiQxpQY0RnQnh3VUpRYkQbDTkELAо26оо26о

//$arrr = arrRestrictAndReportActionAndParametrs($_arrIncome=array());
//print_r($arrr);
function bIzCheckMaPhone($_strHTTP_USER_AGENT)
	{
	$bIz=false;
	$strUserAgent=strtolower($_strHTTP_USER_AGENT);
	if(strpos($strUserAgent, 'edro:polimer')!==false)
		{
		$bIz=true;
		}
	return $bIz;
	//return true;
	}
function bIzAndroid($_strHTTP_USER_AGENT)
	{
	$bIz=false;
	$strUserAgent=strtolower($_strHTTP_USER_AGENT);
	if(strpos($strUserAgent, 'android')!==false)
		{
		$bIz=true;
		}
	return $bIz;
	//return true;
	}
function bIzApple($_strHTTP_USER_AGENT)
	{
	$bIz=false;
	$strUserAgent=strtolower($_strHTTP_USER_AGENT);
	if((strpos($strUserAgent, 'ipad')!==false)||(strpos($strUserAgent, 'iphone')!==false)||(strpos($strUserAgent, 'ipod')!==false))
		{
		$bIz=true;
		}
	return $bIz;
	//return true;
	}
function bIzDesktop($мPlatform)
	{
	$bIz=false;
	if(
	!$мPlatform['bIzCheckMaPhone']&&
	!$мPlatform['bIzAndroid']&&
	!$мPlatform['bIzAppleMobile']&&
	!$мPlatform['bIzDesktop']&&
	!$мPlatform['bIzOther']
		)
		{
		$bIz	= true;
		}
	return $bIz;
	}
function arrUserAgent2Platform($_strHTTP_USER_AGENT)
	{
	$мPlatform	=
		array(
		'bIzCheckMaPhone'	=> FALSE,
		'bIzAndroid'		=> FALSE,
		'bIzAppleMobile'	=> FALSE,
		'bIzDesktop'		=> FALSE,
		'bIzOther'		=> FALSE,
		);
	if(bIzCheckMaPhone($_strHTTP_USER_AGENT))
		{
		$мPlatform['bIzCheckMaPhone']	= true;
		}
	elseif(bIzAndroid($_strHTTP_USER_AGENT))
		{
		$мPlatform['bIzAndroid']	= true;
		}
	elseif(bIzApple($_strHTTP_USER_AGENT))
		{
		$мPlatform['bIzAppleMobile']	= true;
		}
	elseif(bIzDesktop($мPlatform))
		{
		$мPlatform['bIzDesktop']	= true;
		}
	else
		{
		_Report('Unknown platform: '.$_strHTTP_USER_AGENT);
		$мPlatform['bIzOther']		= true;
		}
	return $мPlatform;
	}
function сРасширение($_сЗапрос)
	{
	
	}
function strSafeUsers($_strRequest)
	{
	return str_replace(array('%3C','%3E',"<",">",'о20о','о21о', 'U+02C2', 'U+02C3', 'U+003E', 'U+003C'), "_", $_strRequest);
	}
/*!*/function arrGetEvent($rRadio)
/*+4+*/	{//$strRequest= strSafeUsers($_SERVER['REQUEST_URI']);----
	$rRadio 				= stream_socket_accept($rRadio, -1);
	$arrReadRequestFromListenersBrowser	= arrRequest2IndexArray(arrReadRequestFromListenersBrowser($rRadio));
/*+6+*/ return $arrReadRequestFromListenersBrowser;
/*+7+*/	}
function arrReadRequestFromListenersBrowser($_rRadio)
	{
/*!*/	$sListenerRadio		= strSafeUsers(fread($_rRadio, 4096));
	if(!empty($sListenerRadio))
		{
		$arrListenerSetup	= explode("\n", $sListenerRadio	);
		}
	else
		{
		_Report('fread($sListenerRadio, 4096) empty.');
		}
	if(!is_array($arrListenerSetup))
		{
		$arrListenerSetup	= array();
		}
	$arrListenerSetup['rRadio']	= $_rRadio;
	return $arrListenerSetup;
	}
function arrRequest2IndexArray($_arrEvent)
	{
	//$arrEvent['rRadio']='False/Resource';
	//$arrEvent['arr']=
	//
	//
	//
	if(!isset($_arrEvent['rRadio']))
		{
		_Report('No radio is not working!!!');
		return $arrEvent['rRadio']	=FALSE;
		}
	$arrEvent['rRadio']	= $_arrEvent['rRadio'];
			    unset($_arrEvent['rRadio']);
	if(is_array($_arrEvent))
		{
		foreach($_arrEvent as $strListenerEvent)
			{
			if(($strIndex=сНачДоСимвола($strEvent, ' '))!==FALSE)
				{
				$strIndexLength		= strlen($strIndex);

				$strListenerEvent	= CheckMaSubstr($strIndex,'', $strEvent);

				$strListenerParams	= сНачОтСимвола();
				$strListenerAccept	= str_replace( ':', '', $strIndex);

			/*	if($strIndex=="GET"||$strIndex=="POST"||$strIndex=="PUT")
					{
					$arrEvent['strType']		= $strIndex;
					$arrEvent['strTypeLen']		= strlen($strIndex);
					$arrEvent['strProto']		= сКонцДоСимвола($strEvent, ' ');
					$arrEvent['strProtoLen']	= strlen($arrEvent['strProto']);
					strEventAndParams		= substr($strEvent, $arrEvent['strTypeLen'], -($arrEvent['strProtoLen']));
					if(strpos())
					if($strEvent)
						{
						}
					$arrEvent['strEvent']		= substr($strEvent, $arrEvent['strTypeLen'], -($arrEvent['strProtoLen']));
    					$strExt				= сКонцДоСимвола($arrEvent['strEvent'], '.');
					$int1ExtLength			= strlen($strExt);
					$arrEvent['strExt']		= $int1ExtLength>6?FALSE:$strExt;
					///_Report('Unusall position of Event string $arrEvent[strEvent]: '.$strEvent);
					}
				elseif($strIndex=='Host')
					{
					$arrEvent['strHost'] 		= $strEvent;
					}
				elseif($strIndex=='Accept')
					{
					$arr=explode(',' ,trim($strEvent));
					if(is_array($arr))
						{
						}
					else
						{
						$arr	=array();
						}
					$arrEvent['strAccept'] 	= $arr;
					}
				elseif($strIndex=='Connection')
					{
					$arrEvent['strConnection'] 	= $strEvent;
					}
				elseif($strIndex=='User-Agent')
					{
					$arrEvent['strPlatform'] 	= $strEvent;
					$arrEvent['arrPlatform'] 	= arrUserAgent2Platform($arrEvent['strPlatform']);
					}
				elseif($strIndex=='Accept-Language')
					{
					$arrEvent['strAcceptLanguage'] 	= $strEvent;
					}
				elseif($strIndex=='Accept-Encoding')
					{
					$arrEvent['strAcceptEncoding'] 	= $strEvent;
					}
				else
					{
					$arrEvent[$strIndex]	= $strEvent;
					_Report('Unusall position of Event string $arrEvent[strEvent]: '.$strIndex.'/'.$strEvent);
					}*/
				}
			}
		}
	if(!isset($arrEvent['strPlatform']))
		{
		$arrEvent['strPlatform']	= 'BOT';
		}
	else
		{
		_Report('arrEvent[strUserAgent]= BOT');
		}
	if(!isset($arrEvent['strHost']))
		{
		$arrEvent['strHost']		= 'BOT';
		}
	else
		{
		_Report('[arrEvent][strHost]= BOT');
		}
	if(!isset($arrEvent['Accept-Language']))
		{
		$arrEvent['Accept-Language']			= 'BOT';
		}
	else
		{
		_Report('[Accept-Language]= BOT');
		}
	if(!isset($arrEvent['Accept-Encoding']))
		{
		$arrEvent['Accept-Encoding']			= 'BOT';
		}
	else
		{
		_Report('[Accept-Encoding]= BOT');
		}
	return $arrEvent;
	}
function arrGetEventSetter($rRadio)
/*!0!*/	{
	
/*!1!*/	$arrEvent				= array();
///+	$arrEvent['rRadio'] 			= '';
/*!2!*/	$arrEvent['strEvent']			= '';
/*!3!*/	$arrEvent['arrReality']			= array();
/*!4!*/	$arrEvent['arrListener'] 		= array();


	
/*!5!*/	$arrListener		= arrGetEvent($rRadio);
	//print_r($arrListener);
/*!6*/	echo $strEvent			= $arrListener['strEvent'];
	

/*!7*/	$arrEvent			= arrRestrictAndReportEventsAndParametrs(
					array(
						'strEvent'	=>urldecode($strEvent), //Why it is encoded? Shall find
						'arrReality'	=>arrEventParams2Array($strEvent),
						)
					);
	print_r($arrEvent);
	//$arrEvent['arrListener']	= $arrEvent['arrListener'];
	//echo '<pre>';
	//print_r($arrEvent);
	//echo '</pre>';
	//exit;
/*14!*/return $arrEvent;
/*15!*/	}
function arrEventParams2Array($_strQuery)
	{
	$arrResult	=array();
	$strQuery	=$_strQuery;
		   unset($_strQuery);

	$arrQuery=arrPrepare($strQuery);
	               unset($strQuery);

	foreach($arrQuery as $strQuery)
		{
		$arrBeforeValidate		= arrPrepare2($strQuery);
		$strParamName			= $arrBeforeValidate[0];
		$strParamValue			= $arrBeforeValidate[1];
		$arrResult[$strParamName]	= urldecode(urldecode(сПреобразовать($strParamValue, "вСтроку")));
		}
	return $arrResult;
	}

function arrRestrictAndReportEventsAndParametrs($_arrIncome, $_strReplaceName='', $_strReplaceValue='')
	{
	$arrResult['strEvent']		= '';
	$arrResult['arrReality']	= array();
	$arrFallBack			= arrAllEventIncomeParametrsFallBack();
	//$arrFallBack['arrFallBack']

	if(is_array($_arrIncome))
		{
		$arrIncome		= $_arrIncome;
				   unset($_arrIncome);
		}
	else
		{
		$arrIncome		= array();
		}
	$strReplaceName			= $_strReplaceName;
				    unset($_strReplaceName);
	$strReplaceValue		= $_strReplaceValue;
				    unset($_strReplaceValue);
	if(is_file('/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/'.strDataBase().'/Events/'.сПреобразовать($arrIncome['strEvent'], "вКоманду").'/run.php'))
		{
		$arrResult['strEvent']		= $arrIncome['strEvent'];
		}
	else
		{
		_Report('Событие не сществует в реальности!: '.$arrResult['strEvent']);
		$arrResult['strEvent']		= '/';
		}
	foreach($arrFallBack['arrReality'] as $strFallBackName=>$arrFallBackParams)
		{
		$arrResult['arrReality'][$strFallBackName]	=$arrFallBackParams['int0FallBack']; //attach strFaallBack(defaults)

		foreach($arrIncome['arrReality'] as $strIncomeName=>$strIncomeValue)
			{
			if($strFallBackName==$strIncomeName)
				{
				if(isset($arrFallBackParams['int0MaxValue'])&&($strIncomeValue>$arrFallBackParams['int0MaxValue']))
					{
												_Report($strIncomeName.'>'.$arrFallBackParams['int0MaxValue'].': '.$strIncomeValue);
					$strIncomeValue						= $arrFallBackParams['int0MaxValue'];
					$arrResult['arrReality'][$strIncomeName]		= $strIncomeValue;
	    				}
				if(isset($arrFallBackParams['int0MaxLength'])&&(strlen($strIncomeValue)>$arrFallBackParams['int0MaxLength']))
					{
												_Report($arrIncome['arrReality'][$strIncomeName].'length>'.$arrFallBackParams['int0MaxLength']);
					$strIncomeValue						= substr($arrIncome['arrReality'][$strIncomeName],0, $arrFallBackParams['int0MaxLength']);
					$arrResult['arrReality'][$strIncomeName]		= $strIncomeValue;
					}
				else
					{
					$arrResult['arrReality'][$strIncomeName]		= $strIncomeValue;
					}
				}
			}
		}
	//print_r($arrResult);
	//exit;
	return $arrResult;
	}
function arrPrepare($_strQuery, $_arrDataTypes=array())
	{
	$arrQuery	= array();
	$strQuery	= $_strQuery;
	    unset($_strQuery);
	
	if(strpos($strQuery, '&'))
		{
		$arrQuery	= explode('&', $strQuery);
		}
	elseif(strpos($strQuery, '='))
		{
		$arrQuery[0]	= $strQuery;
		//$arrQuery=explode('=', $strQuery);
		}
	else
		{
		}
	return $arrQuery;
	}
function arrPrepare2($_strQuery, $_arrDataTypes=array())
	{
	$arrQuery	= array();
	$strQuery	= $_strQuery;
	    unset($_strQuery);
	if(strpos($strQuery, '='))
		{
		$arrQuery	= explode('=', $strQuery);
		}
	else
		{
		}
	return $arrQuery;
	}
?>