<x-layout>
    <div class="max-w-4xl mx-auto py-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 border-b-4 border-blue-500 inline-block pb-2">
            Edit Profile
        </h2>

        <div class="space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow-lg rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow-lg rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow-lg rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-layout>