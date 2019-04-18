<?php
/* Smarty version 3.1.33, created on 2019-02-26 04:35:20
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c750858b7f0d1_65058964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c82dd0f4b1d35ef608b3aa233a011692665c4d8' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1551173718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5c750858b7f0d1_65058964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7785723695c750858b57fd1_76186169', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_312790205c750858b57fd6_65330463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_8916390895c750858b57fd2_50936517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="" class="hidden-sm-down">
                        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

                    </div>
                <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_11191592505c750858b57fd7_82340947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_16973449425c750858b7f0d8_59164572 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_7785723695c750858b57fd1_76186169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7785723695c750858b57fd1_76186169',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_312790205c750858b57fd6_65330463',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_8916390895c750858b57fd2_50936517',
  ),
  'product_list' => 
  array (
    0 => 'Block_11191592505c750858b57fd7_82340947',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_16973449425c750858b7f0d8_59164572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <section id="products">
        <?php echo htmlspecialchars(print_r($_smarty_tpl->tpl_vars['listing']->value), ENT_QUOTES, 'UTF-8');?>

            <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
                <div id="">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_312790205c750858b57fd6_65330463', 'product_list_top', $this->tplIndex);
?>

                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8916390895c750858b57fd2_50936517', 'product_list_active_filters', $this->tplIndex);
?>

                <div id="product_list" class="product_list item-gutter-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_gutterwidth']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>products-list-in-column<?php } else { ?>products-list-in-row<?php }?> products-list-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_productperrow']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11191592505c750858b57fd7_82340947', 'product_list', $this->tplIndex);
?>

                </div>
                <div id="js-product-list-bottom">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16973449425c750858b7f0d8_59164572', 'product_list_bottom', $this->tplIndex);
?>

                </div>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </section>
    </section>
<?php
}
}
/* {/block 'content'} */
}
