<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Contact;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contacts');
    }

    // public function store(ContactRequest $request)
    // {
    //     try {
    //         $contact = Contact::create([
    //             'name' => $request->name,
    //             'phone' => $request->phone,
    //             'email' => $request->email,
    //             'message' => $request->message,
    //             'company' => $request->company,
    //         ]);

    //         Mail::to(setting('site.email_to_address') ?? config('services.mail.from_address'))->send(new ContactMessage($contact));

    //         return redirect()->back()->with('success', 'Your message has been submitted successfully');
    //     } catch (ValidationException $e) {
    //         dd($e);
    //         $errorMessage = $e->getMessage() ?? "Error, Try again!";
    //         return redirect()->back()->with('error', $errorMessage);
    //     }
    // }

    public function store(ContactRequest $request)
    {
        try {
            $contact = Contact::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message,
                'company' => $request->company,
            ]);

            // Создание экземпляра PHPMailer
            $mail = new PHPMailer(true);

            // Включение режима отладки "verbose"
            $mail->SMTPDebug = 2; // Можно установить любой уровень отладки (0 - без отладки, 1 - базовая отладка, 2 - подробная отладка)

            // Настройка сервера и отправки письма
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST'); // Укажите адрес вашего SMTP-сервера
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME'); // Укажите свой адрес электронной почты
            $mail->Password = env('MAIL_PASSWORD'); // Укажите пароль от вашей почты
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');

            $mail->setFrom('from@example.com', 'Your Name'); // Укажите адрес отправителя
            $mail->addAddress(setting('site.email_to_address') ?? config('services.mail.from_address'));

            // Установка контента письма
            $mail->isHTML(true);
            $mail->Subject = 'Subject';
            $mail->Body = 'Message body';

            // Отправка письма
            $mail->send();

            return redirect()->back()->with('success', 'Your message has been submitted successfully');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage() ?? "Error, Try again!";
            return redirect()->back()->with('error', $errorMessage);
        }
    }
}
