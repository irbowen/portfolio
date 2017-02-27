<?php
/* Smarty version 3.1.31, created on 2017-02-27 01:08:38
  from "/var/www/html/portfolio/www/src/templates/templates/base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b3c266ab67d0_66668496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53ae5093ce2a03345b7ae74d2c47b58df34aa62a' => 
    array (
      0 => '/var/www/html/portfolio/www/src/templates/templates/base.tpl',
      1 => 1488175622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_58b3c266ab67d0_66668496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
  <head>
    <title> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16751423458b3c266aae858_03754743', 'title');
?>
 </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/assets/css/main.css" />
  </head>
  <body class="landing">
      <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69243514758b3c266ab5825_04826195', 'body');
?>

    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/js/skel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/js/main.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
/* {block 'title'} */
class Block_16751423458b3c266aae858_03754743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16751423458b3c266aae858_03754743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Title goes here <?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_69243514758b3c266ab5825_04826195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_69243514758b3c266ab5825_04826195',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Body goes here <?php
}
}
/* {/block 'body'} */
}
