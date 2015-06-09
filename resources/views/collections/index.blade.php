@extends('layout')

@section('content')
<div class="container box box-collections">
	
	<h2>Collections</h2>
	
	<form method="post">
		
		<table class="table table-bordered table-result table-striped">
			<thead>
				<tr>
					<th width="40%">Name</th>
					<th width="15%" colspan="2">Papers</th>
					<th width="13%">Status</th>
					<th width="">Created at</th>
					<th width="6%"></th>
				</tr>
			</thead>
			<tbody>

				@foreach($collections as $c)
				<?php $classes = ['new' => 'success', 'collected' => 'warning', 'extracted' => 'info'] ?>
				<tr>
					<td>{{ $c->name }}</td>
					<td>
					    {{ $c->papers->count() }}
					</td>
					<td class="text-center" width="6%">
                        <a href="{{ route('collections.papers', [$c->id]) }}" class="text-info" title="JSON File">
                            <i class="fa fa-file-text-o"></i>
                        </a>
					</td>
					<td>
						<label class="label label-{{ $classes[$c->status] }}">
							{{ ucfirst($c->status) }}
						</label>
					</td>
					<td>{{ $c->created_at }}</td>
					<td class="text-center">
                        <a href="{{ route('collections.destroy', [$c->id]) }}" class="text-danger" data-method="DELETE" data-confirm="You're going to remove an entire collection. Are you sure?" title="Delete">
                            <i class="fa fa-remove"></i>
                        </a>
                    </td>
				</tr>
				@endforeach

			</tbody>
		</table>

		<div class="text-left">
			<a href="{{ route('collections.create') }}" class="btn btn-primary">
				New Collection
			</a>
		</div>

	</form>
</div>
@endsection
