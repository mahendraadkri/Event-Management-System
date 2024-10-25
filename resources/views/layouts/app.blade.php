<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>
        <link rel = "stylesheet" href="{{asset('datatable/datatables.css')}}">
        <script src = "{{asset('datatable/datatables.js')}}"></script>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

        @vite('resources/css/app.css')

        <!-- jQuery and DataTables JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    
    </head>
    <body class="font-sans antialiased bg-gray-300">
        <div class="flex  ">
            <div class="w-56 fixed top-0 left-0 bottom-0 shadow-lg shadow-red-300 bg-gray-600">
                  <!-- Category Link -->
                  <a href="{{ route('categories.index')}}" class="text-xl text-gray-300 font-bold border-b-2 border-gray-500 ml-4 px-2 py-1 hover:bg-green-700 hover:text-white flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v6H4zM4 14h16v6H4z" />
                    </svg>
                    <span>Category</span>
                </a>
               <!-- Event Link -->
                <a href="{{ route('events.index')}}" class="text-xl text-gray-300 font-bold border-b-2 border-gray-500 ml-4 px-2 py-1 hover:bg-green-700 hover:text-white flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V5a3 3 0 116 0v2a5 5 0 015 5v4a3 3 0 01-3 3H6a3 3 0 01-3-3v-4a5 5 0 015-5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8" />
                    </svg>
                    <span>Event</span>
                </a>

                <!-- Attendee Link -->
                <a href="{{ route('attendees.index')}}" class="text-xl text-gray-300 font-bold border-b-2 border-gray-500 ml-4 px-2 py-1 hover:bg-green-700 hover:text-white flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6z" />
                    </svg>
                    <span>Attendee</span>
                </a>

              


                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-xl text-gray-300 font-bold border-b-2 border-gray-500  ml-4 px-2 py-1 hover:bg-red-700 hover:text-white flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 11-4 0v-1m0-10V5a2 2 0 114 0v1" />
                        </svg>
                        <span>LogOut</span>
                    </button>
                </form>
                

            
        </div>
           

        <div class="p-4 flex-1 pl-56">
            @yield('content')
        </div>
    </div>
    </body>
</html>
