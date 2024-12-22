<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TerraNusa - Jelajahi Keindahan Yogyakarta</title>
    <script src="{{ url('https://cdn.tailwindcss.com') }}"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#245B4F',
                        'secondary': '#6A9C89',
                        'tertiary': '#C4DAD2',
                        'background': '#E9EFEC',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background">
    <!-- Navbar -->
    @include('includes.navbar')

    <!-- Modal Login/Register -->
    <div id="authModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4 p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 id="modalTitle" class="text-2xl font-bold text-primary"></h2>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <form onsubmit="handleSubmit(event)" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
                </div>
                <button type="submit" class="w-full bg-secondary text-white py-2 px-4 rounded-md hover:bg-opacity-90 transition">
                    <span id="submitButtonText">Masuk</span>
                </button>
            </form>

            <div class="relative flex items-center justify-center my-4">
                <div class="absolute border-t border-gray-300 w-full"></div>
                <span class="relative bg-white px-2 text-sm text-gray-500">atau lanjutkan dengan</span>
            </div>

            <div class="space-y-3">
                <button onclick="handleGoogleLogin()" class="w-full flex items-center justify-center gap-2 bg-white border border-gray-300 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-50 transition">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                    </svg>
                    Lanjutkan dengan Google
                </button>
                <button onclick="handleFacebookLogin()" class="w-full flex items-center justify-center gap-2 bg-[#1877F2] text-white py-2 px-4 rounded-md hover:bg-opacity-90 transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Lanjutkan dengan Facebook
                </button>
            </div>
        </div>
    </div>

    <!-- Spacer div -->
    <div id="navbar-spacer" class="hidden"></div>

    @yield('content')

    <!-- Footer -->
    @include('includes.footer')
    <!-- Scripts -->
    @include('includes.script')
</body>
</html>