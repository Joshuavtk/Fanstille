<?php
/* Smarty version 3.1.30, created on 2017-06-04 03:04:32
  from "E:\Bewijzenmap_school\p1.4\proj\Fanstille\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59335ca02dd411_40694890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9e292e7aac8555cf98dc1500618b699a3d3b62b' => 
    array (
      0 => 'E:\\Bewijzenmap_school\\p1.4\\proj\\Fanstille\\views\\index.tpl',
      1 => 1496538271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59335ca02dd411_40694890 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="wrap">
    <section>
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

    </section>
</div>

<?php }
}
