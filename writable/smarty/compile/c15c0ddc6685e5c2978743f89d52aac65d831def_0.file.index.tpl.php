<?php
/* Smarty version 4.1.1, created on 2022-06-17 23:31:43
  from 'E:\www\reta-camada\app\Views\dashboard\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62acf2bfc9e5e7_76470324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c15c0ddc6685e5c2978743f89d52aac65d831def' => 
    array (
      0 => 'E:\\www\\reta-camada\\app\\Views\\dashboard\\index.tpl',
      1 => 1655501501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62acf2bfc9e5e7_76470324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180896683062acf2bfc98a36_19962321', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "content"} */
class Block_180896683062acf2bfc98a36_19962321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_180896683062acf2bfc98a36_19962321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h4>Manage Candidates List</h4>
<form method="POST" action="dashboard/add_edit_candidate">
<input class="btn btn-primary" type="submit" value="New Candidate" name="new_candidate">
</form>
<?php if (empty($_smarty_tpl->tpl_vars['candidates']->value)) {?>
<p class="prompt">There are no candidates.</p>
<?php } else { ?> 
<table class="table">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Date_of_application</th>
        <th>Role</th>
        <th>Action</th>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['candidates']->value, 'candidate');
$_smarty_tpl->tpl_vars['candidate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['candidate']->value) {
$_smarty_tpl->tpl_vars['candidate']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['candidate']->value['ID'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['candidate']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['candidate']->value['age'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['candidate']->value['date_of_application'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['candidate']->value['role'];?>
</td>
            <td>
                <form method="POST" action="">
                    <input class="btn btn-primary" type="submit" value="Edit" id="edit_candidate" name="edit_candidate">
                    <input class="btn btn-danger" type="submit" value="Delete" id="delete_candidate" name="delete_candidate">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['candidate']->value['ID'];?>
" name="id">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['candidate']->value['name'];?>
" name="name">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['candidate']->value['age'];?>
" name="age">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['candidate']->value['date_of_application'];?>
" name="date_of_application">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['candidate']->value['role'];?>
" name="role">
                </form>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php }
}
}
/* {/block "content"} */
}
