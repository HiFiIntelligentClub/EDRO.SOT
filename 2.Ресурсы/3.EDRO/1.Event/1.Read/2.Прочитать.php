<?php /*_
© Andrey Chekmaryov (https://vk.com/Hfic.Samin) 2021
*/
require'/home/EDRO.SetOfTools/2.Ресурсы/1.Functions/01.СколькоВремя.php';
require'/home/EDRO.SetOfTools/2.Ресурсы/1.Functions/02.Секундомер.php';
$o = new оПрочитать(
	array(
	'сРасположение'	=> '',
	'ч1Слушатель'	=> 0
	));
class оПрочитатьСлушателя
	{
	private $E	= array(
			);
	private $D	= array(
				'strAddr'		=> '127.0.0.1',
				'intPort'		=> 75,
				'intReadBlockSize'	=> 512,
			);
	private $R	= array(
				'lnSOCK'		=> '',
				'bIzSocket'		=> FALSE,
				'intWritedBytes'	=> 0,
				'мЗаголовки'		=> 
					array(
					'ч1Слушатель'		=> 0,
					),
				'strRequest'		=> '',
			);
	public $O	= array(
			'strReadedBlock'	=> '',
			);
	public function __construct($_R=
			array(
			'ч1Слушатель'	=> 0
			)
		)
		{
		echo "==================================================================\n";
		echo "==================================================================\n";
		echo "==================================================================\n";
		echo "\n";
		echo "\n";
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		//$this->R['сРасположение'] 		= $_R['сРасположение'];
		$this->R['мЗаголовки']['ч1Слушатель']	= $_R['ч1Слушатель'];
						    unset($_R);
						$this->_memoryPrepare();
						$this->_connectRemote();
						$this->_createRequest();
						$this->_writeRemote();
						$this->_readRemoteReport();
						$this->_processObjects();
		$this->E['мСекундомер'][] 	= $оСекундомер->_Стоп();
		print_r($this);
		}
	private function _memoryPrepare()
		{
		$оСекундомер 			= new Секундомер(__CLASS__, __FUNCTION__);
		$this->R['lnSOCK']		= socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
		$this->E['мСекундомер'][] 	= $оСекундомер->_Стоп();
		}
	private function _connectRemote()
		{
		$оСекундомер 			= new Секундомер(__CLASS__, __FUNCTION__);
		$this->R['bIzSocket'] 		= socket_connect($this->R['lnSOCK'], $this->D['strAddr'], $this->D['intPort']);
		$this->E['мСекундомер'][] 	= $оСекундомер->_Стоп();
		}
	private function _createRequest()
		{
		$оСекундомер 			= new Секундомер(__CLASS__, __FUNCTION__);
		foreach($this->R['мЗаголовки'] as $сЗаголовок=>$сДанные)
			{
			if(empty($сДанные))
				{
				$сДанные	= FALSE;
				}
			$this->R['strRequest']	.= $сЗаголовок."\n".$сДанные."\n";
			}
		$this->E['мСекундомер'][] 	= $оСекундомер->_Стоп();
		}
	private function _writeRemote()
		{
		$оСекундомер 			= new Секундомер(__CLASS__, __FUNCTION__);
		$this->R['intWritedBytes']	= socket_write($this->R['lnSOCK'], $this->R['strRequest'], strlen($this->R['strRequest']));
		$this->E['мСекундомер'][] 	= $оСекундомер->_Стоп();
		}
	private function _readRemoteReport()
		{
		$оСекундомер 			= new Секундомер(__CLASS__, __FUNCTION__);
		$this->R['strReadedBlock']    	= socket_read($this->R['lnSOCK'], $this->D['intReadBlockSize']);
		$this->E['мСекундомер'][] 	= $оСекундомер->_Стоп();
		}
	private function _processObjects()
		{
		$оСекундомер 		= new Секундомер(__CLASS__, __FUNCTION__);
		$this->O		= array(
						'obj1'=>'',
					);
		$this->E['мСекундомер'][] = $оСекундомер->_Стоп();
		}
	}
?>