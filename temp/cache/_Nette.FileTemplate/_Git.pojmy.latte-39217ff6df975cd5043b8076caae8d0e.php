<?php //netteCache[01]000377a:2:{s:4:"time";s:21:"0.03408000 1327847374";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:55:"/Volumes/htdocs/prednasky/app/templates/Git/pojmy.latte";i:2;i:1327847346;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/pojmy.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'merml9c780')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb49eb48145c_content')) { function _lb49eb48145c_content($_l, $_args) { extract($_args)
?>

	<h1>Git - teorie - základní pojmy</h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:git")) ?>
"><< Historie</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:pouziti")) ?>
">Použití >></a>
	<hr />
	
	<div class="obsah">

	<ul>
		<li>Repository - databáze, obsahující historii projektu a větví</li>
		<li>Working copy - lokální adresář, kde spravujeme projekt</li>
		<li>Master / Trunk - hlavní větev</li>
		<li>Head - ukazatel na revizi</li>
		<li>Revize - konkrétní záznam historie soubor/projektu v čase</li>
		<li>Tag - označení revize</li>
		<li>Branch / Větev - Paralelní a nezávislá varianta obsahu</li>
		<li>Merge - sloučení varianty i nekolik variant obsahu</li>
		<li>Commit - Uložení vybranného obsahu do databáze repozitáře</li>
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
