<?php

namespace Definite\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Redirect;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form',
        ];
    }

    public function onSend()
    {
        if ('karir' == Input::get('question')) {
            $vars = ['firstname' => Input::get('first-name'), 'lastname' => Input::get('last-name'), 'email' => Input::get('email'), 'mobile' => Input::get('phone'), 'content' => Input::get('messages')];

            Mail::send('definite.contact::mail.message', $vars, function ($message) {
                $message->from('contactUs@frisianflag.com');
                $message->to('frisianflag.career@frieslandcampina.com');//->cc('aldo@definite.co.id');
                $message->subject('Topik pertanyaan anda: Karir');
            });

            return Redirect::to('/hubungi-kami');
        } elseif ('produk' == Input::get('question')) {
            $vars = ['firstname' => Input::get('first-name'), 'lastname' => Input::get('last-name'), 'email' => Input::get('email'), 'mobile' => Input::get('phone'), 'content' => Input::get('messages')];

            Mail::send('definite.contact::mail.message', $vars, function ($message) {
                $message->from('contactUs@frisianflag.com');
                $message->to('Layanan.peduli@frieslandcampina.com');//->cc('aldo@definite.co.id');
                $message->subject('Topik pertanyaan anda: Produk');
            });

            return Redirect::to('/hubungi-kami');
        } elseif ('program-promosi' == Input::get('question')) {
            $vars = ['firstname' => Input::get('first-name'), 'lastname' => Input::get('last-name'), 'email' => Input::get('email'), 'mobile' => Input::get('phone'), 'content' => Input::get('messages')];

            Mail::send('definite.contact::mail.message', $vars, function ($message) {
                $message->from('contactUs@frisianflag.com', 'Layanan Peduli');
                $message->to('Layanan.peduli@frieslandcampina.com');//->cc('aldo@definite.co.id');
                $message->subject('Topik pertanyaan anda: Program-promosi');
            });

            return Redirect::to('/hubungi-kami');
        } elseif ('supplier-distributors' == Input::get('question')) {
            $vars = ['firstname' => Input::get('first-name'), 'lastname' => Input::get('last-name'), 'email' => Input::get('email'), 'mobile' => Input::get('phone'), 'content' => Input::get('messages')];

            Mail::send('definite.contact::mail.message', $vars, function ($message) {
                $message->from('contactUs@frisianflag.com', 'Layanan Peduli');
                $message->to('Layanan.peduli@frieslandcampina.com');//->cc('aldo@definite.co.id');
                $message->subject('Topik pertanyaan anda: Supplier-distributors');
            });

            return Redirect::to('/hubungi-kami');
        } elseif ('media-press' == Input::get('question')) {
            $vars = ['firstname' => Input::get('first-name'), 'lastname' => Input::get('last-name'), 'email' => Input::get('email'), 'mobile' => Input::get('phone'), 'content' => Input::get('messages')];

            Mail::send('definite.contact::mail.message', $vars, function ($message) {
                $message->from('contactUs@frisianflag.com', 'Layanan Peduli');
                $message->to('editorial@frieslandcampina.com');//->cc('aldo@definite.co.id');
                $message->subject('Topik pertanyaan anda: Media-press');
            });

            return Redirect::to('/hubungi-kami');
        } else {
            $vars = ['firstname' => Input::get('first-name'), 'lastname' => Input::get('last-name'), 'email' => Input::get('email'), 'mobile' => Input::get('phone'), 'content' => Input::get('messages')];

            Mail::send('definite.contact::mail.message', $vars, function ($message) {
                $message->from('contactUs@frisianflag.com', 'Layanan Peduli');
                $message->to('Layanan.peduli@frieslandcampina.com');//->cc('aldo@definite.co.id');
                $message->subject('Topik pertanyaan anda: Others');
            });

            return Redirect::to('/hubungi-kami');
        }
    }
}
