<?php
function CheckMaSubstr($_сВход ,$int0Left, $int0Right)   //4 PHP brothers, it's very important to me, to use it with str_replace in common style. Thx. PHP is the best language. CheckMa CPU;
	{
	$_сВход		= substr($_сВход, $int0Left, $int0Right);
	return $_сВход;
	}

function сНачОтСимвола($_сВход, $_сОт='?', $_nu1BeginOffset=0, $_nu1сОтPlusOffset=1) // Слово  SAME FUNCTIONS 2
	{
	if(empty($_сВход)||(strpos($_сВход, $_сОт)===FALSE)){return FALSE;}
	$сВход		= substr($_сВход, $_nu1BeginOffset);
	$сВход		= (string)$сВход;
	
	$фСимволНайден	= false;
	//echo $с_Символ."\n";
	$ч1Длинна	= strlen($сВход);
	$ч0Длинна	= ($ч1Длинна-1);
	$сСлово		= FALSE;
	for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
	    {
	    //echo $сВход[$ч0Шаг]."\n";
	    if($сВход[$ч0Шаг]==$_сОт)
		{
		$фСимволНайден	=true;
		}
	    if($фСимволНайден)
		{
		$сСлово		.=$сВход[$ч0Шаг];
		}
	    }
	$сСлово	=substr($сСлово, $_nu1сОтPlusOffset);
	return $сСлово;
	}
function сНачДоСимвола($_сВход, $_сДо='?', $_nu1BeginOffset=0, $_nu1сОтPlusOffset=0) // Слово  SAME FUNCTIONS
	{
	if(empty($_сВход)||(strpos($_сВход, $_сДо)===FALSE)){return FALSE;}
	$сВход		= substr($_сВход, $_nu1сОтPlusOffset);
	$сВход		= (string)$сВход;
	$ч1Длинна	= strlen($сВход);
	$ч0Длинна	= ($ч1Длинна-1);
	$сСлово		= FALSE;
	for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
	    {
	    $сСлово.=$сВход[$ч0Шаг];
	    if($ч0Шаг!=0&&($сВход[$ч0Шаг]==$_сДо))
		{
		$сСлово		=substr($сСлово,0,-1);
		return $сСлово;
		}
	    else
		{
		}
	    }
	return $сСлово;
	}

function сНачОтДоСимвола($_сВход, $_сОт, $_сДо, $_nu1BeginOffset=0, $_nu1сОтPlusOffset=1)
	{
	if(empty($_сВход)||(strpos($_сВход, $_сОт)&&(strpos($_сВход, $_сДо)===FALSE))){return FALSE;}
	$сВход			= (string)$_сВход;
	$сОтДо			= FALSE;
	$сОт			= $_сОт;
	$сДо			= $_сДо;
	$nu1BeginOffset		= $_nu1BeginOffset;
	$сПослеСмещ		= substr($сКонецСтр, $nu1BeginOffset);
	if(strpos($сПослеСмещ, $сДо)===FALSE)
		{
		$сОтДо		=FALSE;
		}
	else
		{
		$сКонецСтр	= сНачОтСимвола($сПослеСмещ, $сОт);
		$сОтДо		= сНачДоСимвола($сКонецСтр, $сДо);
		$сОтДо		= substr($сОтДо, $_nu1сОтPlusOffset);
		}
	return $сОтДо;
	}
function сРеверс($_сВход)
	{
	if(empty($_сВход)){return '';}
	$сВход		= (string)$_сВход;
	$сРеверс	= '';
	$ч1Длинна	= strlen($сВход);
	$ч0Длинна	= ($ч1Длинна-1);
	$ч0Позиция	= $ч0Длинна;
	for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
	    {
	    $сРеверс	.=$сВход[$ч0Позиция];
	    $ч0Позиция--;
	    }
	return $сРеверс;
	}
function сКонцДоСимвола($_сВход, $_сДо)
	{
	$сВход	= сРеверс($_сВход);
	$сВход	= сНачДоСимвола($сВход, $_сДо);
	$сВход	= сРеверс($сВход);
	return 	$сВход;
	}
function сКонцОтДоСимвола($_сВход, $_сОт, $_сДо, $_nu1BeginOffset=1)
	{
	$сВход	= сРеверс($_сВход);
	$сВход	= сНачОтДоСимвола($сВход, $_сОт, $_сДо, $_nu1BeginOffset);
	$сВход	= сРеверс($сВход);
	return 	$сВход;
	}
?>