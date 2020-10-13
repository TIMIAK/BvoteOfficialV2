@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <ul>
                <li>{{$error}}</li>
            </ul>
        </div>
    @endforeach
@endif
@if (session()->has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('error')}}</li>
        </ul>
    </div>
@endif
@if (session()->has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{session('success')}}</li>
        </ul>
    </div>
@endif
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('A fresh verification link has been sent to your email address.') }}
    </div>
@endif
