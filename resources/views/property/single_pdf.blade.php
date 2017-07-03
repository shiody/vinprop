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
						<span class="title">{{ $property->prop_name }}</span>

						<div class="header">
							{{ $property->property_type->prop_type_name }}<br/>
							IDR {{ number_format($property->prop_price) }} ({{ $property->list_type->list_type_name }})<br/>
							{{ $property->prop_address }}<br/>
							{{ $property->location->location_name }}<br/>
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
								<td class="info">{{ $property->water_source->water_src_name }}</td>
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
						</table>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>