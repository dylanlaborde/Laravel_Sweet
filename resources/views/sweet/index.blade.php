@extends('layout.app')

@section('content')

<div class="ui grid">

	<div class="six wide column"></div>
	<h1>my sweet shop</h1>
</div>
<div class="ui grid">
	<div class="two wide column"></div>
</div>
<div class="ui grid">
	<div class="six wide column">
		@foreach($sweets as $key)
		<table class="ui celled table">
			<thead>
				<tr class="center aligned">
					<th>name</th>
					<th>quantiter</th>
					<th class="center aligned">stock</th>	
					<th></th>
				</tr>		
			</thead>
			<tbody>
				<tr>
					<td>{{$key->name}}</td>
					<td>{{$key->qty}}</td>
					<td>
						<div class="ui horizontal segments">
							<div class="ui segment">
								<form action="/sell/{{$key->id}}" method="post">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<button class="ui button" type="submit"> - </button>
								</form>
							</div>
							<div class="ui segment">
								<form action="/refill/{{$key->id}}" method="post">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<button class="ui button" type="submit"> + </button>
								</form>
							</div>
						</td>
						<td>
							
								<form action="/delete/{{$key->id}}" method="post">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<button class="ui negative button" type="submit">Supprimer</button>
								</form>
							

						</td>
					</tr>
				</tbody>
			</table>
			@endforeach
		</div>

		<div class="two wide column"></div>
		<div class="six wide column">

			<form action="/add_sweet" method="post" class="ui form">
				<h2>Ajouter un produit</h2>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="id">
				<div class="field">
					<label for="">Nom</label>
					<input id="" type="text" name="name">
				</div>
				<div class="field">
					<label for="">quantitée</label>
					<input type="text" name="qty" id="qty">
				</div>
				<div>
					<button class="positive ui button">Ajouter le produit</button>
				</div>
			</form>
		</div>
	</div>



	@stop