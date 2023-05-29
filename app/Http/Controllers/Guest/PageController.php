<?php

namespace App\Http\Controllers\Guest;

use App\Models\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = [
            'banner' => [
                [
                    'text' => 'DIGITAL COMICS',
                    'src' => 'buy-comics-digital-comics.png'
                ],
                [
                    'text' => 'DC MERCHANDISE',
                    'src' => 'buy-comics-merchandise.png'
                ],
                [
                    'text' => 'SUBSCRIPTION',
                    'src' => 'buy-comics-subscriptions.png'
                ],
                [
                    'text' => 'COMIC SHOP LOCATOR',
                    'src' => 'buy-comics-shop-locator.png'
                ],
                [
                    'text' => 'DC POWER VISA',
                    'src' => 'buy-dc-power-visa.svg'
                ],
            ],
            'comics' => Comic::all()
        ];

        return view('home', $data);
    }
}
