<?php //netteCache[01]000382a:2:{s:4:"time";s:21:"0.50667100 1328094078";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:60:"/Volumes/htdocs/prednasky/app/templates/Git/odstraneni.latte";i:2;i:1328094069;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/odstraneni.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 's19nld7hr9')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb6db421076a_content')) { function _lb6db421076a_content($_l, $_args) { extract($_args)
?>

	<h1>Git - Odstranění souborů </h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:commit")) ?>
"><< Zapisování změn</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:presouvani")) ?>
">Přesouvání souborů >></a>
	<hr />
	
	<div class="obsah">

	<h2>$ git rm</h2>

	<h2>$ git rm -f</h2>
	<p>
		Odstranění souboru pokud je v oblasti připravených změn.
	</p>

	<h2>$ git rm --cached</h2>
	<p>
		Ukončení sledování souboru
	</p>

	<h2>$ git rm log/\*.log</h2>
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
