<?php
class RPRT //
	{
	public static function _Report($str)
		{
		//echo$str;
		//$strResult=date('Y-m-d_H:i:s').'<warning style="color:red;">'.$str.'</warning>'."\n";
		$strResult	=date('Y-m-d_H:i:s').$str."\n";
		file_put_contents('/home/HiFiIntelligentClub.Ru/tmp/N0_report.txt' , $strResult, FILE_APPEND);
		}
	}
?>