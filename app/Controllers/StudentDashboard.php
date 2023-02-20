<?php namespace App\Controllers;

use App\Models\StudentModel;

class StudentDashboard extends BaseController
{
	public function index()
	{
		if(isset($_SESSION['roleId']))
		{
			return redirect()->to('dashboard');
		}

		echo view('student/studentDashboard');
	}

	//--------------------------------------------------------------------

}
