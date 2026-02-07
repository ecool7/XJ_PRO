<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            Mail::to('info@xinji-tech.com')->send(new ContactMail(
                $request->name,
                $request->email,
                $request->message
            ));

            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage(), [
                'exception' => $e,
                'trace' => $e->getTraceAsString()
            ]);
            
            // Для отладки показываем детальную ошибку только в режиме разработки
            $errorMessage = config('app.debug') 
                ? 'Failed to send message: ' . $e->getMessage() 
                : 'Failed to send message. Please try again later.';
            
            return back()->with('error', $errorMessage)->withInput();
        }
    }
}

