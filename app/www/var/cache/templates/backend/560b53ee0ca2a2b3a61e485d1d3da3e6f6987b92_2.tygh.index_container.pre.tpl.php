<?php
/* Smarty version 4.1.1, created on 2024-05-07 20:38:48
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/index_container.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_663a67281113f3_68075491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '560b53ee0ca2a2b3a61e485d1d3da3e6f6987b92' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/index_container.pre.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663a67281113f3_68075491 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->_assignInScope('html_class', ((string)$_smarty_tpl->tpl_vars['html_class']->value)." te-theme-editor-active" ,false ,2);
}
}
}