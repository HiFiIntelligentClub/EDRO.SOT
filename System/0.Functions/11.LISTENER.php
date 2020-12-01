<?php
class LISTENER
	{
	public static function _DropTheSessionDust()
		{
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
	public static function мСобратьO2o($_сВход) // Слово
		{
		$мСлово		=array();
		$сСлово		='';
		if(empty($_сВход))
			{
			$мСлово[]='';
			return $мСлово;
			}

		$ч1Длинна	=strlen($_сВход);
		$ч0Длинна	=($ч1Длинна-1);

		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			$сСлово.=$_сВход[$ч0Шаг];
			//echo $ч0Шаг;
			//echo '<br>';
			if($ч0Шаг!=0&&($_сВход[$ч0Шаг]=="_"||$_сВход[$ч0Шаг]=="."))
				{
				$сСлово		=substr($сСлово,0,-1);
				$мСлово[]	=$сСлово;
				$сСлово		='';
				//echo $ч0Шаг;
				//echo '<br>';
				}
			if($ч0Шаг==$ч0Длинна)
				{
				$мСлово[]	=$сСлово;
				}
			}
		return $мСлово;
		}
	}
?>