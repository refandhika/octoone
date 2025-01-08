<?php namespace VojtaSvoboda\TwigExtensions\Classes;

use App;
use October\Rain\Translation\Translator;
use Symfony\Contracts\Translation\TranslatorInterface;

class TimeDiffTranslator extends Translator implements TranslatorInterface
{
    public function trans(?string $id, array $parameters = [], ?string $domain = 'messages', ?string $locale = null): string
    {
        return $this->get('vojtasvoboda.twigextensions::lang.' . $id, $parameters, $locale);
    }

    public function transChoice($id, $number, array $parameters = [], $domain = 'messages', $locale = null)
    {
        return $this->choice('vojtasvoboda.twigextensions::lang.' . $id, $number, $parameters, $locale);
    }
}
