<?php

namespace Vitoutry\LaravelFormBuilder\Filters\Collection;

use Vitoutry\LaravelFormBuilder\Filters\FilterInterface;

/**
 * Class StripNewlines
 *
 * @package Vitoutry\LaravelFormBuilder\Filters\Collection
 * @author  Djordje Stojiljkovic <djordjestojilljkovic@gmail.com>
 */
class StripNewlines implements FilterInterface
{
    /**
     * @param  mixed $value
     * @param  array $options
     *
     * @return mixed
     */
    public function filter($value, $options = [])
    {
        return str_replace(["\n", "\r"], '', $value);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'StripNewlines';
    }
}