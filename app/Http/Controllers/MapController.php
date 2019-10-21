<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    //
    public function index()
    {
        /******** Custom Map Controls ********/

      /*  $config = array();
        $config['center'] = 'auto';
        $config['center'] = '-26.20227, 28.04363';
        $config['zoom'] = '14';
        $config['onclick'] = 'createMarker_map({ map: map, position:event.latLng });';
        $config['places'] = TRUE;
        $config['placesAutocompleteInputID'] = 'myPlaceTextBox';
        $config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
        $marker['position'] = '37.429, -122.1419';
        $marker['draggable'] = true;
        $marker['ondragend'] = 'updateDatabase(event.latLng.lat(), event.latLng.lng());';
        $config['placesAutocompleteOnChange'] = 'alert(\'You selected a place\');';*/




        $config['center'] = '-26.20227, 28.04363';
        $config['zoom'] = 'auto';
        $config['places'] = TRUE;
        $config['placesAutocompleteInputID'] = 'myPlaceTextBox';
        $config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
        $config['placesAutocompleteOnChange'] = 'alert(\'You selected a place\');';
        // set up the marker ready for positioning
        // once we know the users location
        $marker = array();
        app('map')->initialize($config);
        app('map')->add_marker($marker);
        $map = app('map')->create_map();



        return view('welcome',compact('map'));
    }
}
