<?php
/* Smarty version 3.1.39, created on 2021-06-02 11:00:28
  from '/Users/paulmarechal/Sites/tests/www/PrestaShop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b748ac0cc072_24693405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b60fb44d553b29e6c2d54e3ecd8be48a18693404' => 
    array (
      0 => '/Users/paulmarechal/Sites/tests/www/PrestaShop/themes/classic/templates/page.tpl',
      1 => 1622473602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b748ac0cc072_24693405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84536184960b748ac0bb127_19330425', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_61161594860b748ac0be8b4_78979455 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_96792256960b748ac0bcac4_82417036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61161594860b748ac0be8b4_78979455', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_207215427560b748ac0c4ec8_57632757 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_179517027960b748ac0c6a39_93353390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_107170538960b748ac0c3e52_34611018 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207215427560b748ac0c4ec8_57632757', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179517027960b748ac0c6a39_93353390', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_122487693660b748ac0c9871_80644489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_102269345960b748ac0c8b04_30362729 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122487693660b748ac0c9871_80644489', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_84536184960b748ac0bb127_19330425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_84536184960b748ac0bb127_19330425',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_96792256960b748ac0bcac4_82417036',
  ),
  'page_title' => 
  array (
    0 => 'Block_61161594860b748ac0be8b4_78979455',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_107170538960b748ac0c3e52_34611018',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_207215427560b748ac0c4ec8_57632757',
  ),
  'page_content' => 
  array (
    0 => 'Block_179517027960b748ac0c6a39_93353390',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_102269345960b748ac0c8b04_30362729',
  ),
  'page_footer' => 
  array (
    0 => 'Block_122487693660b748ac0c9871_80644489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96792256960b748ac0bcac4_82417036', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107170538960b748ac0c3e52_34611018', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102269345960b748ac0c8b04_30362729', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
