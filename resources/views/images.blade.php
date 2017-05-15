@component('layouts.app')

    @slot('title')
        Images
    @endslot

    @slot('content')
        <div class="container">
            <div class="row">

                @component('components/thumbnail')

                    @slot('title', 'Arcoders')
                    @slot('image', asset('img/foto.jpg'))

                    @slot('description')
                        Lorem ipsum dolor sit ametelit.
                    @endslot

                @endcomponent

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
