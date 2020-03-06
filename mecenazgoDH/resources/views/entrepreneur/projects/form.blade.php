

<form action="{{ url($url) }}" method="post">


    @csrf

    @method($method)


    <div class="form-group">
        <label>titulo</label>
        <input
            class="form-control"
            type="text" name="name"
            value="{{ old('name', $project->title) }}">
    </div>


    <div class="form-group">
        <label>Nombre</label>
        <input
            class="form-control"
            type="text" name="name"
            value="{{ old('name', $project->name) }}">

        <p class="text-danger">{{ $errors->first('name') }}</p>
    </div>

    <div class="form-group">
        <label>aporte</label>
        <input
            class="form-control"
            type="number" name="amount"
            value="{{ old('amount', $project->amount) }}">
    </div>


    <div class="form-group">
        <label for="">Descripcion</label>
        <textarea class="form-control" name="description">{{ $project->description }}</textarea>
    </div>



    <div class="form-group">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

