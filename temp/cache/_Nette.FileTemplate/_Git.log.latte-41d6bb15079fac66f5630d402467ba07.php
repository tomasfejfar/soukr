<?php //netteCache[01]000375a:2:{s:4:"time";s:21:"0.12944700 1327856420";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:53:"/Volumes/htdocs/prednasky/app/templates/Git/log.latte";i:2;i:1327856378;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"e833c11 released on 2011-12-18";}}}?><?php

// source file: /Volumes/htdocs/prednasky/app/templates/Git/log.latte

?><?php list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '2wq905klmv')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb29fc22a0de_content')) { function _lb29fc22a0de_content($_l, $_args) { extract($_args)
?>

	<h1>Git - zobrazení historie revizí </h1>
	<br />
	<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:presouvani")) ?>
"><< Přesouvání souborů</a> |
<a href="<?php echo Nette\Templating\DefaultHelpers::escapeHtml($_control->link("Git:ruseni")) ?>
">Rušení změn >></a>
	<hr />
	
	<div class="obsah">

	<h2>$ git log</h2>
	<p>
		Zobrazení historie revizí v obráceném chronologickém pořadí.
	</p>
	<h2>$ git log -p -2</h2>
	<p>
		Zobrazení historie dvou posledních revizí s výpisem rozdílů.
	</p>
	<h2>$ git log --stat</h2>
	<p>
		Stručné statistiky.
	</p>
	<h2>$ git log --pretty=oneline</h2>
	<p>
		Změní na jiný, než výchozí formát.
	</p>
	<ul>
		<li>
			oneline - vypíše všechny revize na jednom řádku
		</li>
		<li>
			short, full, fuller
		</li>
	</ul>
	<h2>$ git log --pretty=format:"%h - %an, %ar : %s"</h2>
	<p>
		Vlastní definice výstupu - vhodné, pro strojové zpracování.
	</p>
	<pre>
		Option	Description of Output
		%H	Commit hash
		%h	Abbreviated commit hash
		%T	Tree hash
		%t	Abbreviated tree hash
		%P	Parent hashes
		%p	Abbreviated parent hashes
		%an	Author name
		%ae	Author e-mail
		%ad	Author date (format respects the –date= option)
		%ar	Author date, relative
		%cn	Committer name
		%ce	Committer email
		%cd	Committer date
		%cr	Committer date, relative
		%s	Subject
	</pre>

	<h2>Autor a autor revize</h2>
	<ul>
		<li>Autor úpravy</li>
		<li>Autor revize - ten kdo úpravy zapsal</li>
	</ul>
	<h2>$ git log --pretty=format:"%h %s" --graph</h2>
	<p>
		ASCII graf - historie revizí a slučování
	</p>
	<pre>
		Option	Description
		-p	Show the patch introduced with each commit.
		--stat	Show statistics for files modified in each commit.
		--shortstat	Display only the changed/insertions/deletions line from the --stat command.
		--name-only	Show the list of files modified after the commit information.
		--name-status	Show the list of files affected with added/modified/deleted information as well.
		--abbrev-commit	Show only the first few characters of the SHA-1 checksum instead of all 40.
		--relative-date	Display the date in a relative format (for example, “2 weeks ago”) instead of using the full date format.
		--graph	Display an ASCII graph of the branch and merge history beside the log output.
		--pretty	Show commits in an alternate format. Options include oneline, short, full, fuller, and format (where you specify your own format).
	</pre>
		
	<h2>-2</h2>
	<p>
		zobrazení posledních n (celé číslo) revizí.
	</p>
	<h2>Omezení výstupu logu</h2>
	<p>
		<ul>
			<li>
				--since --until, --after --before ( od - do )<br />
				$ git log --since=2.weeks - revize za posledni dva tydny
			</li>
			<li>
				konrétní datum 2012-02-28
			</li>
			<li>
				relativní datum 2 years, 1 day, 3 minutes ago (před 2 roky, 1 dnem a 3 minutami)
			</li>
			<li>
				--author revize autora
			</li>
			<li>
				--commiter - revize autora revize
			</li>
			<li>
				-- SouborA.txt
			</li>
			<li>
				--all-match
			</li>
			<li>
				--no-merges
			</li>
			<li>
				--grep klíčová slova v revizích
			</li>

		</ul>
	</p>
	<h2>gitk</h2>


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
