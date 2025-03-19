<!DOCTYPE html>
<html lang="en">

<head>
    <title>New</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
       
        .input-focus:focus {
            outline: none;
            border-color: #4F46E5; /* Tailwind Purple */
            box-shadow: 0 0 10px rgba(79, 70, 229, 0.5);
        }

        .button-hover:hover {
            background-color: #4F46E5;
            transition: all 0.3s ease;
        }

        .transition-input {
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        
        body {
            background: linear-gradient(135deg, #4F46E5, #6366F1);
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-indigo-600 to-indigo-400 flex items-center justify-center min-h-screen">

    <form action="action.php" method="POST" class="w-full max-w-md p-8 space-y-4 bg-white rounded-lg shadow-lg">

        <div class="text-center">
            <p class="text-3xl font-bold text-gray-800 mb-6">Create an Account</p>
        </div>

        <div>
            <label for="username" class="text-lg font-medium text-gray-700">Your username</label>
            <input placeholder="JohnDoe" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 transition-input" id="username" type="text" name="Name">
        </div>

        <div>
            <label for="email" class="text-lg font-medium text-gray-700">Your email</label>
            <input placeholder="youremail@example.com" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 transition-input" id="email" type="email" name="email">
        </div>

        <div>
            <label for="mobile" class="text-lg font-medium text-gray-700">Your mobile number</label>
            <input placeholder="123-456-7890" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 transition-input" id="mobile" type="tel" name="mobile">
        </div>

        <div>
            <label for="password" class="text-lg font-medium text-gray-700">Password</label>
            <input class="input-focus bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 transition-input" placeholder="••••••••" id="password" type="password" name="password">
        </div>

        <div>
            <label for="confirmPassword" class="text-lg font-medium text-gray-700">Confirm password</label>
            <input class="input-focus bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 transition-input" placeholder="••••••••" id="confirmPassword" type="password" name="conferm_password">
        </div>

        <div>
            <label class="text-lg font-medium text-gray-700">Gender</label>
            <div class="flex items-center space-x-6">
                <div class="flex items-center">
                    <input id="male" type="radio" name="gender" value="male" class="w-4 h-4 border border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500">
                    <label for="male" class="ml-2 text-sm font-medium text-gray-900">Male</label>
                </div>
                <div class="flex items-center">
                    <input id="female" type="radio" name="gender" value="female" class="w-4 h-4 border border-gray-300 text-pink-600 focus:ring-2 focus:ring-pink-500">
                    <label for="female" class="ml-2 text-sm font-medium text-gray-900">Female</label>
                </div>
            </div>
        </div>

        <div class="flex items-start">
            <div class="flex items-center h-5">
                <input class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 bg-gray-700 border-gray-600 focus:ring-primary-600 ring-offset-gray-800" type="checkbox" aria-describedby="terms" id="terms">
            </div>
            <div class="ml-3 text-sm">
                <label class="font-light text-gray-500 text-gray-300">I accept the <a href="#" class="font-medium text-primary-600 hover:underline text-primary-500">Terms and Conditions</a></label>
            </div>
        </div>

        <button class="button-hover w-full bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white" type="submit">
            Create an account
        </button>

        <div class="mt-4 text-center">
            <p class="text-sm font-light text-gray-500">
                Already have an account? <a href="login.php" class="font-medium text-blue-600 hover:underline">Login</a>
            </p>
        </div>

    </form>

</body>

</html>
