<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Our Activities
        </h2>
    </x-slot>

```
<div class="max-w-7xl mx-auto py-10 px-6">

    <!-- Page Introduction -->
    <section class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">
            Humanitarian Activities
        </h1>

        <p class="text-gray-700">
            One Hand for Sudan conducts humanitarian, educational, and
            community development activities to support vulnerable
            communities across Sudan.
        </p>
    </section>

    <!-- Activity 1 -->
    <section class="bg-white shadow rounded-lg p-6 mb-10">
        <h2 class="text-2xl font-bold text-blue-800 mb-4">
            Clothing Collection Campaign
        </h2>

        <img src="{{ asset('images/clothes-drive.jpg') }}"
             alt="Clothing Campaign"
             class="rounded-lg w-full mb-4">

        <p class="text-gray-700">
            Collecting and distributing clothes to displaced families,
            refugees, and vulnerable communities.
        </p>
    </section>

    <!-- Activity 2 -->
    <section class="bg-white shadow rounded-lg p-6 mb-10">
        <h2 class="text-2xl font-bold text-blue-800 mb-4">
            Household Support Program
        </h2>

        <img src="{{ asset('images/household-support.jpg') }}"
             alt="Household Support"
             class="rounded-lg w-full mb-4">

        <p class="text-gray-700">
            Distribution of essential household items to families
            affected by displacement and emergencies.
        </p>
    </section>

    <!-- Activity 3 -->
    <section class="bg-white shadow rounded-lg p-6 mb-10">
        <h2 class="text-2xl font-bold text-blue-800 mb-4">
            Educational Support
        </h2>

        <img src="{{ asset('images/education.jpg') }}"
             alt="Educational Support"
             class="rounded-lg w-full mb-4">

        <p class="text-gray-700">
            Supporting students through educational materials,
            training, and digital literacy programs.
        </p>
    </section>

    <!-- Video Section -->
    <section class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold text-blue-800 mb-4">
            Activity Videos
        </h2>

        <div class="aspect-video">
            <iframe
                class="w-full h-full rounded-lg"
                src="https://www.youtube.com/embed/YOUR_VIDEO_ID"
                title="One Hand for Sudan Activities"
                allowfullscreen>
            </iframe>
        </div>
    </section>

</div>
```

</x-app-layout>
