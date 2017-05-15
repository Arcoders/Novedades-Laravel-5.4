@component('layouts.app')

    @slot('title')
        Dashboard
    @endslot

    @slot('content')
        <div class="container">
            {!! Alert::render() !!}
        </div>
    @endslot

@endcomponent
