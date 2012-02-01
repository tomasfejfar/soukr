<?php //netteCache[01]000381a:2:{s:4:"time";s:21:"0.29712800 1328097833";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"/Volumes/htdocs/prednasky/app/templates/Git/slucovani.latte";i:2;i:1328097831;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/slucovani.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'w7hr6gme9v')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb7f99f0498b_content')) { function _lb7f99f0498b_content($_l, $_args) { extract($_args)
?>

	<h1>Git - základní slučování větví </h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:vetve")) ?>
"><< Větve</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:konflikty")) ?>
">Základní konflikty při slučování >></a>
	<hr />
	
	<div class="obsah">

	<p>
		Při přepínání větví, pokud máte čistý pracovní stav. Existují způsoby, jak se tím nezabývat. Pokud
		by v oblasti připravených změn byli nějaké změny - Git by přepnutí nedovolil.
	</p>
	<h2>$ git checkout -b hotfix</h2>
	<p>
		provedení commitů a přepnutí zpět na master
	</p>
		<pre>		                  +------+
		                  |master|
		                  +--+---+
		                     |
		  +----+  +----+  +--+-+
		  | C0 &lt;--+ C1 &lt;--+ C2 |
		  +----+  +----+  +--+-+
		                     |    +----+
		                     +----+ C3 |
		                          +--+-+
		                             |
		                          +--+---+
		                          |hotfix|
		                          +------+
		</pre>

	<h2>Rychle v před</h2>
	<p>
		<ul>
			<li>
				$ git checkout master
			</li>
			<li>
				$ git merge hotfix
			</li>
			<li>
				Fast forward
			</li>
		</ul>
	</p>
		<pre>		                  +------+
		                  |master|
		                  +--+---+
		                     |
		  +----+  +----+  +--+-+  +----+
		  | C0 &lt;--+ C1 &lt;--+ C2 &lt;--+ C3 |
		  +----+  +----+  +--+-+  +--+-+
		                             |
		                          +--+---+
		                          |hotfix|
		                          +------+
		</pre>

		<pre>		                          +------+
		                          |master|
		                          +--+---+
		                             |
		  +----+  +----+  +--+-+  +--v-+
		  | C0 &lt;--+ C1 &lt;--+ C2 &lt;--+ C3 |
		  +----+  +----+  +--+-+  +--+-+
		                             |
		                          +--+---+
		                          |hotfix|
		                          +------+
		</pre>
		<h2>$ git branch -d hotfix</h2>
		<h2>třícestné sloučení</h2>
		<pre>		                                +------+
		                                |master|
		                                +--+---+
		                                   |
		  +----+  +----+  +--+-+  +--v-+ +----+
		  | C0 &lt;--+ C1 &lt;--+ C2 &lt;--+ C3 &lt;-+ C7 |
		  +----+  +----+  +--+-+  +--+-+ +----+
		                             |
		                             |
		                             |   +----+  +----+
		                             +---+ C8 &lt;--+ C9 |
		                                 +----+  +--+-+
		                                            |
		                                          +-+---+
		                                          |test2|
		                                          +-----+
		</pre>
		<pre>		                                                +------++-+---+
		                                                |master||test2|
		                                                +--+---++-----+
		                                                   |
		  +----+  +----+  +--+-+  +--v-+ +----+          +----+
		  | C0 &lt;--+ C1 &lt;--+ C2 &lt;--+ C3 &lt;-+ C7 &lt;----------+ c6 |
		  +----+  +----+  +--+-+  +--+-+ +----+          +-+--+
		                             |                     |
		                             |                     |
		                             |   +----+  +----+    |
		                             +---+ C8 &lt;--+ C9 +----+
		                                 +----+  +--+-+
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
