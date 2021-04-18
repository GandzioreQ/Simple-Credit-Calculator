<?php
/* Smarty version 3.1.39, created on 2021-04-18 16:59:10
  from 'C:\xampp\htdocs\step8\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607c493e917df9_53206554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fda2509920b67f4ca385565014f972e57a62018b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step8\\app\\views\\templates\\main.tpl',
      1 => 1618757940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607c493e917df9_53206554 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1823458801607c493e9167f0_15490451', 'navigation');
?>

	<div class="box">
		<div class="section">
			<div class="container">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1368063287607c493e917440_40708906', 'content');
?>

			</div>
		</div>	
	</div>
	

</body>

</html><?php }
/* {block 'navigation'} */
class Block_1823458801607c493e9167f0_15490451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_1823458801607c493e9167f0_15490451',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navigation'} */
/* {block 'content'} */
class Block_1368063287607c493e917440_40708906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1368063287607c493e917440_40708906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
}
