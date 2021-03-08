<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$amount = $_REQUEST ['amount'];	//kwota	
$period = $_REQUEST ['period'];  //okres spłaty
$rate = $_REQUEST ['rate'];	//oprocentowanie

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($amount) && isset($period) && isset($rate))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $amount )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $period )) {
		$messages [] = 'Druga wartość nie jest liczbą zmiennoprzecinkową';
	}	
	if (! is_numeric( $rate )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}

}

// 3. wykonaj zadanie jeśli wszystko w porządku

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

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_cred_view.php';
?>