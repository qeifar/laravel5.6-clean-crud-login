@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
<div class="form-control">
                    <div class="form-group">
                    User Name: {{{ isset(Auth::user()->email) ? Auth::user()->username : Auth::user()->email }}}
                    </div>
                    <div class="form-group">
                    Name: {{{ isset(Auth::user()->email) ? Auth::user()->name : Auth::user()->email }}}
                    </div>
                    <div class="form-group">
                    Email:  {{{ isset(Auth::user()->email) ? Auth::user()->email : Auth::user()->email }}}
                    </div>
                    <div class="form-group">
                    Birthdate: {{{ isset(Auth::user()->email) ? Auth::user()->birthday : Auth::user()->email }}}
                    </div>
                    <div class="form-group">
                    Country: {{{ isset(Auth::user()->email) ? Auth::user()->country : Auth::user()->email }}}
                    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
