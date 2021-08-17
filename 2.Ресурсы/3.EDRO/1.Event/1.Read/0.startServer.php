#!/usr/bin/php
<?php
// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021
//р=Ресурс	сп=СтрокаПакет(Пакет для вебсервера)
//Вдохновлённый коммуникацией с Алексеем Семёновым, по-настольгировав по былым временам ИТМО,
//постеснялся оставлять недоинтегрированную структуру и витая мыслями где-то там, 
//доделал интеграл, получив 1 абстрактный класс EDRO, и интерфейс EDRO-ЕДРО, переписываю уже целый день,
//очень боюсь критики от спеца.. Надеюсь успею к утру :). Хорошего дня.
//
//          .                         .             .                           .                      .
// .            .         Е  .                        .                           .                               .
//                        Д
//      .               EDRO              .              .                            .                                     .
//                        О:ПОЛИМЕР
//			    EDRO.SOT													
//																	
//																	
//																	
set_time_limit(0);
require'/home/ЕДРО:ПОЛИМЕР/0.Настройки/1.Define.php';
require'/home/EDRO.SetOfTools/2.Ресурсы/1.Functions/01.СколькоВремя.php';

require'/home/EDRO.SetOfTools/2.Ресурсы/1.Functions/02.Секундомер.php';
require'/home/EDRO.SetOfTools/2.Ресурсы/1.Functions/10.StringFunctions.php';

//echo сНачОтСимвола('12334445667', '6');

//exit;
Read::VoId();

class Read
	{
	private $E	= array(
				'strListenerBlock'	=> '',
				'strReadedBlock'	=> '',
				'сСлушатель'		=> '',
				'мЗаголовки'		=> array(),
				'strError'		=> '',
				'strErrorNo'		=> 0,
			);
	private $D	= array(
				'strAddr'		=> '127.0.0.1',
				'intPort'		=> 75,
				'intReadBlockSize'	=> 512,
				'дТаймаут'		=> -1,
			);
	private $R	= array(
				'мКИМ'			=>
							array(
							''
							),
				'ч1Слушатель'		=> 0,
				'сДоступ'		=> '/Listener',
				'рПриёмник'		=> '',
				'рПередача'		=> '',
				'bIzSocket'		=> FALSE,
				'intWritedBytes'	=> 0,
				'bizReadedBlock'	=> FALSE,
				'мЗаголовки'		=> array(),
			);
	public $O	= array(
			);

	public function __construct()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->_СтартЖурнала();
		//$this->_Буфферизация();
		$this->_memoryPrepare();
		while($this->ifGgetRead())
			{
			$this->_ЧтениеЗапроса();      //+
			$this->_ОбработкаЗапроса();   //
			print_r($this);
			exit;
			$this->_ФормированиеОтвета(); //
			$this->_ЗаписьОтвета();       //
			$this->_СбросEventЖурнала();  //
			//exit();
			}
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _memoryPrepare()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->R['рПриёмник']			= stream_socket_server('tcp://'.$this->D['strAddr'].':'.$this->D['intPort'], $this->E['strErrorNo'], $this->E['strError']);
		
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function ifGgetRead()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->R['рПередача'] 			= stream_socket_accept($this->R['рПриёмник'], $this->D['дТаймаут']);
		
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		
		return $this->R['рПередача'];
		}
	private function _ЧтениеЗапроса()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$strReadedBlock				= fread($this->R['рПередача'], $this->D['intReadBlockSize']);
		if(empty($strReadedBlock))
			{
			$this->E['strReadedBlock']		= '';
			$this->R['bizReadedBlock']		= FALSE;
			$this->E[]				= array('!'.__CLASS__.'/'.__FUNCTION__ => 'fread($_рПередача'.$this->D['intReadBlockSize'].') empty.');
			}
		else
			{
			$this->E['strReadedBlock']		= $strReadedBlock;
			$this->R['bizReadedBlock']		= TRUE;
			}
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _ОбработкаЗапроса()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		if($this->R['bizReadedBlock']===TRUE)
			{
			$this->E['мЗаголовки']			= explode("\n", $this->E['strReadedBlock']);
			foreach($this->E['мЗаголовки'] as $сЗапрос)
				{
				if(strpos($сЗапрос, ': ')!==FALSE)
					{
					$this->R['мЗаголовки'][сНачДоСимвола($сЗапрос, ':')]	= сНачОтСимвола($сЗапрос, ' ');
					}
				}
			if(isset($this->R['мЗаголовки']['ч1Слушатель']))
				{
				$this->R['ч1Слушатель']			= $this->R['мЗаголовки']['ч1Слушатель'];
				if(is_file($this->E['сСлушатель'] 	= сРасположениеО2о.$this->R['сДоступ'].'/'.$this->R['ч1Слушатель'].cЗаписьО2о))
					{
					$this->E['strListenerBlock']		= file_get_contents($this->E['сСлушатель']);
					}
				else
					{
					$this->E[]				= array('!'.__CLASS__.'/'.__FUNCTION__ => 'fread($_рПередача'.$this->D['intReadBlockSize'].') empty.');
					}
				}
			}
		else
			{
			$this->R['мЗаголовки']			= array();
			}

		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _ФормированиеОтвета()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->R['мЗаголовки'];
		
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _ЗаписьОтвета()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		fwrite($this->R['рПередача'], $this->E['strReadedBlock'], strlen($this->E['strReadedBlock']));
		
		fclose($this->R['рПередача']);
		
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _СбросEventЖурнала()
		{
		//print_r($this);
		//$this->E = array();
		}
	public function _СтартЖурнала()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		//$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => '');$intStartTime = сВремя();
		//$this->_КИМ('Start');
		//$сРасположениеСчётчикВход	=$this->сЖурналРасположение.'/CountUp/Вход.plmr';
		//$сРасположениеСчётчикВходИстор	=$this->сЖурналРасположение.'/CountUp/History/Вход.plmr';
		
		//$ч0СчётчикВход			=file_get_contents($сРасположениеСчётчикВход); сТекущееВремяСтемп()
		//				 file_put_contents($сРасположениеСчётчикВход, ($ч0СчётчикВход+1));
		//				 /*DEBUG*/ file_put_contents($сРасположениеСчётчикВходИстор,"\n=====\n".'	Start:		'.date("Y-m-d H:i:s").сТекущееВремяСтемп()."\n", FILE_APPEND);
		//$this->_КИМ('End');
		//$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => (сВремя() - $intStartTime));

		$this->O['мСекундомер'][]		= $оСекундомер->_Стоп();
		}
	private function _Буфферизация()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->O['strFaviconBin']		= file_get_contents('/home/HiFiIntelligentClub.Ru/favicon.png');
		$this->O['strJPGLogo']			= file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
		$this->O['strRobotsTxt']		= file_get_contents('/home/HiFiIntelligentClub.Ru/robots.txt');
		
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
/*
	private function _КИМ($strDirection='Start', $strClass, $strFunction)
		{
		//
		//
		$this->R['мКИМ']			= '',
			[$this->R['мКИМ']['ч0КИМШаг']]	= '',
			[$strDirection] 		= 'Stroka',
			[$strClass]			= 'Stroka',
			[$strFunction]			= 'Stroka';

		switch($strDirection)
			{
			case 'Start':
					КИМ_Start();
			break;

			case 'End':
					КИМ_End();
			break;
			}
		}
*/
	public static function VoId()
		{
		while(TRUE)
			{
			$оRead = new Read();
			}
			//$оRead = Read::VoId();
		}
	}
?>