<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            One Hand for Sudan - Admin Dashboard
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome -->
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-3xl font-bold text-blue-900">
                    Welcome, {{ Auth::user()->name }}
                </h1>

                <p class="text-gray-600 mt-2">
                    Manage activities, donations, volunteers and website content.
                </p>
            </div>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-blue-100 p-6 rounded-lg shadow">
                    <h3 class="text-lg font-bold">Activities</h3>
                    <p class="text-3xl font-bold mt-2">0</p>
                </div>

                <div class="bg-green-100 p-6 rounded-lg shadow">
                    <h3 class="text-lg font-bold">Gallery Photos</h3>
                    <p class="text-3xl font-bold mt-2">0</p>
                </div>

                <div class="bg-yellow-100 p-6 rounded-lg shadow">
                    <h3 class="text-lg font-bold">Messages</h3>
                    <p class="text-3xl font-bold mt-2">0</p>
                </div>

                <div class="bg-red-100 p-6 rounded-lg shadow">
                    <h3 class="text-lg font-bold">Donations</h3>
                    <p class="text-3xl font-bold mt-2">0</p>
                </div>

            </div>

            <!-- Quick Actions -->
            <div class="bg-white shadow rounded-lg p-6 mt-8">

                <h2 class="text-2xl font-bold text-blue-900 mb-4">
                    Quick Actions
                </h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">

                    <a href="#"
                       class="bg-blue-600 text-white text-center p-4 rounded-lg">
                        Add Activity
                    </a>

                    <a href="#"
                       class="bg-green-600 text-white text-center p-4 rounded-lg">
                        Upload Photo
                    </a>

                    <a href="#"
                       class="bg-yellow-600 text-white text-center p-4 rounded-lg">
                        View Messages
                    </a>

                    <a href="#"
                       class="bg-purple-600 text-white text-center p-4 rounded-lg">
                        Manage Donations
                    </a>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>
