<?php
/* Smarty version 3.1.33, created on 2019-04-17 03:57:09
  from 'D:\xamppp\htdocs\jms_extron\admin953iqmwgj\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6dc55310b00_03602652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893090dd226c30f8db413f1878daef175d02730e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\admin953iqmwgj\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1545054348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb6dc55310b00_03602652 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
