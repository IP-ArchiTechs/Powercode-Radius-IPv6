<?php

namespace App\Domain\RADIUS\Actions;

use App\Domain\IPABridge\Models\Subscriber;
use App\Domain\RADIUS\Models\RADIUSAttribute;
use App\Domain\RADIUS\Models\RADIUSUser;

class SyncRADIUSFromSubscribersAction
{

    public function __invoke(): void
    {
        RADIUSAttribute::getQuery()->delete();
        RADIUSUser::getQuery()->delete();

        $subscribers = Subscriber::whereNotNull('mac')->get();
        $timestamp = now();

        $radiusUsers = $subscribers->map(function ($subscriber) use ($timestamp) {
           return ['username' => $subscriber->mac, 'created_at' => $timestamp, 'updated_at' => $timestamp];
        });

        $radiusAttributes = $subscribers->map(function ($subscriber) use ($timestamp) {
            return [
                'username' => $subscriber->mac,
                'attribute' => 'Delegated-IPv6-Prefix',
                'value' => $subscriber->prefix
            ];
        });

        foreach (array_chunk($radiusUsers->toArray(), 3000) as $u) {
            RADIUSUser::insert($u);
        }

        foreach (array_chunk($radiusAttributes->toArray(), 3000) as $a) {
            RADIUSAttribute::insert($a);
        }
    }

}
