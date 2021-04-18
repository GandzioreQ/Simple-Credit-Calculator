<?php
/* Smarty version 3.1.39, created on 2021-04-07 17:07:53
  from 'C:\xampp\htdocs\step7a\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606dcac9ae8323_00508221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13c7da04b45cc458a50076662624c1c7782e0855' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step7a\\app\\views\\LoginView.tpl',
      1 => 1617808072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_606dcac9ae8323_00508221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1117653902606dcac9addd94_57508325', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "log_main.tpl");
}
/* {block 'content'} */
class Block_1117653902606dcac9addd94_57508325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1117653902606dcac9addd94_57508325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" >
	<h1>Logowanie</h1>
	
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="button">
			<input type="submit" value="zaloguj" class="count-button"/>
		</div>
	
</form>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
