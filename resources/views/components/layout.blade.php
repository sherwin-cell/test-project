<!DOCTYPE html>
<html lang="en" class="height-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
  <div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

          <!-- LEFT SIDE: Logo + Nav Links -->
          <div class="flex items-center">
            <div class="shrink-0">
              <img src="https://i.pinimg.com/1200x/66/dd/d0/66ddd0a43433943549bd2beb9cec5273.jpg" alt="Your Company"
                class="size-8" />
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
              </div>
            </div>
          </div>

          <!-- RIGHT SIDE: Auth Links + Profile -->
          <div class="hidden md:flex items-center md:ml-6 gap-4">
            @auth
              <!-- Notifications -->
              <button type="button"
                class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                  aria-hidden="true" class="size-6">
                  <path
                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>

              <!-- Profile dropdown -->
              <div class="relative ml-3 group">
                <button
                  class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=6366f1&background=e0e7ff"
                    alt="{{ Auth::user()->name }}"
                    class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
                </button>
                
                <!-- Dropdown menu -->
                <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden group-hover:block">
                  <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                  <form method="POST" action="{{ route('logout') }}" class="block">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                  </form>
                </div>
              </div>
            @else
              <!-- Guest links -->
              <a href="{{ route('login') }}" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium">Login</a>
              <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium">Register</a>
            @endauth
          </div>

          <!-- MOBILE MENU BUTTON -->
          <div class="-mr-2 flex md:hidden">
            <button type="button" command="--toggle" commandfor="mobile-menu"
              class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>

        </div>
      </div>

      <!-- MOBILE MENU -->
      <el-disclosure id="mobile-menu" hidden class="block md:hidden">
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
          <a href="/" aria-current="page"
            class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
          <a href="/jobs"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Jobs</a>
          <a href="/contact"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>

          <div class="border-t border-white/10 pt-4 pb-3">
            @auth
              <div class="flex items-center px-5">
                <div class="shrink-0">
                  <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=6366f1&background=e0e7ff" alt="{{ Auth::user()->name }}"
                    class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
                </div>
                <div class="ml-3">
                  <div class="text-base/5 font-medium text-white">{{ Auth::user()->name }}</div>
                  <div class="text-sm font-medium text-gray-400">{{ Auth::user()->email }}</div>
                </div>
              </div>
              <div class="mt-3 space-y-1 px-2">
                <a href="{{ route('dashboard') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Logout</button>
                </form>
              </div>
            @else
              <div class="space-y-1 px-2">
                <a href="{{ route('login') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Login</a>
                <a href="{{ route('register') }}" class="block rounded-md px-3 py-2 text-base font-medium text-indigo-400 hover:bg-white/5 hover:text-indigo-300">Register</a>
              </div>
            @endauth
          </div>
      </el-disclosure>
    </nav>
    <header class="relative bg-white shadow-sm">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between items-center">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>

        {{-- Show Create Job button only on jobs index page --}}
        @if(request()->routeIs('jobs.index'))
          <x-button href="{{ route('jobs.create') }}">Create Job</x-button>
        @endif
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
  </div>

</body>

</html>