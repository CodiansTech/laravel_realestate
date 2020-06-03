<div class="alert-box" style="margin-top: 10px;">
    <div class="container">
        <div class="row">
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            @if (Session::has('warning'))
            <div class="alert alert-info">
                {{ Session::get('warning') }}
            </div>
            @endif
            @if (Session::has('error'))
            <div class="alert alert-warning">
                {{ Session::get('error') }}
            </div>
            @endif
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error}}
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>