<?php
/* Smarty version 3.1.39, created on 2021-04-07 16:07:54
  from 'C:\xampp\htdocs\step7a\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606dbcbac22fb8_58410335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f92af4a1322f06ecdc6cfc83274f0ca7a23c23b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step7a\\app\\views\\templates\\messages.tpl',
      1 => 1617804326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606dbcbac22fb8_58410335 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
<div class="messages error">
	<ol>
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
</div>
<?php }
}
}
