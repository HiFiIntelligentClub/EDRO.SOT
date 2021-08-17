<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru

function сТекущееВремяСтемп()
	{
	return round(microtime(true), 4);
	}

function arrAllEventIncomeParametrsFallBack()
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

$this->ч0ВыполненоЧастей++;
$this->_Кон();
?>