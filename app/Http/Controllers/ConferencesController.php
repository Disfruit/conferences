<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ConferencesController extends Controller
{
    /*
     * @var array
     */

    protected array $conferences = [
    1 => [
        'title' => 'First Conference',
        'content' => 'Lorem ipsum dolor sit amet.'
    ],
    2 => [
    'title' => 'Second Conference',
    'content' => 'Aut ducimus enim in veniam.'
    ]
    ];

    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('conferences.index', ['conferences' => $this->conferences]);
    }

    public function show(int $id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        abort_if(!isset($this->conferences[$id]), 404);
        return view('conferences.show', ['conferences' => $this->conferences[$id]]);
    }
}
