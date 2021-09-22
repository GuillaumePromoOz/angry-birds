@extends('layouts.app')


@section('content')
<main class="container cart-content">
    <div class="row">
        <div class="col">

            <h1 class="display-4">Your cart</h1>

            <table class="table table-hover align-middle text-center cart-table">

                <thead>
                    <tr class="table-dark">
                        <th scope="col"></th>
                        <th scope="col">NAME</th>
                        <th scope="col">QUANTITY</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">REMOVE</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($cartItems as $item)
                    <tr>

                        <th class="cart-table-th"><img src="{{ asset('images/' . $item->attributes->image) }}" class="bird-cart-image"></th>
                        <td>{{ $item->name }}</td>
                        <td>
                            <div>
                                <form action="{{ route('cart.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id}}">
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="btn btn-primary">update</button>
                                </form>
                            </div>
                        </td>
                        <td>{{ $item->price }}&euro;</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}" name="id">
                                <button class="btn btn-danger">x</button>
                            </form>
                        </td>


                    </tr>
                    @endforeach
                </tbody>

            </table>

            <div>
                Total: ${{ Cart::getTotal() }}
            </div>
            <div>
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger mt-3">Delete Cart</button>
                </form>
            </div>

        </div>
    </div>
</main>
@endsection
