<?php
/* Smarty version 3.1.33, created on 2019-05-04 06:26:50
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\modules\jmswishlist\jmswishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccd68ea6d5be2_01382023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac5a87fb8c76c2e2e4f1cf987bea8587302d73f5' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\modules\\jmswishlist\\jmswishlist_top.tpl',
      1 => 1546847037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccd68ea6d5be2_01382023 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var loggin_required= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loggin_required']->value, ENT_QUOTES, 'UTF-8');?>
';
    var added_to_wishlist= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['added_to_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
';
    var mywishlist_url= '<?php echo $_smarty_tpl->tpl_vars['mywishlist_url']->value;?>
';
<?php echo '</script'; ?>
>
<?php }
}
