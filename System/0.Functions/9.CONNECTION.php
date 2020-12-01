<?php
class CONNECTION
	{
	public static function фCreateListen_lnSock($_сСтр)
		{
		echo $_сСтр."\n";
		$ф			= FALSE;
		$мУрлПоток		= мУрлРазобратьПоток($_сСтр);
		$intUDP			= 1;
		$strAddress		=$мУрлПоток['strAddress'];
		$intPort		=$мУрлПоток['intPort'];
		$strGet			=$мУрлПоток['strGet'];
		$intSockListen		= 3;
		$nu0			= 0;

		$lnSOCK	=socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
		//echo 'http://'.$strAddress.':'.$intPort.'/'.$strGet."\n";
		if($intPort===FALSE)
			{
			if(fopen('http://'.$strAddress, "r")===FALSE)
				{
				//echo "fopen FALSE"."\n";
				$ф			= FALSE;
				//return FALSE;
				}
			else
				{
				$ф			= TRUE;
				//echo "fopen TRUE"."\n";
				//return TRUE;
				}
			}
		else
			{
			$bIzSocket=socket_connect($lnSOCK, $strAddress, $intPort);
			if($lnSOCK)
				{
				$ф			= TRUE;
				//echo "fopen TRUE"."\n";
				//return TRUE;
				}
			else
				{
				$ф			= FALSE;
				//echo "fopen FALSE"."\n";
				//return FALSE;
				}
			if($bIzSocket)
				{
		    		$ф			= TRUE;
				//echo "fopen TRUE"."\n";
				//return TRUE;
				}
			else
				{
				$ф			= FALSE;
				//echo "fopen FALSE"."\n";
				//return FALSE;
				}
			}
		if($ф)
			{
			echo 'Result TRUE'."\n";
			}
		else
			{
			echo 'Result FALSE'."\n";
			}
		return $ф;
		}
	}

?>