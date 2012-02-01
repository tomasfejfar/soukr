<?php //netteCache[01]000378a:2:{s:4:"time";s:21:"0.53461600 1327846323";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:56:"/Volumes/htdocs/prednasky/app/templates/Git/revize.latte";i:2;i:1327846307;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/revize.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'v9qquyoagl')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb8f4874aa8b_content')) { function _lb8f4874aa8b_content($_l, $_args) { extract($_args)
?>

	<h1>Git - Revize</h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:snimky")) ?>
"><< Snímky</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:revize")) ?>
">Revize >></a>
	<hr />
	
	<div class="obsah">

	<h2>Sha1 hash - identifikace operace</h2>
	<p>
		Než je cokoli v databázi Gitu uloženo, je proveden kontrolní součet, který je pak
		použit k označení dané operace. Není možné v Gitu s čímkoli hýbat, aniž by o tom
		Git nevěděl.
		Git neukládá v databázi soubory podle názvu, ale podle otisku SHA-1 jeho obsahu.
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
