<?php
class STATION
	{
	public static function сЗаменаСлэшУЕ($_сВход) 
		{
		$сВход=str_replace('\u043e31\u043e\u043e28\u043e\u043e28\u043e','://', $_сВход);
										 unset($_сВход);
		$сВход=str_replace('\u043e31\u043e', ':' ,$сВход);
		$сВход=str_replace('\u043e31\u043e8200\u043e28\u043e', '/' ,$сВход);
		return $сВход;
		}
	}
?>