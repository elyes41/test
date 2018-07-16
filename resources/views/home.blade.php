@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>


                    You are logged in!
                        <a href="{{ url('/listuser') }}" class="menu-groups">
                            list des users
                        </a>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
