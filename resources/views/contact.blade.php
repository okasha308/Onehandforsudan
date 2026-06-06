<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contact Us
        </h2>
    </x-slot>

```
<div class="max-w-7xl mx-auto py-10 px-6">

    <!-- Page Title -->
    <section class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">
            Contact One Hand for Sudan
        </h1>

        <p class="text-gray-700">
            We'd love to hear from you. Whether you would like to volunteer,
            donate, partner with us, or learn more about our activities,
            please get in touch.
        </p>
    </section>

    <div class="grid md:grid-cols-2 gap-8">

        <!-- Contact Information -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-blue-800 mb-6">
                Contact Information
            </h2>

            <div class="space-y-4">
                <p>
                    <strong>Email:</strong><br>
                    info@onehandforsudan.org
                </p>

                <p>
                    <strong>Phone:</strong><br>
                    +249 XXX XXX XXX
                </p>

                <p>
                    <strong>Address:</strong><br>
                    Khartoum, Sudan
                </p>

                <p>
                    <strong>Working Hours:</strong><br>
                    Sunday - Thursday<br>
                    8:00 AM - 5:00 PM
                </p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-blue-800 mb-6">
                Send Us a Message
            </h2>

            <form>

                <div class="mb-4">
                    <label class="block mb-2 font-medium">
                        Full Name
                    </label>

                    <input
                        type="text"
                        class="w-full border rounded-lg px-4 py-2"
                        placeholder="Enter your full name">
                </div>

                <div class="mb-4">
                    <label class="block mb-2 font-medium">
                        Email Address
                    </label>

                    <input
                        type="email"
                        class="w-full border rounded-lg px-4 py-2"
                        placeholder="Enter your email">
                </div>

                <div class="mb-4">
                    <label class="block mb-2 font-medium">
                        Subject
                    </label>

                    <input
                        type="text"
                        class="w-full border rounded-lg px-4 py-2"
                        placeholder="Message subject">
                </div>

                <div class="mb-4">
                    <label class="block mb-2 font-medium">
                        Message
                    </label>

                    <textarea
                        rows="5"
                        class="w-full border rounded-lg px-4 py-2"
                        placeholder="Write your message"></textarea>
                </div>

                <button
                    type="submit"
                    class="bg-blue-900 text-white px-6 py-3 rounded-lg">
                    Send Message
                </button>

            </form>
        </div>

    </div>

    <!-- Map Section -->
    <section class="mt-10 bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold text-blue-800 mb-4">
            Our Location
        </h2>

        <div class="aspect-video">
            <iframe
                class="w-full h-full rounded-lg"
                src="https://maps.google.com/maps?q=Khartoum&t=&z=13&ie=UTF8&iwloc=&output=embed"
                allowfullscreen>
            </iframe>
        </div>
    </section>

</div>
```

</x-app-layout>
