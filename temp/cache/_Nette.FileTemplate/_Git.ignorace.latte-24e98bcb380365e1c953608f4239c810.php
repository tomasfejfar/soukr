<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.78611100 1327851234";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"/Volumes/htdocs/prednasky/app/templates/Git/ignorace.latte";i:2;i:1327851202;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/ignorace.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'x0nhggc784')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbfe54bbfd32_content')) { function _lbfe54bbfd32_content($_l, $_args) { extract($_args)
?>

	<h1>Git - ignorace </h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:stavy")) ?>
"><< Kontrola stavů souborů</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:diff")) ?>
">Diff >></a>
	<hr />
	
	<div class="obsah">

	<h2>.gitignore</h2>
		<ul>
			<li>
				Prázdné řádky nebo řádky začínajícím znakem # budou ignorovány
			</li>
			<li>
				Označení adresáře /
			</li>
			<li>
				! negace masky
			</li>
			<li>
				Zjednodušené regulární výrazy pro shell. * [abc] ? [0-9]
			</li>
		</ul>

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
