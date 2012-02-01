<?php //netteCache[01]000379a:2:{s:4:"time";s:21:"0.33523600 1327833239";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:57:"/Volumes/htdocs/prednasky/app/templates/Git/default.latte";i:2;i:1327833238;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/default.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '1dpwlms999')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb9f60ecefc9_content')) { function _lb9f60ecefc9_content($_l, $_args) { extract($_args)
?>

	<h1>Git - teorie</h1>
	<hr />
	
	<div class="obsah">
	
		<h2>Fakt nějak dlouhý text, který bude odpovídat danému tématu</h2>
		<h3>Doprovodný text</h3>
		<h2>Trocha teorie</h2>
		<h3>Doprovodný text</h3>
		<h2>Trocha teorie</h2>
		<h3>Doprovodný text</h3>
		<h2>Trocha teorie</h2>
		<h3>Doprovodný text</h3>
		<h2>Trocha teorie</h2>
		<h3>Doprovodný text</h3>
		<h2>Trocha teorie</h2>
		<h3>Doprovodný text</h3>
	
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
