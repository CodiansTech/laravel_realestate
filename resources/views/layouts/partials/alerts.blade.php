<div class="alert-box">
    <div class="container">
        <div class="row">
            @if (Session::has('success'))
            <div class="alert alert-info" style="border-radius: 0px">
                <i class="fa fa-check"></i> {{ Session::get('success') }}
            </div>
            @endif
            @if (Session::has('warning'))
            <div class="alert alert-warning" style="border-radius: 0px">
                <i class="fa fa-exclamation-triangle"></i> {{ Session::get('warning') }}
            </div>
            @endif
            @if (Session::has('error'))
            <div class="alert alert-danger" style="border-radius: 0px">
                <i class="fa fa-exclamation-triangle"></i> {{ Session::get('error') }}
            </div>
            @endif
            @if (count($errors) > 0)
            <div class="alert alert-danger" style="border-radius: 0px">
               <i class="fa fa-exclamation-triangle"></i> <strong>Errors:</strong> 
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                  @endforeach
              </ul>
            </div>
            @endif
        </div>
        
    </div>
</div>