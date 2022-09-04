@extends('layout.default')
@section('contents')
    <div class="card mt-4">
        <header class="card-header">
            <p class="card-header-title">
                Add accounting
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('item.store') }}" method="post">
                    @csrf
                    <div class="field">
                        <label class="label">Category</label>
                        <div class="control">
                            <input class="input" name="category" value="{{ old('category') }}" type="text"
                                placeholder="food">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Price</label>
                        <div class="control">
                            <input class="input" name="price" value="{{ old('price') }}" type="number" placeholder="0">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Purchase Date</label>
                        <div class="control">
                            <input class="input" name="purchase_date" value="{{ old('purchase_date') }}" type="date"
                                placeholder="0">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Note</label>
                        <div class="control">
                            <input class="input" name="note" value="{{ old('note') }}" type="text" maxlength="20"
                                placeholder="0">
                        </div>
                    </div>

                    <button class="button is-primary">Add</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <header class="card-header">
            <p class="card-header-title">
                History
            </p>
            <a href="{{ route('summary') }}" class="button is-text">Summary</a>
        </header>
        <div class="card-content">
            <div class="content">
                <expenses-table :headers="{{ $headers }}" :items="{{ collect($items->items()) }}"></expenses-table>
            </div>
        </div>
        <footer class="card-footer">
            {{ $items }}
        </footer>
    </div>
@endsection
