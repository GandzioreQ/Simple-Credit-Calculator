<?php
/* Smarty version 3.1.39, created on 2021-04-18 15:49:54
  from 'C:\xampp\htdocs\step8\app\views\templates\log_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607c3902389eb9_27157831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8be0da8154b0a6b3d3cf8c24da627b56e1163e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step8\\app\\views\\templates\\log_main.tpl',
      1 => 1617807666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607c3902389eb9_27157831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html  lang="pl">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/calc_style.css">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>
</head>
	
<body>

	<div class="box">
		<div class="section">
			<div class="container">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1316379123607c3902389119_52249986', 'content');
?>

			</div>
		</div>	
	</div>
	

</body>

</html><?php }
/* {block 'content'} */
class Block_1316379123607c3902389119_52249986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1316379123607c3902389119_52249986',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
}
