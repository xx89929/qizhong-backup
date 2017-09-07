
@if(session('success'))
    <div class="bg-success text-center">
        <h1>{{ session('success') }}</h1>
    </div>

@endif

@if(session('error'))
    <div class="bg-danger text-center">
        <h1>{{ session('error') }}</h1>
    </div>
@endif