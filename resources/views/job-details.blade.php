<x-layout>
    <x-slot:titleText> Jobs </x-slot:titleText>
    <x-slot:pageHeading>All Jobs</x-slot:pageHeading>

    <div>
        <div class="m-2 p-4 shadow-lg">
            <strong>Job ID: </strong> {{ $job['id'] }}
        </div>
        <div class="m-2 p-4 shadow-lg">
            <strong>Job Title: </strong> {{ $job['title'] }}
        </div>
        <div class="m-2 p-4 shadow-lg">
            <strong>Salary: </strong> {{ $job['salary'] . " " . $job['currency'] }}
        </div>
    </div>

</x-layout>
