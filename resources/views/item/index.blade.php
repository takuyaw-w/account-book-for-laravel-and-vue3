@extends('layout.default')
@section('contents')
    <div class="card mt-4">
        <header class="card-header">
            <p class="card-header-title">
                Item Detail
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('item.update') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $item->id }}" name="id" />
                    <div class="field">
                        <label class="label">Category</label>
                        <div class="control">
                            <input class="input" name="category" value="{{ $item->category }}" type="text"
                                placeholder="food">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Price</label>
                        <div class="control">
                            <input class="input" name="price" value="{{ $item->price }}" type="number" placeholder="0">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Purchase Date</label>
                        <div class="control">
                            <input class="input" name="purchase_date" value="{{ $item->purchase_date }}" type="date"
                                placeholder="0">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Note</label>
                        <div class="control">
                            <input class="input" name="note" value="{{ $item->note }}" type="text" maxlength="20"
                                placeholder="0">
                        </div>
                    </div>

                    <button class="button is-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
