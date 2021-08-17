<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
function мЖанр_мЯзык_мТранскрипция($сВход) //inspired by Ferry Corsten and Armin van Buuren
	{// Function is in progress. Will be connected to ЕДРО:ПОЛИМЕР, to became complete solution.
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
function мФразы($_сФраза) // Could be inputed by anyone and after that used in pfrase. Inspired by Armin van Buuren programm, I have heard in record of hour programm on Trance.kG
	{
	//
	//$ч1Длинна	=strlen($_сФраза);
    
	///for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
	//    {
	//    $сСлово		.=$_сВход[$ч0Шаг];
	//    echo $сСлово;
	//    }
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
	//return $м;
	}
function cФразыЖанр_ИсправитьНаписание($_сВход) //Для предворительной обработки или пользовательского ввода, не для вывода в реальном времени кешированного каталога!
	{
	$мИсправить	=
	//Исправить	Исправлено
	array(
	    '&amp;'			=>'&', 
	    'hip hop'		=>'Hip-Hop', 
	    'drum and base'		=>'Drum and Bass',
	    "d'n'b"			=>'Drum and Bass',
	    "dnb"			=>'Drum and Bass',
	    "d&b"			=>'Drum and Bass',
	    'drum and bas'		=>'Drum and Bass',
	    'r@b'			=>'R&B',
	    "r'nb"			=>"R'n'B",
	    '70-80-90'		=>'70x 80x 90x',
	    '60-70-80-90-20хх'	=>'60x 70x 80x 90x 20хх',
	    '2000-x'		=>'2000x',
	    '.'			=>'',
	    '&#39;'			=>"'",
	    "90'S"			=>"90's",
	    "80's-90's-00's"	=>"80's 90's 00's"
	    );
	foreach($мИсправить as $сИсправить=>$сИсправлено)
	    {
	    if(strpos(mb_strtolower($_сВход), mb_strtolower($сИсправить))!==FALSE)
		{
		$_сВход		=str_replace($сИсправить, $сИсправлено, mb_strtolower($_сВход));
		}
	    }
	return $_сВход;
	}
function мФразы_ИзвлечьИзвестную($_сВход)
	{
	$мФраза['сЧист']	=$_сВход;
	$мФраза['мФразы']	=array();
	$мИзвестные	=
	array(
	    'Club House',
	    'Classics 60s',
	    'Classic Country',
	    'Classical Guitar',
	    'Hard Rock Classic',
	    'Rock Classic',
	    'Hard Rock',
	    'Classic Cello',
	    'Classic Hits',
	    'Classic Rock',
	    'Classic Punk',
	    'Classic Metal',
	    'Classic Christian',
	    'Easy Listening',
	    'Dance classics',
	    'Rap/Hip Hop',
	    'Reggae and Dancehall',
	    'Blues and Rock',
	    'Talk and Show',
	    'Trap and House', 
	    'Classic hits from the 70s',
	    'Classic Hits',
	    'Soul and Jazz', 
	    'Jungle and Bass',
	    'Rock and Roll' ,
	    'Rhythm and Blues', 
	    'Worship and Praise' ,
	    'Enlightement and truth', 
	    'B and R', 
	    'Drum & Bass',
	    'Drum And Bass', 
	    'Top 10', 
	    'Top 40', 
	    'Top 100', 
	    'O S T', 
	    'Progressive trance', 
	    'Progressive house',
	    'Музыка для души',
	    'Все и не только о чтении',
	    'Лучшая музыка и всех направлений'
	    );
	foreach($мИзвестные as $сИзвестная)
	    {
	    if(strpos(mb_strtolower($_сВход), mb_strtolower($сИзвестная))!==FALSE)
		{
		$_сВход			=str_replace($сИзвестная, '', $_сВход);
		$мФраза['сЧист']	=$_сВход;
		$мФраза['мФразы'][]	=$сИзвестная;
		}
	    }
	if(strpos(mb_strtolower($мФраза['сЧист']), 'and')!==FALSE)
	    {
	    фОшибка('And^ '.$мФраза['сЧист']);
	    //$мФраза['сЧист']	=str_replace(array('and','And','AND'), '', $мФраза['сЧист']);
	    }
	return $мФраза;
	}
function мСобратьФразы($_сВход, $_сБолМал='НеТрог') //'Бол'/'Мал'/'НеТрог'/'МалДиректор'
	{
	//echo $_сВход;
	//exit;
	$мСлово		=array();
	$мФраза		=array();
	$сСлово		='';
	if(empty($_сВход))
	    {
	    return $мФраза;
	    }
	$//_сВход		=cФразыСтиль_ИсправитьНаписание($_сВход);
	$_сВход		=cФразыЖанр_ИсправитьНаписание($_сВход);
	$мВход		=мФразы_ИзвлечьИзвестную($_сВход);
		    	   unset($_сВход);
	$сВход		=$мВход['сЧист'];
	
	//$сВход		=$сВход.' ';
	$мФраза		=$мВход['мФразы'];
		   unset($мВход);
	$ч1Длинна	=strlen($сВход);
	$ч0Длинна	=($ч1Длинна-1);
	
	for($ч0Шаг=0;$ч0Шаг<$ч1Длинна;$ч0Шаг++)
	    {
	    $сСлово		.=$сВход[$ч0Шаг];
	    if(
	    ($ч0Шаг!=0)&&
		(	
		($сВход[$ч0Шаг]==" ")||
		($сВход[$ч0Шаг]==".")||
		($ч0Шаг==$ч0Длинна)
		)
		    )
		{
		$сСлово		=substr($сСлово,0,-1);
		if(фУникальный($мСлово, $сСлово)!==TRUE)
		    {
		    фОшибка('Дубль: '.$сВход.' -> '.$сСлово);
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
			case 'НеТрог':
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
	$мФраза		=$мСлово;
	    //28 august 2020 Hfic Samin simplified solution. Will be beter next time. 
	    //I doo my fast, as fast as possible. Extra fast. Extra thrust. 
	    //Trust no one. Dj will save my soul today for vacancies. I hope it will....  :) 
	    //Today is the last day. So it will not end without update packege. 
	    //Make it good. We too.
	return $мФраза;
	}
$this->ч0ВыполненоЧастей++;
$this->_Кон();
?>