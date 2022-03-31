<?php

namespace App\Http\Livewire;

use ZeroBounceAPI;
use Livewire\Component;
use App\Mail\ContactMailConf;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Lukeraymonddowning\Honey\Traits\WithHoney;
use App\Classes\zerobounce;
use App\Classes\Phone;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    // public $successMessage;
    public $firstname;
    public $honeyInputs;
    public $key;
    public $valid = false;

    // use WithHoney;

    protected $rules = [
        'name' => 'required|min:3|max:50',
        'email' => 'required|email',
        // 'phone' => 'nullable|regex:^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$^',
        'phone' => 'nullable|phone:US,mobile',
        'message' => 'required|min:5|max:255',
    ];

    public function mount()
    {
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatedPhone()
    {
        $numb =  $this->phone;
        // $this->phone = (new Phone)->phoneNumber($numb);

        if (!is_numeric(substr($numb, 0, 1))  && !is_numeric(substr($numb, 1, 1))) {
            return $numb;
        }

        $chars = array(' ', '(', ')', '-', '.', '+');
        $numb = str_replace($chars, "", $numb);

        $numb = substr($numb, 0, 3) . '.' . substr($numb, 3, 3) . '.' . substr($numb, 6, 4);

        $this->phone = $numb;
    }

    public function submitForm(Request $request)
    {
        $this->validate();

        $api_key = env('ZEROBOUNCE_API_KEY');
        $emailToValidate = $this->email;
        // $IPToValidate = '99.123.12.122';
        // use curl to make the request
        $url = 'https://api.zerobounce.net/v2/validate?api_key=' . $api_key . '&email=' . urlencode($emailToValidate);

        $ch = curl_init($url);
        //PHP 5.5.19 and higher has support for TLS 1.2
        curl_setopt($ch, CURLOPT_SSLVERSION, 6);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_TIMEOUT, 150);
        $response = curl_exec($ch);
        curl_close($ch);

        //decode the json response
        $json = json_decode($response, true);

        // dd($json['status']);

        $request->name = $this->name;
        $request->email = $this->email;
        $request->phone = $this->phone;
        $request->message = $this->message;

        $firstname = $this->firstname;
        $firstname = substr($request->name, 0, strpos($request->name, ' '));

        session()->put('name', $request->name);
        session()->put('email', $request->email);
        session()->put('phone', $request->phone);
        session()->put('message', $request->message);

        session()->put('firstname', $firstname);
        // dd($json['status']);
        if ($json['status'] === 'valid') {

            session::put('valid', $json['status']);

            $cc = 'output@g-d.com';
            $bcc = 'azc666@gmail.com';

            Mail::to($request->email)
                ->cc($cc)
                ->bcc($bcc)
                ->send(new ContactMailConf);

            session()->flash('message', 'Your message has been successfully sent.');

            $this->resetForm();
        } else {
            session::put('invalid', $json['status']);
            // dd($json['status']);
            // dd(session('invalid'));
            session()->flash('message', 'Your email address could not be verified! Maybe a typo? Please try again.');
        }
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
        $this->firstname = '';
        Session::put('', session('valid'));
    }

    public function render()
    {
        // dd('hola');
        return view('livewire.contact-form');
    }
}