<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $discounts = collect([
            [
                'title' => 'Hosting1',
                'excerpt' => 'XXXX Days Retention - U.S. + E.U. Servers',
                'options' => [
                    'price' => '$x.xx/mo for 1yr',
                    'download' => 'Unlimited downloads',
                    'speed' => 'Unlimited speed',
                ],
                'link' => '#',
                'description' => 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary',
                'banner' => 'True Provider',
                'status' => true,
                'order' => 1,

            ],
            [
                'title' => 'Hosting2',
                'excerpt' => 'XXXX Days Retention - U.S. + E.U. Servers',
                'options' => [
                    'price' => '$x.xx/mo for 1yr',
                    'download' => 'Unlimited downloads',
                    'speed' => 'Unlimited speed',
                ],
                'link' => '#',
                'description' => 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary',
                'banner' => 'True Provider',
                'status' => true,
                'order' => 2,

            ],
            [
                'title' => 'Hosting3',
                'excerpt' => 'XXXX Days Retention - U.S. + E.U. Servers',
                'options' => [
                    'price' => '$x.xx/mo for 1yr',
                    'download' => 'Unlimited downloads',
                    'speed' => 'Unlimited speed',
                ],
                'link' => '#',
                'description' => 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary',
                'status' => true,
                'order' => 3,
            ],
            [
                'title' => 'Hosting4',
                'excerpt' => 'XXXX Days Retention - U.S. + E.U. Servers',
                'options' => [
                    'price' => '$x.xx/mo for 1yr',
                    'download' => 'Unlimited downloads',
                    'speed' => 'Unlimited speed',
                ],
                'link' => '#',
                'description' => 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary',
                'status' => false,
                'order' => 4,
            ],
        ])->where('status', true)->sortBy('order');

        $faqs = collect([
            [
                'title' => 'Why do we use it?',
                'text' => 'It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using \'Content here, content
                            here\', making it look like readable English.',
                'status' => true,
                'order' => 1
            ],
            [
                'title' => 'Where can I get some?',
                'text' => 'There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don\'t look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                            sure there isn\'t anything embarrassing',
                'status' => true,
                'order' => 2
            ],
            [
                'title' => 'Where does it come from?',
                'text' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                            Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the
                            word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from
                            sections',
                'status' => true,
                'order' => 3
            ],
            [
                'title' => 'Why do we use it?',
                'text' => 'It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using \'Content here, content
                            here\', making it look like readable English.',
                'status' => false,
                'order' => 4
            ],
        ])->where('status', true)->sortBy('order');

        return view('index', compact('discounts','faqs'));
    }
}
