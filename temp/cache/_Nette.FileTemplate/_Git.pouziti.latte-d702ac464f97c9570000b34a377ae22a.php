<?php //netteCache[01]000379a:2:{s:4:"time";s:21:"0.18823600 1327844951";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:57:"/Volumes/htdocs/prednasky/app/templates/Git/pouziti.latte";i:2;i:1327844881;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/pouziti.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ma3pm9lqzx')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb95ea5b43b2_content')) { function _lb95ea5b43b2_content($_l, $_args) { extract($_args)
?>

	<h1>Git - teorie - případy využití</h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:pojmy")) ?>
"><< Pojmy</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:snimky")) ?>
">Snímky >></a>
	<hr />
	
	<div class="obsah">

	<p>
		Potřebuji mít historii své práce bezpečně uloženou i mimo počítač a chci se kdykoli vrátit k jakékoli
		verzi / revizi svého projektu.
	</p>
	<p>
		Potřebuji sdílet práci s někým jiným. Potřebuji sloučit řízeně změny s prací někoho jiného.
	</p>
	<p>
		Potřebuji změnit / odstranit některé části obsahu a jiné zachovat.
	</p>
	<p>
		Potřebuji snadno vyzkoušet jiné řešení mé práce, ale nechci ovlivnit historii obsahu.
		Potřebuji udržovat paralelní stav obsahu, ale mít možnost do každé zasáhnout a částečně jí
		slučovat.
	</p>
	<p>
		Potřebuji si prohlédnout, jakými změnami prošel obsah nebo jeho část. Potřebuji zibrazit rozdíl
		mezi revizemi a chci zjisti kdo danné změny provedl a proč, a kdo např. sloučil do hlavní větve.
	</p>
	<p>
		Potřebuji aktalizovat svůj projekt na ftp specifikovanou revizí.
	</p>
	<p>
		Je toho mnohem víc, co Git nabízí :-)
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
