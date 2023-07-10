<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;

class Task extends Model
{
    use HasFactory;

    public function index(): View
    {
        $model = Task::all();

        return view('index', ['model' => $model]);
    }

    protected $table = 'task';
    public $timestamps = true;
    public $fillable = ['title', 'text'];
}

