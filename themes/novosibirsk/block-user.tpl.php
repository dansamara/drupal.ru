<?php
// $Id: block.tpl.php,v 1.4 2007/09/01 05:42:48 dries Exp $

/**
 * @file block.tpl.php
 *
 * Theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $block->content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: This is a numeric id connected to each module.
 * - $block->region: The block region embedding the current block.
 *
 * Helper variables:
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 */
 
global $user;
if($user->uid == 0) {
?>
<div id="login-<?php print $block->delta ?>" class="login-block">                                                                          
	<h2><?php print $block->subject ?></h2>
		<div id="login-block-wrapper">
			<?php print $block->content ?>
		</div>
</div>
<?php
} else {
?>	
<div id="login-<?php print $block->delta ?>" class="login-block">
	<h2><?php print $block->subject ?></h2>
	<div class="content"><?php print $block->content ?></div>
</div>
<?php
}
?>