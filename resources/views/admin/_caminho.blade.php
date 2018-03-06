<div class="row">
	<nav>
		<div class="nav-wrapper {{config('app.corSite')}}">
			<div class="col s12">
				@if(isset($caminhos))
					@foreach($caminhos as $caminho)
						@if($caminho['url'])
							<a class="breadcrumb" href="{{$caminho['url']}}">{{$caminho['titulo']}}</a>
							@else
							<span class="breadcrumb">{{$caminho['titulo']}}</span>
						@endif
					@endforeach
					@else
					<a class="breadcrumb">Admin</a>
				@endif
			</div>
		</div>
	</nav>	
</div>