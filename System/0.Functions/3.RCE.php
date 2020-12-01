<?php
class	RCE
	{
	public static function strParType($_strParName)
		{
		$strParName	=$_strParName;
			   unset($_strParName);
		$strParType	=substr($strParName,0, 3);
		switch($strParType)
			{
			case 'str': //String
				$strParType='str';
			break;
			case 'int': //Integer
				$strParType='int';
			break;
			case 'flo': //FLoat
				$strParType='flo';
			break;
			case 'arr': //Array
				$strParType='arr';
			break;
			case 'bIz': //Boolean
				$strParType='bIz';
			break;
			case 'obj': //Object
				$strParType='obj';
			break;
			case 'tmt': //Type my type
				$strParType='tmt';
			break;
			}
		return $strParType;
		}
	}
?>