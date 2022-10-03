<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\Order;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __invoke(MailRequest $request)
    {
        $data = $request->validated();

        $name = $data['name'];
        $tel = $data['tel'];

        Mail::to('samovarchik45@mail.ru')->send(new Order($name, $tel));

        return $data;
    }
}
