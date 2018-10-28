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
              <ul id="homeblocks">
                <li id="salesRecord" ><a href="{{route('addItem')}}">Add/Remove Sales Record</a></li>
                <li id="editRecord"><a href="{{route('editRecord')}}">Edit Sales Record</a></li>
                <li id="displaySales"><a href="{{route('displaySales')}}">Display Sales Record</a></li>
                <li id="inventoryRecord"><a href="{{route('addInventory')}}">Add/Remove Inventory</a></li>
                <li id="displayInventory"><a href="{{route('displayInventory')}}">Display Inventory</a></li>
              </ul>
            </div>

        </div>
    </div>
</div>
@endsection
