<?php

namespace App\Http\Controllers;

use Artisaninweb\SoapWrapper\SoapWrapper;
use App\Http\Controllers\GetConversionAmount;
use App\Http\Controllers\GetConversionAmountResponse;

class TextController extends Controller
{

    protected $soapWrapper;

    public function __construct(SoapWrapper $soapWrapper)
    {
        parent::__construct();

        $this->soapWrapper = $soapWrapper;

    }

    public function test()
    {
        echo "hello";
    }

    public function index()
    {


        $this->soapWrapper->add("Currency", function ($service) {
            $service
                ->wsdl('http://currencyconverter.kowabunga.net/converter.asmx?WSDL')
                ->trace(true);
//                ->classmap([
//                    GetConversionAmount::class,
//                    GetConversionAmountResponse::class,
//                ]);
        });
        // Without classmap
//        $response = $this->soapWrapper->call('Currency.GetConversionAmount', [
//            'CurrencyFrom' => 'USD',
//            'CurrencyTo' => 'EUR',
//            'RateDate' => '2014-06-05',
//            'Amount' => '1000',
//        ]);
//
//        var_dump($response);

//        die();

        // With classmap
        $response = $this->soapWrapper->call('Currency.GetConversionAmount', [
            new GetConversionAmount('USD', 'EUR', '2014-06-05', '1000')
        ]);

        echo "<pre>";

        var_dump($response);
        exit;
    }
}
