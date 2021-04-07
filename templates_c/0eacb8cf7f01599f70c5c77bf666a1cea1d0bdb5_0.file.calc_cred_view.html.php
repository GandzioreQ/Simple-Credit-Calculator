<?php
/* Smarty version 3.1.39, created on 2021-03-21 17:08:07
  from 'C:\xampp\htdocs\step5\app\calc\calc_cred_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60576f67db2c61_19950281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eacb8cf7f01599f70c5c77bf666a1cea1d0bdb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step5\\app\\calc\\calc_cred_view.html',
      1 => 1616342630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60576f67db2c61_19950281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49743588260576f67d9ebc6_77873815', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123576501660576f67db2384_72632450', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block "content"} */
class Block_49743588260576f67d9ebc6_77873815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_49743588260576f67d9ebc6_77873815',
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
class Block_123576501660576f67db2384_72632450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_123576501660576f67db2384_72632450',
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
