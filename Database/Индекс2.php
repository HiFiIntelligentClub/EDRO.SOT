#!/usr/bin/php
<?php
$strDb		='/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub';
$strTable	='Stations';
$strReality1	='All';
$strReality1	='Android';
$strReality2	='Apple';
$strOrderType	='unordered2';

$strIndex2Source	= '/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub/Stations/search';

//$strDb.'/'.$strReality1.'/'.$strTable.'/'.$strOrderType;

//$strIndex2Destination	= '/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub/Stations/unordered2';
$arrIndexDestinations=
array(
	$strReality0	=> $strDb.'/'.$strTable.'/'.$strOrderType,
	$strReality1	=> $strDb.'/'.$strReality1.'/'.$strTable.'/'.$strOrderType,
	$strReality2	=> $strDb.'/'.$strReality2.'/'.$strTable.'/'.$strOrderType
	);

function фОчиститьРасположение($_мРасполож)
	{
	foreach($_мРасполож as $strReality=>$strDestination)
		{
		exec('rm -r -f '.$strDestination);
		}
	}
function фСоздатьРасположение($_strIndex2Destination)
	{

	$strIndex2Destination	=$_strIndex2Destination;
			//unlink($_strIndex2Destination);
	$ф	=FALSE;
	if(!is_dir($strIndex2Destination))
		{
		if(mkdir($strIndex2Destination)===FALSE)
			{
			//Report
			echo 'Не создать расположение '.$strIndex2Destination."\n";
			$ф	=FALSE;
			}
		else
			{
			$ф	=TRUE;
			}
		}
	else
		{
		$ф	=TRUE;
		}
	return $ф;
	}
function фСоздатьСсылку($_strIndexSource, $_strIndexDestination, $_nu0I)
	{
	$ф	= FALSE;
	if(symlink($_strIndexSource, $_strIndexDestination)!==FALSE)
		{
		if(file_put_contents($_strIndexDestination.'/total.plmr', json_encode(array('total'=>$_nu0I)))!==FALSE)
			{
			$ф	= TRUE;
			}
		else
			{
			//Report 123
			echo 'Не создать объект: '.$_strIndexDestination.'/total.plmr'."\n";
			$ф	= FALSE;
			}
		}
	else
		{
		//Report 123
		$ф	= FALSE;
		echo 'Не создать объект: '.$_strIndexSource.'->'.$_strIndexDestination."\n";
		}
	return $ф;
	}
function _CheckO($_nu1Source, $_nu0I)
	{
	if($_nu1Source!=($_nu0I+1))
		{
		echo '_nu1Source!=(_nu0I+1)'."\n";
		}
	}

фОчиститьРасположение($arrIndexDestinations);


$arrSourceDirs	=scandir($strIndex2Source);
$nu1Source	=count($arrSourceDirs);

$nu0I		=0;
foreach($arrSourceDirs as $strDir)
	{
	foreach($arrIndexDestinations as $strReality=>$strDestination)
		{
		echo $strDestination."\n";
		echo $strIndex2Source.'/'.$strDir."\n";
		
		фСоздатьРасположение(dirname($strDestination)); //destinationReality
		фСоздатьРасположение($strDestination);
		if(фСоздатьСсылку($strIndex2Source.'/'.$strDir, $strDestination.'/'.$nu0I.'.plmr', $nu0I)!==FALSE)
			{
			$nu0I++;
			}
		}
	}
_CheckO($nu1Source, $nu0I);
?>