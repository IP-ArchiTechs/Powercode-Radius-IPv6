<?php

namespace App\Domain\Powercode\Models;

use App\Domain\Powercode\Collections\EquipmentCollection;
use Illuminate\Support\Facades\DB;

class Equipment
{
    public string $mac;
    public int $pc_equipment_id;
    public string $ipv4;
    public int $pc_customer_id;
    public string $pc_status;
    public int $pc_address_range_id;
    public int $pc_service_id;
    public int $downloadSpeedKb;
    public int $uploadSpeedKb;

    public static function fromRow($row): Equipment
    {
        $equipment = new self;
        $equipment->mac = $row->mac;
        $equipment->pc_equipment_id = $row->pc_equipment_id;
        $equipment->ipv4 = $row->ipv4;
        $equipment->pc_customer_id = $row->pc_customer_id;
        $equipment->pc_status = $row->pc_status;
        $equipment->pc_address_range_id = $row->pc_address_range_id;
        $equipment->pc_service_id = $row->pc_service_id;
        $equipment->downloadSpeedKb = $row->downloadSpeedKb;
        $equipment->uploadSpeedKb = $row->uploadSpeedKb;

        return $equipment;
    }

    public static function all(): EquipmentCollection
    {
        $rows = DB::connection('powercode')
            ->select('SELECT
               e.MACAddress AS mac,
               e.ID AS pc_equipment_id,
               INET_NTOA(ar.StartAddress + e.IPAddress) AS ipv4,
               c.CustomerID AS pc_customer_id,
               c.Status AS pc_status,
               ar.AddressRangeID AS pc_address_range_id,
               s.ID AS pc_service_id,
               ii.MaxIn AS downloadSpeedKb,
               ii.MaxOut AS uploadSpeedKb
            FROM Equipment e
            INNER JOIN Customer c ON e.EndUserID = c.CustomerID
            INNER JOIN CustomerServices cs ON c.CustomerID = cs.CustomerID
            INNER JOIN Services s ON cs.ServiceID = s.ID AND s.Type = "Monthly Internet"
            INNER JOIN AddressRange ar ON e.IPType = ar.AddressRangeID
            INNER JOIN InternetInfo ii ON s.ID = ii.ServiceID
            WHERE e.EndUserID != 1
            AND c.Status IN ("Active", "Delinquent")');

        $equipmentCollection = new EquipmentCollection($rows);

        $equipmentCollection = $equipmentCollection->map(function ($equipment) {
            return Equipment::fromRow($equipment);
        });

        return $equipmentCollection;
    }
}
