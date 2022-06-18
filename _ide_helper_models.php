<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Domain\IPABridge\Models{
/**
 * App\Domain\IPABridge\Models\PowercodeAddressRange
 *
 * @property-read \App\Domain\IPABridge\Models\Subnet|null $subnet
 * @method static \Illuminate\Database\Eloquent\Builder|PowercodeAddressRange newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PowercodeAddressRange newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PowercodeAddressRange query()
 */
	class PowercodeAddressRange extends \Eloquent {}
}

namespace App\Domain\IPABridge\Models{
/**
 * App\Domain\IPABridge\Models\Subnet
 *
 * @property int $id
 * @property string $prefix
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\IPABridge\Models\PowercodeAddressRange[] $powercodeAddressRanges
 * @property-read int|null $powercode_address_ranges_count
 * @method static \Illuminate\Database\Eloquent\Builder|Subnet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subnet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subnet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subnet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subnet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subnet wherePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subnet whereUpdatedAt($value)
 */
	class Subnet extends \Eloquent {}
}

namespace App\Domain\IPABridge\Models{
/**
 * App\Domain\IPABridge\Models\Subscriber
 *
 * @property int $id
 * @property int $subnet_id
 * @property int|null $pc_equipment_id
 * @property int|null $pc_customer_id
 * @property int|null $pc_service_id
 * @property int|null $pc_address_range_id
 * @property string|null $ipv4
 * @property string|null $prefix
 * @property string|null $mac
 * @property string|null $pc_status
 * @property int|null $downloadSpeedKb
 * @property int|null $uploadSpeedKb
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereDownloadSpeedKb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereIpv4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereMac($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber wherePcAddressRangeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber wherePcCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber wherePcEquipmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber wherePcServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber wherePcStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber wherePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereSubnetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereUploadSpeedKb($value)
 */
	class Subscriber extends \Eloquent {}
}

namespace App\Domain\RADIUS\Models{
/**
 * App\Domain\RADIUS\Models\RADIUSAttribute
 *
 * @property int $id
 * @property string $username
 * @property string $attribute
 * @property string $op
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\RADIUS\Models\RADIUSUser $user
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSAttribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSAttribute whereAttribute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSAttribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSAttribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSAttribute whereOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSAttribute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSAttribute whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSAttribute whereValue($value)
 */
	class RADIUSAttribute extends \Eloquent {}
}

namespace App\Domain\RADIUS\Models{
/**
 * App\Domain\RADIUS\Models\RADIUSUser
 *
 * @property int $id
 * @property string $username
 * @property string $attribute
 * @property string $op
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\RADIUS\Models\RADIUSAttribute[] $attributes
 * @property-read int|null $attributes_count
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSUser whereAttribute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSUser whereOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSUser whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RADIUSUser whereValue($value)
 */
	class RADIUSUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

