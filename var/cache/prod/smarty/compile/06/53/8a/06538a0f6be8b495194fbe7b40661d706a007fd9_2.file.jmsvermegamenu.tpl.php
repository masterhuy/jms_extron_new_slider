<?php
/* Smarty version 3.1.33, created on 2019-05-06 04:55:44
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\modules\jmsvermegamenu\views\templates\hook\jmsvermegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccff690c9ebd0_24990482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06538a0f6be8b495194fbe7b40661d706a007fd9' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\modules\\jmsvermegamenu\\views\\templates\\hook\\jmsvermegamenu.tpl',
      1 => 1546847037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccff690c9ebd0_24990482 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['vermenu_html']->value;?>

<?php echo '<script'; ?>
 type="text/javascript">
	var jmvmm_event = '<?php echo $_smarty_tpl->tpl_vars['JMSVMM_MOUSEEVENT']->value;?>
';
	var jmvmm_duration = <?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
;	
<?php echo '</script'; ?>
>
<style type="text/css">
.jms-vermegamenu .dropdown-menu {    
	transition:all <?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
ms;
}
</style><?php }
}
