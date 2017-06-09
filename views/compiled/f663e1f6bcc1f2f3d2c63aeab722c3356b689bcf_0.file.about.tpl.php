<?php
/* Smarty version 3.1.30, created on 2017-06-03 00:23:14
  from "E:\Bewijzenmap_school\p1.4\bap\MyBandV_M\MyBandV_M\views\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5931e5522b7632_63337388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f663e1f6bcc1f2f3d2c63aeab722c3356b689bcf' => 
    array (
      0 => 'E:\\Bewijzenmap_school\\p1.4\\bap\\MyBandV_M\\MyBandV_M\\views\\about.tpl',
      1 => 1496230074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5931e5522b7632_63337388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="wrap">
    <section>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about_list']->value, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
?>
            <article>
                <h1> <?php echo $_smarty_tpl->tpl_vars['x']->value['title'];?>
 </h1>
                <content> <?php echo $_smarty_tpl->tpl_vars['x']->value['content'];?>
 </content>
            </article>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </section>
</div>

<?php }
}
