    @extends('app')
    @section('content')
        <div id="app">
            <h2 class="text-center">#1 Example Component</h2>
            <example-component><example-component>
        </div>
        <hr>
        <div id="table">
            <h2 class="text-center">#2 Blade - Vue</h2>
            <prop-component v-bind:urldata="{{ json_encode($url_data) }}" ></prop-component>
        </div>
        <div id="ajax">
            <h2 class="text-center">#3 Ajax</h2>
            <ajax-component></ajax-component>
        </div>

   @endsection