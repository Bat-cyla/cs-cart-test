<?php
/* Smarty version 4.1.1, created on 2024-05-07 20:38:43
  from '/app/www/design/backend/templates/addons/call_requests/settings/info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_663a6723191640_66467858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '511e607ee1bfd95fa57a187f7504e8a5de83ed0d' => 
    array (
      0 => '/app/www/design/backend/templates/addons/call_requests/settings/info.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663a6723191640_66467858 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></p>
    </div>

</div><?php }
}