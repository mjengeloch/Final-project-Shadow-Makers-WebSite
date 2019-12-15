<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use App\Http\Requests\UserRequest as UserRequest;

class AdministrationController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('admin.home');
    }
}
