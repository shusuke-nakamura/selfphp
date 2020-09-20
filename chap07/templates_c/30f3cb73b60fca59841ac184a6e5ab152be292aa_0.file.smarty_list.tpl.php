<?php
/* Smarty version 3.1.36, created on 2020-09-20 23:01:46
  from '/home/vagrant/www/html/selfphp/chap07/templates/smarty_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f6760ca12d260_23985486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30f3cb73b60fca59841ac184a6e5ab152be292aa' => 
    array (
      0 => '/home/vagrant/www/html/selfphp/chap07/templates/smarty_list.tpl',
      1 => 1600610494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6760ca12d260_23985486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vagrant/www/html/selfphp/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Smarty</title>
</head>

<body>
  <ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
    <li 
    <?php if ($_smarty_tpl->tpl_vars['book']->value['price'] > 3500) {?>style="color:Red;"<?php }?>>
      <a href="http://www.wings.msn.to/index.php/-/A-03/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book']->value['isbn'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>(<?php echo mb_convert_encoding(htmlspecialchars(number_format($_smarty_tpl->tpl_vars['book']->value['price'],1), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
円／<?php echo mb_convert_encoding(htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['book']->value['published'],'%Y/%m/%d'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
刊行)
    </li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</body>

</html><?php }
}
