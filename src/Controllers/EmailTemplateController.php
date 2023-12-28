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

        return redirect()->route('email-templates.index')->with('success', 'Email template created successfully.');
    }
    public function show(Request $request)
    {
        $emailTemplate = EmailTemplate::findOrFail($request->email_template);
        return view('LaravelEmailTemplate.show', compact('emailTemplate'));
    }

    public function edit(Request $request)
    {

        $emailTemplate = EmailTemplate::findOrFail($request->email_template);
        return view('LaravelEmailTemplate.edit', compact('emailTemplate'));
    }

    public function update(Request $request, $email_template)
    {
        
        $emailTemplate = EmailTemplate::findOrFail($request->email_template);

        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $emailTemplate->update($request->all());

        return redirect()->route('email-templates.index')->with('success', 'Email template updated successfully.');
    }

    public function destroy(Request $request)
    {
        
        $emailTemplate = EmailTemplate::findOrFail($request->email_template);
        $emailTemplate->delete();

        return redirect()->route('email-templates.index')->with('success', 'Email template deleted successfully.');
    }
}


?>