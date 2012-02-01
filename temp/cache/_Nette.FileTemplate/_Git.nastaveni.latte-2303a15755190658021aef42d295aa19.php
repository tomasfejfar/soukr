<?php //netteCache[01]000381a:2:{s:4:"time";s:21:"0.56402300 1327849736";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"/Volumes/htdocs/prednasky/app/templates/Git/nastaveni.latte";i:2;i:1327849734;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/nastaveni.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'azcajmv3xk')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc96eafcedd_content')) { function _lbc96eafcedd_content($_l, $_args) { extract($_args)
?>

	<h1>Git - nastavení</h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:instalace")) ?>
"><< Instalace</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:inicializace")) ?>
">Inicializace >></a>
	<hr />
	
	<div class="obsah">

	<h2>Totožnost uživatele</h2>
		<p>
			<code>
				$ git config --global user.name "Radim Daniel Pánek" <br />
				$ git config --global user.email rdpanek@gmail.com
			</code>
		</p>

	<h2>Editor a nástroj diff</h2>
		<p>
			<code>
				$ git config --global core.editor emacs <br />
				$ git config --global merge.tool vimdif
			</code>
		</p>

	<h2>Kontrola provedeného nastavení</h2>
		<p>
			<code>
				$ git config --list
			</code>
			<br /><br />
			Nebo pro konkrétní položku
			<br /><br />
			<code>
				$ git config user.name
			</code>
		</p>
	
	<h2>Kde hledat pomoc</h2>
		<p>
			<code>
				$ git help [příkaz] <br />
				$ git [příkaz] --help <br />
				$ man git-[příkaz]
			</code>
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
