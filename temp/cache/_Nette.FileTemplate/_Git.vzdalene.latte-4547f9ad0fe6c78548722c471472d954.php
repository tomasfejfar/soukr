<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.95349000 1328095615";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"/Volumes/htdocs/prednasky/app/templates/Git/vzdalene.latte";i:2;i:1328095327;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/vzdalene.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '3vdddxgq5u')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb3bf1d304b_content')) { function _lbb3bf1d304b_content($_l, $_args) { extract($_args)
?>

	<h1>Git - vzdálené repozitáře </h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:ruseni")) ?>
"><< Rušení změn</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:push")) ?>
">Odesílání práce do vzdáleného repozitáře >></a>
	<hr />
	
	<div class="obsah">

	<h2>$ git remote</h2>
	<p>
		Zjistit, jaké vzdálené servery máte nakonfigurovány.<br />
		Origin je výchozí název , který Git dává serveru, z nějž jste repozitář klonovali.
	</p>
	<h2>-v</h2>
	<p>
		Zobrazení url
	</p>

	<h2>$ git remote add nazev</h2>
	<p>
		Přidání nového vzdáleného repozitáře
	</p>

	<h2>$ git fetch nazev</h2>
	<p>
		Stáhne veškerá data, která ještě nemáte ale nesloučí je - získání referencí na větve
	</p>
	<h2>$ git pull</h2>
	<p>
		vyzvedne a začlení vzdálenou větev do Vaší lokální větve
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
