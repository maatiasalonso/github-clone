<div>
    <nav class="bg-gray-900 text-white px-4 py-4 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <a href="/" class="text-white hover:text-gray-400 ml-4">
                <x-icons.github/>
            </a>

            <div class="hidden lg:block relative">

                <x-form.input
                    type='text'
                    class='rounded-md bg-neutral-900 placeholder:text-gray-400 placeholder:text-sm w-[17rem] px-3 py-0.5'
                    placeholder='Search or jump to...'
                />

                <div class="absolute top-0 right-0 flex items-center">
                    <div class="border border-gray-600 rounded text-xs text-gray-400 py-0.5 px-2 mr-1 mt-1"><i>/</i></div>
                </div>
            </div>

            <ul class="hidden lg:flex items-center font-semibold space-x-4 font-sans">
                <li>
                    <a href="/pulls" class="hover:text-gray-400">Pull requests</a>
                </li>
                <li>
                    <a href='/issues' class='hover:text-gray-400'>Issues</a>
                </li>
                <li>
                    <a href='/marketplace' class='hover:text-gray-400'>Marketplace</a>
                </li>
                <li>
                    <a href='/explore' class='hover:text-gray-400'>Explore</a>
                </li>
            </ul>
        </div>

        <div class="flex items-center space-x-3 text-white mr-3">
            <a href="#" class="relative hover:text-gray-400 mr-1">
                <x-icons.notification/>
                <x-icons.notification-dot/>
            </a>
            <a href="#" class="flex items-center hover:text-gray-400">
                <x-icons.more/>
                <x-icons.dropdown/>
            </a>
            <a href="#" class="flex items-center hover:text-gray-400" onclick="showProfileDropdown()">
                <div class="relative ml-3">
                    <div>
                        <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <x-images.avatar/>
                        </button>
                    </div>
                    <x-icons.dropdown/>

                    <!--
                      Dropdown menu, show/hide based on menu state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div hidden id="profile-dropdown" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                      <!-- Active: "bg-gray-100", Not Active: "" -->
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                </div>
            </a>
        </div>
    </nav>
</div>

<script>
    function showProfileDropdown(){
        let profile = document.getElementById('profile-dropdown')
        if(profile.style.display === 'none'){
            return profile.style.display = 'block';
        }
        profile.style.display = 'none'
    }
</script>
