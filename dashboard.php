<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Money Manager | Premium Wealth Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "on-secondary": "#ffffff",
                    "surface-variant": "#dae2fd",
                    "on-secondary-container": "#006f67",
                    "background": "#faf8ff",
                    "secondary-container": "#99efe5",
                    "on-background": "#131b2e",
                    "surface": "#faf8ff",
                    "primary-container": "#14b8a6",
                    "inverse-on-surface": "#eef0ff",
                    "secondary-fixed": "#9cf2e8",
                    "on-primary-container": "#00423b",
                    "secondary": "#006a63",
                    "surface-tint": "#006b5f",
                    "surface-bright": "#faf8ff",
                    "surface-container": "#eaedff",
                    "tertiary-fixed": "#ffdbd0",
                    "surface-dim": "#d2d9f4",
                    "on-tertiary-fixed": "#3a0b00",
                    "primary": "#006b5f",
                    "on-tertiary-container": "#6c2106",
                    "tertiary": "#9b4426",
                    "outline": "#6c7a77",
                    "surface-container-highest": "#dae2fd",
                    "surface-container-high": "#e2e7ff",
                    "primary-fixed": "#71f8e4",
                    "tertiary-container": "#f38764",
                    "on-primary-fixed": "#00201c",
                    "surface-container-lowest": "#ffffff",
                    "error": "#ba1a1a",
                    "inverse-primary": "#4fdbc8",
                    "primary-fixed-dim": "#4fdbc8",
                    "on-secondary-fixed": "#00201d",
                    "on-error": "#ffffff",
                    "on-primary": "#ffffff",
                    "error-container": "#ffdad6",
                    "on-tertiary": "#ffffff",
                    "outline-variant": "#bbcac6",
                    "inverse-surface": "#283044",
                    "on-tertiary-fixed-variant": "#7c2d11",
                    "on-surface": "#131b2e",
                    "secondary-fixed-dim": "#80d5cb",
                    "surface-container-low": "#f2f3ff",
                    "on-surface-variant": "#3c4947",
                    "on-secondary-fixed-variant": "#00504a",
                    "on-error-container": "#93000a",
                    "tertiary-fixed-dim": "#ffb59e",
                    "on-primary-fixed-variant": "#005048"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "stack-md": "16px",
                    "stack-sm": "8px",
                    "container-max": "1280px",
                    "margin-desktop": "40px",
                    "stack-lg": "32px",
                    "section-gap": "64px",
                    "margin-mobile": "16px",
                    "gutter": "24px"
                },
                "fontFamily": {
                    "headline-sm": ["Inter"],
                    "body-md": ["Inter"],
                    "label-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "display-lg": ["Inter"],
                    "body-lg": ["Inter"],
                    "headline-md": ["Inter"],
                    "display-lg-mobile": ["Inter"],
                    "title-lg": ["Inter"]
                },
                "fontSize": {
                    "headline-sm": ["24px", {
                        "lineHeight": "32px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "letterSpacing": "0.05em",
                        "fontWeight": "600"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "letterSpacing": "0.01em",
                        "fontWeight": "500"
                    }],
                    "display-lg": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "headline-md": ["30px", {
                        "lineHeight": "38px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "display-lg-mobile": ["36px", {
                        "lineHeight": "44px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "title-lg": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }]
                }
            },
        },
    }
    </script>
    <style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #F8FAFC;
    }

    .glass {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .emerald-gradient {
        background: linear-gradient(135deg, #14B8A6 0%, #0F766E 100%);
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }

    .card-shadow {
        shadow: 0px 4px 20px rgba(15, 23, 42, 0.05);
    }
    </style>
</head>

<body class="text-on-surface">
    <!-- Desktop Side Navigation -->
    <?php include "include/header.php"?>
    <!-- Main Content Area -->
    <main class="mt-9 min-h-screen pb-24 lg:pb-12">
        
        <div class="mt-20 px-margin-mobile lg:px-margin-desktop max-w-container-max mx-auto space-y-stack-lg">
            <!-- Hero Section: Total Balance & Quick Actions -->
            <section class="grid grid-cols-1 xl:grid-cols-3 gap-gutter">
                <!-- Total Balance Card -->
                <div
                    class="xl:col-span-2 emerald-gradient rounded-[24px] p-8 text-white relative overflow-hidden flex flex-col justify-between min-h-[220px]">
                    <div class="relative z-10">
                        <p class="text-label-md font-medium opacity-80 mb-1">Total Available Balance</p>
                        <h3 class="font-display-lg text-display-lg lg:text-display-lg md:text-display-lg-mobile">
                            ₹1,28,540.00</h3>
                    </div>
                    <!-- <div class="flex items-center gap-4 relative z-10">
                        <div class="flex flex-col">
                            <p class="text-[10px] uppercase tracking-widest opacity-70">Card Holder</p>
                            <p class="font-label-md">Arjun Sharma</p>
                        </div>
                        <div class="flex flex-col ml-8">
                            <p class="text-[10px] uppercase tracking-widest opacity-70">Expires</p>
                            <p class="font-label-md">09/28</p>
                        </div>
                        <div class="ml-auto glass px-4 py-2 rounded-xl flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">shield</span>
                            <span class="text-xs font-bold">SECURE</span>
                        </div>
                    </div> -->
                    <!-- Abstract Background Graphic -->
                    <div class="absolute -right-12 -top-12 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                    <div class="absolute right-20 -bottom-20 w-48 h-48 bg-teal-400/20 rounded-full blur-2xl"></div>
                </div>
                <!-- Quick Actions -->
                <div class="bg-white rounded-[24px] border border-outline-variant p-6 flex flex-col justify-between">
                    <p class="font-title-lg text-title-lg mb-4">Quick Actions</p>
                    <div class="grid grid-cols-2 gap-3 h-full">
                        <button
                            class="flex flex-col items-center justify-center gap-2 p-4 rounded-2xl bg-surface-container hover:bg-secondary-container/30 transition-all duration-200 group active:scale-95">
                            <span
                                class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">add_circle</span>
                            <span class="text-label-sm">Add Income</span>
                        </button>
                        <button
                            class="flex flex-col items-center justify-center gap-2 p-4 rounded-2xl bg-surface-container hover:bg-error-container/30 transition-all duration-200 group active:scale-95">
                            <span
                                class="material-symbols-outlined text-error group-hover:scale-110 transition-transform">remove_circle</span>
                            <span class="text-label-sm">Add Expense</span>
                        </button>
                        <button
                            class="flex flex-col items-center justify-center gap-2 p-4 rounded-2xl bg-surface-container hover:bg-secondary-container/30 transition-all duration-200 group active:scale-95">
                            <span
                                class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">analytics</span>
                            <span class="text-label-sm">Reports</span>
                        </button>
                        <button
                            class="flex flex-col items-center justify-center gap-2 p-4 rounded-2xl bg-surface-container hover:bg-secondary-container/30 transition-all duration-200 group active:scale-95">
                            <span
                                class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">payments</span>
                            <span class="text-label-sm">Payments</span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Financial Summary Cards -->
            <section class="grid grid-cols-2 md:grid-cols-2 xl:grid-cols-4 gap-gutter">
                <!-- Total Income -->
                <div
                    class="bg-white p-6 rounded-[24px] border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                    
                    <p class="text-on-surface-variant text-label-sm mb-1">UPI Balance</p>
                    <h4 class="font-headline-sm text-headline-sm">₹2,45,000</h4>
                    
                </div>
                <!-- Total Expense -->
                <div
                    class="bg-white p-6 rounded-[24px] border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                    
                    <p class="text-on-surface-variant text-label-sm mb-1">Account Balance</p>
                    <h4 class="font-headline-sm text-headline-sm">₹1,16,460</h4>
                    
                </div>
                <!-- Savings -->
                <div
                    class="bg-white p-6 rounded-[24px] border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                    
                    <p class="text-on-surface-variant text-label-sm mb-1">Savings</p>
                    <h4 class="font-headline-sm text-headline-sm">₹1,28,540</h4>
                    
                </div>
                <!-- Monthly Budget -->
                <div
                    class="bg-white p-6 rounded-[24px] border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                    
                    <p class="text-on-surface-variant text-label-sm mb-1">Monthly Budget</p>
                    <h4 class="font-headline-sm text-headline-sm">₹50,000</h4>
                    
                </div>
                <!-- Monthly Budget -->
                <div
                    class="bg-white p-6 rounded-[24px] border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                    
                    <p class="text-on-surface-variant text-label-sm mb-1">Kotak Balance</p>
                    <h4 class="font-headline-sm text-headline-sm">₹50,000</h4>
                    
                </div>
            </section>
            <!-- Analytics & Charts -->
            <!-- <section class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
                
                <div class="bg-white p-8 rounded-[24px] border border-outline-variant">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-title-lg text-title-lg">Spending Trends</h3>
                        <div class="flex gap-2">
                            <button class="px-3 py-1 bg-surface-container rounded-lg text-xs font-bold">Week</button>
                            <button class="px-3 py-1 bg-primary text-white rounded-lg text-xs font-bold">Month</button>
                        </div>
                    </div>
                    <div class="h-64 flex items-end justify-between gap-4 px-4 border-b border-outline-variant pb-2">
                        <div class="w-full bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[40%]"></div>
                        <div class="w-full bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[60%]"></div>
                        <div class="w-full bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[45%]"></div>
                        <div class="w-full bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[75%]"></div>
                        <div class="w-full bg-primary rounded-t-lg transition-all h-[90%] relative group">
                            <div
                                class="absolute -top-10 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded hidden group-hover:block">
                                ₹12,400</div>
                        </div>
                        <div class="w-full bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[55%]"></div>
                        <div class="w-full bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[30%]"></div>
                    </div>
                    <div class="flex justify-between mt-2 px-4 text-xs text-on-surface-variant">
                        <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-[24px] border border-outline-variant">
                    <h3 class="font-title-lg text-title-lg mb-6">Budget Allocation</h3>
                    <div class="space-y-6">
                        <div>
                            <div class="flex justify-between text-label-md mb-2">
                                <span class="font-medium">Food &amp; Dining</span>
                                <span class="font-bold">₹12,400 / ₹15,000</span>
                            </div>
                            <div class="h-3 w-full bg-surface-container rounded-full overflow-hidden">
                                <div class="h-full bg-primary w-[82.6%] rounded-full"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-label-md mb-2">
                                <span class="font-medium">Shopping</span>
                                <span class="font-bold">₹8,000 / ₹20,000</span>
                            </div>
                            <div class="h-3 w-full bg-surface-container rounded-full overflow-hidden">
                                <div class="h-full bg-amber-500 w-[40%] rounded-full"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-label-md mb-2">
                                <span class="font-medium">Travel &amp; Transport</span>
                                <span class="font-bold">₹4,500 / ₹10,000</span>
                            </div>
                            <div class="h-3 w-full bg-surface-container rounded-full overflow-hidden">
                                <div class="h-full bg-blue-500 w-[45%] rounded-full"></div>
                            </div>
                        </div>
                        <div class="pt-4 mt-4 border-t border-outline-variant flex justify-between items-center">
                            <p class="text-sm text-on-surface-variant italic">You're on track to save ₹5,100 this month!
                            </p>
                            <button class="text-primary font-bold text-sm hover:underline">View All</button>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Recent Transactions -->
            <section class="bg-white rounded-[24px] border border-outline-variant overflow-hidden mb-8">
                <div class="p-8 border-b border-outline-variant flex justify-between items-center">
                    <h3 class="font-title-lg text-title-lg">Recent Transactions</h3>
                    <button
                        class="text-primary font-bold text-sm hover:bg-primary/5 px-4 py-2 rounded-xl transition-colors">See
                        full history</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-surface-container-low">
                            <tr>
                                <th
                                    class="px-8 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">
                                    Category</th>
                                <th
                                    class="px-8 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">
                                    Type</th>
                                <th
                                    class="px-8 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">
                                    Amount</th>
                                <th
                                    class="px-8 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">
                                    Date</th>
                                <th
                                    class="px-8 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant text-right">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <tr class="hover:bg-surface-container/30 transition-colors">
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined">restaurant</span>
                                        </div>
                                        <span class="font-label-md">Food &amp; Drinks</span>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <span
                                        class="px-2 py-1 rounded-md text-[10px] font-bold bg-red-100 text-red-700 uppercase">Expense</span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="font-bold text-on-surface">₹1,240.00</span>
                                </td>
                                <td class="px-8 py-5 text-on-surface-variant text-sm">Oct 12, 2023</td>
                                <td class="px-8 py-5 text-right">
                                    <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                            class="material-symbols-outlined">more_horiz</span></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container/30 transition-colors">
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined">payments</span>
                                        </div>
                                        <span class="font-label-md">Salary Credit</span>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <span
                                        class="px-2 py-1 rounded-md text-[10px] font-bold bg-emerald-100 text-emerald-700 uppercase">Income</span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="font-bold text-primary">₹85,000.00</span>
                                </td>
                                <td class="px-8 py-5 text-on-surface-variant text-sm">Oct 05, 2023</td>
                                <td class="px-8 py-5 text-right">
                                    <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                            class="material-symbols-outlined">more_horiz</span></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container/30 transition-colors">
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined">shopping_bag</span>
                                        </div>
                                        <span class="font-label-md">Amazon Retail</span>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <span
                                        class="px-2 py-1 rounded-md text-[10px] font-bold bg-red-100 text-red-700 uppercase">Expense</span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="font-bold text-on-surface">₹4,590.00</span>
                                </td>
                                <td class="px-8 py-5 text-on-surface-variant text-sm">Oct 03, 2023</td>
                                <td class="px-8 py-5 text-right">
                                    <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                            class="material-symbols-outlined">more_horiz</span></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container/30 transition-colors">
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined">directions_car</span>
                                        </div>
                                        <span class="font-label-md">Uber Transport</span>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <span
                                        class="px-2 py-1 rounded-md text-[10px] font-bold bg-red-100 text-red-700 uppercase">Expense</span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="font-bold text-on-surface">₹320.00</span>
                                </td>
                                <td class="px-8 py-5 text-on-surface-variant text-sm">Oct 01, 2023</td>
                                <td class="px-8 py-5 text-right">
                                    <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                            class="material-symbols-outlined">more_horiz</span></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container/30 transition-colors">
                                <td class="px-8 py-5 border-none">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined">house</span>
                                        </div>
                                        <span class="font-label-md">Monthly Rent</span>
                                    </div>
                                </td>
                                <td class="px-8 py-5 border-none">
                                    <span
                                        class="px-2 py-1 rounded-md text-[10px] font-bold bg-red-100 text-red-700 uppercase">Expense</span>
                                </td>
                                <td class="px-8 py-5 border-none">
                                    <span class="font-bold text-on-surface">₹22,000.00</span>
                                </td>
                                <td class="px-8 py-5 border-none text-on-surface-variant text-sm">Sep 30, 2023</td>
                                <td class="px-8 py-5 border-none text-right">
                                    <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                            class="material-symbols-outlined">more_horiz</span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
    <!-- Mobile Bottom Navigation Bar -->
    <?php include "include/mobilenav.php"?>
    <script>
    // Simple Interaction: Lift cards on hover (additional to tailwind)
    document.querySelectorAll('.hover\\:shadow-md').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-4px)';
            card.style.transition = 'transform 0.2s ease-out';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
        });
    });
    </script>
</body>

</html>