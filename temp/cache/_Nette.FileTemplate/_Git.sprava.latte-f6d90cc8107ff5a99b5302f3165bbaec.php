<?php //netteCache[01]000378a:2:{s:4:"time";s:21:"0.02433900 1328125398";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:56:"/Volumes/htdocs/prednasky/app/templates/Git/sprava.latte";i:2;i:1328125395;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/sprava.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '1odttjjd9u')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lba3a899fcc7_content')) { function _lba3a899fcc7_content($_l, $_args) { extract($_args)
?>

	<h1>Git - správa větví </h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:konflikty")) ?>
"><< Základní konflikty při slučování větví</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:preskladani")) ?>
">Přeskládání >></a>
	<hr />
	
	<div class="obsah">

	<h2>$ git branch</h2>
		<code>
			* master<br />
			  test<br />
		</code>
	<h2>$ git branch -v</h2>
		<p>
			s poslední revizí
		</p>
	<h2>$ git branch --merged</h2>
		<p>
			které větve byly začleněny do větve, na které se nacházíte
		</p>
	<h2>$ git branch --no-merged</h2>
		<p>
			Pokus o odstranění větve, která nabyla začleněna bude neúspěšný.
		</p>
	<h2>$ git branch -D test</h2>

	<h2>Dlouhé větve</h2>
		<pre>
		 +------+
		 |  C1  +--------------------------------------------------&gt;   master
		 +--+---+
		    |   +----+ +----+ +----+  +----+
		    +---+ C2 | | C3 | | C4 |  | C5 +-----------------------&gt;   develop
		        +----+ +----+ +----+  +-+--+
		                                |
		                                |   +----+   +----+
		                                +---+ C6 |   | C7 +--------&gt;   topic
		                                    +----+   +----+
		</pre>

	<h2>Tématické větve</h2>
		<p>
			pro konkrétní účel
		</p>
		<pre>


		        topic3        master                topic2

		       +------+      +------+              +-----+
		       |  C13 |      |  C11 |    topic1    | C12 |
		       +---+--+      +---+--+              +--+--+
		           |             |                    |
		       +---v--+      +---v--+   +-----+    +--v-+
		       |  C9  |      |  C10 |   | C5  |    | C7 |
		       +--+---+      +---+--+   +--+--+    +--+-+
		          |              |         |          |
		          |          +---v--+    +-v--+    +--v-+
		          +----------+  C8  |    | C4 |    | C6 |
		                     +---+--+    +--+-+    +--+-+
		                         |          |         |
		                     +---v--+    +--v-+       |
		                     |  C2  +    + C3 +-------+
		                     +---+--+    +-+--+
		                         |         |
		                     +---v--+      |
		                     |  C1  +------+
		                     +---+--+
		                         |
		                     +---v--+
		                     |  C0  |
		                     +------+
		</pre>
		<h2>Vzdálené větve</h2>
		<p>
			Vzdálená větev je reference na stav větve ve vzdáleném repozitáři. Je to lokální větev, která nelze
			přesouvat. Přesouvají se automaticky při síťové komunikaci. Vzdálené větve se podobají záložkám.
		</p>
		<h2> origin / master</h2>
		<h2>$ git fetch origin</h2>
		<p>
			Zjistí který server je origin a vyzvedne zněj všechna data, která nemáte a aktualizuje Vaši lokální
			databázi.
		</p>
		<pre>		                    +---------------+
		                    |origin / master|
		                    +---+-----------+
		                        |
		 +------+ +------+  +---+--+
		 |  C1  | |  C2  |  |  C3  |
		 +------+ +------+  +---+--+
		                        |
		                    +---+--+
		                    |master|
		                    +------+
		</pre>
		<h2>$ git push origin vetev</h2>
		<p>
			Odeslání své lokální větve do vzdáleného repozitáře a vytvoření vzdálené větve.
		</p>
		<h2>$ git push origin vetev:novy_nazev</h2>
		<p>
			Vzdálená větev bude mít jiný název, než naše lokální.
		</p>
		<h2>$ git fetch </h2>
		<p>
			Nemáme automaticky k dispozici lokální, editovatelné kopie,pouze ukazatel origin/vetev.
		</p>
		<h2>$ git pull</h2>
		<p>
			Aktualizuje data ze vzdalene vetve do sve lokalni vetve
		</p>
		<h2>$ git merge origin/vetev</h2>
		<p>
			Máme k dispozici sice pouze ukazatel na vzdálenou větev, ale můžeme začlenit její data do naší větve.
		</p>
		
		<h2>Sledující větve</h2>
		<h2>$ git checkout -b vetev origin/vetev</h2>
		<p>
			Větev vetev je automaticky trackována se vzdálenou větví origin/vetev
		</p>
		<h2>$ git checkout --track origin/vetev</h2>
		<h2>$ git push origin :vzdalena_vetev</h2>
		<p>
			Smaže vzdálenou větev
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
