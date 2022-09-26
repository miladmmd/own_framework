<?php

namespace app\models;
use app\core\Model;
class ContactForm extends Model
{
    public string $subject = "";
    public string $string = "";
    public string $body = "";

    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
//            'email' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'subject' =>"Enter Subject",
//            'email' =>"your email",
            'body' => "body"
        ];
    }

    public function send()
    {
        return true;
    }
}