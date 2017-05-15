@component('layouts.app')

    @slot('title')
        Images
    @endslot

    @slot('content')
        <div class="container">
            <div class="row">

                @include('components/thumbnail', [
                    'title' => 'Arcoders',
                    'image' => asset('img/foto.jpg'),
                    'description' => 'Lorem ipsum dolor set amet.'
                ])

                @include('components/thumbnail', [
                    'title' => 'Arcoders',
                    'image' => asset('img/foto.jpg'),
                    'description' => 'Lorem ipsum dolor set amet.'
                ])

                @include('components/thumbnail', [
                    'title' => 'Arcoders',
                    'image' => asset('img/foto.jpg'),
                    'description' => 'Lorem ipsum dolor set amet.'
                ])

            </div>
        </div>
    @endslot

@endcomponent
