@extends('layouts.app')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <!--  <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div> -->

            <div class="blocks">
              <ul>
                <li id="salesRecord" ><a href="{{route('addItem')}}">Add/Remove Sales Record</a></li>
                <li id="editRecord"><a href="{{route('editRecord')}}">Edit Sales Record</a></li>
                <li id="displaySales"><a href="{{route('displaySales')}}"></a>Display Sales Record</li>
                <li id="inventoryRecord">Add/Remove Inventory</li>
                <li id="displayInventory">Display Inventory</li>
              </ul>
            </div>

        </div>
    </div>
</div>
@endsection
