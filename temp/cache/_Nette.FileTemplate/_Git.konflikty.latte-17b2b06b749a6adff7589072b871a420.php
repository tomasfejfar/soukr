<?php //netteCache[01]000381a:2:{s:4:"time";s:21:"0.75769000 1327868524";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"/Volumes/htdocs/prednasky/app/templates/Git/konflikty.latte";i:2;i:1327868492;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/konflikty.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'he95jfbppk')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb4f7dada71a_content')) { function _lb4f7dada71a_content($_l, $_args) { extract($_args)
?>

	<h1>Git - konflikty při slučování </h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:slucovani")) ?>
"><< Základní slučování větví</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:sprava")) ?>
">Správa větví >></a>
	<hr />
	
	<div class="obsah">

	<code>
		Radim-Daniel-Paneks-MacBook-Pro:test-git rdpanek$ git merge test<br />
		Auto-merging SouborB.txt<br />
		CONFLICT (content): Merge conflict in SouborB.txt<br />
		Automatic merge failed; fix conflicts and then commit the result.<br />

	</code>
		<p>
			Obsah souboru SouborB.txt
		</p>
		<code>
			<<<<<<< HEAD<br />
			ahoj2<br />
			=======<br />
			ahoj1<br />
			>>>>>>> test<br />
			hello<br />
			tchus<br />

		</code>
		<h2>$ git add SouborB.txt</h2>

		<h2>$ git mergetool</h2>

		<h2> $ git commit</h2>
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
