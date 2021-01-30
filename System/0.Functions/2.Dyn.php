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
/*!*/function strGetRequest()
/*!*//*+4+*/	{
/*!*//*+5+*/	$strRequest= strSafeUsers($_SERVER['REQUEST_URI']);
/*+6+*/	return $strRequest;
/*!*//*+7+*/	}

function arrGetEventSetter()
/*!0!*/	{
/*!1!*/	$arrEvent		=array();
/*!2!*/	$arrEvent['strEvent']	='';
/*!3!*/	$arrEvent['arrReality']	=array();
/*!4!*/
/*!5!*/	$strRequest		=strGetRequest();
/*13+*/	$arrEvent		=arrRestrictAndReportActionAndParametrs(
					array(
						'strEvent'	=>urldecode(сДоСимвола($strRequest, '?')), //Why it is encoded? Shall find
						'arrReality'	=>arrEventParams2Array(substr(сОтСимвола($strRequest, '?'),1)),
					)
				);
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

function arrRestrictAndReportActionAndParametrs($_arrIncome, $_strReplaceName='', $_strReplaceValue='')
	{
	$arrResult['strEvent']		='';
	$arrResult['arrReality']	=array();
	$arrFallBack			=arrAllEventIncomeParametrsFallBack();
	$arrFallBack['arrFallBack']
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
	
	if(is_file('/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub/Events/'.сПреобразовать($arrIncome['strEvent'], "вКоманду").'/run.php'))
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
function _DropTheSessionDust()
	{
	//session_start();
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
?>