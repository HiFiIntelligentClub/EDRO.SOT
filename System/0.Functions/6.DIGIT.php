<?php
class DIGIT
	{
	public static function strNDigit($_intN, $_str, $strPos="fromBegin", $_strNULLSymbol='_') //suffix/prefix
		{
		$intN		=$_intN;
			   unset($_intN);
		$str		=$_str;
			   unset($_str);
		$strNULLSymbol	=$_strNULLSymbol;
			   unset($_strNULLSymbol);
		$strAdd='';
		$strOverflowAlert		='=';
		if(strlen($str)>$intN)
			{
			$strOverflowAlert='*';
			}

		for($intI=0;$intI<$intN;$intI++)
			{
			if(!isset($str[$intI]))
				{
				$strAdd.=$strNULLSymbol;
				}
			}
		switch($strPos)
			{
			case 'fromBegin':
				$str=$strOverflowAlert.$strAdd.$str;
			break;
			case 'fromEnd':
				$str=$strOverflowAlert.$str.$strAdd;
			break;
			}
		return $str;
		}
	public static function strNDigitVisible($_intN, $_str, $_strShowFrom='fromEnd')  //fromEnd/FromBegin
		{
		$intN		=$_intN;
			   unset($_intN);
		$str		=$_str;
			   unset($_str);
		$strShowFrom	=$_strShowFrom;
			   unset($_strShowFrom);
		switch($strShowFrom)
			{
			case 'fromBegin':
				$str=substr($str, 0, $intN);
			break;
			case 'fromEnd':
				$str=substr($str, -$intN);
			break;
			}
		return $str;
		}
	public static function strNDigitMainTrace($_float)
		{
		$float=$_float;
		 unset($_float);
		$int=floor($float);
	             unset($float);
		$strNDigit=strNDigit(2, $int, 'fromBegin','0');
		if($int>5)
			{
			$strAlertPrefix='??:';
			}
		elseif($int>=1)
			{
			$strAlertPrefix='_?:';
			}
		else
			{
			$strAlertPrefix='__:';
			}
		$str=$strAlertPrefix.$strNDigit;
		return $str;
		}
	public static function strNDigitMicroTrace($_int)
		{
		$int=$_int;
	       unset($_int);
		$strNDigit=strNDigit(3, $int, 'fromBegin','0');
		if($int>500)
			{
			$strAlertPrefix='??:';
			}
		elseif($int>100)
			{
			$strAlertPrefix='_?:';
			}
		else
			{
			$strAlertPrefix='__:';
			}
		$str=$strAlertPrefix.$strNDigit;
		return $str;
		}
	}
?>