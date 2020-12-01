<?php
class PHRASE
	{
	public static function сНачДоСимвола($_сВход, $с_Символ='?') // Слово 
		{
		$сСлово		='';
		if(empty($_сВход))
			{
			$сСлово='';
			return $сСлово;
			}
		$сВход		=(string)$_сВход;
		$ч1Длинна	=strlen($сВход);
		$ч0Длинна	=($ч1Длинна-1);

		for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
			{
			$сСлово.=$сВход[$ч0Шаг];
	
			if($ч0Шаг!=0&&($_сВход[$ч0Шаг]==$с_Символ))
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
	public static function сНачОтСимвола($_сВход, $с_Символ='?') // Слово 
		{
		$сСлово		='';
		$фСимволНайден	=false;
		if(empty($_сВход)){$сСлово='';return $сСлово;}
		$сВход		=(string)$_сВход;
		//echo $с_Символ."\n";
		$ч1Длинна	=strlen($сВход);
		$ч0Длинна	=($ч1Длинна-1);
	
		for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
			{
			//echo $сВход[$ч0Шаг]."\n";
			if($сВход[$ч0Шаг]==$с_Символ)
				{
			
				$фСимволНайден	=true;
				}
			if($фСимволНайден)
				{
				$сСлово		.=$сВход[$ч0Шаг];
				}
			}
		return $сСлово;
		}
	
	public static function сНачОтДоСимвола($_сСтр, $_сОт, $_сДо, $_nu1BeginOffset=1) 
		{
		$сСтр			=$_сСтр;
		$сОт			=$_сОт;
		$сДо			=$_сДо;
		$сОтДо			='';
		$nu1BeginOffset		=$_nu1BeginOffset;
		$сКонецСтр		=сНачОтСимвола($сСтр, $сОт);
		if(strpos($сКонецСтр, $сДо)===FALSE)
			{
			$сОтДо		=substr($сКонецСтр, $nu1BeginOffset);
			}
		else
			{
			$сОтДо		=сНачДоСимвола(substr($сКонецСтр, $nu1BeginOffset), $сДо);
			}
		return $сОтДо;
	    	}
	public static function сРеверс($_сСтр) 
		{
		$сРеверс	='';
		$сСтр		=(string)$_сСтр;
		$ч1Длинна	=strlen($сСтр);
		$ч0Длинна	=($ч1Длинна-1);
		$ч0Позиция	=$ч0Длинна;
		for($ч0Шаг=0;$ч0Шаг<=$ч0Длинна;$ч0Шаг++)
			{
			$сРеверс	.=$сСтр[$ч0Позиция];
			$ч0Позиция--;
			}
		return $сРеверс;
		}
	public static function сКонцОтДоСимвола($_сСтр, $_сОт, $_сДо, $_nu1BeginOffset=1) 
		{
		$сСтр	=сРеверс($_сСтр);
		$сСтр	=сНачОтДоСимвола($сСтр, $_сОт, $_сДо, $_nu1BeginOffset);
		$сСтр	=сРеверс($сСтр);
		return 	$сСтр;
		}
	public static function сКонцДоСимвола($_сСтр, $_сОт)
		{
		$сСтр	=сРеверс($_сСтр);
		$сСтр	=сНачДоСимвола($сСтр, $_сОт);
		$сСтр	=сРеверс($сСтр);
		return 	$сСтр;
		}
	public static function мФразы($_сФраза) /* Could be inputed by anyone and after that used in pfrase inspired Armin van Buuren */
		{
		/*
		$ч1Длинна	=strlen($_сФраза);

		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			$сСлово		.=$_сВход[$ч0Шаг];
			echo $сСлово;
			}
		//$arrFreeSearchInputCharExpression=
    	
		//foreach();
		//	{
		//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$2$3$4','Д');
		//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$1$3$4','р');
		//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$1$2$4','а');
		//	$str.=preg_replace('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/', '$1$2$3','м');
		//	}
		//$м[1]['Drum']['International']['arrPossible']	=array('D','Drum');
		//$м[1]['Drum']['International']['strMisstake']	=array('D?r?{u|a}?m?');
		//$м[1]['Drum']['EN']['arrPossible']		=array('D','Drum');
		//$м[1]['Drum']['EN']['strMisstake']		=array('D?r?{u|a}?m?');
		//$м[1]['Drum']['RU']['arrPossible']		=array('Д','Драм');
		//$м[1]['Drum']['RU']['strMisstake']		=array('/^(Д{1,2})(р{1,2})(а{1,2}|у{1,2})(м{1,2})$/','$1');

		//$м[1]['and']['EN']['arrPossible']		=array('&', "'&'");
		//$м[1]['and']['EN']['strMisstake']		=
		//$м[1]['and']['RU']['arrPossible']		=array('&', "'&'");
		//$м[1]['and']['RU']['strMisstake']		=

		//$м[1]['Bass']['EN']['strPossible']		=
		//$м[1]['Bass']['EN']['strMisstake']		=
		//$м[1]['Bass']['RU']['strPossible']		=
		//$м[1]['Bass']['RU']['strMisstake']		=


		//	=>'arrPossible'	=>array('Drum & Bass','D&B'),
		//		=>'strMisstake'	=>array('Drum & Base')
		//	);
		//$м[]=array('Top','100');
		return $м;
		*/
		}
	public static function сКодировка($с_Вход)
		{
		$чВыход	=FALSE;
		$ч1Длинна	=strlen($с_Вход);
		$сКодировка	=empty(substr($с_Вход, $ч1Длинна))?'Однобайтная':'Не однобайтная';
		if($сКодировка=='Не однобайтная')
			{//Мы любим счастливых и уставших от прогулок грибников,
			_Report($с_Вход.''.'Не однобайтная');
			exit;
			}
		return $сКодировка;
		}
	public static function нольЧИлиС($_сИмя, $_сДанные)
		{
		switch(strParType($_сИмя))
			{
			case 'int':
				if($_сДанные=='')
					{
					$сВыход		=0;
					}
				else
					{
					$сВыход		=$_сДанные;
					}
			break;
			case 'str':
				if($_сДанные=='')
					{
					$сВыход		="''";
					}
				else
					{
					$сВыход		="'".str_replace("'","\'",$_сДанные)."'";
					}
			break;
			}
		return $сВыход;
		}
	public static function сДляСравнения($с_Вход)
		{
		//радостно слушающих музыку, по всему миру.
			//Что бы не случилось. Хорошая Музыка выручит душу из любых передряг, 
			//может даже вернёт в этот мир......
			//Mr Hfic Samin after "Groove Jet" trip:
			//Jog dial was funny. Small Krz* LCD display was very, very big!!!
			//	noughty blue, right behinde my face, and the JOG DIAL itself, imagination 
			//	flash..where some where in my hand........ooogh! ..... but......
			//	all music were so silly cool, that i was laoghting all day long. Like!:))
			//	Where were no silences or pauses. Every touch works perfect.
			//	Only positive memories. Good emotions for me and my friends.
	
			//Mr Hfic Samin after "No f*cking developers maked their job right, b*t!" 
			//trip:
			//	Music stops. I can't start it again. Than, can't stop.....
			//	Carpets were like in the stomach of a monster......
			//	Bad day! Bad emotions! But.... Carpets and mobile is in a trashcan....
			//	Negative balance.
			//My figure prefere the first one.  Hfic.Samin. 2020
		return strtolower($с_Вход);
		}
	public static function мСобратьФразы($_сВход, $_сБолМал='Нетрог') //'Бол'/'Мал'/'Нетрог'/'МалДиректор'
		{
		$мСлово		=array();
		$мФраза		=array();
		$сСлово		='';
		if(empty($_сВход))
			{
			$мФраза[]='';
			return $мФраза;
			}
		$сВход		=$_сВход.' ';
		$ч1Длинна	=strlen($сВход);
		$ч0Длинна	=($ч1Длинна-1);
    
		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			$сСлово.=$сВход[$ч0Шаг];
	
			if($ч0Шаг!=0&&($сВход[$ч0Шаг]==" "||$сВход[$ч0Шаг]=="."))
				{
				$сСлово		=substr($сСлово,0,-1);
				if(in_array($сСлово, $мСлово))
					{
					//echo'Дубль!'."\n";
					//Дубль
					}
				else
					{
					switch($_сБолМал)
						{
						case 'Бол':
							$мСлово[]	=mb_strtoupper($сСлово);
						break;
						case 'Мал':
							$мСлово[]	=mb_strtolower($сСлово);
						break;
						case 'Нетрог':
							$мСлово[]	=$сСлово;
						break;
						case 'МалДиректор':
							$мСлово[]	=сПреобразовать(mb_strtolower($сСлово), "вКоманду");
						break;
						}
					}
				$сСлово		='';
				}
			}
		
		/*echo'<pre>';
		print_r($мСлово);
		echo'</pre>';*/
		/*if(empty($мСлово))
			{
			$мСлово[]=$_сВход;
			}*/
		$мФраза=$мСлово;
		//28 august 2020 Hfic Samin simplified solution. Will be beter next time. 
		//I doo my fast, as fast as possible. Extra fast. Extra thrust. 
		//Trust no one. Dj will save my soul today for vacancies. I hope it will....  :) 
		//Today is the last day. So it will not end without update packege. 
		//Make it good. We too.
		return $мФраза;
		}
	public static function сДоСимвола($_сВход, $с_Символ='?') // Слово
		{
		$сСлово		='';
		if(empty($_сВход))
			{
			$сСлово='';
			return $сСлово;
			}

		$ч1Длинна	=strlen($_сВход);
		$ч0Длинна	=($ч1Длинна-1);
    
		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			$сСлово.=$_сВход[$ч0Шаг];

			if($ч0Шаг!=0&&($_сВход[$ч0Шаг]==$с_Символ))
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
	public static function сОтСимвола($_сВход, $с_Символ='?') // Слово
	{
		$сСлово		='';
		$фСимволНайден	=false;
		if(empty($_сВход)){$сСлово='';return $сСлово;}
	
		$ч1Длинна	=strlen($_сВход);
		$ч0Длинна	=($ч1Длинна-1);
	
		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			if($_сВход[$ч0Шаг]==$с_Символ)
				{
				$фСимволНайден	=true;
				}
			if($фСимволНайден)
				{
				$сСлово		.=$_сВход[$ч0Шаг];
				}
			}
	
		return $сСлово;
		}
	public static function чРосХэш($_сВход) // 
		{//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2020
		$мСлово		=array();
		$сСлово		='';
		if($_сВход==='')
			{
			return 0;
			}

		$ч1Длинна	=strlen($_сВход);
		$ч0Длинна	=($ч1Длинна-1);
		$чСумма		=0;

		for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
			{
			$чСумма		=($чСумма+ord($_сВход[$ч0Шаг]));
    
			if(($ч0Шаг!=0&&$_сВход[$ч0Шаг]==" ")||($ч0Шаг==$ч0Длинна))
				{
				$чХэш		.=$чСумма.'Ф';
				$чСумма		=0;
				}
			}
		return $чХэш;
		}
	}
?>