<?php
/* Smarty version 3.1.33, created on 2019-05-06 04:52:04
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\modules\jmspagebuilder\views\templates\hook\addonhotdeal_type2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccff5b42b0954_46442609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3add6cae8d9a68316adec882da2dd336a6213de0' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\modules\\jmspagebuilder\\views\\templates\\hook\\addonhotdeal_type2.tpl',
      1 => 1549007525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccff5b42b0954_46442609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
	var h_items = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo $_smarty_tpl->tpl_vars['items_show']->value;
} else { ?>1<?php }?>,
	    h_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo $_smarty_tpl->tpl_vars['items_show']->value;
} else { ?>1<?php }?>,
	    h_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {
echo $_smarty_tpl->tpl_vars['items_show_md']->value;
} else { ?>1<?php }?>,
	    h_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {
echo $_smarty_tpl->tpl_vars['items_show_sm']->value;
} else { ?>1<?php }?>,
	    h_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {
echo $_smarty_tpl->tpl_vars['items_show_xs']->value;
} else { ?>1<?php }?>;
	    h_nav = <?php if ($_smarty_tpl->tpl_vars['navigation']->value == 1) {?>true<?php } else { ?>false<?php }?>;
		h_pag = <?php if ($_smarty_tpl->tpl_vars['pagination']->value == 1) {?>true<?php } else { ?>false<?php }?>;
		h_auto_play_carousel = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value == 1) {?>true<?php } else { ?>false<?php }?>;
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>
<div class="jms-hotdeal type2">
	<div class="label">SPECIAL DEAL</div>
	<div class="product_box">
		<div class="hotdeal-carousel">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>	
				<div class="item">
					<div class="product-box product-preview js-product-miniature" itemtype="http://schema.org/Product" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_882012275ccff5b4279e47_13741649', 'product_thumbnail');
?>

						<a class="addToWishlist product-btn" onclick="WishlistCart('wishlist_block_list', 'add', '26', false, 1); return false;" data-id-product="26" title="Add to Wishlist"></a>


						<div class="product-info hotdeal">
							<div class="block-label">
							  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12884094555ccff5b4281b47_91847636', 'product_flags');
?>
	
							</div>
							<?php if (isset($_smarty_tpl->tpl_vars['jpb_categoryname']->value) && $_smarty_tpl->tpl_vars['jpb_categoryname']->value) {?>
							    <span class="categoryname">
									<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'category','id'=>$_smarty_tpl->tpl_vars['product']->value['id_category_default']),$_smarty_tpl ) );?>
">
									<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['category'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
								</span>
						    <?php }?>
							
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7641162905ccff5b4289841_49760837', 'product_name');
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14784037785ccff5b428d6c7_61393551', 'product_price_and_shipping');
?>

							<div class="product-description">
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description'],100,'...' ));?>

							</div>
							<div class="product-sold">
					        	<div class="sold-quantyties">
					        		<div class="already_sold pull-left">Sold: 
					        			<span>
					        				<?php if ($_smarty_tpl->tpl_vars['product']->value['sold'] != '') {?>
					        					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['sold'], ENT_QUOTES, 'UTF-8');?>

					        				<?php } else { ?>
					        					0
					        				<?php }?>
					        			</span>
					        		</div>
					        		<div class="available pull-right">Qty: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'], ENT_QUOTES, 'UTF-8');?>
</span></div>
					        	</div>
						        <div class="proces-bars">
						        	<span style="width:<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['product']->value['sold']/$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])*100, ENT_QUOTES, 'UTF-8');?>
%;"></span>
						        </div>
						    </div>
						    <div class="product_button">
								<button <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>" class="ajax-add-to-cart product-btn cart-button <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?>" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-minimal-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" data-token="<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value) && $_smarty_tpl->tpl_vars['static_token']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');
}?>">
									<span class="la la-spin la-spinner"></span>
									<span class="la la-check"></span>
									<span class="text-addcart">
										<i class="la la-cart-plus"></i>
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
									</span>		
									<span class="text-outofstock">
										<i class="la la-ban"></i>
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
									</span>								   
								</button>
							</div>
						</div>
		  			</div>
		  		</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
	<?php if (($_smarty_tpl->tpl_vars['showall_link']->value == '1')) {?> 
		<div class="hotdeal-viewall col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('hotdeals','allproduct');?>
" class="btn-shopnow btn-effect1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All Product','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
</a>
		</div>
	<?php }?>
</div><?php }
/* {block 'product_thumbnail'} */
class Block_882012275ccff5b4279e47_13741649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_882012275ccff5b4279e47_13741649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="img-hotdeal">
						  	<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="product-image">
								<img class="img-responsive"
								  src = "<?php echo $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'];?>
"
								  alt = "<?php echo $_smarty_tpl->tpl_vars['product']->value['cover']['legend'];?>
"
								  data-full-size-image-url = "<?php echo $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'];?>
"
								>
						 	</a>				 
						</div>
						<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_12884094555ccff5b4281b47_91847636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_12884094555ccff5b4281b47_91847636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
										<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
					                	<span class="label label-discount discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
										<?php }?>
									<?php }?>
							   <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_7641162905ccff5b4289841_49760837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_7641162905ccff5b4289841_49760837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							   	<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="product-link"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
							<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_14784037785ccff5b428d6c7_61393551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_14784037785ccff5b428d6c7_61393551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
									<div class="content_price">
									  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


									  	<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
										  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

										  	<span class="old price"><?php echo $_smarty_tpl->tpl_vars['product']->value['regular_price'];?>
</span>
										<?php }?>

										<span itemprop="price" class="price new"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
										
										
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

									</div>
								<?php }?>
							<?php
}
}
/* {/block 'product_price_and_shipping'} */
}
