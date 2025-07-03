<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMailService;
use App\Status;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Log as FacadesLog;
use Illuminate\Support\Facades\Mail;

use function Illuminate\Log\log;

class ContactController extends Controller
{
    public static $possibleSubjects =['Allgemeine Anfrage', 'Tortenfeedback', 'Websitenfeedback', 'Spezialanfrage'];


    public function showForm()
    {
        return view('contact');
    }

     public function sendEmail(Request $request)
    {
        // 1. Validate the incoming request data
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:50',
            'lastName' => 'required|string|max:50',
            'email' => 'required|email',
            'emailSubject' => 'required|string|in:' . implode(',', self::$possibleSubjects),
            'message' => 'required|string',
        ],
        [
            'firstName.required' => 'Der Vorname muss gegeben sein',
            'firstName.max' => 'Der Vorname darf maximal 50 Zeichen lang sein.',
            'lastName.required' => 'Der Nachname muss gegeben sein',
            'lastName.max' => 'Der Nachname darf maximal 50 Zeichen lang sein.',
            'email.required' => 'Es muss eine E-Mail-Adresse angegeben werden.',
            'message.required' => 'Es muss eine Nachricht hinterlasssen werden.',
        ]);
        $validatedData['name'] = $validatedData['firstName'] . ' ' . $validatedData['lastName'];

        try {
            // 2. Create a new instance of your Mailable class with the validated data
            $email = new ContactFormMailService($validatedData);

            // 3. Send the email
            // Replace 'your-email@example.com' with the actual recipient email address
            Mail::to(env('MAIL_TO_ADDRESS'))->send($email);

            // 4. Redirect back with a success message
            return redirect()->back()->with(Status::getString(Status::Success), 'Ihre Nachricht wurde erfolgreich gesendet!');

        } catch (\Exception $e) {
            // Redirect back with an error message
            return redirect()->back()->withErrors(['email_send_error' => 'There was an issue sending your message. Please try again later.'], Status::getString(Status::Error))->withInput();
        }
    }
}
