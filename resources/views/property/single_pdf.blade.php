<!DOCTYPE html>
<html>
	<style type="text/css">
        body {
          font-family: "Helvetica Neue", Helvetica, Arial;
          font-size: 14px;
          line-height: 20px;
          font-weight: 400;
          color: #3b3b3b;
          -webkit-font-smoothing: antialiased;
          font-smoothing: antialiased;
          background: #ffffff;
        }

        .wrapper {
          margin: 0 auto;
          padding: 40px;
          max-width: 800px;
        }

        .title {
        	font-size: 20px;
        	color: #009688;
        }

        .header {
        	font-size: 16px;
        	margin-top: 1em;
        	margin-bottom: 1em;
        }

        .info {
        	padding-left: 1em;
        }

        .prop_image {
        	width: 300px;
        }
    </style>
	<body>
		<div class="wrapper">
			<table>
				<tr>
					<td style="padding-left: 2em; padding-right: 2em; vertical-align: top;">
						@if ($property->prop_image == null)
                            <img class="prop_image" src="images/properties/default.jpg">
                        @else
                            <img class="prop_image" src="{{ ltrim($property->prop_image, '/') }}">
                        @endif
					</td>
					<td>
						<span class="title">{{ $property->prop_address }}</span>

						<div class="header">
							@if ($property->prop_type_id != 0)
							{{ $property->property_type->prop_type_name }}<br/>
							@endif
							IDR {{ number_format($property->prop_price) }}
							@if ($property->prop_list_type_id != 0)
							({{ $property->list_type->list_type_name }})
							@endif
							<br/>
							{{ $property->prop_address }}<br/>
						</div>

						<table>
							<tr>
								<td>Bedroom</td>
								<td class="info">{{ $property->prop_bedroom }}</td>
							</tr>
							<tr>
								<td>Maids Room</td>
								<td class="info">{{ $property->prop_maids_room }}</td>
							</tr>
							<tr>
								<td>Bathroom</td>
								<td class="info">{{ $property->prop_bathroom }}</td>
							</tr>
							<tr>
								<td>Floor</td>
								<td class="info">{{ $property->prop_floor }}</td>
							</tr>
							<tr>
								<td>Phone Lines</td>
								<td class="info">{{ $property->prop_phone_lines }}</td>
							</tr>
							<tr>
								<td>Electricity</td>
								<td class="info">{{ $property->prop_electricity }}</td>
							</tr>
							<tr>
								<td>Water Source</td>
								@if ($property->prop_water_src_id != 0)
                                <td class="info">{{ $property->water_source->water_src_name }}</td>
                                @else
                                <td></td>
                                @endif
							</tr>
							<tr>
								<td>Surface Area</td>
								<td class="info">{{ $property->prop_surface_area }}</td>
							</tr>
							<tr>
								<td>Building Area</td>
								<td class="info">{{ $property->prop_building_area }}</td>
							</tr>
							<tr>
								<td>Certificate</td>
								<td class="info">{{ $property->prop_certificate }}</td>
							</tr>
							<tr>
								<td>Notes</td>
								<td class="info">{{ $property->prop_notes }}</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<br/>
						<hr/>
						<br/>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<table>
						@if ($marketing->company_id != null)
						<tr>
							<td style="vertical-align: top;">
								<img src="{{ ltrim($marketing->company->company_logo, '/') }}">
								<br/>
								<p>
									Mobile: {{ $marketing->phone }}
								</p>
							</td>
							<td>
								<h2>{{ $marketing->name }}</h2>
								<p>
									{{ $marketing->company->company_name }}<br/>
									{{ $marketing->company->company_address }}<br/>
									Phone: {{ $marketing->company->company_phone }}<br/>
									Fax: {{ $marketing->company->company_fax }}<br/>
									Email: {{ $marketing->company->company_email }}
								</p>
							</td>
						</tr>
						@else
						<tr>
							<td style="vertical-align: top;">Contact: </td>
							<td>
								{{ $marketing->name }}<br/>
								{{ $marketing->phone }}
							</td>
						</tr>
						@endif
					</table>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>