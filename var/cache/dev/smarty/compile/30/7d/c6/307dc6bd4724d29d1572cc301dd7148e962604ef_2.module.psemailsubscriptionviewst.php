<?php
/* Smarty version 3.1.33, created on 2019-04-17 22:48:03
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb7e563634570_28753999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1551241592,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb7e563634570_28753999 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xamppp\htdocs\jms_extron/themes/jms_extron/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">	
	<div class="block_content">
		<div class="textnews_h1 addon-title">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SIGN UP OUR NEWSLETTER','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For get offers from our favorite brands and get','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

				<span>20%</span> 
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'off for your next purchase!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

			</span>
		</div>
		<div class="textnews_h5 addon-title">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OUR NEWSLETTER','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for get offers and get','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

				<span>20%</span> 
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'off for your next purchase!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

			</span>
		</div>
		<div class="text-footer addon-title">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'NEWSLETTER','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For get offers from our favorite brands & get','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

				<span>20%</span> 
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'off for your next buy!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

			</span>
		</div>
		<div class="news_content">
        	<div  class="block_c_right">
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
					<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value) && $_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }
}?>" >
						<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email@example.com','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" />
						<button type="submit" name="submitNewsletter" class="newsletter-btn btn-popup">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

						</button>
						<input type="hidden" name="action" value="0" />
					</div>
					<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
			    		<div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
			        		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

			   			</div>
					<?php }?>
				</form>
			</div>
      	</div>
	</div>
</div>





<!-- end D:\xamppp\htdocs\jms_extron/themes/jms_extron/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
