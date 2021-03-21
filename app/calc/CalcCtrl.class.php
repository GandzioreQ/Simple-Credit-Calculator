<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';


class CalcCtrl{

    private $msgs;  //wiadomości dla widoku
    private $form;  //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

public function __construct(){
    //stworzenie obiektów
    $this->msgs = new Messages();
    $this->form = new CalcForm();
    $this->result = new CalcResult();
}

// 1. pobranie parametrów
public function getParams(){
	$this->form->amount = isset($_REQUEST ['amount']) ? $_REQUEST['amount']  : null;	//kwota	
	$this->form->period = isset($_REQUEST ['period']) ? $_REQUEST['period'] : null;  //okres spłaty
	$this->form->rate = isset($_REQUEST ['rate']) ? $_REQUEST['rate'] : null;	//oprocentowanie
}

// 2. walidacja parametrów 
public function validate(){
// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($this->form->amount) && isset($this->form->period) && isset($this->form->rate))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
	return false;
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $this->form->amount == "") {
	$this->msgs->addError('Nie podano kwoty');
}
if ( $this->form->period == "") {
	$this->msgs->addError('Nie podano terminu spłaty');
}
if ( $this->form->rate == "") {
	$this->msgs->addError('Nie podano oprocentowania');
}

//nie ma sensu walidować dalej gdy brak parametrów
if (! $this->msgs->isError()){
	
	// sprawdzenie, czy $amount , $period i $rate są liczbami 
	if (! is_numeric( $this->form->amount )) {
		$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
	}
	
	if (! is_numeric( $this->form->period )) {
		$this->msgs->addError('Druga wartość nie jest liczbą zmiennoprzecinkową');
	}	
	if (! is_numeric( $this->form->rate )) {
		$this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
	}
}
	return ! $this->msgs->isError();
}

public function process(){
	
    $this->getParams();

	if ($this->validate()) { 
	
		//konwersja parametrów na int
		$this->form->amount = intval($this->form->amount);
		$this->form->period = floatval($this->form->period);
		$this->form->rate = intval($this->form->rate);
		
		//obliczanie raty 
		$rate_number = $this->form->rate / 100;
		$period_number = $this->form->period * 12;
		$q = 1 + ($rate_number / 12);
		$this->result->result = round($this->form->amount * pow($q, $period_number) * ($q -1) / (pow($q, $period_number)-1), 2);
		
	}
		$this->generateView();
}
//definicja zmiennych kontrolera
/*$amount = null;
$period = null;
$rate = null;
$result =null;
$messages = array();
*/

//Wygenerowanie widoku
public function generateView(){
    global $conf;

$smarty = new Smarty();
$smarty->assign('conf',$conf);

$smarty->assign('page_title','Credit_Calculator');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia

$smarty->assign('res',$this->result);
$smarty->assign('msgs',$this->msgs);
$smarty->assign('form',$this->form);

$smarty->display($conf->root_path.'/app/calc/calc_cred_view.html');

}
}