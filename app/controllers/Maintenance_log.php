<?php 

class Maintenance_log
{
	use Controller;

	public function index()
	{
		if (!is_authenticated()) {
			set_flash_message("Oops! You need to be logged <br> in to view this page.", "error");
			redirect('');
		}

		echo $this->renderView('maintenance_log');
	}
}