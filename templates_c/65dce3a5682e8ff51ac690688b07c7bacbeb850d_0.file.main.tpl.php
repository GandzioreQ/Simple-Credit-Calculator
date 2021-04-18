<?php
/* Smarty version 3.1.39, created on 2021-04-07 16:59:55
  from 'C:\xampp\htdocs\step7a\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606dc8eba823a9_18946795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65dce3a5682e8ff51ac690688b07c7bacbeb850d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step7a\\app\\views\\templates\\main.tpl',
      1 => 1617807568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606dc8eba823a9_18946795 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1543053413606dc8eba81591_05610170', 'content');
?>

			</div>
		</div>	
	</div>
	

</body>

</html><?php }
/* {block 'content'} */
class Block_1543053413606dc8eba81591_05610170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1543053413606dc8eba81591_05610170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
}
