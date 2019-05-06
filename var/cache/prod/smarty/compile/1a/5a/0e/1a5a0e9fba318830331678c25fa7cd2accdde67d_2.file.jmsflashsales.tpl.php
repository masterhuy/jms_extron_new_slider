<?php
/* Smarty version 3.1.33, created on 2019-05-06 04:55:41
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\modules\jmsflashsales\views\templates\hook\jmsflashsales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccff68dc3caa7_24367459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a5a0e9fba318830331678c25fa7cd2accdde67d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\modules\\jmsflashsales\\views\\templates\\hook\\jmsflashsales.tpl',
      1 => 1549859540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/miniatures/product2.tpl' => 1,
  ),
),false)) {
function content_5ccff68dc3caa7_24367459 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jmsflashsales">
	<div class="product_box">
		<div class="title">
			<div class="addon-title pull-left">
				<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'week deals limited','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
			</div>
			<div class="flashsales-countdown pull-left"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['expiretime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
			<div class="pull-right">
				<a href="index.php?id_category=2&controller=category&id_lang=1" class="view-all fw-bold">view all</a>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="flashsales-carousel">	
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>	
				<div class="item ajax_block_product">		
					<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<div class="flashsales-slick">	
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>	
				<div class="item ajax_block_product">		
					<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div><?php }
}
