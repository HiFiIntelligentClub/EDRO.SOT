<?php
/*© Andrey Chekmaryov 2021
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Email:    assminog@gmail.com,|Telegram: https://t.me/HficSamin  |VK:     	https://vk.com/Hfic.Samin
	  tubmulur@yandex.ru |				        | 		https://vk.com/HiFiIntelligentClub
Phone:    +7(911)787-44-57,  |Whatsapp: +7(911)787-44-57	|Facebook: 	https://facebook.com/Hfic.Samin	
			     |					|		https://facebook.com/HiFiIntelligentClub
                             |					| 
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru  <- Not workimg out of money. Registered untill
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM <- Not workimg out of money.
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion <- Free of charge,not working.
														  Will be started soon for
        	        													  listening with pleasure.
														  International streams 
	        													  divided by categories 
														  described as ICQR.
			    |E    |D     |R      |O      |
||||||||||||||||||||||||||||Event|Design|Reality|Objects||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 ......         ...  ..  ..   ..  . ...  ..  .  .  . .   . ... ..			//
..  .     /\    ..  .... . . .  .   . . .  .. . . .. . . . ..  . .			// OBJECT CLASS STRUCTURE
..  .   <  **>  ... .  . .    ..  . . .  .. . . .  . .   . ... .			// 	MEMORY MARKS EXTERNAL
 ......   jl                                                                 		//	MEMORY MARKS INTERNAL
./././././././*/ //КИМ in latin is KIIM Иcкуственный Интеллект Кирилл и Мефодий (). 	//	STATIC FUNCTIONS
/////////////////////////*_\\KIIM//__Start_____		сНач	*/ 			//	CONSTRUCTOR
  //\\	  //\\	 //\\	/*__\\  //___Checkpiont		_Кон	*/ 			//	FUNCTIONS EXTERNAL
 //  \\	 //  \\	//  \\	/*___\\//____Finish___ 		_КонПроц*/ 			//	FUNCTIONS INTERNAL
//    \\//    \//    \\ /*____\/ECTOR <-->_____*/ 					//
//////////if finish than compete if the result EXIST! Filosophy				//
//    //\\  //	//Usage:								//
 //  ////	//$оКИМ			= new КИМ();					//
  ////		//$оКИМ->сИмяФайла	= '';						//
  //		//			$оКИМ->_Нач();					//
//		//									//
		//			$оКИМ->ч0ВыполненоЧастей++;			//
		//			$оКИМ->_Кон();					//
		//			$оКИМ->_КонПроц();				//
//My last impulse of power will last forever						//
// ---------------									//
// | $rRadio     |<--.									//
// |/////////////|   ||                      Request processing2EDRO: 	Абхазия serve;	//
// ---------------   ||                      Store personal messages:  	Москва serve;	//
//       |  .--FALSE-'                       Store images:		Saint-Petersbourg serve;
//       V /         || GET Listener         Store music: 		Чечня   serve;
// ----rRadio.Step-- ^--------------------
//       |           ||
//       | .--FALSE--'
//       V/
// ---rRadio.Step
//--------------------------------------------------------------------------------------------------------
//
//EDRO--------------------------------.
// 1.CreateEnterPoint                 |
//                                 ^  |
//                                 ^  |
// 1.CreateEnter                   ^  |
// 2.Init EDRO                     ^  |
// 2.1. E getLisSetup            FALSE
// 2.2. D SelectObjPacket         ----|
// 2.3. R CreateReality               |
// 2.4. O Build Polimer Obj->sendPListener
//                                    |
//                                    |
//                                    |
//                                    |
//------------------------------------'
//

//The upper level singularity will be in https://github.com/HiFiIntelligentClub/public very soon
//We are processing from here.
//      //
//     //
 //   //
  // //
   ///
class КиМ
	{
	public $oEDRO			= array();
	public $сИмяФайла		='';
	public $дВремяСтарт		= 0.0000;
	public $дВремяНач		= 0.0000;
	public $дВремяКон		= 0.0000;
	public $дДельтаВремяСтартНач	= 0.0000;
	public $дДельтаВремяНачКон	= 0.0000;
	public $ч0ВыполненоЧастей	= 0;
	public $ч0ЖдёмЧастей		= 0;
	public $ч0Шаг			= 0;
	public $ч0Уровень		= 0;
	private $сРезультат		= 'Ждём выполнения';
	private $сПроцессСтадия		= '';
	private $сИмяПроцесса		= '';

	public static function оНачПроц($сИмяПроцесса='')
		{
		return	new КиМ($сИмяПроцесса);
		}
	
	public function __construct($сИмяПроцесса='')
		{
		$this->сИмяПроцесса		= $сИмяПроцесса;
		$this->дВремяСтарт		= сВремя();
		$this->дВремяНач		= 0.0000;
		$this->дВремяКон		= 0.0000;
		$this->дДельтаВремяСтартНач	= 0.0000;
		$this->дДельтаВремяНачКон	= 0.0000;
		$this->ч0ВыполненоЧастей	= 0;
		}

	public function сНач()
		{
		//echo "сНач\n";
		$str				= '';
		$this->дВремяНач		= сВремя();
		$this->дДельтаВремяСтартНач	= ($this->дВремяНач-$this->дВремяСтарт);
						$this->ч0Шаг++;
						$this->ч0Уровень++;
						$this->_ПроцессСтадия();
						$this->_ВыводВ();
						if($this->сИмяФайла!='')
							{
							require($this->сИмяФайла);
							}
		return $str;
		}
	public function _Кон()
		{
		//echo "_Кон\n";
		$this->дВремяКон		= сВремя();
		$this->дДельтаВремяНачКон	= ($this->дВремяКон-$this->дВремяНач);
		$this->сПроцессСтадия		= str_replace(array('V','v'), '.', $this->сПроцессСтадия);
						$this->_ВыводВ();
		$this->ч0Уровень		= ($this->ч0Уровень-1);
		}
	public function _КонПроц()
		{
						$this->_Кон();
		echo 'ч0ВыполненоЧастей:'.$this->ч0ВыполненоЧастей."\n";
		if($this->ч0ВыполненоЧастей-$this->ч0ЖдёмЧастей==0)
			{
			                                                               
                                                                      
                        $this->сРезультат	 = ' \\\// '."\n";                                    
                        $this->сРезультат	.= '  \\/  '; 
			$this->сРезультат	.= 'Загрузили всё, требуется проверка полученного результата'."\n"; //Calculate
			$this->сРезультат	.= '==============================================================='."\n"; //Calculate
			}
		else
			{
                        $this->сРезультат	 = ' \\// '."\n";                                    
                        $this->сРезультат	.= ' //\\  '; 
			$this->сРезультат	.= 'Что-то пошло не так, требуется перезагрузка и отправка срочного письма администратору системы'."\n"; //Calculate
			$this->сРезультат	.= '=============================================================================================='."\n"; //Calculate
			print_r($this);
			}
		$this->_ВыводРезультата();
		}
	private function _ПроцессСтадия()
		{
		$this->сПроцессСтадия	='[';
		for($ч0=0;$ч0<=$this->ч0Уровень;$ч0++)
			{
			$this->сПроцессСтадия	.=($ч0==0)?'V':'v';
			}
		$this->сПроцессСтадия	.=']';
		}
	private function _ВыводВ()
		{
		echo $this->сПроцессСтадия.$this->сИмяФайла."\n";
		}
	private function _ВыводРезультата()
		{
		echo "\n";
		echo '//vКиМ////////////////////////'."\n";
		echo $this->сИмяПроцесса."\n";
		echo $this->сРезультат."\n";
		echo '//^КиМ////////////////////////'."\n";
		echo "\n";
		}
	}
?>