<?php
/* Smarty version 3.1.39, created on 2021-03-25 21:03:47
  from 'C:\xampp\htdocs\step6b\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605ceca3b0b9e7_15234377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2fe5a461755aec3f4539fdca96fad7ce7e80abc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step6b\\app\\views\\templates\\main.tpl',
      1 => 1616702139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605ceca3b0b9e7_15234377 (Smarty_Internal_Template $_smarty_tpl) {
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
	<div id="Start" class="header">
		<div class="nav-bar">
			<p>
				Orange Calculator
			</p>
			<ol>
				<li><a href="#Start">Start</a></li>
				<li><a href="#Calc">Kalkulator</a></li>
			</ol>
		</div>
	</div>
	<div class="box">
		<div class="section">
			<div class="container">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1888065086605ceca3b0ae66_82114162', 'content');
?>

			</div>
		</div>	
	</div>
	<div class="footer">
		<p>	
			@ 2021 | Strona wykanana przez Daniel Gandyra 
		</p>
	</div>

</body>

</html><?php }
/* {block 'content'} */
class Block_1888065086605ceca3b0ae66_82114162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1888065086605ceca3b0ae66_82114162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
}
