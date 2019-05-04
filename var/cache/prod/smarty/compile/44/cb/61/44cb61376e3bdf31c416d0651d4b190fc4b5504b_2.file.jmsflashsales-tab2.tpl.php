<?php
/* Smarty version 3.1.33, created on 2019-05-04 06:10:02
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\modules\jmsflashsales\views\templates\hook\jmsflashsales-tab2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccd64fa17beb1_67519686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44cb61376e3bdf31c416d0651d4b190fc4b5504b' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\modules\\jmsflashsales\\views\\templates\\hook\\jmsflashsales-tab2.tpl',
      1 => 1551154561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product_flashsale_tab2.tpl' => 1,
  ),
),false)) {
function content_5ccd64fa17beb1_67519686 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jmsflashsales-tab2">
	<div class="tabpanel">
		<div class="addon-title">
			<h3 class="pull-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'WEEK DEALS LIMITED','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
			<div class="flashsales-countdown pull-right"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['expiretime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="main">
		<ul class="nav">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
				<?php $_smarty_tpl->_assignInScope('cat_products', $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->tpl_vars['k']->value]);?>
				<?php if (!empty($_smarty_tpl->tpl_vars['cat_products']->value)) {?>
				<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>active<?php }?>">
					<a href="#category-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
						<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

					</a>
				</li>	
				<?php }?>	
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<div class="tab-content">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'cat_products', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['cat_products']->value) {
?>
				<?php if (!empty($_smarty_tpl->tpl_vars['cat_products']->value)) {?>
				<div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>in active<?php }?>" id="category-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
">	
					<div class="flashsales-tab-carousel2">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_products']->value, 'product', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>	
							<div class="item ajax_block_product">		
								<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product_flashsale_tab2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
							</div>	
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>	
				</div>
				<?php }?>	
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<div class="clearfix"></div>
	</div>
	
</div>
<?php }
}
