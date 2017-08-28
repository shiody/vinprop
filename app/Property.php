<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	protected $table = 'properties';
    protected $primaryKey = 'prop_name';
    public $incrementing = false;

	public $fillable = [
						'prop_name',
						'prop_list_type_id',
						'prop_type_id',
						'prop_location_id',
						'prop_address',
						'prop_bedroom',
						'prop_bathroom',
						'prop_maids_room',
						'prop_floor',
						'prop_phone_lines',
						'prop_electricity',
						'prop_direction_id',
						'prop_water_src_id',
						'prop_surface_area',
						'prop_building_area',
						'prop_certificate',
						'prop_rent_status',
						'prop_price',
						'prop_fee',
						'prop_user_id',
						'prop_company_id',
						'prop_owner_name',
						'prop_owner_contact',
						'prop_notes',
						'prop_user_notes',
						'prop_image',
						'expired_at',
						'status'
						];

	public function list_type()
	{
		return $this->belongsTo(ListType::class, 'prop_list_type_id');
	}

	public function property_type()
	{
		return $this->belongsTo(PropertyType::class, 'prop_type_id');
	}

	public function location()
	{
		return $this->belongsTo(Location::class, 'prop_location_id');
	}

	public function water_source()
	{
		return $this->belongsTo(WaterSource::class, 'prop_water_src_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'prop_user_id');
	}
}
