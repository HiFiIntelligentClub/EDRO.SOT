<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru

$оКИМ->сИмяФайла	= '0.Loader.php';
			$оКИМ->_Нач();


//while($мЗагрузка=фКИМ($мЗагрузка))
//	{
	$мЗагрузка		= мКИМ($ч0Шаг ,$мЗагрузка);
	require('/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php');
	require('/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php');
	require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportComplain_Violation_CitizenCountry1_Country2_.php');
	require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportComplain_Violation_УКРФ.php');
	require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportViloationLaw_ResidenceCountry.php');
	require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportViolation_ResourceRules.php'); //+
	//require('/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SendMail/');
	//require('/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Complains');
	//require('/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/ResidenceCountryLaw');
	//require('/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/ResurceRules');
	//require('/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/Rights_ResidentCounttry1_residentCountry2');
	require('/home/EDRO.SetOfTools/System/2.Functions/0.key.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/1.FunctionsSetup.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/2.Platforms.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/3.Functions.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/4.Фразы.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/5.Dyn.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/6.StringFunctions.php');

	//require('/home/EDRO.SetOfTools/System/3.VectorKIIM/0.KIIM.php');
	//require('/home/EDRO.SetOfTools/System/3.VectorKIIM/1.objKIIM.activation.php');
	//require('/home/EDRO.SetOfTools/System/3.VectorKIIM_Helper/1.objKIIM.activation.php');
	require('/home/EDRO.SetOfTools/System/4.RAMBuffer/0.EDRO_Objects.php');
	
	//$ч0Шаг++;
//	}

$оКИМ->ч0ВыполненоЧастей++;
$оКИМ->_Кон();
?>