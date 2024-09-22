<x-layout>
    <x-slot:titleText> Jobs </x-slot:titleText>
    <x-slot:pageHeading>All Jobs</x-slot:pageHeading>

    <div>
        <div class="m-2 p-4 shadow-lg">
            Job ID: {{ $job['id'] }}
        </div>
        <div class="m-2 p-4 shadow-lg">
            Job Title: {{ $job['title'] }}
        </div>
        <div class="m-2 p-4 shadow-lg">
            Salary: {{ $job['salary'] . " " . $job['currency'] }}
        </div>
    </div>

</x-layout>
