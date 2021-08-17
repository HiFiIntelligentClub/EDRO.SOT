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

require'/home/EDRO.SetOfTools/2.Ресурсы/1.Functions/01.СколькоВремя.php';
require'/home/EDRO.SetOfTools/2.Ресурсы/1.Functions/02.Секундомер.php';

Read::VoId();

class Read
	{
	private $E	= array(
				'мСекундомер'		=> 
							array(
							''
							),
			);
	private $D	= array(
				'strAddr'		=> '127.0.0.1',
				'intPort'		=> 75,
				'intReadBlockSize'	=> 512,
				'сРасположение'		=> '',
				'дТаймаут'		=> -1,
			);
	private $R	= array(
				'мКИМ'			=>
							array(
							''
							),
				'strError'		=> ,
				'strErrorNo'		=> ,
				'рПриёмник'		=> '',
				'рПередача'		=> '',
				'bIzSocket'		=> FALSE,
				'intWritedBytes'	=> 0,
				'мЗаголовки'		=> array(),
				'strReadedBlock'	=> '',
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
			$this->_ЧтениеЗапроса();
			$this->_ОбработкаЗапроса();
			$this->_ФормированиеОтвета();
			$this->_ЗаписьОтвета();
			$this->_СбросEventЖурнала();
			//exit();
			}
		$this->E['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _memoryPrepare()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->R['рПриёмник']			= stream_socket_server('tcp://'.$this->D['strAddr'].':'.$this->D['intPort'], $this->R['strErrorNo'], $this->R['strError']);
		
		$this->E['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function ifGgetRead()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->R['рПередача'] 			= stream_socket_accept($this->R['рПриёмник'], $this->D['дТаймаут']);
		
		$this->E['мСекундомер'][] 		= $оСекундомер->_Стоп();
		
		return $this->R['рПередача'];
		}
	private function _ЧтениеЗапроса()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->R['strReadedBlock']		= fread($this->R['рПередача'], $this->D['intReadBlockSize']);
		if(empty($this->R['strReadedBlock']))
			{
			$this->R['strReadedBlock']		= 'Пустой запрос';
			$this->E[]				= array('!'.__CLASS__.'/'.__FUNCTION__ => 'fread($_рПередача'.$this->D['intReadBlockSize'].') empty.');
			}
		$this->E['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _ОбработкаЗапроса()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		//$this->R['мЗаголовки']			= explode("\n", $this->R['strReadedBlock']);
		
		//$this->R['мЗаголовки']			= array();x
		
		if(isset($this->R['мЗаголовки'][0]))
			{
			if(is_file($this->R['мЗаголовки'][0]))
				{
				//$this->R['strReadedBlock']		= file_get_contents($this->R['мЗаголовки'][0]);
				}
			else
				{
				
				}
			}
		$this->E['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _ФормированиеОтвета()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->R['мЗаголовки'];
		
		$this->E['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _ЗаписьОтвета()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		fwrite($this->R['рПередача'], $this->R['strReadedBlock'], strlen($this->R['strReadedBlock']));
		
		fclose($this->R['рПередача']);
		
		$this->E['мСекундомер'][] 		= $оСекундомер->_Стоп();
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

		$this->E['мСекундомер'][]		= $оСекундомер->_Стоп();
		}
	private function _Буфферизация()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->O['strFaviconBin']		= file_get_contents('/home/HiFiIntelligentClub.Ru/favicon.png');
		$this->O['strJPGLogo']			= file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
		$this->O['strRobotsTxt']		= file_get_contents('/home/HiFiIntelligentClub.Ru/robots.txt');
		
		$this->E['мСекундомер'][] 		= $оСекундомер->_Стоп();
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