<?php
class FLOAT
	{
	public static function intRoundUp($_float)
		{
		$float	=$_float;
		   unset($_float);
		$intRoundedUp=FALSE;
		$intDotPos		=strpos($float,'.');
		if($intDotPos!==FALSE)
			{
			$float		=substr($float, 0, $intDotPos);
			$float++;
			$intRoundedUp	=$float;
			}
		else
			{
			$intRoundedUp	=$float;
			//$intPages
			}
		return $intRoundedUp;
		}
	}
?>