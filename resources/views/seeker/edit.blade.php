<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="space-y-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-lg font-semibold text-gray-800 mb-4">
                                    {{ __('Update Profile Information') }}
                                </h2>
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>