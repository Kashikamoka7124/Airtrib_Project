<aside class="sidebar">
    <a href="/admin" class="flex items-center justify-center h-16 px-4 bg-gray-900 text-xl text-white font-medium">
        {{ config('app.name') }}
    </a>

    <div class="sidebar-menu">
        <div class="px-3 pb-6">
            <a href="/admin" class="sidebar-menu__item {{ isActive(null, 2) }}">
                Dashboard
            </a>
        </div>

        <div class="py-6 border-t border-gray-700">
            <h4 class="px-6 text-sm text-gray-600 uppercase font-bold tracking-widest">
                Resources
            </h4>

            <div class="px-3 mt-2">
                <a href="/admin/customers" class="sidebar-menu__item {{ isActive('customers', 2) }}">
                    Customers
                </a>
            </div>

            <div class="px-3 mt-2">
                <a href="/admin/travelers" class="sidebar-menu__item {{ isActive('travelers', 2) }}">
                    Travelers
                </a>
            </div>

            <div class="px-3 mt-2">
                <a href="/admin/bookings" class="sidebar-menu__item {{ isActive('bookings', 2) }}">
                    Bookings
                </a>
            </div>

            <div class="px-3 mt-2">
                <a href="/admin/payments" class="sidebar-menu__item {{ isActive('payments', 2) }}">
                    Payments
                </a>
            </div>

            <div class="px-3 mt-2">
                <a href="/admin/organizations" class="sidebar-menu__item {{ isActive('organizations', 2) }}">
                    Organizations
                </a>
            </div>

            <div class="px-3 mt-2">
                <a href="/admin/donations" class="sidebar-menu__item {{ isActive('donations', 2) }}">
                    Donations
                </a>
            </div>

            <!-- <div class="px-3 mt-2">
                <a href="/admin/customers" class="sidebar-menu__item {{ isActive('customers', 2) }}">
                    Customers
                </a>
                <a href="/admin/travelers" class="sidebar-menu__item {{ isActive('travelers', 2) }}">
                    Travelers
                </a>
                <a href="/admin/bookings" class="sidebar-menu__item {{ isActive('bookings', 2) }}">
                    Bookings
                </a>
                <a href="/admin/payments" class="sidebar-menu__item {{ isActive('payments', 2) }}">
                    Payments
                </a>
                <a href="/admin/organizations" class="sidebar-menu__item {{ isActive('organizations', 2) }}">
                    Organizations
                </a>
            </div> -->
        </div>

        <div class="py-6 border-t border-gray-700">
            <h4 class="px-6 text-sm text-gray-600 uppercase font-bold tracking-widest">
                Others
            </h4>

            <div class="px-3 mt-2">
                <a href="/admin/users" class="sidebar-menu__item {{ isActive('users', 2) }}">
                    Users
                </a>
            </div>

            <div class="px-3 mt-2">
                <a href="/admin/airports" class="sidebar-menu__item {{ isActive('airports', 2) }}">
                    Airports
                </a>
            </div>

            <div class="px-3 mt-2">
                <a href="/admin/languages/en" class="sidebar-menu__item {{ isActive('languages', 2) }}">
                    Languages
                </a>
            </div>

            <!-- <div class="px-3 mt-2">
                <a href="/admin/settings" class="sidebar-menu__item {{ isActive('settings', 2) }}">
                    Settings
                </a>
            </div> -->
        </div>
    </div>
</aside>
