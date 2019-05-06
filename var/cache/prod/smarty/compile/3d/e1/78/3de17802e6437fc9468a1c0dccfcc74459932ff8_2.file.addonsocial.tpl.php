<?php
/* Smarty version 3.1.33, created on 2019-05-06 04:55:43
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\modules\jmspagebuilder\views\templates\hook\addonsocial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccff68fc2d503_35877336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3de17802e6437fc9468a1c0dccfcc74459932ff8' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\modules\\jmspagebuilder\\views\\templates\\hook\\addonsocial.tpl',
      1 => 1547693237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccff68fc2d503_35877336 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="social_block">
	<ul class="find-us">
       	<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value != '') {?>
       		<li class="divider">
		       	<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebook_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="facebook" title="Facebook">
		       		<span class="fa fa-facebook"></span>
		       	</a>
       	<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['twitter_url']->value != '') {?>
        	<li class="divider">
        		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['twitter_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="twitter" title="Twitter">
        			<span class="fa fa-twitter"></span>
        		</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['linkedin_url']->value != '') {?>
        	<li class="divider">
        		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkedin_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="linkedin" title="Linkedin">
        			<span class="fa fa-linkedin"></span>
        		</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value != '') {?>
        	<li class="divider">
        		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['youtube_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="youtube" title="Youtube">
        			<span class="fa fa-youtube"></span>
        		</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value != '') {?>
        	<li class="divider">
        		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_plus_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="gplus" title="Gplus">
        			<span class="fa fa-google"></span>
        		</a>
        <?php }?>
	    <?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value != '') {?>
	    	<li class="divider">
	    		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pinterest_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="pinterest" title="Pinterest">
	    			<span class="fa fa-pinterest"></span>
	    		</a>
	    <?php }?>            
	    <?php if ($_smarty_tpl->tpl_vars['instagram_url']->value != '') {?>
	    	<li class="divider">
	    		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['instagram_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="instagram" title="Instagram">
	    			<span class="fa fa-instagram"></span>
	    		</a>
	    <?php }?>
  </ul>
</div>
<?php }
}
