	<?php
	if($objEDRO->arrEvent['bIzDynamic'])
		{
		}
	else
		{
		KIIM::objFinish($objKIIM, array(
		'_strClass'		=>'KIIM',
		'_strMethod'		=>'Start',
		'_strMessage'		=>'All job is done!',
		'_strVectorPoint'	=>'Start->Finish',
		));
		echo	'</body>';
		echo'</html>';
		}
	?>
