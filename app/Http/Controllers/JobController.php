<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->cursorPaginate(3);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $job = Job::create($validatedData);

        return redirect('/jobs/' . $job->id)
            ->with('success', 'Job created successfully!');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    public function update(Request $request, Job $job)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $job->update($validated);

        return redirect('/jobs/' . $job->id)
            ->with('success', 'Job updated successfully!');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs')->with('success', 'Job deleted successfully!');
    }
}