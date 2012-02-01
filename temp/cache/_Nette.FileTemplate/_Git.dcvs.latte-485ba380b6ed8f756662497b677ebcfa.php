<?php //netteCache[01]000376a:2:{s:4:"time";s:21:"0.85707300 1327840679";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:54:"/Volumes/htdocs/prednasky/app/templates/Git/dcvs.latte";i:2;i:1327840673;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/dcvs.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'v3s7efraug')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb30ae0534d1_content')) { function _lb30ae0534d1_content($_l, $_args) { extract($_args)
?>

	<h1>Git - teorie - DCVS</h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:cvcs")) ?>
"><< CVCS</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:git")) ?>
">Git >></a>
	<hr />
	
	<div class="obsah">

	<h2>Distribuované systémy správy verzí ( Distributed Version Control System) </h2>
		<ul class="plus">
			<li>Git, Mercurial, Bazaar, Darcs</li>
			<li>Stahování celého repozitáře, nejen poslední snímek revize</li>
			<li>Pokud dojde ke kolapsu serveru, lze jej obnovit od libovolného uživatele, který si celý repozitář
			naklonoval. Každý lokální klon je plnohodnotnou verzí repozitáře ze serveru.</li>
			<li>Drtivá část operací je off-line</li>
		</ul>
		<pre>
		+--------------------------------+
		|            Server              |
		|    c1      c2      c3      c4  |
		|    +------------------------&gt;  |
		+--------------------------------+
		             +     +
		             |     |
		+---------+  |     |  +---------+
		|Počítač A|  |     |  |Počítač B|
		|         |  |     |  |         |
		| c1 +    |+-+     +-+| c1 +    |
		|    |    |           |    |    |
		|    |    |           |    |    |
		| c2 |    |           | c2 |    |
		|    |    |           |    |    |
		|    |    |           |    |    |
		| c3 |    |           | c3 |    |
		|    |    |           |    |    |
		|    |    |           |    |    |
		| c4 v    |           | c4 v    |
		+---------+           +---------+
		</pre>


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
