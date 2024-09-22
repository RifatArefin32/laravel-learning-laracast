<x-layout>
    <x-slot:titleText> Jobs </x-slot:titleText>
    <x-slot:pageHeading>All Jobs</x-slot:pageHeading>

    <div>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <div class="text-blue-500 border-2 p-4 m-4 shadow-md rounded">
                    {{ $job['title'] . ' | ' . $job['salary'] . ' ' . $job['currency'] . ' | See Details' }}
                </div>
            </a>
        @endforeach
    </div>

</x-layout>
