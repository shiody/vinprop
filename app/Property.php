<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	public $fillable = [
						'prop_name',
						'prop_type_id',
						'prop_address',
						'prop_location_id',
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
						'prop_price',
						'prop_fee',
						'prop_owner_name',
						'prop_owner_contact'
						];
}
