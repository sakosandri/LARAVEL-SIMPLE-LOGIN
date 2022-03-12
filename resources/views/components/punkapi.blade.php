@extends('layout')

@section('content')<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>Punk Api</h1>
        </div>
        <div class="panel-body">
            <div class="row">
                @include('components.shared.tablebeers')

            </div>
            @include('components.shared.pagination')

        </div>

    </div>
</div>
</div>
@endsection