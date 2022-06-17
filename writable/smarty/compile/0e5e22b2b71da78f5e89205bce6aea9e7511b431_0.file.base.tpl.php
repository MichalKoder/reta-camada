<?php
/* Smarty version 4.1.1, created on 2022-06-17 23:27:10
  from 'E:\www\reta-camada\writable\smarty\template\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62acf1aee438b1_80922600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e5e22b2b71da78f5e89205bce6aea9e7511b431' => 
    array (
      0 => 'E:\\www\\reta-camada\\writable\\smarty\\template\\base.tpl',
      1 => 1655500910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62acf1aee438b1_80922600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment Task: Candidates Management Dashboard</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/assets/css/style.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/">CaMaDa</a>
                        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dashboard
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/dashboard">Show Candidates</a></li>
          </ul>
        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89839662062acf1aee42699_44824073', "content");
?>

                </div>
            </div>
        </div>
                </main>
                <footer class="px-2 py-2">
                <div>
                    <p class="text-center">&copy; 2022 Michał Sapiński</p>
                </div>
                </footer>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
/* {block "content"} */
class Block_89839662062acf1aee42699_44824073 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_89839662062acf1aee42699_44824073',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default content<?php
}
}
/* {/block "content"} */
}
