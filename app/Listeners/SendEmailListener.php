<?php

namespace CodeCommerce\Listeners;

use CodeCommerce\Events\CheckoutEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CheckoutEvent  $event
     * @return void
     */
    public function handle(CheckoutEvent $event)
    {
        $order = $event->getOrder();
        $user = $event->getUser();

        $send = Mail::send('email.confirmacao_pedido', ['user' => $user, 'order'=>$order], function ($m) use ($user) {

            $m->to('mlsjpk@gmail.com', $user->name)->subject('Confirmação de pedido');
        });


    }

}
