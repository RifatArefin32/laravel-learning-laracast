<x-layout>
    <x-slot:titleText> Jobs </x-slot:titleText>
    <x-slot:pageHeading>All Jobs</x-slot:pageHeading>

    <div>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <div class="text-blue-500 border-2 p-4 m-4 shadow-md rounded">
                    <h1><strong>{{ $job['title'] }}</strong></h1>
                    <h1>{{ $job['salary'] . ' ' . $job['currency'] }} per month | {{ $job->employer->name }}</h1>
                </div>
            </a>
        @endforeach
    </div>

</x-layout>
