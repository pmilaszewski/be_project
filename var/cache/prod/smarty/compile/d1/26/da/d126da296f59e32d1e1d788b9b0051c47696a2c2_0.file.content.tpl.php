<?php
/* Smarty version 3.1.33, created on 2022-12-03 15:44:19
  from '/var/www/prestashop/admin456vnsszt/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_638b60c3749765_63670743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd126da296f59e32d1e1d788b9b0051c47696a2c2' => 
    array (
      0 => '/var/www/prestashop/admin456vnsszt/themes/default/template/content.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b60c3749765_63670743 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
