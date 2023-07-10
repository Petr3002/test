<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Resources\ResponseResource;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\View\View;
use Throwable;

class TaskController extends Controller
{
    public function index(): View
    {
        $model = Task::orderBy('id', 'ASC')->get();

        return view('index', ['model' => $model]);
    }

    public function get(Task $model): JsonResource
    {
        return new TaskResource($model);
    }

    public function post(TaskRequest $request)
    {
        Task::create($request->all());

        return redirect('/');
    }

    public function put(TaskRequest $request, Task $model): RedirectResponse
    {

        $model->update($request->all());

        return redirect('/');
    }

    public function delete(Task $model)
    {
        $model->delete();

//        return redirect('/');
    }

    public function create(){
        return view('create');
    }
    public function edit(Task $model){
        return view('edit', ['model' => $model]);
    }



}
