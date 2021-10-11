<?php

namespace App\Services;

use App\Models\Compose;
use App\Models\Patterns;

class ComputeService
{
    /**
     * @var array
     */
    public $cards;

    /**
     * @var array
     */
    public $patterns;

    /**
     * @var string
     */
    public $location;

    public function __construct(Patterns $patterns, array $cards, string $location)
    {
        $this->cards = $cards;
        $this->patterns = $patterns->load('hands')->toArray();
        $this->location = $location;
    }

    /**
     * @return array
     */
    public function __invoke(): array
    {
        $this->setPatternsHandCards();
        $this->setPatternsHandScore();
        $this->setPatternsHandOrder();
        $this->setPatternsResult();

        return $this->patterns;
    }

    /**
     * @return void
     */
    public function setPatternsHandCards(): void
    {
        $this->patterns['hands'] = array_map(function ($hand) {
            $hand['cards'] = array_map(function ($i) {
                return $this->cards[$i];
            }, $hand['cards']);
            return $hand;
        }, $this->patterns['hands']);
    }

    /**
     * @return void
     */
    public function setPatternsHandScore(): void
    {
        $this->patterns['hands'] = array_map(function ($hand) {
            $hands = Compose::analyze($hand['cards'], $this->location);
            if (count($hands) !== 2) {
                dd($hand, $hands);
            }
            [$after, $front] = $hands;
            return [
                'order'       => $hand['order'],
                'cards'       => $hand['cards'],
                'front_cards' => $front['cards'],
                'front_score' => $front["score_{$this->location}"],
                'after_cards' => $after['cards'],
                'after_score' => $after["score_{$this->location}"],
            ];
        }, $this->patterns['hands']);
    }

    /**
     * @return void
     */
    public function setPatternsHandOrder(): void
    {
        $this->patterns['hands'] = array_values(collect($this->patterns['hands'])->sortByDesc('front_score')->sortByDesc('after_score')->toArray());
        $this->patterns['order'] = array_column($this->patterns['hands'], 'order');
    }

    /**
     * @return void
     */
    public function setPatternsResult(): void
    {
        $this->patterns['result'] = $this->analyze($this->patterns['hands']);
    }

    /**
     * @param  array  $hands
     *
     * @return string
     */
    public function analyze(array $hands): string
    {
        [$a, $b, $c, $d] = $hands;

        /**
         * name: 正順官
         * rule: ($a['front_score']>$b['front_score']&&$a['front_score']>$c['front_score']&&$a['front_score']>$d['front_score'])&&($b['front_score']>$c['front_score']&&$b['front_score']>$d['front_score'])&&($c['front_score']>$d['front_score'])
         */
        if (($a['front_score'] > $b['front_score'] && $a['front_score'] > $c['front_score'] && $a['front_score'] > $d['front_score']) && ($b['front_score'] > $c['front_score'] && $b['front_score'] > $d['front_score']) && ($c['front_score'] > $d['front_score'])) {
            return '正順官';
        }

        if ($a['front_score'] == 0 && $b['front_score'] == 0 && $c['front_score'] == 0 && $d['front_score'] == 0) {
            return '正順官';
        }

        if ($a['front_score'] > $b['front_score'] && $b['front_score'] == 0 && $c['front_score'] == 0 && $d['front_score'] == 0) {
            return '正順官';
        }

        if ($a['front_score'] > $b['front_score'] && $b['front_score'] > $c['front_score'] && $c['front_score'] == 0 && $d['front_score'] == 0) {
            return '正順官';
        }

        /**
         * name: 4,3一樣大
         * rule: ($a['front_score']<$b['front_score']&&$a['front_score']>$c['front_score']&&$a['front_score']>$d['front_score'])&&($b['front_score']>$c['front_score']&&$b['front_score']>$d['front_score'])&&($c['front_score']>$d['front_score'])
         */
        if (($a['front_score'] < $b['front_score'] && $a['front_score'] > $c['front_score'] && $a['front_score'] > $d['front_score']) && ($b['front_score'] > $c['front_score'] && $b['front_score'] > $d['front_score']) && ($c['front_score'] > $d['front_score'])) {
            return '4,3一樣大';
        }

        /**
         * name: 4,3吃不了2
         * rule: ($a['front_score']>$b['front_score']&&$a['front_score']<$c['front_score']&&$a['front_score']>$d['front_score'])&&($b['front_score']<$c['front_score']&&$b['front_score']>$d['front_score'])&&($c['front_score']>$d['front_score'])
         */
        if (($a['front_score'] > $b['front_score'] && $a['front_score'] < $c['front_score'] && $a['front_score'] > $d['front_score']) && ($b['front_score'] < $c['front_score'] && $b['front_score'] > $d['front_score']) && ($c['front_score'] > $d['front_score'])) {
            return '4,3吃不了2';
        }

        /**
         * name: 通走小死
         * rule: ($a['front_score']<$b['front_score']&&$a['front_score']<$c['front_score']&&$a['front_score']>$d['front_score'])&&($b['front_score']<$c['front_score']&&$b['front_score']>$d['front_score'])&&($c['front_score']>$d['front_score'])
         */
        if (($a['front_score'] < $b['front_score'] && $a['front_score'] < $c['front_score'] && $a['front_score'] > $d['front_score']) && ($b['front_score'] < $c['front_score'] && $b['front_score'] > $d['front_score']) && ($c['front_score'] > $d['front_score'])) {
            return '通走小死';
        }

        /**
         * name: 會死不會中
         * rule: ($a['front_score']<$b['front_score']&&$a['front_score']<$c['front_score']&&$a['front_score']<$d['front_score'])&&($b['front_score']>$c['front_score']&&$b['front_score']>$d['front_score'])&&($c['front_score']>$d['front_score'])
         */
        if (($a['front_score'] < $b['front_score'] && $a['front_score'] < $c['front_score'] && $a['front_score'] < $d['front_score']) && ($b['front_score'] > $c['front_score'] && $b['front_score'] > $d['front_score']) && ($c['front_score'] > $d['front_score'])) {
            return '會死不會中';
        }

        /**
         * name: 1,2一樣大
         * rule: ($a['front_score']>$b['front_score']&&$a['front_score']>$c['front_score']&&$a['front_score']>$d['front_score'])&&($b['front_score']>$c['front_score']&&$b['front_score']>$d['front_score'])&&($c['front_score']<$d['front_score'])
         */
        if (($a['front_score'] > $b['front_score'] && $a['front_score'] > $c['front_score'] && $a['front_score'] > $d['front_score']) && ($b['front_score'] > $c['front_score'] && $b['front_score'] > $d['front_score']) && ($c['front_score'] < $d['front_score'])) {
            return '1,2一樣大';
        }

        return '未符合規則';
    }
}
