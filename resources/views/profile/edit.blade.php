<x-layout>
    <div class="max-w-4xl mx-auto py-12 px-6 lg:px-8">
        <header class="mb-10 text-center sm:text-left">
            <h2
                class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-slate-900 to-primary-700">
                Edit Profile
            </h2>
            <p class="mt-2 text-slate-500 font-medium">Customize your climbing identity.</p>
        </header>

        <div class="space-y-8">
            <!-- Profile Info: User Gradient -->
            <div
                class="glass p-8 rounded-3xl shadow-sm border border-slate-200/50 relative overflow-hidden group hover:border-primary-200 transition-colors">
                <div
                    class="absolute -top-10 -right-10 w-40 h-40 bg-primary-50 rounded-full blur-3xl opacity-50 group-hover:opacity-100 transition-opacity">
                </div>
                <div class="max-w-xl relative">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Password: Lock Gradient -->
            <div
                class="glass p-8 rounded-3xl shadow-sm border border-slate-200/50 relative overflow-hidden group hover:border-indigo-200 transition-colors">
                <div
                    class="absolute -top-10 -right-10 w-40 h-40 bg-indigo-50 rounded-full blur-3xl opacity-50 group-hover:opacity-100 transition-opacity">
                </div>
                <div class="max-w-xl relative">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete: Red Gradient -->
            <div
                class="glass p-8 rounded-3xl shadow-sm border border-red-100 bg-red-50/20 relative overflow-hidden hover:bg-red-50/40 transition-colors">
                <div class="max-w-xl relative">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-layout>