<?php
/* Smarty version 3.1.39, created on 2021-06-02 11:00:28
  from '/Users/paulmarechal/Sites/tests/www/PrestaShop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b748ac0ad6b5_24011058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '589f46086e2e0f736e6d8fb7a1fa415e92b3dbf1' => 
    array (
      0 => '/Users/paulmarechal/Sites/tests/www/PrestaShop/themes/classic/templates/index.tpl',
      1 => 1622473602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b748ac0ad6b5_24011058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21333573160b748ac0a3625_03880301', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_178927221160b748ac0a4912_31590503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_93644044860b748ac0a7eb2_50128079 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_209546363360b748ac0a6b95_31700315 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93644044860b748ac0a7eb2_50128079', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21333573160b748ac0a3625_03880301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_21333573160b748ac0a3625_03880301',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_178927221160b748ac0a4912_31590503',
  ),
  'page_content' => 
  array (
    0 => 'Block_209546363360b748ac0a6b95_31700315',
  ),
  'hook_home' => 
  array (
    0 => 'Block_93644044860b748ac0a7eb2_50128079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178927221160b748ac0a4912_31590503', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209546363360b748ac0a6b95_31700315', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
