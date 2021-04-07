<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl{

   
    private $form;  
    private $result; 

public function __construct(){
    //stworzenie obiektów
   
    $this->form = new CalcForm();
    $this->result = new CalcResult();
}

// 1. pobranie parametrów
public function getParams(){
	$this->form->amount = getFromRequest('amount');
	$this->form->period= getFromRequest('period');
	$this->form->rate = getFromRequest('rate');
}


public function validate(){
// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($this->form->amount) && isset($this->form->period) && isset($this->form->rate))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
	return false;
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $this->form->amount == "") {
	getMessages()->addError('Nie podano kwoty');
}
if ( $this->form->period == "") {
	getMessages()->addError('Nie podano terminu spłaty');
}
if ( $this->form->rate == "") {
	getMessages()->addError('Nie podano oprocentowania');
}

//nie ma sensu walidować dalej gdy brak parametrów
if (! getMessages()->isError()){
	
	// sprawdzenie, czy $amount , $period i $rate są liczbami 
	if (! is_numeric( $this->form->amount )) {
		getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
	}
	
	if (! is_numeric( $this->form->period )) {
		getMessages()->addError('Druga wartość nie jest liczbą zmiennoprzecinkową');
	}	
	if (! is_numeric( $this->form->rate )) {
		getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
	}
}
	return ! getMessages()->isError();
}

public function action_calcCompute(){
	
    $this->getParams();

	if ($this->validate()) { 
	
		//konwersja parametrów na int
		$this->form->amount = intval($this->form->amount);
		$this->form->period = floatval($this->form->period);
		$this->form->rate = intval($this->form->rate);
		
		//obliczanie raty 

		if($this->form->period>5 && inRole('user')){
			getMessages()->addError('Tylko administrator jest upoważniony do spłacania kredytu powyżej pięciu lat !! ');
		}else{
		$rate_number = $this->form->rate / 100;
		$period_number = $this->form->period * 12;
		$q = 1 + ($rate_number / 12);
		$this->result->result = round($this->form->amount * pow($q, $period_number) * ($q -1) / (pow($q, $period_number)-1), 2);
		}
	}
		$this->generateView();
}


//Wygenerowanie widoku
public function action_calcShow(){
	$this->generateView();

}

public function generateView(){
	getSmarty()->assign('user',unserialize($_SESSION['user']));

	getSmarty()->assign('page_title','Credit_Calculator - role');
	


	getSmarty()->assign('res',$this->result);
	getSmarty()->assign('form',$this->form);

	getSmarty()->display('calc_cred_view.tpl');

}
}