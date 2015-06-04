@extends('layout')

@section('content')
<div class="container box box-start">
	<h2>New Extraction</h2>
	<form id="selection" action="#" method="post">
		<p>Select a paper collection or upload a new one:</p>
		<div class="form-group">
			<select id="region" class="form-control" onchange="setRegion($('#region').val());">
				<option selected="" disabled="" value="">-- Papers collection --</option>
				@foreach($collections as $c)
				    <option value="{{ $c->id }}">{{ $c->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<!-- <p class="text-center text-muted">
				<strong>Collection:</strong> CSV file with metadata manually extracted + papers files in PDF format.
			</p> -->
			<!-- <hr> -->
			<a href="loading.php" type="submit" class="btn btn-primary btn-lg btn-block btn-extract">Extract Metadata</a>
		</div>
	</form>
	<div class="text-center">
		<a href="{{ route('collections.create') }}" class="btn-new-collection">Upload a new collection</a>
	</div>
</div>
@endsection