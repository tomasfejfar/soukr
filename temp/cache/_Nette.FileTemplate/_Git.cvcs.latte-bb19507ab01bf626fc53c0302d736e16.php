<?php //netteCache[01]000376a:2:{s:4:"time";s:21:"0.80769500 1327840683";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:54:"/Volumes/htdocs/prednasky/app/templates/Git/cvcs.latte";i:2;i:1327840663;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/cvcs.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'q5vwhqw16n')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2829af9741_content')) { function _lb2829af9741_content($_l, $_args) { extract($_args)
?>

	<h1>Git - teorie - CVCS</h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:teorie")) ?>
"><< Teorie</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:dcvs")) ?>
">DCVS >></a>
	<hr />
	
	<div class="obsah">

	<h2>Centralizované systémy správy verzí</h2>
		<ul class="plus">
			<li>Spolupráce s dalšími spolupracovníky</li>
			<li>CVS, Subversion, Perforce</li>
			<li>Z centrálního úložiště si data ztahují ostatní klienti</li>
			<li>Nástroje, diff, merge, do <u>určité</u> míry vím co dělají ostatní, ...</li>
		</ul>

		<ul class="minus">
			<li>Centrální úložiště - výpadek jedinného místa - připojení k internetu</li>
			<li>Centrální úložiště - zníčení diskového úložiště - ztráta projektu</li>
			<li>Operace jsou celkem složité, vlastní omyly</li>
			<li>Drtivá část operací je on-line</li>
		</ul>
		<pre>

		                                     +-----------------------------------+
		                                     |                                   |
		                                     |    Databáze verzí na serveru      |
		                                     |                                   |
		   +-------------------------+       |                                   |
		   |Počítač A - lokální kopie| &lt;----+|    Revize 1  +                    |
		   +-------------------------+       |              |                    |
		                                     |              |                    |
		   +-------------------------+       |              |                    |
		   |Počítač B - lokální kopie| &lt;----+|    Revize 2  |                    |
		   +-------------------------+       |              |                    |
		                                     |              |                    |
		                                     |              |                    |
		                                     |    Revize 3  v                    |
		                                     |                                   |
		                                     |                                   |
		                                     +-----------------------------------+
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
