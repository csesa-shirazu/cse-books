@if(count($errors) ==1)
    <div class="alert alert-danger">
        <strong>اخطار:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(count($errors) >1)
    <div class="alert alert-danger">
        <strong>اخطار:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success">
        <strong>Success</strong>
        <p class="text-success">
            {{ Session::get('success') }}
        </p>
    </div>
@endif