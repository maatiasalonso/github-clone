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
                    <a href="/pulls" class="hover:text-gray-400">Pull request</a>
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
            <a href="#" class="flex items-center hover:text-gray-400">
                <x-images.avatar/>
                <x-icons.dropdown/>
            </a>
        </div>
    </nav>
</div>
