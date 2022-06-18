<?php

namespace App\Domain\IPABridge\Actions;

use App\Domain\IPABridge\DTO\SubnetDTO;
use App\Domain\IPABridge\Models\Subnet;
use App\Domain\IPABridge\Models\Subscriber;
use Illuminate\Support\Facades\DB;

class CreateSubnetAction
{
    /**
     * @throws \Throwable
     */
    public function __invoke(SubnetDTO $subnetDTO): void
    {

        DB::transaction(function () use ($subnetDTO) {

           $subnet = Subnet::create([
               'prefix' => $subnetDTO->prefix->getCIDR()
           ]);

           $subscribers = [];

           foreach ($subnetDTO->prefix->moveTo(56) as $prefix) {
               $subscribers[] = [
                   'subnet_id' => $subnet->id,
                   'prefix' => $prefix->getCIDR(),
                   'created_at' => now()->toDateTimeString()
               ];
           }

           array_shift($subscribers);

           foreach (array_chunk($subscribers, 3000) as $s) {
               Subscriber::insert($s);
           }

        });
    }
}
