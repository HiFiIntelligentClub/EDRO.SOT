<?php
class INPUT
	{
	public static function strSafeUsers($_strRequest)
/*!*//*+1+*/	{
/*!*//*+2+*/	return str_replace(array('%3C','%3E',"<",">",'о20о','о21о', 'U+02C2', 'U+02C3', 'U+003E', 'U+003C'), "_", $_strRequest);
/*!*//*+3+*/	}
	public static function фЖанрОтСлушателя($мВозможныеЖанры, $_сЖанрОтСлушателя)
		{
		$ф=TRUE;
		if(empty($мВозможныеЖанры))
			{
			return TRUE;
			}
		//print_r($мОбработанныеСвойства);
		$сЖанрОтСлушателя	=$_сЖанрОтСлушателя;
				   unset($_сЖанрОтСлушателя);
		foreach($мВозможныеЖанры as $сВозможныйЖанр)
			{
			if($сВозможныйЖанр==$сЖанрОтСлушателя)
				{
				//echo'$сОбработанноеСвойство:';
				//echo$сОбработанноеСвойство."\n";
				//echo'$сТекущееСвойство:';
				//echo$сТекущееСвойство."\n"."\n";
				//echo $сОбработанноеСвойство."\n";
				//echo $сТекущееСвойство."\n"."\n";
				return FALSE;
				}
			else
				{
				$ф=TRUE;
				}
			}
		return $ф;
		}
	public static function strGetRequest()
		{
		$strRequest= strSafeUsers($_SERVER['REQUEST_URI']);
		return $strRequest;
		}
	}


?>