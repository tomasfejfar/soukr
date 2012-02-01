<?php //netteCache[01]000376a:2:{s:4:"time";s:21:"0.57288800 1327859392";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:54:"/Volumes/htdocs/prednasky/app/templates/Git/push.latte";i:2;i:1327859364;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/push.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'i2hiobz96b')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb11f7b840cf_content')) { function _lb11f7b840cf_content($_l, $_args) { extract($_args)
?>

	<h1>Git - odesílání práce </h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:vzdalene")) ?>
"><< Vzdálené repozitáře</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:tags")) ?>
">Značky >></a>
	<hr />
	
	<div class="obsah">

	<h2>$ git push origin master</h2>
	<ul>
		<li>nastavené sledování s clone</li>
		<li>práva na zápis</li>
		<li>není origin změněn od posledního pull</li>
	</ul>
	<h2>$ git remote show origin</h2>
	<p>
		prohlížení vzdálených repozitářů
	</p>
	<h2>$ git remote vetevA vetevB</h2>
	<h2>$ git remote rm vetevA</h2>

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
