<?php
class MANY
	{
	public static function фДубль($_м_оСтанция, $_оСтанция) // ifDoubles - will compare all genres of station and station name. 
		{//If equal - will be listed as different bitrate of the parent station. Default is higher bitrate.
		// Если название и жанры у станций одинаковы, значит станции одинаковы и будут отображаться, 
		//как разные битрейты станции с таким-же названием.
		$ф=FALSE;
		foreach($_м_оСтанция as $оСтанция)
			{
			if(($оСтанция->genre==$_оСтанция->genre)&&($оСтанция->server_name==$_оСтанция->server_name))
				{
				$ф=TRUE;
				_Report("Найден дубль: ".$_оСтанция->genre."/".$_оСтанция->server_name);
				break;
				}
			else
				{
				//$ф=FALSE;
				}
			}
		return $ф;
		}
	public static function фУникальный($мОбработанныеСвойства, $_сТекущееСвойство)
		{
		$ф=TRUE;
		if(empty($мОбработанныеСвойства))
			{
			return TRUE;
			}
		//print_r($мОбработанныеСвойства);
		//exit;
		//print_r($мОбработанныеСвойства);
		$сТекущееСвойство	=$_сТекущееСвойство;
			    	   unset($_сТекущееСвойство);
		foreach($мОбработанныеСвойства as $сОбработанноеСвойство)
			{
			//echo'1';
			//print_r($сОбработанноеСвойство);
			//echo'2';
			//print_r($сТекущееСвойство);
			if(trim($сОбработанноеСвойство[0])==trim($сТекущееСвойство[0]))
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
	}

?>