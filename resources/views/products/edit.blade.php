@component('layouts.app')

@slot('title')
    Componentes y slots
@endslot

@slot('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ __('Edit :name product', ['name' => $product->name]) }}
                </div>
                <div class="panel-body">

                    {!! Form::model($product, [
                            'route' => ['products.update', $product], 'method' => 'PUT',
                            'role' => 'form', 'class' => 'form'
                    ]) !!}

                    {!! Field::text('name') !!}

                    {!! Field::select('category_id', $categories) !!}

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Actualizar producto
                            </button>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endslot

@endcomponent
