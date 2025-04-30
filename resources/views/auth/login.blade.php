<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"> <!-- Using Poppins font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CSS -->

    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); /* Vibrant gradient */
            font-family: 'Poppins', sans-serif; /* Modern font */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            overflow-y: auto;
            color: #333; /* Default text color */
        }

        form {
            background: rgba(255, 255, 255, 0.98); /* Almost opaque white */
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2); /* Deeper shadow */
            padding: 50px; /* Increased padding */
            border-radius: 20px; /* More rounded corners */
            max-width: 500px;
            width: 100%;
            text-align: center;
            backdrop-filter: blur(10px); /* Slightly less blur */
            border: 1px solid rgba(255, 255, 255, 0.3); /* More visible border */
            animation: slideInUp 0.8s ease-out; /* Animation */
            position: relative;
            z-index: 1;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            font-size: 2.8rem; /* Larger heading */
            font-weight: 700; /* Bolder */
            color: #333;
            margin-bottom: 10px; /* Less space below title */
            position: relative;
        }

        h2 a {
             text-decoration: none;
             color: inherit;
        }

        h2::after {
            content: '';
            display: block;
            width: 60px; /* Wider underline */
            height: 4px; /* Thicker underline */
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradient underline */
            margin: 15px auto 25px auto; /* More space below underline */
            border-radius: 2px;
        }

        p {
            font-size: 1.2rem; /* Larger paragraph */
            color: #555; /* Slightly darker */
            margin-bottom: 30px; /* More space below paragraph */
        }

        .input-container {
            position: relative;
            margin-bottom: 25px; /* More space between input containers */
        }

        .input-container input {
            border: 1px solid #ced4da; /* Subtle border */
            padding: 15px 15px 15px 45px; /* Adjust padding for icon */
            border-radius: 8px; /* More rounded corners */
            width: 100%;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            background-color: #f8f9fa; /* Light background */
        }

        .input-container input:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(106, 17, 203, 0.3); /* Shadow matching gradient */
            border-color: #6a11cb; /* Border matching gradient */
            background-color: #ffffff; /* White background on focus */
        }

        .icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6a11cb; /* Color matching gradient */
            font-size: 20px;
            z-index: 2; /* Ensure icon is above input */
        }

        .eye-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6a11cb; /* Color matching gradient */
            font-size: 20px;
            z-index: 2; /* Ensure icon is above input */
            transition: color 0.3s ease;
        }

        .eye-icon:hover {
            color: #2575fc; /* Change color on hover */
        }


        .remember-me {
            display: flex;
            align-items: center;
            margin-top: 15px; /* Less space above remember me */
            margin-bottom: 20px; /* More space below remember me */
            font-size: 1rem;
            color: #555;
        }

        .remember-me input[type="checkbox"] {
            margin-right: 10px; /* Less space */
            border-color: #ced4da;
            border-radius: 4px;
            accent-color: #6a11cb; /* Color checkbox */
        }


        button {
            background: linear-gradient(45deg, #6a11cb, #2575fc); /* Gradient button */
            color: white;
            border: none;
            padding: 15px 30px; /* Padding */
            border-radius: 8px; /* Rounded corners */
            cursor: pointer;
            font-size: 1.2rem; /* Larger font */
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 20px; /* Space above button */
            box-shadow: 0 8px 20px rgba(106, 17, 203, 0.3); /* Button shadow */
        }

        button:hover {
            background: linear-gradient(45deg, #2575fc, #6a11cb); /* Reverse gradient on hover */
            box-shadow: 0 10px 25px rgba(106, 17, 203, 0.4); /* Deeper shadow on hover */
            transform: translateY(-2px); /* Lift effect */
        }

        .register-link {
            display: block; /* Make it a block element */
            text-align: center;
            margin-top: 25px; /* Space above link */
            font-size: 1.1rem;
        }

        .register-link a {
            color: #6a11cb; /* Color matching gradient */
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease, text-decoration 0.3s ease;
        }

        .register-link a:hover {
            color: #2575fc; /* Change color on hover */
            text-decoration: underline;
        }


        /* Background Shapes - Enhanced */
        .background-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
            pointer-events: none; /* Allow clicks through shapes */
        }

        .background-shapes div {
            position: absolute;
            width: 250px; /* Larger shapes */
            height: 250px; /* Larger shapes */
            background: rgba(255, 255, 255, 0.1); /* Subtle white transparency */
            border-radius: 50%;
            animation: float 10s infinite ease-in-out; /* Slower animation */
            opacity: 0.7; /* Slightly less opaque */
        }

        .background-shapes div:nth-child(1) {
            top: 10%;
            left: 15%;
            animation-duration: 12s;
            width: 300px; height: 300px; /* Different size */
            background: rgba(255, 255, 255, 0.08);
        }

        .background-shapes div:nth-child(2) {
            top: 60%;
            right: 10%;
            animation-duration: 15s;
            width: 200px; height: 200px; /* Different size */
            background: rgba(255, 255, 255, 0.12);
        }

        .background-shapes div:nth-child(3) {
            bottom: 5%;
            left: 40%;
            animation-duration: 13s;
            width: 280px; height: 280px; /* Different size */
            background: rgba(255, 255, 255, 0.09);
        }

         .background-shapes div:nth-child(4) {
            top: 30%;
            left: 70%;
            animation-duration: 11s;
            width: 220px; height: 220px;
            background: rgba(255, 255, 255, 0.11);
        }

         .background-shapes div:nth-child(5) {
            bottom: 20%;
            right: 30%;
            animation-duration: 14s;
            width: 260px; height: 260px;
            background: rgba(255, 255, 255, 0.07);
        }


        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-30px) rotate(180deg); /* More vertical movement */
            }
            100% {
                transform: translateY(0) rotate(360deg);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            form {
                padding: 30px;
                border-radius: 15px;
            }
            h2 {
                font-size: 2rem;
            }
             h2::after {
                 width: 40px;
                 height: 3px;
                 margin: 10px auto 20px auto;
             }
            p {
                font-size: 1rem;
                margin-bottom: 20px;
            }
            .input-container {
                margin-bottom: 20px;
            }
            .input-container input {
                padding: 12px 12px 12px 40px;
                font-size: 1rem;
            }
            .icon, .eye-icon {
                font-size: 18px;
                left: 12px; /* Adjust icon position */
            }
             .eye-icon {
                 right: 12px; /* Adjust icon position */
             }
            .remember-me {
                font-size: 0.9rem;
                margin-bottom: 15px;
            }
            button {
                padding: 12px 20px;
                font-size: 1.1rem;
                margin-top: 15px;
            }
            .register-link {
                font-size: 1rem;
                margin-top: 20px;
            }
             .background-shapes div {
                 width: 150px;
                 height: 150px;
             }
             .background-shapes div:nth-child(1) {
                 width: 200px; height: 200px;
             }
             .background-shapes div:nth-child(2) {
                 width: 120px; height: 120px;
             }
             .background-shapes div:nth-child(3) {
                 width: 180px; height: 180px;
             }
              .background-shapes div:nth-child(4) {
                 width: 160px; height: 160px;
             }
              .background-shapes div:nth-child(5) {
                 width: 140px; height: 140px;
             }
        }
    </style>

    <div class="background-shapes">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h2>
            <a href="{{ route('welcome') }}">
                Welcome Back!
            </a>
        </h2>
        <p>Login to your account</p>

        <!-- Email Address -->
        <div class="input-container">
            <span class="icon">
                <i class="fas fa-envelope"></i> <!-- Ikon email -->
            </span>
            <x-input-label for="email" class="sr-only" :value="__('Email')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" placeholder="Email Address" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="input-container">
            <span class="icon">
                <i class="fas fa-lock"></i> <!-- Ikon password -->
            </span>
            <x-input-label for="password" class="sr-only" :value="__('Password')" />
            <x-text-input id="password" class="block w-full" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
            <span class="eye-icon" onclick="togglePassword()">
                <i class="fas fa-eye"></i> <!-- Ikon mata -->
            </span>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="remember-me">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" name="remember">
            <label for="remember_me" class="text-sm text-gray-600">{{ __('Remember me') }}</label>
        </div>

        <button type="submit">
            {{ __('Log in') }}
        </button>

        <!-- New Register Link -->
        @if (Route::has('register'))
            <div class="register-link">
                {{ __("Don't have an account?") }} <a href="{{ route('register') }}">{{ __('Sign Up') }}</a>
            </div>
        @endif


    </form>

    <!-- Tambahkan FontAwesome jika ingin ikon bekerja -->
    <!-- Script ini sudah ada di head, jadi tidak perlu di sini -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script> --}}

    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var eyeIcon = document.querySelector(".eye-icon i");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</x-guest-layout>
