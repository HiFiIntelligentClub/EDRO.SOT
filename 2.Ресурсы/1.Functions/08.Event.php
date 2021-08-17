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
function arrEventLink($_arrReality, $_strGroove, $_strGrooveData='', $_bIzClearName=false, $strPage=0)
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
function strEventLink($arr)
	{
	return ' '.$arr['strHref'].' '.$arr['strOnClick'].' ';
	}
    //
    //	Управляющий сигнал
    //
function strQuery($_strEvent, $_strRequest)
	{
	$strEvent=$_strEvent;
	    unset($_strEvent);
	//$strEvent=substr($_strEvent,1);
	
	$intEventLen=strlen($strEvent);
	$strQurey=substr($_strRequest,$intEventLen);
	return substr($strQurey,1);
	}

function arrRequest2IndexArray($_arrEvent)
	{
	$arrEvent['arrListener']['arrRequest']['strEvent']	= '';
	$arrEvent['arrListener']['arrRequest']['strProto']	= '';
	$arrEvent['arrListener']['arrRequest']['strEventName']	= '';
	$arrEvent['arrListener']['arrRequest']['strEvenParams']	= '';
	$arrEvent['arrListener']['arrRequest']['strEvenExt']	= '';
	$arrEvent['arrListener']['arrPlatform'] 		= '';
	$arrEvent['arrListener']['strHost']			= '';
	$arrEvent['arrListener']['strReferer']			= '';
	$arrEvent['arrListener']['arrAccept']			= '';
	$arrEvent['arrListener']['strAcceptLanguage']		= '';
	$arrEvent['arrListener']['strAcceptEncoding']		= '';
	$arrEvent['arrListener']['strConnection']		= '';
	$arrEvent['arrListener']['strPragma']			= '';
	$arrEvent['arrListener']['strCacheControl']		= '';
	$arrEvent['arrListener']['strUpgradeInsequreRequests']	= '';

	foreach($_arrEvent as $strListenerReality)
		{
		if(($strListenerRealityName=сНачДоСимвола($strListenerReality, ' '))!==FALSE)
			{
			$strListenerRealityName		= str_replace(':' ,'' ,$strListenerRealityName);
			if($strListenerRealityName=="GET"||$strListenerRealityName=="POST")//||$strListenerRealityName=="PUT"
				{
				
				$arrEvent['arrListener']['arrRequest']['strProto']		= сКонцДоСимвола($strListenerReality, ' ');
				$arrEvent['arrListener']['arrRequest']['strEvent']		= trim(CheckMaSubstr($strListenerReality , strlen($strListenerRealityName),  -strlen($arrEvent['arrListener']['arrRequest']['strProto'])));
				$arrEvent['arrListener']['arrRequest']['strEventName']		= сНачДоСимвола($arrEvent['arrListener']['arrRequest']['strEvent'], "?");
				$arrEvent['arrListener']['arrRequest']['strEvenParams']		= сНачОтСимвола($arrEvent['arrListener']['arrRequest']['strEvent'], "?", 0, 1);
				$arrEvent['arrListener']['arrRequest']['arrReality']		= arrEventParams2Array($arrEvent['arrListener']['arrRequest']['strEvenParams']);
				$arrEvent['arrListener']['arrRequest']['strEvenExt']		= сКонцДоСимвола($arrEvent['arrListener']['arrRequest']['strEventName'], '.');
				}
			elseif($strListenerRealityName=='Host')
				{
				$arrEvent['arrListener']['strHost'] 		= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='Accept')
				{
				$arr=explode(',' ,trim(сНачОтСимвола($strListenerReality, ":", 0, 1)));
				if(is_array($arr))
					{
					}
				else
					{
					$arr	=array();
					}
				$arrEvent['arrListener']['arrAccept'] 		= $arr;
				}
			elseif($strListenerRealityName=='Connection')
				{
				$arrEvent['arrListener']['strConnection'] 			= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='User-Agent')
				{
				$arrEvent['arrListener']['strUserAgent'] 			= сНачОтСимвола($strListenerReality, ":", 0, 1);
				$arrEvent['arrListener']['arrPlatform'] 			= arrUserAgent2Platform($arrEvent['arrListener']['strUserAgent']);
				}
			elseif($strListenerRealityName=='Accept-Language')
				{
				$arrEvent['arrListener']['strAcceptLanguage'] 			= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='Accept-Encoding')
				{
				$arrEvent['arrListener']['strAcceptEncoding'] 			= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='Cache-Control')
				{
				$arrEvent['arrListener']['strCacheControl'] 			= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='Pragma')
				{
				$arrEvent['arrListener']['strPragma'] 				= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='Referer')
				{
				$arrEvent['arrListener']['strReferer'] 				= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}
			elseif($strListenerRealityName=='Upgrade-Inseсure-Requests')
				{
				$arrEvent['arrListener']['strUpgradeInseсureRequests'] 		= сНачОтСимвола($strListenerReality, ":", 0, 1);
				}

			else
				{
				$arrEvent['arrListener'][$strListenerRealityName]		= сНачОтСимвола($strListenerReality, ":", 0, 1);
				фОтчёт('Unusall position of Event string $arrEvent[arrListener][strEvent]: '.$strListenerRealityName.'/'.сНачОтСимвола($strListenerReality, ":", 0, 1));
				}
			}
		}
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
		$arrBeforeValidate		= arrPrepare2($strQuery);
		$strParamName			= $arrBeforeValidate[0];
		$strParamValue			= $arrBeforeValidate[1];
		$arrResult[$strParamName]	= urldecode(urldecode(сПреобразовать($strParamValue, "вСтроку")));
		}
	$arrResult	= arrRestrictAndReportEventsAndParametrs($arrResult);
	return $arrResult;
	}


function strCheckEvent($strEvent)
	{
	if(is_file('/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/'.strDataBase.'/Events/'.сПреобразовать($strEvent, "вКоманду").'/run.php'))
		{
		$strEvent		= $strEvent;
		}
	else
		{
		фОшибка('Событие не сществует в реальности!: '.$strEvent);
		$strEvent		= '/';
		}
	return $strEvent;
	}

function arrRestrictAndReportEventsAndParametrs($_arrIncome, $_strReplaceName='', $_strReplaceValue='')
	{
	$arrResult['strEvent']		= '';
	$arrResult['arrReality']	= array();
	$arrFallBack			= arrAllEventIncomeParametrsFallBack();
	//$arrFallBack['arrFallBack']

	if(is_array($_arrIncome))
		{
		$arrIncome['arrReality']	= $_arrIncome;
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
	foreach($arrFallBack['arrReality'] as $strFallBackName=>$arrFallBackParams)
		{
		$arrResult['arrReality'][$strFallBackName]	=$arrFallBackParams['int0FallBack']; //attach strFaallBack(defaults)

		foreach($arrIncome['arrReality'] as $strIncomeName=>$strIncomeValue)
			{
			if($strFallBackName==$strIncomeName)
				{
				if(isset($arrFallBackParams['int0MaxValue'])&&($strIncomeValue>$arrFallBackParams['int0MaxValue']))
					{
												фОшибка($strIncomeName.'>'.$arrFallBackParams['int0MaxValue'].': '.$strIncomeValue);
					$strIncomeValue						= $arrFallBackParams['int0MaxValue'];
					$arrResult['arrReality'][$strIncomeName]		= $strIncomeValue;
	    				}
				if(isset($arrFallBackParams['int0MaxLength'])&&(strlen($strIncomeValue)>$arrFallBackParams['int0MaxLength']))
					{
												фОшибка($arrIncome['arrReality'][$strIncomeName].'length>'.$arrFallBackParams['int0MaxLength']);
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
	return $arrResult['arrReality'];
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
$this->ч0ВыполненоЧастей++;
$this->_Кон();
?>