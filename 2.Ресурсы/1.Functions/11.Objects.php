<?php
function strMainPageEl(
		    $arrEl=
			array(
			'strName'	=>'instruments',
			'intLayer'	=>1,
			'arrHeader'	=>
				array(
				'strEng'	=>'instruments',
				'strRu'		=>'Ручные инструменты',
				'strProp'	=>'TC3 BC3 Lx2t1 tcenter',
				'strStyle'	=>'width:100vw;height:50%;margin-bottom:1vh;'
				),
			'arrBody'	=>
				array(
				'strEng'	=>'-',
				'strRu'		=>'Ручные инструменты описание',
				'strProp'	=>'TC1 BC1 left border tcenter ',
				'strStyle'	=>'width:100vw;height:50%;margin-bottom:1vh;'
				),
			'arrSensor'	=>
				array(
				'strEng'	=>'To catalog',
				'strRu'		=>'В каталог',
			//	'strStyle'	=>'width:100vw;height:50%;margin-bottom:1vh;'
			//	'strBodyProp'	=>'block rel left border tcenter TC1 BC1 layer_1',
				)
			))
	{
	$str	='<'.$arrEl['strName'].'
			class ="brick rel '.$arrEl['arrBody']['strProp'].' layer_'.$oEl['intLayer'].'"
			style ="'.$arrEl['arrBody']['strStyle'].'"
			>
			<header 
				class="brick '.$arrEl['arrHeader']['strProp'].'"
				>
				'.$arrEl['arrHeader']['strRu'].'
			</header>
			<strBody
				class="brick "
				style="width:100%; height:100%;"
				>
				'.$arrEl['arrBody']['strRu'].'
			</strBody>
			<sensorOrder
				class="abs sensor block border-top border-left TC1 BC1"
				style ="bottom:0;right:0;width:10vw;height:10vh;line-height:10vh;min-width:100px;"
				>'.$arrEl['arrSensor']['strRu'].'
			</sensorOrder>
	    </'.$arrEl['strName'].'>
	';
	return $str;
	}
function strElCat(
		    $arrEl=
			array(
			'strName'	=>'instruments',
			'intLayer'	=>1,
			'arrHeader'	=>
				array(
				'strEng'	=>'instruments',
				'strRu'		=>'Ручные инструменты',
				'strProp'	=>'TC3 BC3 Lx2t1 tcenter',
				'strStyle'	=>'width:100vw;height:50%;margin-bottom:1vh;'
				),
			'arrBody'	=>
				array(
				'strEng'	=>'-',
				'strRu'		=>'Ручные инструменты описание',
				'strProp'	=>'TC1 BC1 left border tcenter ',
				'strStyle'	=>'width:100vw;height:50%;margin-bottom:1vh;'
				),
			'arrSensor'	=>
				array(
				'strEng'	=>'To catalog',
				'strRu'		=>'В каталог',
			//	'strStyle'	=>'width:100vw;height:50%;margin-bottom:1vh;'
			//	'strBodyProp'	=>'block rel left border tcenter TC1 BC1 layer_1',
				)
			))
	{
	$str	='<'.$arrEl['strName'].'
			class ="brick rel '.$arrEl['arrBody']['strProp'].' layer_'.$oEl['intLayer'].'"
			style ="'.$arrEl['arrBody']['strStyle'].'"
			>
			<header 
				class="brick '.$arrEl['arrHeader']['strProp'].'"
				>
				'.$arrEl['arrHeader']['strRu'].'
			</header>
			<strBody
				class="brick "
				style="width:100%; height:100%;"
				>
				'.$arrEl['arrBody']['strRu'].'
			</strBody>
			<sensorOrder
				class="abs sensor block border-top border-left TC1 BC1"
				style ="bottom:0;right:0;width:10vw;height:10vh;line-height:10vh;min-width:100px;"
				>'.$arrEl['arrSensor']['strRu'].'
			</sensorOrder>
		</'.$arrEl['strName'].'>
	';
	return $str;
	}
function strCatLoader(
	$arrGoodCatEl=
		array(
			'strCatalogDest'	=> '',
			'strCatalogIndex'	=> ''
		))
	{
	сДополнить($сРеальность, $сОбъект);
	return $str;
	}
function strFormContact()
	{
	$str 	.='<overlay id="sendOrder" class="fix TC1 BC1 layer_4_1 tcenter hide" style="width:100vw;height:100vh;">';
		$str 	.='<sendOrder
			class="block fixed layer_4_2 border TC1 BC1"
			style="width:100%"
			>';
		$str 	.='<header class="block TC3 BC3 Lx2t1 tcenter">Оформить заказ</header>';
		$str 	.='<close
				class	="block fix layer_3 TC1 BC1 L2 tcenter"
			style	="width:40px;right:0;top:40px;"
			onClick	="this.parentNode.parentNode.className+=\' hide\'"
		    >';
		$str 	.='x';
		$str 	.='</close>';
		$str 	.='<input class	="block" type="text" name="1" placeholder="Имя"/>';
		$str 	.='<input class	="block" type="text" name="1" placeholder="Комментарий"/>';
		$str 	.='<input class	="block" type="text" name="1" placeholder="+7(VVV) VVV-VV-VV"/>';
		$str 	.='<input class	="block" type="text" name="1" placeholder="mail@mail.xx"/>';
		$str 	.='<input class	="block" type="submit" name="Отправить"/>';
		$str 	.='</sendOrder>';
	$str 	.='</overlay>';
	}
	
?>