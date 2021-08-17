<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
function strArrayRec2JS($_arrReality, $_strLayerName='', $bIzFormat=false, $strFormatLR='')
	{
	$bIzFormat	=bIzFormat();
	$strFormatLR	='<br/>';
	$strLayerName	=$_strLayerName;
	       unset($_strLayerName);
	$arrReality	=$_arrReality;
	       unset($_arrReality);
	$strType	='str';
	$strArray	='';
	if(!empty($strLayerName))
	    {
	    $arrReality	=$arrReality[$strLayerName];
	    }
	else
	    {
	    //$arrReality	=$arrReality;
	    }
	foreach($arrReality as $strName=>$tmtData)
	    {
	    $tmtData	=нольЧИлиС($strName, $tmtData);
	    $strType	=strParType($strName);
	    if($strType=='arr')
		{
		//print_r($arrReality);
		$strArray	.=$strName.'=';
		$strArray	.='{';
		$strArray	.=$bIzFormat?$strFormatLR:'';
		$strArray	.=strArrayRec2JS($arrReality, $strName, $bIzFormat, $strFormatLR);
		$strArray	.='}';
		$strArray	.=$bIzFormat?$strFormatLR:'';
		}
	    else
		{
		if($tmtData==='')
		    {
		    $tmtData="''";
		    }
		$strArray	.="'".$strName."'".':'.$tmtData.',';
		$strArray	.=$bIzFormat?$strFormatLR:'';
		}
	    }
	$strArray	=substr($strArray, 0, -1);
	return $strArray;
	}
function strArray2JS($_arrReality, $_strArrName='')
	{
	//$bIzFormat	=false;
	$bIzFormat	=true;
	$strFormatLR	="\n".'<br/>';
	$strArrName	=$_strArrName;
	       unset($_strArrName);
    
	$str	.=$bIzFormat?$strFormatLR:'';
	$str	.=strArrayRec2JS($_arrReality, '', $bIzFormat, $strFormatLR);
	$str	.=$bIzFormat?$strFormatLR:'';
    
	$str	=str_replace(','.$strFormatLR.'}', $strFormatLR.'}', $str);
	return $str;
	}

$this->ч0ВыполненоЧастей++;
$this->_Кон();
?>