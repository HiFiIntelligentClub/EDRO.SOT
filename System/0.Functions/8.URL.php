<?php
class URL
	{
	public static function мУрлРазобратьПоток($_сСтр) 	//Разобрать стрим. Сергею Корякину и его коллеге в Ролексе Вадим Раскумандрину
		{				//и Люсьене Гусевой из Лапси привет.:)
						//Алексу Соловьёву тоже привет и всем девчёнкам колясочницам. Если я ещё раз у вас появлюсь,
						//скорее всего потому, что решил жениться на одной из вас. :)
						//Лучшие коляски, прошедшие краштест и дополнительный краштест в СПБ - это Lapsi.ru
						//Игорю Борисовичу тоже привет. Чекмарёв конкурентам не сдастся. Это все знают.
						//Согластно философии WhiteHat, если я зашёл на сайт и увидел ошибку, 
						//обязательно должен написать об этом.
						//Хорошего дня.
		$м['strLinkAfter2Dot']	= сНачОтСимвола($_сСтр, '/', 2);
		$м['strAddress']	= сНачОтДоСимвола($_сСтр, '/', ':', 2);
		$м['intPort']		= сНачОтДоСимвола($м['strLinkAfter2Dot'], ';', '/', 1);
		if(strlen($м['intPort'])>6)
			{
			$м['intPort']	=FALSE;
			}
		
		$м['strGet']		= сНачОтСимвола($_сСтр, '/', 1);
		return $м;
		}
	public static function strGetDomainName()
		{
		$strLang=preg_replace('/(.+)\.([a-zA-Z]{2,7})$/', '$2', $_SERVER['SERVER_NAME']);
		return $strLang;
		}
	public static function strGetServerName()
		{
		$strName=preg_replace('/(http?://)(.+)\.([a-zA-Z]{2,3})$/', '$2', $_SERVER['SERVER_NAME']);
		return $strName;
		}
	}

?>