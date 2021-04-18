<?php
/* Smarty version 3.1.39, created on 2021-04-19 01:40:24
  from 'C:\xampp\htdocs\step8\app\views\results_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607cc368650435_37517225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef659412e1e0396e35aa0ddf4a97fb14dfc1d47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step8\\app\\views\\results_view.tpl',
      1 => 1618789211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607cc368650435_37517225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_625838615607cc3686363e1_21587576', 'navigation');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1262561262607cc368640178_77365573', "content");
?>




     


<div class="footer">
		<p>	
			@ 2021 | Strona wykanana przez Daniel Gandyra 
		</p>
	</div>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_625838615607cc3686363e1_21587576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_625838615607cc3686363e1_21587576',
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
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcShow" href="#Calc">Kalkulator</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
results">historia</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
			</ol>
		</div>
	</div>



<?php
}
}
/* {/block 'navigation'} */
/* {block "content"} */
class Block_1262561262607cc368640178_77365573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1262561262607cc368640178_77365573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="table result-table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Kwota</th>
                <th scope="col">Lata</th>
                <th scope="col">Procent</th>
                <th scope="col">Rata</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['credit']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value["idwynik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["lat"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["procent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["rata"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["data"];?>
</td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

<?php
}
}
/* {/block "content"} */
}
