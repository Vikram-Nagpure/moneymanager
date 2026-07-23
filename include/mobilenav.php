<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="fixed bottom-0 left-0 right-0 lg:hidden z-50 bg-white/95 backdrop-blur-xl border-t border-gray-200 h-20">

    <div class="relative flex items-center justify-between h-full px-3">

        <!-- Dashboard -->
        <a href="dashboard.php"
            class="flex flex-col items-center justify-center w-1/5 transition-all duration-300 <?= ($currentPage == 'dashboard.php') ? 'text-primary' : 'text-gray-500'; ?>">

            <span class="material-symbols-outlined text-[24px]">dashboard</span>
            <span class="text-[11px] font-semibold mt-1">Home</span>

            <?php if ($currentPage == "dashboard.php") { ?>
                <span class="mt-1 h-1 w-8 rounded-full bg-primary"></span>
            <?php } ?>

        </a>

        <!-- History -->
        <a href="transactions.php"
            class="flex flex-col items-center justify-center w-1/5 transition-all duration-300 <?= ($currentPage == 'transactions.php') ? 'text-primary' : 'text-gray-500'; ?>">

            <span class="material-symbols-outlined text-[24px]">account_balance_wallet</span>
            <span class="text-[11px] font-semibold mt-1">History</span>

            <?php if ($currentPage == "transactions.php") { ?>
                <span class="mt-1 h-1 w-8 rounded-full bg-primary"></span>
            <?php } ?>

        </a>

        <!-- Add -->
        <div class="w-1/5 flex justify-center">

            <a href="index.php"
                class="absolute -top-7 w-16 h-16 rounded-full bg-primary text-white shadow-xl shadow-primary/30 flex items-center justify-center border-4 border-white active:scale-95 <?= ($currentPage == 'index.php') ? 'scale-110' : ''; ?>">

                <span class="material-symbols-outlined text-[34px]">add</span>

            </a>

        </div>

        <!-- Settings -->
        <a href="report.php"
            class="flex flex-col items-center justify-center w-1/5 transition-all duration-300 <?= ($currentPage == 'report.php') ? 'text-primary' : 'text-gray-500'; ?>">

            <span class="material-symbols-outlined text-[24px]">report</span>
            <span class="text-[11px] font-semibold mt-1">Reports</span>

            <?php if ($currentPage == "report.php") { ?>
                <span class="mt-1 h-1 w-8 rounded-full bg-primary"></span>
            <?php } ?>

        </a>

        <!-- Settings -->
        <a href="setting.php"
            class="flex flex-col items-center justify-center w-1/5 transition-all duration-300 <?= ($currentPage == 'setting.php') ? 'text-primary' : 'text-gray-500'; ?>">

            <span class="material-symbols-outlined text-[24px]">settings</span>
            <span class="text-[11px] font-semibold mt-1">Settings</span>

            <?php if ($currentPage == "setting.php") { ?>
                <span class="mt-1 h-1 w-8 rounded-full bg-primary"></span>
            <?php } ?>

        </a>

        <!-- Profile -->
        <!-- <button onclick="toggleProfileMenu()"
            class="flex flex-col items-center justify-center w-1/5">

            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBLCBM2eLDI0HasabTt-T2jlOw055q9MNK9sVJXejCTONfvOuaMCSJ3-lmcZUNoQV5XbTIoFNTyr1A37oPMgB6hFYO-kxGj-RRhCEoqPKnLtswFkMzaVMo7698AGf_26zJLmVv5ZZVLjlxbUrD3Cr2QG_JKUED3EsK21NA7_u-hn3cd3mL7MmACXmdGrCzb-zGFQkiIJHmVGn8bcWktYLUEkGfl_3BxdMpKvJPipaL-hKkVViz--x_1RW_9ndH5lhBeD25vjv7soo"
                class="w-7 h-7 rounded-full border object-cover">

            <span class="text-[11px] font-semibold mt-1 text-gray-500">
                Profile
            </span>

        </button> -->

    </div>

</nav>

<!-- extra menu  -->
<div id="profileMenu"
    class="fixed inset-0 bg-black/40 z-[60] hidden">

    <div class="absolute bottom-24 right-4 w-64 bg-white rounded-2xl shadow-2xl overflow-hidden">

        <div class="p-4 border-b">
            <p class="font-semibold">John Doe</p>
            <p class="text-sm text-gray-500">john@example.com</p>
        </div>

        <a href="setting.php" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-100">
            <span class="material-symbols-outlined">settings</span>
            Settings
        </a>

        <a href="setting.php?+#security" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-100">
            <span class="material-symbols-outlined">lock</span>
            Change Password
        </a>

        <hr>

        <a href="login.php" class="flex items-center gap-3 px-4 py-3 text-red-600 hover:bg-red-50">
            <span class="material-symbols-outlined">logout</span>
            Logout
        </a>

    </div>
</div>


<!-- Bottom Safe Space -->
<div class="h-20 lg:hidden"></div>


<script>
    function toggleProfileMenu() {
        document.getElementById("profileMenu").classList.toggle("hidden");
    }

    document.getElementById("profileMenu").addEventListener("click", function(e) {
        if (e.target === this) {
            this.classList.add("hidden");
        }
    });
</script>