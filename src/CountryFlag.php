<?php

namespace Ryanito\CountryFlag;

use Laravel\Nova\Fields\Field;

class CountryFlag extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'country-flag';

    /**
     * Set the country code.
     *
     * @param  string  $countryCode
     * @return $this
     */
    public function withCode(string $countryCode)
    {
        return $this->withMeta(['countryCode' => $countryCode]);
    }

    /**
     * Set the country name.
     *
     * @param  string|null  $countryName
     * @return $this
     */
    public function withName(string|null $countryName)
    {
        return $this->withMeta(['countryName' => $countryName]);
    }
}
