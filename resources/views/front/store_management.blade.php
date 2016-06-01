@extends('layouts.front_dashboard')

@section('title', 'Store Management')

@section('content')
 	<div class="board-header">
 		<h2>Store Management <span ng-bind=""></span></h2>
 		<div class="filters">
 			<label for="">Select Brand:</label>
 			<select name="" id="">
 				<option>Select One</option>
 				<option ng-repeat="brand in product.brands">[[brand|firstArrayValue]]</option>
 			</select>
 			<label for="">Filter:</label>
 			<select name="" id="">
 			 	<option>Lowest Price</option>
 				<option>Highest Price</option>
 			</select>
 		</div>
 	</div>
 	<div class="main">
 		<div class="inner">
 			<table>
 				<thead>
 					<tr>
						<th>
							<input type="checkbox" class="hidden" />
							<span class="checkbox"></span>
						</th>
						<th>Image</th>
						<th>Name</th>
						<th>Part no.</th>
						<th>Brand</th>
						<th>Price</th>
						<th>Available Stock</th>
						<th>Description</th>
					</tr>
 				</thead>
 				<tbody>
 					<tr ng-repeat="prod in product.all">
 						<td>
 							<input type="checkbox" data-id="prod._id" class="hidden" checked/>
 							<span class="checkbox"></span>
 						</td>
						<td>
							<div class="img-wrapper">
								<img ng-if="!prod.image_front" src="{{ URL::asset('images/thumbnail-default.jpg') }}" alt="">
								<img ng-if="prod.image_front" src="https://s3-ap-southeast-2.amazonaws.com/ingram-micro/[[prod.image_front]]" alt="">
							</div>
						</td>
						<td ng-bind="prod.description"></td>
						<td ng-bind="prod.part_number"></td>
 						<td ng-bind="prod.vendor_name"></td>
 						<td ng-bind="prod.retail_price"></td>
 						<td ng-bind="prod.available_qty"></td>
 						<td ng-bind="prod.material_long_description"></td>
 					</tr>
 					
 				</tbody>
 			</table>
 		</div>
 		<a href="#" class="default-btn">ADD TO STORE</a>
 	</div>
@endsection