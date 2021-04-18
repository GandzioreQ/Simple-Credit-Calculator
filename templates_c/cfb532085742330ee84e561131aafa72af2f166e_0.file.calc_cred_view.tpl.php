<?php
/* Smarty version 3.1.39, created on 2021-04-18 17:09:34
  from 'C:\xampp\htdocs\step8\app\views\calc_cred_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607c4bae657427_19716974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfb532085742330ee84e561131aafa72af2f166e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step8\\app\\views\\calc_cred_view.tpl',
      1 => 1618758530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607c4bae657427_19716974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1857553439607c4bae63e6a2_69769318', 'navigation');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_777343121607c4bae645770_51161474', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_1857553439607c4bae63e6a2_69769318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_1857553439607c4bae63e6a2_69769318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="Start" class="header">
		<div class="nav-bar">
			<p>
				Orange Calculator
			</p>
			<ol>
				<li><a href="#Start">Start</a></li>
				<li><a href="#Calc">Kalkulator</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
results">Wyniki</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
			</ol>
		</div>
	</div>



<?php
}
}
/* {/block 'navigation'} */
/* {block 'content'} */
class Block_777343121607c4bae645770_51161474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_777343121607c4bae645770_51161474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">

	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>




<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
    <h1 id="Calc">Kalkulator Kredytowy</h1>
    <div class="box">
        <label for="id_amount">Kwota pożyczki:</label>
        <input id="id_amount" type="text" name="amount" placeholder="Podaj kwotę pożyczki" />
        <label for="id_period">Termin spłaty (w latach): </label>
        <input id="id_period" type="text" name="period" placeholder="Podaj ilość lat" />
        <label for="id_rate">Oprocentowanie(%): </label>
        <input id="id_rate" type="text" name="rate" placeholder="Podaj oprocentowanie" />
    </div>
    

    <div class="button">
        <input type="submit" class="count-button" value="Oblicz ratę" />	
        
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
    <div class="final-result">
      
            <p class="final-result-style">Rata miesięczna: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zł.</p>
       
    </div>
     <?php }?>   
</form>	
<div class="error">
   
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
            <ol class = "error">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
        <?php }?>
    

</div>

<div class="footer">
		<p>	
			@ 2021 | Strona wykanana przez Daniel Gandyra 
		</p>
	</div>
<?php
}
}
/* {/block 'content'} */
}
