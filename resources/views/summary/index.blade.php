@extends('layout.default')
@section('contents')
    <div class="card mt-4">
        <header class="card-header">
            <p class="card-header-title">
                Summary
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <expenses-table :headers="{{ $headers }}" :items="{{ $groupedItems }}"></expenses-table>
            </div>
        </div>
    </div>
@endsection
