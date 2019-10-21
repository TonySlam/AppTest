@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
<form action="{{route('store')}}" method="post">
    @csrf
                <div class="form-group">
                    <label for="address_address">Company Name</label>
                    <input type="text" id="company" name="name" class="form-control ">
                    <label for="address_address">Address</label>
                    <input type="text" id="address-input" name="address_address"  class="form-control map-input">
                    <input type="hidden" name="address_latitude" id="address-latitude" value="-25.7864739" />
                    <input type="hidden" name="address_longitude" id="address-longitude" value="28.323769999999968" />
                </div>
                <div id="address-map-container" style="width:100%;height:200px; ">
                    <div style="width: 100%; height: 250px" id="address-map"></div>
                </div>
    <input type="submit" value="Save" class="btn btn-success">

</form>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    @parent
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYA-M8i6uWAA4w4KiDsPfD6xgqVXMbqw8&libraries=places&callback=initialize" async defer></script>
    <script src="/js/mapInput.js"></script>
@stop