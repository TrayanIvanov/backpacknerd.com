<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\SubscribeRequest;
use App\Models\Subscriber;
use Mailjet;

class ContactsController extends Controller
{
    const ADMIN_EMAIL = 'trayan@backpacknerd.com';
    const ADMIN_NAME = 'Trayan Ivanov';

    public function index()
    {
        return view('pages.contacts');
    }

    public function contactMe(ContactRequest $request)
    {
        // Notify admin for new message
        $templateId = 108419;
        $subject = 'New message';
        $vars = [
            'contactName' => $request->contact_name,
            'contactEmail' => $request->contact_email,
            'contactMessage' => nl2br($request->contact_message),
        ];
        $notifyAdmin = $this->sendTransactional($templateId, $subject, self::ADMIN_EMAIL, $request->contact_email, $vars);

        return redirect('contacts')->with('contacted', 'Вашето съобщение е изпратено успешно.');
    }

    public function subscribeMe(SubscribeRequest $request)
    {
        $subscriber = new Subscriber();
        $subscriber->email = $request->subscribe_email;
        $subscriber->active = 1;
        $subscriber->save();

        // Notify admin for subscription
        $templateId = 110622;
        $subject = 'New subscriber';
        $vars = ['subscriberEmail' => $request->subscribe_email];
        $notifyAdmin = $this->sendTransactional($templateId, $subject, self::ADMIN_EMAIL, $request->subscribe_email, $vars);

        // Notify user for subscription
        $templateId = 111216;
        $subject = 'Успешно вписване за новини';
        $notifyUser = $this->sendTransactional($templateId, $subject, $request->subscribe_email, self::ADMIN_EMAIL);

        return response()->json(['message' => 'Успешно вписване! Сега ще те спамя (:']);
    }

    private function sendTransactional($templateId, $subject, $recipient, $sender, array $vars = [])
    {
        $apikey = config('services.mailjet.apikey');
        $apisecret = config('services.mailjet.secretkey');

        $mj = new Mailjet\Client($apikey, $apisecret);
        $body = [
            'FromEmail' => self::ADMIN_EMAIL,
            'FromName' => self::ADMIN_NAME,
            'Subject' => "Backpack Nerd - " . $subject,
            'MJ-TemplateID' => $templateId,
            'MJ-TemplateLanguage' => true,
            'Recipients' => [
                [
                    'Email' => $recipient,
                ],
            ],
            "Vars" => $vars,
            'Headers' => [
                'Reply-To' => $sender,
            ],
        ];
        $response = $mj->post(Mailjet\Resources::$Email, ['body' => $body]);

        return $response;
    }
}
