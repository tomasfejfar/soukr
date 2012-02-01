<?php

/**
 * Homepage presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class GitPresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

}
