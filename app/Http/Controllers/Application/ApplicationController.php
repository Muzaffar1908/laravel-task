<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Application\ApplicationRequest;
use App\Models\Application\Application;

class ApplicationController extends BaseController
{
    public function store(ApplicationRequest $request)
    {
        try {
            if ($request->hasFile('file_url')) {
                $name = time() . '_' . $request->file('file_url')->getClientOriginalName();
                $path = $request->file('file_url')->storeAs('applications', $name, 'public');
            }

            $validated = $request->validated();
            $application = new Application();
            $application->user_id = $request->user()->id;
            $application->subject = $validated['subject'];
            $application->message = $validated['message'];
            $application->file_url = $path ?? null;
            $application->save();

            return redirect()->back();
//            return $this->sendResponse($application, 'Application successfully created.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
