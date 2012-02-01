<?php //netteCache[01]000378a:2:{s:4:"time";s:21:"0.60316900 1327846505";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:56:"/Volumes/htdocs/prednasky/app/templates/Git/snimky.latte";i:2;i:1327846383;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/snimky.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '642lyd80ny')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb6854ad1271_content')) { function _lb6854ad1271_content($_l, $_args) { extract($_args)
?>

	<h1>Git - snímky nikoli rozdíly</h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:pouziti")) ?>
"><< Použití</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:vypocet")) ?>
">Kontrolní výpočet >></a>
	<hr />
	
	<div class="obsah">

	<h2>Zapomeňte na to co víte - Git pracuje jinak</h2>
	<p>
		Většina ost. verzovacích systémů ukládá informace jako seznamy změn jednotlivých souborů - chápou je
		jako uložené sady souborů a seznamů změn souboru / projektu v čase.
	</p>
		<pre>
		   Revize 1      Revize 2      Revize 3      Revize 4     Revize 5
		   +-------------------------------------------------------------&gt;

		   Soubor A  +--&gt; C1 +-----------------------&gt; C2 +--------------&gt;

		   Soubor B  +-------------------------------&gt; C1 +-------&gt; C2 +-&gt;

		   Soubor C  +--&gt; C1 +---------&gt; C2 +--------&gt; C3 +--------------&gt;
		</pre>
	<p>
		Git chápe data projektu jako sadu snímků (= snapshots) vlastního malého systému souborů.
		Pokaždé když uložíte stav projektu, git v podstatě vyfotí, jak vypadají soubory projektu
		v daném okamžiku a uloží reference na tento snímek. Pokud nebyl některý soubor změněn,
		Git je neukládá znovu, ale pouze odkaz na předchozí snímek identického souboru.
	</p>
		<pre>
		   Revize 1      Revize 2      Revize 3      Revize 4     Revize 5
		   +-------------------------------------------------------------&gt;

		   Soubor A +---&gt; A1 +---------&gt; A1 +-------&gt; A2 +-------&gt; A2

		   Soubor B +---&gt; B  +---------&gt; B  +-------&gt; B  +-------&gt; B1

		   Soubor C +---&gt; C1 +---------&gt; C2 +-------&gt; C3 +-------&gt; C3
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
