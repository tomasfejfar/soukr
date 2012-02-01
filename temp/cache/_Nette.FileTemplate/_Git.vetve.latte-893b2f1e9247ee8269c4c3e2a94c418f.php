<?php //netteCache[01]000377a:2:{s:4:"time";s:21:"0.64858000 1327863850";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:55:"/Volumes/htdocs/prednasky/app/templates/Git/vetve.latte";i:2;i:1327863815;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/vetve.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'jg53xsjjnl')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2dd10ddeff_content')) { function _lb2dd10ddeff_content($_l, $_args) { extract($_args)
?>

	<h1>Git - větve </h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:tags")) ?>
"><< Značky</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:slucovani")) ?>
">Slučování >></a>
	<hr />
	
	<div class="obsah">

	Větvení znamená, odloučit se od hlavní linie vývoje a pokračovat v práci, aniž byste hlavní linii
	zanášely.
	<ul>
		<li>revize má 0 a více předků</li>
	</ul>
	<h2>$ git commit</h2>
	<ul>
		<li>kontrolní součet každého adresáře - kořenového adresáře => uložení objektu stromu v repozitáři Git</li>
		<li>vytvoření objektu revize s metadaty a ukazatelem na kořenový strom projektu</li>
		<li>jeden blob objekt - obsah souboru</li>
		<li>strom objekt - obsah adresáře a udává, které názvy souborů jsou uloženy jako který blob</li>
		<li>jednu revizi - s ukazatelem na kořenový strom a se všemi metadaty revize</li>
	</ul>
		<pre>

		    92ee2                 92ee2                     911e7


		   +------------------+  +-----------------------+ +-----------------+
		   |commit     hodnota|  |tree       hodnota     | |obsah souborA.txt|
		   |                  |  |                       | +---+-------------+
		   |strom        92ee2|  |blob  911e7 SouborA.txt|     |
		   |                  |  +---+-------------------+-----+
		   |autor         dan |      |
		   |                  +------+
		   +------------------+
		</pre>
	<ul>
		<li>
			nová revize obsahuje ukazatel na revizi, jež jí bezprostředně předcházela
		</li>
	</ul>
		<pre>
		 +-----------------------+   +--------------------------+
		 | commit       hodnota  |   |  commit        hodnota   |
		 |                       |   |                          |
		 | strom         92ec2   |   |  strom           184ca   |
		 |                       |   |                          |
		 | autor         dan     |   |  rodič           98ca9   |
		 |                       |   |                          |
		 | autor revize  dan     |   |  autor revize    dan     |
		 |                       |   |                          |
		 +-----------------------+   +--------------------------+
		 |                       |   |                          |
		 | obsah souborA.txt     |   |  změna obs. souborA.txt  |
		 |                       |   |                          |
		 +--------+----------^---+   +---+---------+------------+
		          |          |           |         |
		          |          +-----------+         |
		     +----v---+                       +----v---+
		     |snímek A|  98ca9                |snímek B|  34ac2
		     +--------+                       +--------+
		</pre>
		
		<h2>master - výchozí název</h2>
		<p>
			Větev v systému Git je snadno přenositelným ukazatelem na danou revizi.
			Při prvním zápisu dostanete hlavní větev, která bude ukazovat na poslední revizi.
			Pokaždé, kdy se zapíše nová revize, větev se automaticky posune vpřed.
		</p>
		<pre>
		                              +------------+
		                              |hlavní větev|
		                              +--+---------+
		                                 |
		                                 |
		    +-----+      +-----+      +--v--+
		    |98ca9&lt;------+34ac2&lt;------+f30ab|
		    +--+--+      +--+--+      +--+--+
		       |            |            |
		       |            |            |
		    +--v----+    +--v----+    +--v----+
		    |SnímekA|    |SnímekB|    |SnímekC|
		    +-------+    +-------+    +-------+
		</pre>
		<h2>$ git branch test</h2>
		<p>
			Vytvořením větve na dané revizi, se vytvoří další ukazatel, se kterým lze hýbat.
		</p>
		<pre>
		                              +------------+
		                              |hlavní větev|
		                              +--+---------+
		                                 |
		                                 |
		    +-----+      +-----+      +--v--+
		    |98ca9&lt;------+34ac2&lt;------+f30ab|
		    +--+--+      +--+--+      +--+--+
		                                 |
		                                 |
		                              +--v----+
		                              |test   |
		                              +-------+
		</pre>
		<h2>HEAD</h2>
		<p>
			Speciální ukazatel, díky kterému Git pozná, na které větvi se nacházíte
		</p>
		<pre>
		                               +----+
		                               |HEAD|
		                               +--+-+
		                                  |
		                                  |
		                               +--v---------+
		                               |hlavní větev|
		                               +--+---------+
		                                  |
		                                  |
		     +-----+      +-----+      +--v--+
		     |98ca9&lt;------+34ac2&lt;------+f30ab|
		     +--+--+      +--+--+      +--+--+
		                                  |
		                                  |
		                               +--v----+
		                               |test   |
		                               +-------+
		</pre>
		<h2>$ git checkout test</h2>
		<pre>
			                       +--v---------+
		                               |hlavní větev|
		                               +--+---------+
		                                  |
		                                  |
		     +-----+      +-----+      +--v--+
		     |98ca9&lt;------+34ac2&lt;------+f30ab|
		     +--+--+      +--+--+      +--+--+
		                                  |
		                                  |
		                               +--v----+
		                               |test   |
		                               +--^----+
		                                  |
		                                  |
		                               +--+-+
		                               |HEAD|
		                               +--+-+
		</pre>
		<h2>provedená revize na větvi test</h2>
		<pre>

		                               +--v---------+
		                               |hlavní větev|
		                               +--+---------+
		                                  |
		                                  |
		     +-----+      +-----+      +--v--+      +-----+
		     |98ca9&lt;------+34ac2&lt;------+f30ab&lt;------+c2b9e|
		     +--+--+      +--+--+      +--+--+      +-----+
		                                               |
		                                               |
		                                            +--v----+
		                                            |test   |
		                                            +--^----+
		                                               |
		                                               |
		                                            +--+-+
		                                            |HEAD|
		                                            +--+-+
		</pre>
		<h2>$ git checkout master a provedená revize</h2>
		<pre>
							    +--+-+
		                                            |HEAD|
		                                            +--+-+
		                                               |
		                                            +--v---------+
		                                            |hlavní větev|
		                                            +--+---------+
		                                               |
		                                            +--v--+
		                                  +---------+87a2b|
		                                  |         +-----+
		     +-----+      +-----+      +--+--+
		     |98ca9&lt;------+34ac2&lt;------+f30ab|
		     +--+--+      +--+--+      +--+--+
		                                  |         +-----+
		                                  +---------+c2b9e|
		                                            +-----+
		                                               |
		                                               |
		                                            +--v----+
		                                            |test   |
		                                            +--^----+
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
