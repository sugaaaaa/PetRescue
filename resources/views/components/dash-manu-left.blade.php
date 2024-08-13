<aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-5 h-full bg-white dark:bg-gray-800">
        <form action="#" method="GET" class="md:hidden mb-2">
            <label for="sidebar-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                        </path>
                    </svg>
                </div>
                <input type="text" name="search" id="sidebar-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Search" />
            </div>
        </form>
        <ul class="space-y-2">
            <li id="menu-overview">
                <a href="/admin/adminDashboard/overView/index" class="flex items-center p-2 rounded-lg dark:text-white hover:bg-gray-100">
                    <span class="ml-3">Overview</span>
                </a>
            </li>
            <li id="menu-pets">
                <a href="/admin/adminDashboard/pets/index" class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Pet List</span>
                </a>
            </li>
            <li id="menu-blogs">
                <a href="/admin/adminDashboard/blogs/index" class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Blogs</span>
                </a>
            </li>
            <li id="menu-category">
                <a href="/admin/adminDashboard/category/index/"
                    class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Category</span>
                </a>
            </li>
            <li id="menu-pet-grooming">
                <a href="/admin/adminDashboard/petGrooming/index"
                    class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Pet Grooming</span>
                </a>
            </li>
            <li id="menu-pet-shop">
                <a href="/admin/adminDashboard/petShop/index"
                    class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Pet Shop</span>
                </a>
            </li>
            <li id="menu-pet-park">
                <a href="/admin/adminDashboard/petPark/index"
                    class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Pet Park</span>
                </a>
            </li>
            <li id="menu-pet-treatment">
                <a href="/admin/adminDashboard/petTreatment/index"
                    class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Pet Treatment</span>
                </a>
            </li>
            <li id="menu-manage-adoption">
                <a href="/admin/adminDashboard/adoption/index"
                    class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Manage Adoption</span>
                </a>
            </li>
              <li id="menu-manage-adoption">
                <a href="/admin/adminDashboard/adoption/adoptionHistory"
                    class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Manage History Adoption</span>
                </a>
            </li>
            <li id="menu-manage-donation">
                <a href="/admin/adminDashboard/donation/index"
                    class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Manage Donation</span>
                </a>
            </li>
            <li id="menu-manage-user">
                <a href="/admin/adminDashboard/users/index"
                    class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Manage User</span>
                </a>
            </li>
            <li id="menu-manage-user-post">
                <a href="/admin/adminDashboard/userPost/index"
                    class="flex items-center p-2 w-full rounded-lg transition duration-75 group hover:bg-gray-100">
                    <span class="ml-3">Manage User Post</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                        </path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Messages</span>
                </a>
            </li>
        </ul>
    </div>
</aside>


    