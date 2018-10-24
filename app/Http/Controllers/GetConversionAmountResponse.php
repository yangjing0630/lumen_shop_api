<?php

namespace App\Http\Controllers;

class GetConversionAmountResponse
{
    /**
     * @var string
     */
    protected $GetConversionAmountResult;

    /**
     * GetConversionAmountResponse constructor.
     *
     * @param string
     */
    public function __construct($GetConversionAmountResult)
    {
        $this->GetConversionAmountResult = $GetConversionAmountResult;
    }

    /**
     * @return string
     */
    public function getGetConversionAmountResult()
    {
        return $this->GetConversionAmountResult;
    }
}