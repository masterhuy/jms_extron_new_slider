<?php
/* Smarty version 3.1.33, created on 2019-05-04 03:26:28
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\modules\jmspagebuilder\views\templates\hook\addonpopupadvertising.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccd3ea4962303_17432386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a37fa4f0dbf4b1f0e0fbff70f5fc3dab7820e87a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\modules\\jmspagebuilder\\views\\templates\\hook\\addonpopupadvertising.tpl',
      1 => 1550715198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccd3ea4962303_17432386 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jms-popup-overlay" style="display:none;">
	<div class="jms-popup" class="fadeInUp animated">		
		<?php if ($_smarty_tpl->tpl_vars['popup_title']->value) {?>
		<h2>
			<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

		</h2>
		<?php }?>
		<div class="jms-popup-content">
			<img class="img-popup" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/jms_extron/assets/img/icon/mail.png" alt="">
			<h2>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SUBSCRIBE & GET','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

				<span>20%</span>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' DISCOUNT!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

			</h2>
			<p class="text-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get the first offers and events from our store','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
			
			<?php echo $_smarty_tpl->tpl_vars['popup_content']->value;?>


			<p class="text-2">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We respect your privacy. We will never share or sell your information.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

			</p>
		</div>			
		<div class="dontshow">
			<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain" /> 
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Don't show this popup again",'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</label>
		</div>		
		<a class="popup-close"></a>
		<input type="hidden" name="width_default" id="width-default" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_width']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="height_default" id="height-default" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_height']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="loadtime" id="loadtime" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loadtime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
		
		<div id="social_block">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MORE WAYS TO STAY CONNECTED:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
			<ul class="find-us">
		        <li class="divider"><a href="#" class="facebook"><span class="fa fa-facebook"></span></a>      
		        <li class="divider"><a href="#" class="twitter"><span class="fa fa-twitter"></span></a>                     
		        <li class="divider"><a href="#" class="gplus"><span class="fa fa-google"></span></a>		   
		        <li class="divider"><a href="#" class="pinterest"><span class="fa fa-pinterest"></span></a>            
				<li class="divider"><a href="#" class="instagram"><span class="fa fa-instagram"></span></a> 
			</ul>
		</div>	
	</div>
</div><?php }
}
