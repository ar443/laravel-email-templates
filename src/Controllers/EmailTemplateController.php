<?php

namespace ar443\LaravelEmailTemplate\Controllers;

use ar443\LaravelEmailTemplate\Models\EmailTemplate;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmailTemplateController extends Controller
{

    public function index()
    {
        $emailTemplates = EmailTemplate::all();
        return view('LaravelEmailTemplate.index', compact('emailTemplates'));
    }

    public function create()
    {
        return view('LaravelEmailTemplate.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        EmailTemplate::create($request->all());

        return redirect()->route('LaravelEmailTemplate.index')->with('success', 'Email template created successfully.');
    }

    public function edit(EmailTemplate $emailTemplate)
    {
        return view('LaravelEmailTemplate.edit', compact('emailTemplate'));
    }

    public function update(Request $request, EmailTemplate $emailTemplate)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $emailTemplate->update($request->all());

        return redirect()->route('LaravelEmailTemplate.index')->with('success', 'Email template updated successfully.');
    }

    public function destroy(EmailTemplate $emailTemplate)
    {
        $emailTemplate->delete();

        return redirect()->route('LaravelEmailTemplate.index')->with('success', 'Email template deleted successfully.');
    }

}


?>