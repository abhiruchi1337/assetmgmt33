@extends('layouts.app')


<!-- <html> -->
    <head>
        <title>Store Manager home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>.sidenav {
    height: 100%;
    width: 160px; 
    position: fixed;
    z-index: 1;
    overflow-x: hidden;
    padding-top: 20px;
}
</style>
    </head>
@section('content')
        <div class="col-sm-4">
            <h1>REQUIRED ASSETS LIST</h1> <!--Side bar for requests-->
            <table class="table">
            <tr><td>Item</td>
                <td>Quantity</td>
                <td>In stock?</td>
            @if(isset($request))
                @foreach($request as $s)
                <!-- <tr><td>Item</td></tr> -->
                
                <tr><td>{{$s->item}}</td>
                <td>{{$s->qty}}</td>
                @if($s->available == 0 )
                <td>No</td>
                <!-- <td><a href="#" role="button" class="btn btn-primary btn-block">Allot</a></td> -->
                <td><form method='POST' action="{{ action('StoreMgrController@setpending') }}">
                
                <input type='hidden' name='id' value='{{$s->id}}'></input>
                <input type='hidden' name='status' value=0></input>
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <button type="submit" class="btn btn-primary btn-block">Mark as pending</button></form></td></tr>
                @else
                <td>Yes</td>
                <td><form method='POST' action="{{ action('StoreMgrController@allotAsset') }}">
                <input type='hidden' name='id' value='{{$s->id}}'></input>
                <input type='hidden' name='status' value=1></input>
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <button type="submit" class="btn btn-primary btn-block">Allot</button></form></td>
                <td><form method='POST' action="{{ action('StoreMgrController@setpending') }}">
                <input type='hidden' name='id' value='{{$s->id}}'></input>
                <input type='hidden' name='status' value=0></input>
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <button type="submit" class="btn btn-primary btn-block">Mark as pending</button></form></td></tr>
                @endif

                <tr><td></td>
                @endforeach
            @endif
                <!-- <tr><td>Item</td></tr>
                <tr><td></td>
                <td><a href="#" role="button" class="btn btn-primary btn-block">Available</a></td>
                <td><a href="#" role="button" class="btn btn-primary btn-block">Pending</a></td></tr>
                <tr><td></td>
                <td><a href="#" role="button" class="btn btn-primary btn-block">Available</a></td>
                <td><a href="#" role="button" class="btn btn-primary btn-block">Pending</a></td></tr> -->
            </table>
        </div>
        <div class="col-sm-8">
            <h1>INVENTORY</h1><!--Showing available resources-->
            <div class="main">
            @if(isset($stock))
                @foreach($stock as $s)
                <div class="thumbnail col-sm-2">
                        <div class="caption">
                            <h4>{{$s->item_name}}</h4><p>{{$s->qty}}</p>
                                <p><a href="#" role="button" class="btn btn-primary">+</a> <a href="#" role="button" class="btn btn-primary">-</a></p>
                        </div>
                    </div>
                
                @endforeach
            @endif
                    <!-- <div class="thumbnail col-sm-2">
                        <div class="caption">
                            <h4>Item 1</h4><p>Quantity:</p>
                                <p><a href="#" role="button" class="btn btn-primary">+</a> <a href="#" role="button" class="btn btn-primary">-</a></p>
                        </div>
                    </div>
                    <div class="thumbnail col-sm-2">
                        <div class="caption">
                            <h4>Item 2</h4><p>Quantity:</p>
                                <p><a href="#" role="button" class="btn btn-primary">+</a>  <a href="#" role="button" class="btn btn-primary">-</a></p>
                        </div>
                    </div>
            <div class="thumbnail col-sm-2">
                        <div class="caption">
                            <h4>Item 3</h4><p>Quantity:</p>
                                <p><a href="#" role="button" class="btn btn-primary">+</a>  <a href="#" role="button" class="btn btn-primary">-</a></p>
                        </div>
                        </div>
                    </div>
                </div> -->
@endsection
    <!-- </body> -->
<!-- </html> -->
