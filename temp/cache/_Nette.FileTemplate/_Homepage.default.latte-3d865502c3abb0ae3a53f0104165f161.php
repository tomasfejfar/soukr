<?php //netteCache[01]000384a:2:{s:4:"time";s:21:"0.24067600 1327836400";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:62:"/Volumes/htdocs/prednasky/app/templates/Homepage/default.latte";i:2;i:1327836399;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Homepage/default.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'em5939pf0r')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb6567e8c3ec_content')) { function _lb6567e8c3ec_content($_l, $_args) { extract($_args)
?>

	<h1>@spaghetty_code</h1>

	<h3>@RDPanek</h3>

	<hr />

	<h2>Seznam materiálů</h2>

	<ol>
		<li><h3>Git</h3></li>
		<p><a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:teorie")) ?>
">vstoupit</a></p>

		<li><h3>Použití</h3></li>
		<p>
			<code>
				<h2>Fakt nějak dlouhý text, který bude odpovídat danému tématu</h2>
				<h3>Doprovodný text</h3>
				<ul class="plus">
					<li>hhhh</li>
					<li>hhhh</li>
				</ul>

				<ul class="minus">
					<li>hhhh</li>
					<li>hhhh</li>
				</ul>
			</code>
			<a href="http://www.asciiflow.com/" target="_blank">http://www.asciiflow.com/</a>
		<pre>
		                                    c8      c9     c9

		                                    +---------------+   tematicka_vetev
		                                    |
		   +--------------------------------+----------------&gt;   master

		   c1      c2      c3      c4      c5      c6      c7</pre>
		</p>

		
	</ol>
	<hr />


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
