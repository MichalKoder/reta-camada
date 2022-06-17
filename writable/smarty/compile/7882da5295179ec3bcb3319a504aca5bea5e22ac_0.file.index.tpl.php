<?php
/* Smarty version 4.1.1, created on 2022-06-17 23:29:10
  from 'E:\www\reta-camada\app\Views\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62acf226027647_00253433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7882da5295179ec3bcb3319a504aca5bea5e22ac' => 
    array (
      0 => 'E:\\www\\reta-camada\\app\\Views\\home\\index.tpl',
      1 => 1655500958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62acf226027647_00253433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82930162562acf226026231_33430364', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "content"} */
class Block_82930162562acf226026231_33430364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_82930162562acf226026231_33430364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h4>Welcome To <small class="text-muted">Candidate Management Dashboard (Reta-CaMaDa)</small></h4>
<p class="lead">Features:</p>
<ul>
<li>Browse candidates</li>
<li>Add candidate</li>
<li>Edit candidate</li>
<li>Delete candidate</li>
</ul>
<p class="lead">Extra</p>
<ul>
<li>Browse roles</li>
<li>Add role</li>
<li>Edit role</li>
<li>Delete role</li>
</ul>
<p class="lead">Feel free to navigate with the top navbar and enjoy!</p>
<?php
}
}
/* {/block "content"} */
}
