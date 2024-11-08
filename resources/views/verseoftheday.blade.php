@extends('layouts.main')
@section('content')


<section id="about-us" class="pa-stripe-tagline">

    <div class="container">
        <!-- Section Header -->
        <div class="row">
            <div class="col-12 col-xl-10 offset-xl-1">

                <h1 class="pa-h1-v2 pa-dark fadeInDelay00Duration10"><strong></strong> Verse Of The Day
                </h1>
                <?php
                    $specificRecord = App\Models\Verse::whereDate('created_at', Carbon\Carbon::today())->first()
                ?>
                @if ($specificRecord)
                    <h3>{{ $specificRecord->verse }}</h3>
                    <p class="pa-p-v1 pa-dark fadeInDelay03Duration10">
                        {{ $specificRecord->words }}
                    </p>
                @else
                    <p class="pa-p-v1 pa-dark fadeInDelay03Duration10">
                        No record to show
                    </p>
                @endif

            </div>
        </div>

        <!-- Bottom Images -->

    </div>

</section>
@endsection
