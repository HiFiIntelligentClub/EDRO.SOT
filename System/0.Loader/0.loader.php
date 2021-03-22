<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru


//while($мЗагрузка=фКИМ($мЗагрузка))
//	{
$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/1.Reporter/2.ReportComplain_Violation_CitizenCountry1_Country2_.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/1.Reporter/2.ReportComplain_Violation_УКРФ.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/1.Reporter/2.ReportViloationLaw_ResidenceCountry.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/1.Reporter/2.ReportViolation_ResourceRules.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

/*
$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SendMail/';
			$оКИМ->_Нач();
			//require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Complains';
			$оКИМ->_Нач();
			//require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/ResidenceCountryLaw';
			$оКИМ->_Нач();
			//require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/ResurceRules';
			$оКИМ->_Нач();
			//require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/Rights_ResidentCounttry1_residentCountry2';
			$оКИМ->_Нач();
			//require($оКИМ->сИмяФайла);
*/

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/2.Functions/0.key.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/2.Functions/1.FunctionsSetup.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/2.Functions/2.Platforms.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/2.Functions/3.Functions.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/2.Functions/4.Фразы.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/2.Functions/5.Dyn.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/2.Functions/6.StringFunctions.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

/*
$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/3.VectorKIIM/0.KIIM.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/3.VectorKIIM/1.objKIIM.activation.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/3.VectorKIIM_Helper/1.objKIIM.activation.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);
*/

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/4.RAMBuffer/0.EDRO_Objects.php';
			$оКИМ->_Нач();
			require($оКИМ->сИмяФайла);
	
	//$ч0Шаг++;
//	}

$оКИМ->ч0ВыполненоЧастей++;
$оКИМ->_Кон();
?>