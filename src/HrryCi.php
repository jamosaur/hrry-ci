<?php

namespace Jamosaur\HrryCi;

/**
 * Class HrryCi
 * @package Jamosaur\HrryCi
 * @author  James Wallen-Jones <j.wallen.jones@googlemail.com>
 */
class HrryCi
{
    /**
     * @var null
     */
    public $text;
    /**
     * @var array
     */
    private $vowels = ['a', 'e', 'i', 'o', 'u'];

    /**
     * HrryCi constructor.
     *
     * @param null $text
     */
    public function __construct($text = null)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function outpt()
    {
        return $this->hrry($this->text);
    }

    /**
     * @param $input
     *
     * @return string
     */
    public function hrry($input)
    {
        $words = explode(' ', strtolower($input));
        $hrry  = [];
        foreach ($words as $word) {
            if (strlen($word) > 3) {
                if (in_array($word[0], $this->vowels)) {
                    $word = $word[0] . str_replace($this->vowels, '', $word);
                } else {
                    $word = str_replace($this->vowels, '', $word);
                }
            }
            $word   = str_replace(['you'], 'u', $word);
            $hrry[] = $word;
        }

        return implode(' ', $hrry);
    }
}
