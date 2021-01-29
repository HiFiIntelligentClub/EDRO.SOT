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
function strGetDomainLang()
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
	/*	
		array(
		'arrEvent'=>
			array(
			'/АнастасияМаксимова'=>
				array(
				'arrEN'=>
					array(
					'strAlias'		=>'/AMaksimovaMusic',
					'strTitle'		=>'',
					),
				'arrRU'=>
					array(
					),
				),
			),
		'arrDesign'		=>array(),
		'arrReality'=>
			array(
			'strName'	=>
				array(
				'strFallBack'	=>'',
				'int0MaxLength'	=>100,
				),//
			'strStyle'	=>
				array(
				'strFallBack'	=>'',
				'int0MaxLength'	=>65,
				),//
			)
		'arrObjects'=>
			array(
			'arrEventData'=>
				array(
				'arrEN'=>
					array(
					'strAlias'		=>false,
					'strTitle'		=>'Title',
					),
				'arrRU'=>
					array(
					'strAlias'		=>false,
					'strTitle'		=>'Заголовок',
					),
				),
			'arrEventTestConditions'=>
				array(
					'arrEventName'=>
						array(
						'int0MaxLength'			=>28,
						),
					'arrEventPage'
						array(
						'strFindTextToMarkExist' 	=>'HIC',
						),
					
				),
			'arrEventsOnErrors'=>
				array(
				'arrEventName'		=>
					array(
					'strFallBack'			=>'/',
					'strReport'			=>'EventName is too long',
					'strPriority'			=>'Urgent',
					),
				'arrEventPage'		=>
					array(
					'strReport'			=>'Can not open event page: arrEventName',
					'strPriority'			=>'Urgent',
					),
				),
			),
	*/
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