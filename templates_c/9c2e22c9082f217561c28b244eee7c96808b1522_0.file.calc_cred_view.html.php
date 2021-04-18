<?php
/* Smarty version 3.1.39, created on 2021-03-25 20:38:10
  from 'C:\xampp\htdocs\step6b\app\views\calc_cred_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605ce6a2708672_36195907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c2e22c9082f217561c28b244eee7c96808b1522' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step6b\\app\\views\\calc_cred_view.html',
      1 => 1616699134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605ce6a2708672_36195907 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246897626605ce6a25008f7_32965775', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44468737605ce6a2707ce1_43549524', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.html");
}
/* {block "content"} */
class Block_246897626605ce6a25008f7_32965775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_246897626605ce6a25008f7_32965775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block "content"} */
/* {block 'footer'} */
class Block_44468737605ce6a2707ce1_43549524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_44468737605ce6a2707ce1_43549524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p>	
    @ 2021 | Strona wykanana przez Daniel Gandyra 
</p>
<?php
}
}
/* {/block 'footer'} */
}
