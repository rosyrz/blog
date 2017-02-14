<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

/**
 * Class TaskController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return view('index');
    }

    /**
     * @return mixed
     */
    public function getTasks()
    {
        $tasks = Task::select(['id','name','category','state']);

        return Datatables::of($tasks)

            ->make(true);
    }

}
