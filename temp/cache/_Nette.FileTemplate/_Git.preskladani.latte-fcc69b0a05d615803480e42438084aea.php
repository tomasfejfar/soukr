<?php //netteCache[01]000383a:2:{s:4:"time";s:21:"0.96890000 1327879151";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:61:"/Volumes/htdocs/prednasky/app/templates/Git/preskladani.latte";i:2;i:1327879128;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/preskladani.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '623gogoj8n')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb6e05f6e753_content')) { function _lb6e05f6e753_content($_l, $_args) { extract($_args)
?>

	<h1>Git - Přeskládání </h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:sprava")) ?>
"><< Správa větví</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:vyber")) ?>
">Výběr revize >></a>
	<hr />
	
	<div class="obsah">

	<h2>Merge</h2>
		<pre>		                          +--+
		                      +---+C4|   master
		                      |   +--+
		   +----+  +----+  +--+-+
		   | C0 &lt;--+ C1 &lt;--+ C2 |
		   +----+  +----+  +--+-+
		                      |   +--+
		                      +---+C3|   topic
		                          +--+
		</pre>
		<pre>		                          +--+
		                      +---+C4+----+
		                      |   +--+    |
		   +----+  +----+  +--+-+        ++-+  +------+   +-----+
		   | C0 &lt;--+ C1 &lt;--+ C2 |        |C5|  |master|   |topic|
		   +----+  +----+  +--+-+        +-++  +------+   +-----+
		                      |   +--+     |
		                      +---+C3+-----+
		                          +--+
		</pre>
		<h2>přeskládání - rebasing</h2>
		<p>
			Příkaz rebase vezme všechny změny, které byli zapsány na jedné větvi, a nechá je znovu provést
			na jiné větvi.
		</p>
		<h2>$ git rebase master</h2>
		<pre>
		                                              topic

		   +----+  +----+  +--+-+  +----+   +----+    +----+
		   | C0 &lt;--+ C1 &lt;--+ C2 &lt;--+ C3 &lt;---+ C4 &lt;----+ C5 |
		   +----+  +----+  +--+-+  +----+   +----+    +----+

		                                    master
		</pre>
		<h2>$ git rebase --onto master server client</h2>
		<pre>


		    C0      C1      C2      C5      C6

		    +---------------+--------------------------------------&gt;   master
		                    |
		                    |       C3      C4      C7      C10
		                    |
		                    +-------+------------------------------&gt;   server
		                            |
		                            |       C8      C9
		                            |
		                            +-------+----------------------&gt;   client
		</pre>
		<pre>


		    C0      C1      C2      C5      C6      C8      C9

		    +---------------+--------------------------------------&gt;   master    client
		                    |
		                    |       C3      C4      C7      C10
		                    |
		                    +-------+------------------------------&gt;   server
		</pre>
		<p class="minus">
			Nepřeskládavejte revize, které jsou odeslány na server.
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
