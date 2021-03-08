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
/*!*/function arrGetRequest($rRadio)
/*+4+*/	{//$strRequest= strSafeUsers($_SERVER['REQUEST_URI']);----
	$rRadio 				= stream_socket_accept($rRadio, -1);
	$arrReadRequestFromListenersBrowser	= arrRequest2IndexArray(arrReadRequestFromListenersBrowser($rRadio));
/*+6+*/ return $arrReadRequestFromListenersBrowser;
/*+7+*/	}
function arrReadRequestFromListenersBrowser($_rRadio)
	{
/*!*/	$sListenerRadio		=strSafeUsers(fread($_rRadio, 4096));
	if(!empty($sListenerRadio))
		{
		$arrListenerSetup	= explode("\n", $sListenerRadio	);
		}
	else
		{
		_Report('fread($sListenerRadio, 512) empty.');
		}
	if(!is_array($arrListenerSetup))
		{
		$arrListenerSetup	= array();
		}
	$arrListenerSetup['rRadio']	= $_rRadio;
	return $arrListenerSetup;
	}
function arrRequest2IndexArray($_arrRequest)
	{
	if(is_array($_arrRequest))
		{
		foreach($_arrRequest as $strI=>$strRequest)
			{
			if($strI=='rRadio')
				{
				$arrRequest['arrRequest']['rRadio']	= $_arrRequest['rRadio'];
				continue;
				}
			if(сНачДоСимвола($strRequest, ' ')====FALSE)
				{
				$arrIndex	= explode(":" , $strRequest);
				if(strpos($strRequest, "GET")===0||strpos($strRequest, "POST")===0||strpos($strRequest, "PUT")===0)
					{
					$arrRequest['arrRequest']['strMethod']		= сНачДоСимвола($strRequest, ' ');
					$arrRequest['arrRequest']['strMethodLen']	= strlen($arrRequest['arrRequest']['strMethod']);
					$arrRequest['arrRequest']['strProto']		= сКонцДоСимвола($strRequest, ' ');
					$arrRequest['arrRequest']['strProtoLen']	= strlen($arrRequest['arrRequest']['strProto']);
					if($strRequest)
						{
						}
					$arrRequest['arrRequest']['strRequest']		= substr($strRequest, $arrRequest['arrRequest']['strMethodLen'], -($arrRequest['arrRequest']['strProtoLen']));
					$strExt						= сКонцДоСимвола($arrRequest['arrRequest']['strRequest'], '.');
					$int1ExtLength					= strlen($strExt);
					$arrRequest['arrRequest']['strExt']		= ($int1ExtLength>6)?FALSE:$strExt;
					}
				else
					{
					///_Report('Unusall position of request string $arrRequest[strRequest]: '.$strRequest);
					if(isset($arrIndex[0])&&isset($arrIndex[1]))
						{	
						if($arrIndex[0]=='Host')
							{
							$arrRequest['arrRequest']['strHost'] 		= $arrIndex[1];
							}
						elseif($arrIndex[0]=='Accept')
							{
							$arr=explode(',' ,trim($arrIndex[1]));
							if(is_array($arr))
								{
								}
							else
								{
								$arr	=array();
								}
							$arrRequest['arrRequest']['strAccept'] 	= $arr;
							}
						elseif($arrIndex[0]=='Connection')
							{
							$arrRequest['arrRequest']['strConnection'] 	= $arrIndex[1];
							}
						elseif($arrIndex[0]=='User-Agent')
							{
							$arrRequest['arrRequest']['strUserAgent'] 	= $arrIndex[1];
							$arrRequest['arrRequest']['arrPlatform'] 	= arrUserAgent2Platform($arrRequest['arrRequest']['strUserAgent']);
							}
						elseif($arrIndex[0]=='Accept-Language')
							{
							$arrRequest['arrRequest']['strAcceptLanguage'] 	= $arrIndex[1];
							}
						elseif($arrIndex[0]=='Accept-Encoding')
							{
							$arrRequest['arrRequest']['strAcceptEncoding'] 	= $arrIndex[1];
							}
						else
							{
							$arrRequest[$arrIndex[0]]	= $arrIndex[1];
							_Report('Unusall position of request string $arrRequest[strRequest]: '.$strRequest);
							}//Accept-Encoding
						}
					}
				}
			}
		}
	if(!isset($arrRequest['arrRequest']['strUserAgent']))
		{
		$arrRequest['arrRequest']['strUserAgent']	= 'BOT';
		}
	else
		{
		_Report('[arrRequest][strUserAgent]= BOT');
		}
	if(!isset($arrRequest['arrRequest']['strHost']))
		{
		$arrRequest['arrRequest']['strHost']		= 'BOT';
		}
	else
		{
		_Report('[arrRequest][strHost]= BOT');
		}
	if(!isset($arrRequest['Accept-Language']))
		{
		$arrRequest['Accept-Language']			= 'BOT';
		}
	else
		{
		_Report('[Accept-Language]= BOT');
		}
	if(!isset($arrRequest['Accept-Encoding']))
		{
		$arrRequest['Accept-Encoding']			= 'BOT';
		}
	else
		{
		_Report('[Accept-Encoding]= BOT');
		}
	return $arrRequest;
	}
function arrGetEventSetter($rRadio)
/*!0!*/	{
	
/*!1!*/	$arrEvent				= array();
///+	$arrEvent['rRadio'] 			= '';
/*!2!*/	$arrEvent['strEvent']			= '';
/*!3!*/	$arrEvent['arrReality']			= array();
/*!4!*/	$arrEvent['arrListener'] = array();


	
/*!5!*/	$arrRequest['arrListener']	= arrGetRequest($rRadio);

/*!6*/	$strRequest			= $arrRequest['arrListener']['arrRequest']['strRequest'];
	print_r($arrRequest);
	exit;

/*!7*/	$arrEvent			= arrRestrictAndReportEventsAndParametrs(
					array(
						'strEvent'	=>urldecode(сНачДоСимвола($strRequest, '?')), //Why it is encoded? Shall find
						'arrReality'	=>arrEventParams2Array(сНачОтСимвола($strRequest, '?', 0, 1)),
						)
					);
	$arrEvent['arrListener']	= $arrRequest['arrListener'];
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