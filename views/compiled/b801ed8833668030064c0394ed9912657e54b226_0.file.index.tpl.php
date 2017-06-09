<?php
/* Smarty version 3.1.30, created on 2017-06-08 12:35:51
  from "E:\Bewijzenmap_school\p1.4\proj\Fanstille\views\articles\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593928870455c0_79585122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b801ed8833668030064c0394ed9912657e54b226' => 
    array (
      0 => 'E:\\Bewijzenmap_school\\p1.4\\proj\\Fanstille\\views\\articles\\index.tpl',
      1 => 1496918149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593928870455c0_79585122 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="wrap">
    <div class="article-wrap">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles_list']->value, 'one_article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one_article']->value) {
?>
            <article>
                <h1> <?php echo $_smarty_tpl->tpl_vars['one_article']->value['title'];?>
 </h1>
                <div> <?php echo $_smarty_tpl->tpl_vars['one_article']->value['content'];?>

                    <div class="imageDiv">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['filePath']->value;
echo $_smarty_tpl->tpl_vars['one_article']->value['image'];?>
" class="articleImage">
                    </div>
                </div>
            </article>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>

<?php }
}
