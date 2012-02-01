<?php //netteCache[01]000381a:2:{s:4:"time";s:21:"0.39704000 1327847750";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"/Volumes/htdocs/prednasky/app/templates/Git/instalace.latte";i:2;i:1327847749;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/instalace.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'v0tzzyq5js')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbcba76feb5e_content')) { function _lbcba76feb5e_content($_l, $_args) { extract($_args)
?>

	<h1>Git - instalace</h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:tri")) ?>
"><< Tři stavy</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:nastaveni")) ?>
">Nastavení >></a>
	<hr />
	
	<div class="obsah">

	<h2>Stáhněte z: http://git-scm.com/</h2>
	<p>
		<img src="<?php echo htmlSpecialChars($basePath) ?>/images/download.png" />
	</p>
	<p>
		Identický na win, lin, osx.
	</p>


	</div>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extends) ? FALSE : $template->_extends; unset($_extends, $template->_extends);


if ($_l->extends) {
	ob_start();
} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if (!$_l->extends) { call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()); }  
// template extending support
if ($_l->extends) {
	ob_end_clean();
	Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
