<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Http\Resources\ResponseResource;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\View\View;
use Throwable;

class TaskController extends Controller
{
    public function index(): View
    {
        $model = Task::all();

        return view('index', ['model' => $model]);
    }

    public function get(Task $model): JsonResource
    {
        return new TaskResource($model);
    }

    public function post(TaskRequest $request): JsonResource
    {
        $model = Task::create($request->all());

        return new TaskResource($model);
    }

    public function put(TaskRequest $request, Task $model): JsonResource
    {
        $model->update($request->all());

        return new TaskResource($model);
    }

    public function delete(Task $model): JsonResource
    {
        try{
            $model->delete();
        } catch (Throwable $e) {
            return new ResponseResource(['success' => false]);
        }

        return new ResponseResource(['success' => true]);
    }


}
