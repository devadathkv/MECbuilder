<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <style>
        body {
            background: linear-gradient(135deg, #0d1117, #1a1f2a);
            color: #e6edf3;
            font-family: 'Poppins', sans-serif;
        }

        .profile-container {
            max-width: 900px;
            margin: 40px auto;
        }

        .profile-card {
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.6);
            margin-bottom: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.7);
        }

        .profile-card h2 {
            color: #58a6ff;
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        label {
            color: #c9d1d9;
            font-size: 0.95rem;
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            background-color: #0d1117;
            border: 1px solid #30363d;
            border-radius: 8px;
            width: 100%;
            padding: 10px 15px;
            margin-top: 6px;
            margin-bottom: 15px;
            color: #e6edf3;
            font-size: 0.95rem;
        }

        input:focus {
            outline: none;
            border-color: #58a6ff;
            box-shadow: 0 0 0 2px rgba(88, 166, 255, 0.3);
        }

        .btn-save {
            background: linear-gradient(135deg, #238636, #2ea043);
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-save:hover {
            background: linear-gradient(135deg, #2ea043, #45d96e);
        }

        .delete-account {
            background: linear-gradient(135deg, #f85149, #da3633);
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .delete-account:hover {
            background: linear-gradient(135deg, #da3633, #f85149);
        }
    </style>

    <div class="profile-container">
        <!-- Update Profile Information -->
        <div class="profile-card">
            <h2>Update Profile Information</h2>
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Update Password -->
        <div class="profile-card">
            <h2>Update Password</h2>
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Delete Account -->
        <div class="profile-card">
            <h2>Delete Account</h2>
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
