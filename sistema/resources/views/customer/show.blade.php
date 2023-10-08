@extends('layouts.app')

@section('template_title')
    {{ $customer->name ?? "{{ __('Show') Customer" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Customer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $customer->name }}
                        </div>
                        <div class="form-group">
                            <strong>Lastname:</strong>
                            {{ $customer->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $customer->location }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $customer->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Mail:</strong>
                            {{ $customer->mail }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
