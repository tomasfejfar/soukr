<?php //netteCache[01]000376a:2:{s:4:"time";s:21:"0.77226500 1327860382";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:54:"/Volumes/htdocs/prednasky/app/templates/Git/tags.latte";i:2;i:1327860358;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/tags.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'z91g4awpbf')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb0a0e31485d_content')) { function _lb0a0e31485d_content($_l, $_args) { extract($_args)
?>

	<h1>Git - Značky </h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:push")) ?>
"><< Odesílání práce</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:vetve")) ?>
">Větve >></a>
	<hr />
	
	<div class="obsah">

	<h2>$ git tag</h2>
		<ul>
			<li>v abecedním pořadí</li>
			<li>podle konkrétní masky</li>
		</ul>
	<h2>$ git tag -a v1.4 -m 'my version 1.4'</h2>
		<ul>
			<li>anotovaná značka, kontrolní součet parametrů (viz níže)</li>
			<li>autor značky (tagger), e-mail, datum, vlastní zpráva, mohou být podepsány (signed),
				ověřeny (verified)</li>
		</ul>
	<h2>$ git tag</h2>
	<h2>$ git show v1.4</h2>
	<h2>$ git tag v1.4-lw</h2>
		<p>
			prostá značka, kontrolní součet revize uložený v souboru
		</p>
	<h2>$ git tag -a v1.2 9fceb02</h2>
	<h2>$ git push origin v1.4</h2>
	<h2>$ git push origin --tags</h2>

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
