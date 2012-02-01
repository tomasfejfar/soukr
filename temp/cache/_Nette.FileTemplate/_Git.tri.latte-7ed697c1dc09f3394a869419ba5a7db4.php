<?php //netteCache[01]000375a:2:{s:4:"time";s:21:"0.93200500 1327847284";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:53:"/Volumes/htdocs/prednasky/app/templates/Git/tri.latte";i:2;i:1327847284;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/tri.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'yg59decnn0')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb9bc5cf2b65_content')) { function _lb9bc5cf2b65_content($_l, $_args) { extract($_args)
?>

	<h1>Git - tři stavy</h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:pridava")) ?>
"><< Přidává jen data</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:instalace")) ?>
">Instalace >></a>
	<hr />
	
	<div class="obsah">

	<h2>Tři stavy pro zapisované soubory</h2>
	<ul>
		<li>
			Zapsáno (commited)
		</li>
		<li>
			Změněno (modified)
		</li>
		<li>
			Připraveno k zapsání (staged)
		</li>
	</ul>
		
	<p class="minus">
		Konec <u>úvodní</u> teorie !!!
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
