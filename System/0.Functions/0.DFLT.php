<?php
class DFLT //Defaults
	{
	public static function сКлючь() 
		{
		return '4aPrIsAForaPr';
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
?>