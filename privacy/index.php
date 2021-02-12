<html class="flex w-full h-full "><head>
                    <meta charset="utf-8">
                    <link href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css?v=0" rel="stylesheet">
                </head>
                <body style="height: min-content;" class="my-auto w-full">
                    <style>
    /* This example part of kwd-dashboard see https://kamona-wd.github.io/kwd-dashboard/ */
    /* So here we will write some classes to simulate dark mode and some of tailwind css config in our project */
    :root {
    --light: #edf2f9;
    --dark: #152e4d;
    --darker: #12263f;
    
    --color-red: #dc2626;
    --color-green: #16a34a;
    --color-blue: #2563eb;
    --color-cyan: #0891b2;
    --color-teal: #0d9488;
    --color-fuchsia: #c026d3;
    --color-orange: #ea580c;
    --color-yellow: #ca8a04;
    --color-violet: #7c3aed;
    }

    [x-cloak] { display: none; }

    .dark .dark\:text-light {
    color: var(--light);
    }

    .dark .dark\:bg-dark {
    background-color: var(--dark);
    }

    .dark .dark\:bg-darker {
    background-color: var(--darker);
    }

    .dark .dark\:text-gray-300 {
    color: #D1D5DB;
    }

    .dark .dark\:hover\:text-light:hover {
        color: var(--light);
    }

    .dark .dark\:border-blue-800 {
      border-color: #1e40af;
    }

    .dark .dark\:bg-blue-600 {
        background-color: #2563eb;
    }

    .dark .dark\:hover\:bg-blue-600:hover {
        background-color: #2563eb;
    }


    .hover\:overflow-y-auto:hover {
        overflow-y: auto;
    }
</style>

<div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" :class="{ 'dark': isDark}" class="dark">
      <!--  -->
      <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-opacity-90 bg-blue-800 hidden">
          Loading.....
        </div>

        <!-- Sidebar -->
        

        <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">
          <!-- Navbar -->
          <header class="relative bg-white dark:bg-darker">
            <div class="flex items-center justify-between p-2 border-b dark:border-blue-800">
              <!-- Mobile menu button -->
              <button @click="isMobileMainMenuOpen = !isMobileMainMenuOpen" class="p-1 text-blue-400 transition-colors duration-200 rounded-md bg-blue-50 hover:text-blue-600 hover:bg-blue-100 dark:hover:text-light dark:hover:bg-blue-700 dark:bg-dark md:hidden focus:outline-none focus:ring">
                <span class="sr-only">Open main manu</span>
                <span aria-hidden="true">
                  
                </span>
              </button>

              <!-- Brand -->
              <a href="#" class="inline-block text-2xl font-bold text-blue-700  dark:text-light">PaperCore Privacy</a>

              <!-- Mobile sub menu button -->
              <button @click="isMobileSubMenuOpen = !isMobileSubMenuOpen" class="p-1 text-blue-400 transition-colors duration-200 rounded-md bg-blue-50 hover:text-blue-600 hover:bg-blue-100 dark:hover:text-light dark:hover:bg-blue-700 dark:bg-dark md:hidden focus:outline-none focus:ring">
                <span class="sr-only">Open sub manu</span>
                <span aria-hidden="true">
                  <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                  </svg>
                </span>
              </button>

              <!-- Desktop Right buttons -->
              <nav aria-label="Secondary" class="hidden space-x-2 md:flex md:items-center">
                <!-- Toggle dark theme button -->
                <button aria-hidden="true" class="relative focus:outline-none" @click="toggleTheme">
                  <div class="w-12 h-6 transition bg-blue-100 rounded-full outline-none dark:bg-blue-400"></div>
                  <div class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-150 transform scale-110 rounded-full shadow-sm translate-x-6 text-blue-100 bg-blue-800" :class="{ 'translate-x-0 -translate-y-px  bg-white text-blue-700': !isDark, 'translate-x-6 text-blue-100 bg-blue-800': isDark }">
                    <svg x-show="!isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                    <svg x-show="isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                  </div>
                </button>

                <!-- Notification button -->
                

                <!-- Search button -->
                

                <!-- Settings button -->
                

                <!-- User avatar button -->
                
              </nav>

              <!-- Mobile sub menu -->
              <nav x-transition:enter="transition duration-200 ease-in-out transform sm:duration-500" x-transition:enter-start="-translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100" x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500" x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="-translate-y-full opacity-0" x-show="isMobileSubMenuOpen" @click.away="isMobileSubMenuOpen = false" class="absolute flex items-center p-4 bg-white rounded-md shadow-lg dark:bg-darker top-16 inset-x-4 md:hidden" aria-label="Secondary" style="display: none;">
                <div class="space-x-2">
                  <!-- Toggle dark theme button -->
                  <button aria-hidden="true" class="relative focus:outline-none" @click="toggleTheme">
                    <div class="w-12 h-6 transition bg-blue-100 rounded-full outline-none dark:bg-blue-400"></div>
                    <div class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 transform scale-110 rounded-full shadow-sm translate-x-6 text-blue-100 bg-blue-800" :class="{ 'translate-x-0 -translate-y-px  bg-white text-blue-700': !isDark, 'translate-x-6 text-blue-100 bg-blue-800': isDark }">
                      <svg x-show="!isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                      </svg>
                      <svg x-show="isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                      </svg>
                    </div>
                  </button>

                  <!-- Notification button -->
                  

                  <!-- Search button -->
                  

                  <!-- Settings button -->
                  
                </div>

                <!-- User avatar button -->
                
              </nav>
            </div>
            <!-- Mobile main manu -->
            
          </header>

          <!-- Main content -->
          <div class="flex items-center justify-center flex-1 h-full p-4">
         ㄴㅇ
          </div>

        </div>

        <!-- Panels -->

        <!-- Settings Panel -->
        <!-- Backdrop -->
        <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isSettingsPanelOpen" @click="isSettingsPanelOpen = false" class="fixed inset-0 z-10 bg-blue-800" style="opacity: 0.5; display: none;" aria-hidden="true"></div>
        <!-- Panel -->
        <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-ref="settingsPanel" tabindex="-1" x-show="isSettingsPanelOpen" @keydown.escape="isSettingsPanelOpen = false" class="fixed inset-y-0 right-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none" aria-labelledby="settinsPanelLabel" style="display: none;">
          <div class="absolute left-0 p-2 transform -translate-x-full">
            <!-- Close button -->
            <button @click="isSettingsPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none focus:ring">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
          <!-- Panel content -->
          <div class="flex flex-col h-screen">
            <!-- Panel header -->
            <div class="flex flex-col items-center justify-center flex-shrink-0 px-4 py-8 space-y-4 border-b dark:border-blue-700">
              <span aria-hidden="true" class="text-gray-500 dark:text-blue-600">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                </svg>
              </span>
              <h2 id="settinsPanelLabel" class="text-xl font-medium text-gray-500 dark:text-light">Settings</h2>
            </div>
            <!-- Content -->
            <div class="flex-1 overflow-hidden hover:overflow-y-auto">
              <!-- Theme -->
              <div class="p-4 space-y-4 md:p-8">
                <h6 class="text-lg font-medium text-gray-400 dark:text-light">Mode</h6>
                <div class="flex items-center space-x-8">
                  <!-- Light button -->
                  <button @click="setLightTheme" class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-blue-600 dark:hover:text-blue-100 dark:hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-blue-700 text-gray-500 dark:text-blue-500" :class="{ 'border-gray-900 text-gray-900 dark:border-blue-500 dark:text-blue-100': !isDark, 'text-gray-500 dark:text-blue-500': isDark }">
                    <span>
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                      </svg>
                    </span>
                    <span>Light</span>
                  </button>

                  <!-- Dark button -->
                  <button @click="setDarkTheme" class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-blue-600 dark:hover:text-blue-100 dark:hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-blue-700 border-gray-900 text-gray-900 dark:border-blue-500 dark:text-blue-100" :class="{ 'border-gray-900 text-gray-900 dark:border-blue-500 dark:text-blue-100': isDark, 'text-gray-500 dark:text-blue-500': !isDark }">
                    <span>
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                      </svg>
                    </span>
                    <span>Dark</span>
                  </button>
                </div>
              </div>

             
            </div>
          </div>
        </section>

        <!-- Notification panel -->
        <!-- Backdrop -->
        <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isNotificationsPanelOpen" @click="isNotificationsPanelOpen = false" class="fixed inset-0 z-10 bg-blue-800 bg-opacity-25" style="opacity: 0.5; display: none;" aria-hidden="true"></div>
        <!-- Panel -->
        <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-ref="notificationsPanel" x-show="isNotificationsPanelOpen" @keydown.escape="isNotificationsPanelOpen = false" tabindex="-1" aria-labelledby="notificationPanelLabel" class="fixed inset-y-0 z-20 w-full max-w-xs bg-white dark:bg-darker dark:text-light sm:max-w-md focus:outline-none" style="display: none;">
          <div class="absolute right-0 p-2 transform translate-x-full">
            <!-- Close button -->
            <button @click="isNotificationsPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none focus:ring">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
          <div class="flex flex-col h-screen" x-data="{ activeTabe: 'action' }">
            <!-- Panel header -->
            <div class="flex-shrink-0">
              <div class="flex items-center justify-between px-4 pt-4 border-b dark:border-blue-800">
                <h2 id="notificationPanelLabel" class="pb-4 font-semibold">Notifications</h2>
                <div class="space-x-2">
                  <button @click.prevent="activeTabe = 'action'" class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none border-blue-700 dark:border-blue-600" :class="{'border-blue-700 dark:border-blue-600': activeTabe == 'action', 'border-transparent': activeTabe != 'action'}">
                    Action
                  </button>
                  <button @click.prevent="activeTabe = 'user'" class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none border-transparent" :class="{'border-blue-700 dark:border-blue-600': activeTabe == 'user', 'border-transparent': activeTabe != 'user'}">
                    User
                  </button>
                </div>
              </div>
            </div>

            <!-- Panel content (tabs) -->
            <div class="flex-1 pt-4 overflow-y-hidden hover:overflow-y-auto">
              <!-- Action tab -->
              <div class="space-y-4" x-show.transition.in="activeTabe == 'action'">
                <a href="#" class="block">
                  <div class="flex px-4 space-x-4">
                    <div class="relative flex-shrink-0">
                      <span class="z-10 inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                      </span>
                      <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                      <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                        New project "KWD Dashboard" created
                      </h5>
                      <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                        Looks like there might be a new theme soon
                      </p>
                      <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="block">
                  <div class="flex px-4 space-x-4">
                    <div class="relative flex-shrink-0">
                      <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                      </span>
                      <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                      <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                        KWD Dashboard v0.0.2 was released
                      </h5>
                      <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                        Successful new version was released
                      </p>
                      <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 2d ago </span>
                    </div>
                  </div>
                </a>
                <template x-for="i in 20" x-key="i">
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                </template>
              
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="inline-block p-2 overflow-visible text-blue-500 rounded-full bg-blue-50 dark:bg-blue-800">
                          <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                </div>

              <!-- User tab -->
              <div class="space-y-4" x-show.transition.in="activeTabe == 'user'" style="display: none;">
                <a href="#" class="block">
                  <div class="flex px-4 space-x-4">
                    <div class="relative flex-shrink-0">
                      <span class="relative z-10 inline-block overflow-visible rounded-ful">
                        <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                      </span>
                      <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                      <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                      <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                        Shared new project "K-WD Dashboard"
                      </p>
                      <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 1d ago </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="block">
                  <div class="flex px-4 space-x-4">
                    <div class="relative flex-shrink-0">
                      <span class="relative z-10 inline-block overflow-visible rounded-ful">
                        <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                      </span>
                      <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                      <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                      <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                        Commit new changes to K-WD Dashboard project.
                      </p>
                      <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 10h ago </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="block">
                  <div class="flex px-4 space-x-4">
                    <div class="relative flex-shrink-0">
                      <span class="relative z-10 inline-block overflow-visible rounded-ful">
                        <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                      </span>
                      <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                      <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                      <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                        Release new version "K-WD Dashboard"
                      </p>
                      <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                    </div>
                  </div>
                </a>
                <template x-for="i in 10" x-key="i">
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                </template>
              
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img class="object-cover rounded-full w-9 h-9" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed kamel">
                        </span>
                        <div class="absolute h-24 p-px -mt-3 -ml-px bg-blue-50 left-1/2 dark:bg-blue-800"></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                </div>
            </div>
          </div>
        </section>

        <!-- Search panel -->
        <!-- Backdrop -->
        <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isSearchPanelOpen" @click="isSearchPanelOpen = false" class="fixed inset-0 z-10 bg-blue-800 bg-opacity-25" style="opacity: 0.5; display: none;" aria-hidden="ture"></div>
        <!-- Panel -->
        <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSearchPanelOpen" @keydown.escape="isSearchPanelOpen = false" class="fixed inset-y-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none" style="display: none;">
          <div class="absolute right-0 p-2 transform translate-x-full">
            <!-- Close button -->
            <button @click="isSearchPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none focus:ring">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>

          <h2 class="sr-only">Search panel</h2>
          <!-- Panel content -->
          <div class="flex flex-col h-screen">
            <!-- Panel header (Search input) -->
            <div class="relative flex-shrink-0 px-4 py-8 text-gray-400 border-b dark:border-blue-800 dark:focus-within:text-light focus-within:text-gray-700">
              <span class="absolute inset-y-0 inline-flex items-center px-4">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
              </span>
              <input x-ref="searchInput" type="text" class="w-full py-2 pl-10 pr-4 border rounded-full dark:bg-dark dark:border-transparent dark:text-light focus:outline-none focus:ring" placeholder="Search...">
            </div>

            <!-- Panel content (Search result) -->
            <div class="flex-1 px-4 pb-4 space-y-4 overflow-y-hidden font-sans h hover:overflow-y-auto">
              <h3 class="py-2 text-sm font-semibold text-gray-600 dark:text-light">History</h3>
              <a href="#" class="flex space-x-4">
                <div class="flex-shrink-0">
                  <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Post cover">
                </div>
                <div class="flex-1 max-w-xs overflow-hidden">
                  <h4 class="text-sm font-semibold text-gray-600 dark:text-light">Header</h4>
                  <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                    Lorem ipsum dolor, sit amet consectetur.
                  </p>
                  <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Post </span>
                </div>
              </a>
              <a href="#" class="flex space-x-4">
                <div class="flex-shrink-0">
                  <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="Ahmed Kamel">
                </div>
                <div class="flex-1 max-w-xs overflow-hidden">
                  <h4 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h4>
                  <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                    Last activity 3h ago.
                  </p>
                  <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Offline </span>
                </div>
              </a>
              <a href="#" class="flex space-x-4">
                <div class="flex-shrink-0">
                  <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                </div>
                <div class="flex-1 max-w-xs overflow-hidden">
                  <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                  <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                  <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                </div>
              </a>
              <template x-for="i in 10" x-key="i">
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                  </div>
                </a>
              </template>
            
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                  </div>
                </a>
              
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                  </div>
                </a>
              
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                  </div>
                </a>
              
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                  </div>
                </a>
              
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                  </div>
                </a>
              
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                  </div>
                </a>
              
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                  </div>
                </a>
              
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                  </div>
                </a>
              
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                  </div>
                </a>
              
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="https://avatars.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4" alt="K-WD Dashboard">
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-blue-400">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-blue-500"> Updated 3h ago. </span>
                  </div>
                </a>
              </div>
          </div>
        </section>
      </div>
    </div>

<script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer=""></script>

                
            </body></html>
