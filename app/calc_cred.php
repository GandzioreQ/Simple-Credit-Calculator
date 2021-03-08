<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownium jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

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

	//konwersja parametrów na int
	$amount = intval($amount);
	$period = floatval($period);
	$rate = intval($rate);
	

	

	//Odpowiednie role dla użytkowników
	if ($period>5 && $role == 'user'){
		$messages [] = ' Tylko administrator jest upoważniony do spłacania kredytu powyżej pięciu lat !!';
		}else{
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

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_cred_view.php';
?>