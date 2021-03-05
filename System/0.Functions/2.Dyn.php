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
function strSafeUsers($_strRequest)
	{
	return str_replace(array('%3C','%3E',"<",">",'о20о','о21о', 'U+02C2', 'U+02C3', 'U+003E', 'U+003C'), "_", $_strRequest);
	}
/*!*/function arrGetRequest($rRadio)
/*+4+*/	{//$strRequest= strSafeUsers($_SERVER['REQUEST_URI']);----
	$rRadio 				= stream_socket_accept($rRadio, -1);
	$arrReadRequestFromListenersBrowser	= arrRequest2IndexArray(arrReadRequestFromListenersBrowser($rRadio));
	//strSafeUsers();
	//print_r($arrReadRequestFromListenersBrowser);
	//exit;
/*+6+*/ return $arrReadRequestFromListenersBrowser;
/*+7+*/	}
function arrReadRequestFromListenersBrowser($_rRadio)
	{
	$sListenerRadio		=strSafeUsers(fread($_rRadio, 4096));
	if(!empty($sListenerRadio))
		{
		$arrListenerSetup	=explode("\n", $sListenerRadio	);
		}
	else
		{
		_Report('fread($sListenerRadio, 512) empty.');
		}
	if(!is_array($arrListenerSetup))
		{
		$arrListenerSetup	=array();
		}
	return $arrListenerSetup;
	}
function arrRequest2IndexArray($_arrRequest)
	{
	if(is_array($_arrRequest))
		{
		$int0X=0;
		foreach($_arrRequest as $strRequest)
			{
			if($int0X==0)
				{
				if(strpos($strRequest, "GET")===0||strpos($strRequest, "POST")===0||strpos($strRequest, "PUT")===0)
					{
					$arrRequest['arrRequest']['strMethod']		= сНачДоСимвола($strRequest, ' ');
					$arrRequest['arrRequest']['strMethodLen']	= strlen($arrRequest['arrRequest']['strMethod']);
					$arrRequest['arrRequest']['strProto']		= сКонцДоСимвола($strRequest, ' ');
					$arrRequest['arrRequest']['strProtoLen']	= strlen($arrRequest['arrRequest']['strProto']);
					$arrRequest['strRequest']			= substr($strRequest, $arrRequest['arrRequest']['strMethodLen'], -($arrRequest['arrRequest']['strProtoLen']));
					}
				else
					{
					_Report('Unusall position of request string $arrRequest[strRequest]: '.$strRequest);
					}
				}
			else
				{
				$arrIndex			= explode(":" , $strRequest);
				}
			if(isset($arrIndex[0])&&isset($arrIndex[1]))
				{
				$arrRequest[$arrIndex[0]]	= $arrIndex[1];
				}
			//elseif(isset($arrIndex[0])&&!isset($arrIndex[1]))
			//	{
			//	$arrRequest['strRequest']	= $arrIndex[0];
			//	}
			else
				{
				}
			$int0X++;
			}
		}
	if(!isset($arrRequest['User-Agent']))
		{
		$arrRequest['User-Agent']	='BOT';
		}
	if(!isset($arrRequest['Host']))
		{
		$arrRequest['Host']		='BOT';
		}
	if(!isset($arrRequest['Accept-Language']))
		{
		$arrRequest['Accept-Language']	='BOT';
		}
	if(!isset($arrRequest['Accept-Encoding']))
		{
		$arrRequest['Accept-Encoding']	='BOT';
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
/*!6*/	$strRequest			= str_replace($arrRequest['arrListener']['strRequest'], 'HTTP/1.1', '');

/*!7*/	$arrEvent			= arrRestrictAndReportEventsAndParametrs(
					array(
						'strEvent'	=>urldecode(сДоСимвола($strRequest, '?')), //Why it is encoded? Shall find
						'arrReality'	=>arrEventParams2Array(substr(сОтСимвола($strRequest, '?'),1)),
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
		$arrBeforeValidate		=arrPrepare2($strQuery);
		$strParamName			=$arrBeforeValidate[0];
		$strParamValue			=$arrBeforeValidate[1];
		$arrResult[$strParamName]	=urldecode(urldecode(сПреобразовать($strParamValue, "вСтроку")));
		}

	return $arrResult;
	}

function arrRestrictAndReportEventsAndParametrs($_arrIncome, $_strReplaceName='', $_strReplaceValue='')
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
	if(is_file('/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/'.strDataBase().'/Events/'.сПреобразовать($arrIncome['strEvent'], "вКоманду").'/run.php'))
		{
		$arrResult['strEvent']		=$arrIncome['strEvent'];
		}
	else
		{
		$arrResult['strEvent']		='/';
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
					$strIncomeValue						=$arrFallBackParams['int0MaxValue'];
					$arrResult['arrReality'][$strIncomeName]		=$strIncomeValue;
	    				}
				if(isset($arrFallBackParams['int0MaxLength'])&&(strlen($strIncomeValue)>$arrFallBackParams['int0MaxLength']))
					{
												_Report($arrIncome['arrReality'][$strIncomeName].'length>'.$arrFallBackParams['int0MaxLength']);
					$strIncomeValue						=substr($arrIncome['arrReality'][$strIncomeName],0, $arrFallBackParams['int0MaxLength']);
					$arrResult['arrReality'][$strIncomeName]		=$strIncomeValue;
					}
				else
					{
					$arrResult['arrReality'][$strIncomeName]		=$strIncomeValue;
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
	}
?>