<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załadowanie smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';
// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.



// 1. pobranie parametrów
function getParams(&$amount,&$period,&$rate){
	$amount = isset($_REQUEST ['amount']) ? $_REQUEST['amount']  : null;	//kwota	
	$period = isset($_REQUEST ['period']) ? $_REQUEST['period'] : null;  //okres spłaty
	$rate = isset($_REQUEST ['rate']) ? $_REQUEST['rate'] : null;	//oprocentowanie
}


// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$amount,&$period,&$rate,&$messages){
// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($amount) && isset($period) && isset($rate))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
	return false;
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $amount == "") {
	$messages [] = 'Nie podano kwoty ';
}
if ( $period == "") {
	$messages [] = 'Nie podano terminu spłaty';
}
if ( $rate == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (count( $messages ) !=0) return false; 
	
	// sprawdzenie, czy $amount , $period i $rate są liczbami 
	if (! is_numeric( $amount )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $period )) {
		$messages [] = 'Druga wartość nie jest liczbą zmiennoprzecinkową';
	}	
	if (! is_numeric( $rate )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}

	if (count ($messages) !=0) return false;
	else return true;
}

function process(&$amount,&$period,&$rate,&$messages,&$result){
	global $role;

	if (empty ( $messages )) { // gdy brak błędów
	
		//konwersja parametrów na int
		$amount = intval($amount);
		$period = floatval($period);
		$rate = intval($rate);
		
		//obliczanie raty 
		$rate_number = $rate / 100;
		$period_number = $period * 12;
		$q = 1 + ($rate_number / 12);
		$result = round($amount * pow($q, $period_number) * ($q -1) / (pow($q, $period_number)-1), 2);
		
	}
		
}
//definicja zmiennych kontrolera
$amount = null;
$period = null;
$rate = null;
$result =null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($amount,$period,$rate);
if ( validate($amount,$period,$rate,$messages) ) { //gdy brak błędów
	process($amount,$period,$rate,$messages,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Credit_Calculator');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia

$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc_cred_view.html');