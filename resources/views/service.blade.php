@extends('common.layout')

@section('title', 'Home')

@section('content')
    @php use Illuminate\Support\Str; @endphp

    <div class="container py-4" style="padding-top: 60px !important;">
        <div class="row">
            {{-- Example services --}}
            @php
                $services = [
                    ['type' => 'Web Development', 'desc' => 'Building responsive and modern websites using latest technologies.'],
                    ['type' => 'Graphic Design', 'desc' => 'Creating visual content to communicate messages with creativity.'],
                    ['type' => 'SEO Optimization', 'desc' => 'Improving website ranking and visibility in search engines.'],
                    ['type' => 'Digital Marketing', 'desc' => 'Promoting brands through digital channels like social media, email, and search.'],
                ];
            @endphp

            @foreach ($services as $service)
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-success">
                        <div class="card-body">
                            <h5 class="card-title text-success">{{ $service['type'] }}</h5>
                            <p class="card-text text-muted">{{ $service['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="text-end text-muted small mt-3">
            — Service provided by {{ Str::title($name) }}
            <br>
            id: {{ Str::title($id) }}

        </div>
    </div>
@endsection