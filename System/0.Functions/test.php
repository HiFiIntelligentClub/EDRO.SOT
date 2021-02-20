#!/usr/bin/php
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
require('/home/EDRO.SetOfTools/System/0.Functions/0.strNDigit.php');
$arrJson=
array(
'arrEvent'=>
	array(
	'АнастасияМаксимова'=>
		array(
		'arrEN'	=>
			array(
			'arrAlias'=>
				array(
				'AMaksimova',
				'A.Maksimova',
				'AMaksimovaMusic',
				'A.MaksimovaMusic',
				'AnastasiaMaksimova',
					),
			
		'arrRU'	=>
			array(
			'arrAlias'=>
				array(
				'А.Максимова',
					),
				),
			)
		)
	);
echo strMyJson($arrJson);

/*
function arrAllEventIncomeParametrsFallBack()
	{
	$arrO	=  //[arrAction]['arrDesign']['strEvent']
	array(
		'arrEvent'=>array(
			'/Hfic_Samin.jpg'		=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
			'/АнастасияМаксимова'		=>array('arrEN'	=>array('strAlias'=>'/AMaksimovaMusic',	'strTitle'=>''),
											'arrRU'	=>array(),),
			'/'				=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
			'/search'			=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
			'/getStation'			=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
			'/getListeners'			=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
			'/getNews'			=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
			'/getTest'			=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
			'/ServerOnline'			=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
			'/RedirectFromError'		=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
			'/HiFiIntelligentClub.tar.gz'	=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
			'/HficAssminogZzzuzzZ.mp3'	=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
			'/HficAssminogZzzuzzZ2.mp3'	=>array('arrEN'	=>array(),	'arrRU'	=>array(),),
				),
		'arrDesign'			=>array(),

		'arrReality'			=>array(
			'strName'		=>array('strFallBack'	=>'','int0MaxLength'	=>100,),//
			'strStyle'		=>array('strFallBack'	=>'','int0MaxLength'	=>65,),//
			'strGenre'		=>array('strFallBack'	=>'','int0MaxLength'	=>65,),//
			'strHiFiType'		=>array('strFallBack'	=>'','int0MaxLength'	=>65,),//
			'intBitrate'		=>array('strFallBack'	=>'','int0MaxLength'	=>4,),
			'strCodec'		=>array('strFallBack'	=>'','int0MaxLength'	=>16,),
			'int0Page'		=>array('strFallBack'	=>0, 'int0MaxLength'	=>6,),
			'int1OnPage'		=>array('int1FallBack'	=>1, 'int0MaxLength'	=>3, 'int0MaxValue'	=>40,),
			'int1PlayingStationNum'	=>array('int1FallBack'	=>0, 'int0MaxLength'	=>10,),
			'strPlayingStationStyle'=>array('strFallBack'	=>'','int0MaxLength'	=>65,),
			'strPlayingStationId'	=>array('strFallBack'	=>'','int0MaxLength'	=>150,),
			'strStationID'		=>array('strFallBack'	=>'','int0MaxLength'	=>150,),),
		'arrObjects'		=>array
			('arrEventData'	=>array('arrEN'		=>array('strAlias'	=>false, 'strTitle'	=>'Title',),
						'arrRU'		=>array('strAlias'	=>false,'strTitle'	=>'Заголовок',),),
			'arrEventTestConditions'=>array('arrEventName'	=>array('int0MaxLength'	=>28,),
			'arrEventPage'		=>array('strFindTextToMarkExist' 	=>'HIC',),),
			'arrEventsOnErrors'	=>array('arrEventName'	=>array('strReport'		=>'Event name is too long.',
										'strPriority'		=>'Urgent',
										'strFallBack'		=>'/',),
							'arrEventPage'	=>array('strReport'		=>'Can not open event page: arrEventName',
										'strPriority'		=>'Urgent',
										'strFallBack'		=>'/',),),),
			);
	return $arrO;
	}*/
/*
function arrRestrictAndReportActionAndParametrs($_arrIncome, $_strReplaceName='', $_strReplaceValue='')
	{
	$arrResult['strEvent']		='';
	$arrResult['arrReality']	=array();
	$arrFallBack			=arrAllEventIncomeParametrsFallBack();

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
	$bIzInAllowedActions		=FALSE;

	foreach($arrFallBack['arrEvent'] as $strAllowedActionName=>$arrEventElements)
		{
		/*if(mb_strtolower($arrIncome['strEvent'])==mb_strtolower($strAllowedActionName))
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
		$arrResult['strEvent']	=$strAllowedActionName;*/
	//	}
	/*if(strlen($strAllowedActionName)>$arrFallBack['arrObjects']['arrEventTestConditions']['arrEventName']['int0MaxLength'])
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
		}*//*
	return $arrResult;
	}*/
?>