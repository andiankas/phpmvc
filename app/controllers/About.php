<?php

class About extends Controller{

	public function index($name = 'RobotBernyawa',$work = 'Software Engineer', $age = 23)
	{
		$this->view('about/index');
	}

	public function page()
	{
		$this->view('about/page');
	}

}

/* End of file About.php */
/* Location: .//P/xampp/htdocs/learnhub/phpmvc/app/controllers/About.php */