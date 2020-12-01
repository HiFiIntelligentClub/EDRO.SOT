<?php
class GENRE
	{
	public static function мЖанр_мЯзык_мТранскрипция($сВход) //inspired by Ferry Corsten and Armin van Buuren 
		{// Function is in progress. Will be connected to ЕДРО:ПОЛИМЕР, to became complete solution.
		//$сВход
		$сВозврат	=$сВход;
		$мСтильТрансЯз=
		array(
			'trance'=>array('транс', 'екфтсу', 'nhfyc', 'tranc', 'екфтс'),
			'techno'=>array('техно', 'nt[yj', 'еусртщ', 'tehno', 'еуртщ'),
			);
		foreach($мСтильТрансЯз as $сСтиль=>$мТрансЯз)
			{
			//$мСтильТрансЯз
			if(фУникальный($мТрансЯз, $сСтиль)===FALSE)
				{
				$сВозврат	=$сСтиль;
				}
			}
		return $сВозврат;
		}
	}

?>