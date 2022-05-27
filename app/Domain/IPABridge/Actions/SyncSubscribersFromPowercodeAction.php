<?php

namespace App\Domain\IPABridge\Actions;

use App\Domain\IPABridge\Models\Subscriber;
use App\Domain\Powercode\Models\Equipment;

class SyncSubscribersFromPowercodeAction
{
    public function __invoke() {
        $equipments = Equipment::all();

        foreach ($equipments as $equipment) {

            if ($equipment->mac == "00:00:00:00:00:0A") { continue; }

            $subscriber = Subscriber::where('subnet_id', 1)->where('mac', null)->first();
            $subscriber->fill([
                'subnet_id' => 1,
                'pc_equipment_id' => $equipment->pc_equipment_id,
                'pc_customer_id' => $equipment->pc_customer_id,
                'pc_service_id' => $equipment->pc_service_id,
                'pc_address_range_id' => $equipment->pc_address_range_id,
                'ipv4' => $equipment->ipv4,
                'mac' => $equipment->mac,
                'pc_status' => $equipment->pc_status,
                'downloadSpeedKb' => $equipment->downloadSpeedKb,
                'uploadSpeedKb' => $equipment->uploadSpeedKb
            ]);

            $subscriber->save();
        }
    }
}
