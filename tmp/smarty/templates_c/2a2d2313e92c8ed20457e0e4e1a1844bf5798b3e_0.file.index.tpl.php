<?php
/* Smarty version 3.1.38, created on 2022-11-11 13:44:26
  from 'C:\html\rostya-eshop\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_636e43aab032d2_04653662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a2d2313e92c8ed20457e0e4e1a1844bf5798b3e' => 
    array (
      0 => 'C:\\html\\rostya-eshop\\views\\default\\index.tpl',
      1 => 1668170665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:leftColumn.tpl' => 1,
  ),
),false)) {
function content_636e43aab032d2_04653662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
<h1 class="text-center">My shop - Интернет магазин</h1>
<main id="main" class="main d-flex justify-content-between">


    
    <?php $_smarty_tpl->_subTemplateRender('file:leftColumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section id="mainContent" class="mainContent">

        <div>
            center Main content
        </div>

    </section>

    <aside>
        12312
    </aside>
</main>


<?php }
}
