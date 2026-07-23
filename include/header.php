<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header
    class="bg-surface/70 dark:bg-inverse-surface/70 backdrop-blur-xl fixed top-0 w-full z-50 flex justify-between items-center h-16 px-margin-mobile md:px-margin-desktop mx-auto shadow-sm">

    <div class="font-headline-sm text-headline-sm font-bold text-primary dark:text-primary-fixed-dim">
        Money Manager
    </div>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex gap-8">


        <a href="dashboard.php" class="<?= ($currentPage == 'dashboard.php') 
            ? 'text-primary font-semibold border-b-2 border-primary pb-1'
            : 'text-on-surface-variant hover:text-primary px-3 py-2 rounded-md transition-all'; ?>">
            Dashboard
        </a>

        <a href="incomeexpance.php" class="<?= ($currentPage == 'incomeexpance.php') 
            ? 'text-primary font-semibold border-b-2 border-primary pb-1'
            : 'text-on-surface-variant hover:text-primary px-3 py-2 rounded-md transition-all'; ?>">
            Income & Expense
        </a>

        <a href="transactions.php" class="<?= ($currentPage == 'transactions.php') 
            ? 'text-primary font-semibold border-b-2 border-primary pb-1'
            : 'text-on-surface-variant hover:text-primary px-3 py-2 rounded-md transition-all'; ?>">
            Transactions
        </a>

        <a href="report.php" class="<?= ($currentPage == 'report.php') 
            ? 'text-primary font-semibold border-b-2 border-primary pb-1'
            : 'text-on-surface-variant hover:text-primary px-3 py-2 rounded-md transition-all'; ?>">
            Report
        </a>

        <a href="setting.php" class="<?= ($currentPage == 'setting.php') 
            ? 'text-primary font-semibold border-b-2 border-primary pb-1'
            : 'text-on-surface-variant hover:text-primary px-3 py-2 rounded-md transition-all'; ?>">
            Setting
        </a>

    </nav>

    <div class="flex items-center gap-3">

        <!-- Notification Dropdown -->
        <div class="relative group">
            <button class="relative p-2 rounded-full hover:bg-surface-container transition-all">
                <span class="material-symbols-outlined text-primary">
                    notifications
                </span>

                <!-- Badge -->
                <span class="absolute top-1 right-1 w-2.5 h-2.5 bg-red-500 rounded-full"></span>
            </button>

            <!-- Dropdown -->
            <div
                class="absolute right-0 mt-2 w-80 bg-white dark:bg-surface-container-high rounded-xl border border-outline-variant shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">

                <div class="px-4 py-3 border-b border-outline-variant font-semibold">
                    Notifications
                </div>

                <a href="#" class="flex gap-3 px-4 py-3 hover:bg-surface-container-low transition">
                    <span class="material-symbols-outlined text-primary">payments</span>
                    <div>
                        <p class="text-sm font-medium">Salary Received</p>
                        <p class="text-xs text-gray-500">₹50,000 credited today</p>
                    </div>
                </a>

                <a href="#" class="flex gap-3 px-4 py-3 hover:bg-surface-container-low transition">
                    <span class="material-symbols-outlined text-amber-500">warning</span>
                    <div>
                        <p class="text-sm font-medium">Budget Alert</p>
                        <p class="text-xs text-gray-500">Food budget reached 90%</p>
                    </div>
                </a>

                <a href="#"
                    class="block text-center py-3 text-primary font-medium border-t hover:bg-surface-container-low">
                    View All Notifications
                </a>

            </div>
        </div>

        <!-- Profile Dropdown -->
        <div class="relative group"> <button class="w-9 h-9 rounded-full overflow-hidden border border-outline-variant">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBLCBM2eLDI0HasabTt-T2jlOw055q9MNK9sVJXejCTONfvOuaMCSJ3-lmcZUNoQV5XbTIoFNTyr1A37oPMgB6hFYO-kxGj-RRhCEoqPKnLtswFkMzaVMo7698AGf_26zJLmVv5ZZVLjlxbUrD3Cr2QG_JKUED3EsK21NA7_u-hn3cd3mL7MmACXmdGrCzb-zGFQkiIJHmVGn8bcWktYLUEkGfl_3BxdMpKvJPipaL-hKkVViz--x_1RW_9ndH5lhBeD25vjv7soo"
                    class="w-full h-full object-cover"> </button> <!-- Dropdown -->
            <div
                class="absolute right-0 mt-2 w-56 bg-white dark:bg-surface-container-high rounded-xl border border-outline-variant shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                <div class="px-4 py-3 border-b border-outline-variant">
                    <p class="font-semibold">John Doe</p>
                    <p class="text-xs text-gray-500">john@example.com</p>
                </div> <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-surface-container-low transition">
                    <span class="material-symbols-outlined text-[20px]"> person </span> Profile </a> <a href="#"
                    class="flex items-center gap-3 px-4 py-3 hover:bg-surface-container-low transition"> <span
                        class="material-symbols-outlined text-[20px]"> settings </span> Settings </a> <a href="#"
                    class="flex items-center gap-3 px-4 py-3 hover:bg-surface-container-low transition"> <span
                        class="material-symbols-outlined text-[20px]"> lock </span> Change Password </a>
                <div class="border-t border-outline-variant"></div> <a href="login.php"
                    class="flex items-center gap-3 px-4 py-3 text-red-600 hover:bg-red-50 transition"> <span
                        class="material-symbols-outlined text-[20px]"> logout </span> Logout </a>
            </div>

        </div>

</header>