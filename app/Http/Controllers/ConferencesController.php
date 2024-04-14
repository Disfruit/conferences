<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Requests\StoreConferenceRequest;
use App\Http\Requests\UpdateConferenceRequest;
use Illuminate\Http\Request;

class ConferencesController extends Controller
{
    /*
     * @var array
     */

    public function index(Conference $conferences): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('conferences.index', ['conferences' => $conferences->all()]);
    }

    public function show(int $id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('conferences.show', ['conferences' => Conference::findOrFail($id)]);
    }

    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('conferences.create');
    }

    public function store(StoreConferenceRequest $request, Conference $conferences): RedirectResponse
    {
        $validated = $request->validated();
        $conferenceItem = $conferences->create($validated);

        $request->session()->flash('status', 'Conference was created!');

        return redirect()->route('conferences.show', ['conference'=>$conferenceItem->id]);
    }
    public function edit($id)
    {
        // Fetch the conference from the database based on the ID
        $conference = Conference::findOrFail($id);

        // Return the view for editing the conference
        return view('conferences.edit', ['conference' => $conference]);
    }
    public function update(UpdateConferenceRequest $request, $id): RedirectResponse
    {
        $conference = Conference::findOrFail($id);
        $validated = $request->validated();
        $conference->update($validated);

        $request->session()->flash('status', 'Conference was updated!');

        return redirect()->route('conferences.show', ['conference' => $conference->id]);
    }
    public function destroy(int $id): RedirectResponse
    {
        $conference = (new Conference)->findOrFail($id);
        $conference->delete();

        session()->flash('status', 'Conference was deleted!');
        return redirect()->route('conferences.index');
    }
    public function any()
    {
        return $this->count()>0;
    }
    public function __construct()
    {
        // Require authentication for all methods except index and show
        $this->middleware('auth')->except(['index', 'show']);
    }
}
