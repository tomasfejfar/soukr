<?php //netteCache[01]000375a:2:{s:4:"time";s:21:"0.68392900 1327843299";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:53:"/Volumes/htdocs/prednasky/app/templates/Git/git.latte";i:2;i:1327842960;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/git.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ym0q1ozh0k')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb4fc8fcd6b3_content')) { function _lb4fc8fcd6b3_content($_l, $_args) { extract($_args)
?>

	<h1>Git - teorie - historie</h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:dcvs")) ?>
"><< DCVCS</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:pojmy")) ?>
">Pojmy >></a>
	<hr />
	
	<div class="obsah">

	<h2>Vyvinula komunita vývojářů Linuxu ( zejména Linuse Torvaldse ) založených na poznatcích při
	používání systému BitKeeper</h2>
		<ul class="plus">
			<li>Rychlost</li>
			<li>Jednoduchý design</li>
			<li>Silná podpora nelineárního vývoje (tisíce paralelních větví)</li>
			<li>Plná distribuovatelnost - nezávislý na repozitáři</li>
			<li>Rozmanitá Workflow</li>
			<li>Interaktivní příprava revizí a editace historie</li>
			<li>Schopnost efektivně spravovat velké projekty, jako je linuxové jádro (rychlot a objem dat)</li>
		</ul>

		Git je extrémně rychlý, efektivně pracuje i s velkými projekty a nabízí skvělý systém větvení
		pro nelineární způsob vývoje. Používají jej vývojáři projektů, např.: Linux, Android, Rails, Nette, Apple, inc.
		<br />
		<a href="http://whygitisbetterthanx.gitfu.cz/" target="_blank">Proč je Git lepší než X?</a>



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
