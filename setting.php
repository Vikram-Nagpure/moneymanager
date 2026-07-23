<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Settings | Money Manager</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "tertiary-fixed-dim": "#ffb59e",
                    "secondary": "#006a63",
                    "primary": "#006b5f",
                    "on-secondary-fixed-variant": "#00504a",
                    "on-secondary": "#ffffff",
                    "on-surface": "#131b2e",
                    "on-secondary-container": "#006f67",
                    "primary-fixed-dim": "#4fdbc8",
                    "on-error-container": "#93000a",
                    "tertiary": "#9b4426",
                    "surface-container-highest": "#dae2fd",
                    "secondary-fixed-dim": "#80d5cb",
                    "on-primary-container": "#00423b",
                    "surface": "#faf8ff",
                    "primary-fixed": "#71f8e4",
                    "on-surface-variant": "#3c4947",
                    "secondary-fixed": "#9cf2e8",
                    "on-error": "#ffffff",
                    "on-tertiary": "#ffffff",
                    "surface-container-low": "#f2f3ff",
                    "primary-container": "#14b8a6",
                    "on-tertiary-fixed": "#3a0b00",
                    "error-container": "#ffdad6",
                    "surface-bright": "#faf8ff",
                    "surface-container-high": "#e2e7ff",
                    "outline-variant": "#bbcac6",
                    "on-background": "#131b2e",
                    "surface-container": "#eaedff",
                    "error": "#ba1a1a",
                    "on-primary-fixed": "#00201c",
                    "inverse-surface": "#283044",
                    "on-primary": "#ffffff",
                    "surface-container-lowest": "#ffffff",
                    "background": "#faf8ff",
                    "on-tertiary-fixed-variant": "#7c2d11",
                    "on-primary-fixed-variant": "#005048",
                    "on-tertiary-container": "#6c2106",
                    "on-secondary-fixed": "#00201d",
                    "tertiary-fixed": "#ffdbd0",
                    "surface-variant": "#dae2fd",
                    "outline": "#6c7a77",
                    "inverse-on-surface": "#eef0ff",
                    "surface-tint": "#006b5f",
                    "secondary-container": "#99efe5",
                    "inverse-primary": "#4fdbc8",
                    "tertiary-container": "#f38764",
                    "surface-dim": "#d2d9f4"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "stack-sm": "8px",
                    "margin-mobile": "16px",
                    "gutter": "24px",
                    "container-max": "1280px",
                    "section-gap": "64px",
                    "margin-desktop": "40px",
                    "stack-lg": "32px",
                    "stack-md": "16px"
                },
                "fontFamily": {
                    "headline-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "display-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "title-lg": ["Inter"],
                    "label-sm": ["Inter"],
                    "headline-md": ["Inter"],
                    "display-lg-mobile": ["Inter"]
                },
                "fontSize": {
                    "headline-sm": ["24px", {
                        "lineHeight": "32px",
                        "letterSpacing": "-0.01em",
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
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "title-lg": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "letterSpacing": "0.05em",
                        "fontWeight": "600"
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
                    }]
                }
            },
        },
    }
    </script>
    <style>
    .glass-card {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(12px);
        border: 1px solid #E2E8F0;
        box-shadow: 0px 4px 20px rgba(15, 23, 42, 0.05);
        border-radius: 24px;
    }

    .btn-gradient {
        background: linear-gradient(135deg, #14B8A6 0%, #006b5f 100%);
        transition: all 0.2s ease-out;
    }

    .btn-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(20, 184, 166, 0.4);
    }

    .input-focus:focus {
        border-color: #14B8A6;
        outline: none;
        box-shadow: 0 0 0 4px rgba(20, 184, 166, 0.1);
    }

    .sidebar-active {
        background-color: #99efe5;
        /* secondary-container */
        color: #006f67;
        /* on-secondary-container */
        font-weight: 600;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }
    </style>
</head>

<body class="bg-background font-body-md text-on-surface antialiased overflow-x-hidden">
    <!-- TopNavBar -->
    <nav
        class="fixed top-0 w-full z-50 bg-surface/70 backdrop-blur-xl border-b border-outline-variant/30 shadow-sm h-16 flex justify-between items-center px-margin-desktop max-w-container-max mx-auto left-0 right-0">
        <div class="flex items-center gap-4">
            <span class="font-headline-sm text-headline-sm font-bold text-primary">Money Manager</span>
        </div>
        <div class="flex items-center gap-4">
            <button
                class="p-2 text-on-surface-variant hover:text-primary transition-all duration-200 ease-out hover:-translate-y-0.5">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button
                class="p-2 text-primary font-bold border-b-2 border-primary pb-1 transition-all duration-200 ease-out hover:-translate-y-0.5">
                <span class="material-symbols-outlined">settings</span>
            </button>
            <div class="w-8 h-8 rounded-full overflow-hidden border-2 border-primary-fixed ml-2">
                <img class="w-full h-full object-cover"
                    data-alt="A professional studio portrait of a young corporate executive, lit with soft three-point lighting. The background is a clean, minimalist off-white office wall. The person is smiling confidently, wearing a sleek modern navy blazer. The overall aesthetic is high-end, premium, and professional."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCB2BhwiA93RTU38KE4gAayawlrMg6uQkX-d3DBsvjDEoFkTmTs6jaTucv3zxjR6nOjnOgClxDYheR5DRCt9pvSefOeZAWmUnEngKBc0xMBnNJjRaXNTDLSpA_O_HAotBRPLa8puezWk4d0T708IFYtcK9ZqPn2jq7MVmWDvfm_v9HAxbsvbI1t6wCMDqcSsofpnoQqr72USdPPxJ9FVo64wO3GpnunGlithMYDADb18cNMhewN23yzD9FNwjMCArJJ8a3ncSKfQn0" />
            </div>
        </div>
    </nav>
    <!-- Sidebar (Desktop Only) -->
    <!-- <aside
        class="h-screen w-72 fixed left-0 top-0 hidden lg:flex flex-col bg-surface border-r border-outline-variant/20 p-stack-md pt-24 z-40">
        <div class="mb-stack-lg px-4">
            <div class="flex items-center gap-3 mb-2">
                <div
                    class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
                    <span class="material-symbols-outlined">person</span>
                </div>
                <div>
                    <p class="font-label-md text-label-md font-bold">Premium Account</p>
                    <p class="text-xs text-on-surface-variant">Managing since 2023</p>
                </div>
            </div>
            <button class="w-full mt-2 py-2 px-4 rounded-xl text-xs font-bold btn-gradient text-white">Upgrade to
                Gold</button>
        </div>
        <nav class="flex-1 flex flex-col gap-1">
            <a class="sidebar-active flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">person</span>
                <span class="font-label-md">Profile</span>
            </a>
            <a class="text-on-surface-variant hover:bg-surface-container-low flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200"
                href="#">
                <span class="material-symbols-outlined">payments</span>
                <span class="font-label-md">Payment Methods</span>
            </a>
            <a class="text-on-surface-variant hover:bg-surface-container-low flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200"
                href="#">
                <span class="material-symbols-outlined">trending_up</span>
                <span class="font-label-md">Income Categories</span>
            </a>
            <a class="text-on-surface-variant hover:bg-surface-container-low flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200"
                href="#">
                <span class="material-symbols-outlined">trending_down</span>
                <span class="font-label-md">Expense Categories</span>
            </a>
            <a class="text-on-surface-variant hover:bg-surface-container-low flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200"
                href="#">
                <span class="material-symbols-outlined">security</span>
                <span class="font-label-md">Security</span>
            </a>
        </nav>
        <div class="mt-auto border-t border-outline-variant/20 pt-4 flex flex-col gap-1">
            <a class="text-on-surface-variant hover:bg-surface-container-low flex items-center gap-3 px-4 py-3 rounded-xl"
                href="#">
                <span class="material-symbols-outlined">help</span>
                <span class="font-label-md">Help Center</span>
            </a>
            <a class="text-on-surface-variant hover:bg-surface-container-low flex items-center gap-3 px-4 py-3 rounded-xl"
                href="#">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-label-md">Sign Out</span>
            </a>
        </div>
    </aside> -->
    <?php include "include/header.php"?>
    <!-- Main Content Area -->
    <main class="pt-24 pb-32 px-4 md:px-margin-desktop max-w-container-max mx-auto">
        <!-- Header -->
        <header class="mb-stack-lg">
            <h1 class="font-headline-md text-headline-md md:text-headline-md font-bold text-on-surface">Settings</h1>
            <p class="text-on-surface-variant body-md">Manage your account, categories, and preferences.</p>
        </header>
        <div class="grid grid-cols-1 gap-stack-lg">
            <!-- Profile Settings Card -->
            <section class="glass-card p-6 md:p-8" id="profile">
                <h2 class="font-title-lg text-title-lg mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">person</span> Profile Settings
                </h2>
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex flex-col items-center gap-3">
                        <div class="relative group">
                            <div
                                class="w-32 h-32 rounded-full overflow-hidden border-4 border-surface-container-high ring-1 ring-outline-variant">
                                <img class="w-full h-full object-cover"
                                    data-alt="A close-up high-resolution image of a stylish human avatar against a neutral grey background. The lighting is crisp and modern, emphasizing clarity and professionalism. The composition is centered and balanced, suitable for a premium fintech user profile. The mood is minimalist and sophisticated."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIcsN_qCY9xOZsiuVXKra82O1UrmHdEkou1lHabxbd3GHReCQ5AvNT7g4Hw49fO-Wa1sUSxXWJ1vHGVEtC_AHZzdnt7PP3pHeomcLecb9Q5jWgh1uQCvensQ7nvaY2lmWxqxf-7QHIyflhQFC9aCiLXgMnnCXYhX1Slm1bCHdYQ0bBeU3HMummLSTBeIv0DeMGtq5KTOjLMwnDgYWMCXhDbu_MZlgAUTLMKDDqka0JaA5_eiOC4lTho96tpAvMjRzA13fRu4HNW2w" />
                            </div>
                            <button
                                class="absolute bottom-1 right-1 bg-primary text-white p-2 rounded-full shadow-lg hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-sm">photo_camera</span>
                            </button>
                        </div>
                        <p class="text-xs text-on-surface-variant font-medium">Click to upload avatar</p>
                    </div>
                    <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-label-sm font-bold text-on-surface-variant">Full Name</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl">person</span>
                                <input
                                    class="w-full h-14 pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-[24px] input-focus font-body-md"
                                    type="text" value="Aditya Sharma" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-label-sm font-bold text-on-surface-variant">Email Address</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl">mail</span>
                                <input
                                    class="w-full h-14 pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-[24px] input-focus font-body-md"
                                    type="email" value="aditya.sharma@example.com" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-label-sm font-bold text-on-surface-variant">Mobile Number</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl">call</span>
                                <input
                                    class="w-full h-14 pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-[24px] input-focus font-body-md"
                                    type="tel" value="+91 98765 43210" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-label-sm font-bold text-on-surface-variant">Preferred Currency</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl">payments</span>
                                <select
                                    class="w-full h-14 pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-[24px] input-focus font-body-md appearance-none">
                                    <option selected="">₹ INR - Indian Rupee</option>
                                    <option>$ USD - US Dollar</option>
                                    <option>€ EUR - Euro</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 md:col-span-2">
                            <label class="text-label-sm font-bold text-on-surface-variant">Time Zone</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl">schedule</span>
                                <select
                                    class="w-full h-14 pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-[24px] input-focus font-body-md appearance-none">
                                    <option selected="">(GMT+05:30) Mumbai, Kolkata, New Delhi</option>
                                    <option>(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Payment Methods Table -->
            <section class="glass-card overflow-hidden" id="payments">
                <div class="p-6 md:p-8 flex justify-between items-center border-b border-outline-variant/30">
                    <h2 class="font-title-lg text-title-lg flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">payments</span> Payment Methods
                    </h2>
                    <!-- <button
                        class="btn-gradient text-white px-4 py-2 rounded-full font-label-md flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">add</span> Add Payment Method
                    </button> -->
                    <!-- Trigger Button -->
<button onclick="openPaymentModal()"
    class="btn-gradient text-white px-4 py-2 rounded-full font-label-md flex items-center gap-2">
    <span class="material-symbols-outlined text-sm">add</span>
    Add Payment Method
</button>
                </div>
                <div class="overflow-x-auto lg:overflow-x-hidden">
                    <table class="w-full text-left">
                        <thead class="bg-surface-container-low border-b border-outline-variant/20">
                            <tr>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Method</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Name</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Status</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/10">
                            <tr class="hover:bg-surface-container-lowest transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-surface-container-high flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined">account_balance</span>
                                        </div>
                                        <span class="font-medium">Bank</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-on-surface-variant">HDFC Savings Account</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-primary/10 text-primary text-[11px] font-bold uppercase tracking-wider">Active</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button
                                            class="p-2 hover:bg-surface-container text-on-surface-variant rounded-lg transition-colors"><span
                                                class="material-symbols-outlined text-xl">visibility</span></button>
                                        <button
                                            class="p-2 hover:bg-surface-container text-on-surface-variant rounded-lg transition-colors"><span
                                                class="material-symbols-outlined text-xl">edit</span></button>
                                        <button
                                            class="p-2 hover:bg-error-container/20 text-error rounded-lg transition-colors"><span
                                                class="material-symbols-outlined text-xl">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container-lowest transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-surface-container-high flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined">smartphone</span>
                                        </div>
                                        <span class="font-medium">UPI</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-on-surface-variant">aditya@okaxis</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-primary/10 text-primary text-[11px] font-bold uppercase tracking-wider">Active</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button
                                            class="p-2 hover:bg-surface-container text-on-surface-variant rounded-lg transition-colors"><span
                                                class="material-symbols-outlined text-xl">visibility</span></button>
                                        <button
                                            class="p-2 hover:bg-surface-container text-on-surface-variant rounded-lg transition-colors"><span
                                                class="material-symbols-outlined text-xl">edit</span></button>
                                        <button
                                            class="p-2 hover:bg-error-container/20 text-error rounded-lg transition-colors"><span
                                                class="material-symbols-outlined text-xl">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <!-- Income Categories Table -->
            <section class="glass-card overflow-hidden" id="income">
                <div class="p-6 md:p-8 flex justify-between items-center border-b border-outline-variant/30">
                    <h2 class="font-title-lg text-title-lg flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">trending_up</span> Income Categories
                    </h2>
                    <button class="btn-gradient text-white px-4 py-2 rounded-full font-label-md flex items-center gap-2"
                        onclick="document.getElementById('modal-add-income').classList.remove('hidden')">Add
                        Category</button>

                        <!-- <button
                        class="btn-gradient text-white px-4 py-2 rounded-full font-label-md flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">add</span> Add Payment Method
                    </button> -->
                </div>
                <div class="overflow-x-auto lg:overflow-x-hidden">
                    <table class="w-full text-left">
                        <thead class="bg-surface-container-low">
                            <tr>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Category</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Badge</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Transactions</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Status</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/10">
                            <tr class="hover:bg-surface-container-lowest transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span class="material-symbols-outlined text-primary">work</span>
                                        <span class="font-medium">Salary</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="w-6 h-6 rounded-full bg-emerald-500 shadow-inner"></div>
                                </td>
                                <td class="px-6 py-4 text-on-surface-variant">12</td>
                                <td class="px-6 py-4"><span class="text-primary font-semibold">Active</span></td>
                                <td class="px-6 py-4 text-right">
                                    <button
                                        class="p-2 hover:bg-surface-container text-on-surface-variant rounded-lg"><span
                                            class="material-symbols-outlined">edit</span></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container-lowest transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span class="material-symbols-outlined text-primary">store</span>
                                        <span class="font-medium">Business</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="w-6 h-6 rounded-full bg-blue-500 shadow-inner"></div>
                                </td>
                                <td class="px-6 py-4 text-on-surface-variant">5</td>
                                <td class="px-6 py-4"><span class="text-primary font-semibold">Active</span></td>
                                <td class="px-6 py-4 text-right">
                                    <button
                                        class="p-2 hover:bg-surface-container text-on-surface-variant rounded-lg"><span
                                            class="material-symbols-outlined">edit</span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <!-- Expense Categories Table -->
            <section class="glass-card overflow-hidden" id="expenses">
                <div class="p-6 md:p-8 flex justify-between items-center border-b border-outline-variant/30">
                    <h2 class="font-title-lg text-title-lg flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">trending_down</span> Expense Categories
                    </h2>
                    <button class="btn-gradient text-white px-4 py-2 rounded-full font-label-md flex items-center gap-2"
                        onclick="document.getElementById('modal-add-expense').classList.remove('hidden')">Add
                        Category</button>

                        
                </div>
                <div class="overflow-x-auto lg:overflow-x-hidden">
                    <table class="w-full text-left">
                        <thead class="bg-surface-container-low">
                            <tr>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Category</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Badge</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Transactions</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Status</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/10">
                            <tr class="hover:bg-surface-container-lowest transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span class="material-symbols-outlined text-error">restaurant</span>
                                        <span class="font-medium">Food</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="w-6 h-6 rounded-full bg-orange-400 shadow-inner"></div>
                                </td>
                                <td class="px-6 py-4 text-on-surface-variant">84</td>
                                <td class="px-6 py-4"><span class="text-primary font-semibold">Active</span></td>
                                <td class="px-6 py-4 text-right">
                                    <button
                                        class="p-2 hover:bg-surface-container text-on-surface-variant rounded-lg"><span
                                            class="material-symbols-outlined">edit</span></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container-lowest transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span class="material-symbols-outlined text-error">shopping_cart</span>
                                        <span class="font-medium">Shopping</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="w-6 h-6 rounded-full bg-pink-400 shadow-inner"></div>
                                </td>
                                <td class="px-6 py-4 text-on-surface-variant">22</td>
                                <td class="px-6 py-4"><span class="text-error font-semibold">Inactive</span></td>
                                <td class="px-6 py-4 text-right">
                                    <button
                                        class="p-2 hover:bg-surface-container text-on-surface-variant rounded-lg"><span
                                            class="material-symbols-outlined">edit</span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <!-- Change Password Card -->
            <section class="glass-card p-6 md:p-8" id="security">
                <h2 class="font-title-lg text-title-lg mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">lock</span> Security &amp; Password
                </h2>
                <div class="max-w-2xl flex flex-col gap-6">
                    <!-- cureent -->
                    <div class="flex flex-col gap-2">
                        <label class="text-label-sm font-bold text-on-surface-variant">
                            Current Password
                        </label>

                        <div class="relative">
                            <input id="currentPassword"
                                type="password"
                                placeholder="••••••••"
                                class="w-full h-14 px-4 pr-14 bg-surface-container-lowest border border-outline-variant rounded-[24px] input-focus font-body-md">

                            <button type="button"
                                onclick="togglePassword('currentPassword', this)"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary transition">

                                <span class="material-symbols-outlined">
                                    visibility
                                </span>

                            </button>
                        </div>
                    </div>
                    <!-- new pass -->
                    <div class="flex flex-col gap-2">
                        <label class="text-label-sm font-bold text-on-surface-variant">
                            New Password
                        </label>

                        <div class="relative">
                            <input id="newPassword"
                                type="password"
                                placeholder="Min. 8 characters"
                                class="w-full h-14 px-4 pr-14 bg-surface-container-lowest border border-outline-variant rounded-[24px] input-focus font-body-md">

                            <button type="button"
                                onclick="togglePassword('newPassword', this)"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary transition">

                                <span class="material-symbols-outlined">
                                    visibility
                                </span>

                            </button>
                        </div>

                        <!-- Strength Meter -->
                        <div class="flex gap-1 mt-1">
                            <div class="h-1.5 flex-1 rounded-full bg-primary"></div>
                            <div class="h-1.5 flex-1 rounded-full bg-primary"></div>
                            <div class="h-1.5 flex-1 rounded-full bg-outline-variant/30"></div>
                            <div class="h-1.5 flex-1 rounded-full bg-outline-variant/30"></div>
                        </div>

                        <p class="text-xs text-on-surface-variant font-medium mt-1">
                            Password strength:
                            <span class="text-primary">Medium</span>
                        </p>
                    </div>
                    <!-- confirm new pass -->
                    <div class="flex flex-col gap-2">
                        <label class="text-label-sm font-bold text-on-surface-variant">
                            Confirm New Password
                        </label>

                        <div class="relative">
                            <input id="confirmPassword"
                                type="password"
                                placeholder="Re-enter new password"
                                class="w-full h-14 px-4 pr-14 bg-surface-container-lowest border border-outline-variant rounded-[24px] input-focus font-body-md">

                            <button type="button"
                                onclick="togglePassword('confirmPassword', this)"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary transition">

                                <span class="material-symbols-outlined">
                                    visibility
                                </span>

                            </button>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button class="btn-gradient text-white px-8 py-3 rounded-full font-label-md">Update
                            Password</button>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Floating Save Button (Mobile) -->
    <!-- <div class="fixed bottom-20 right-6 z-50 lg:hidden">
        <button class="btn-gradient text-white flex items-center justify-center w-14 h-14 rounded-full shadow-2xl">
            <span class="material-symbols-outlined">save</span>
        </button>
    </div> -->



    <!-- BottomNavBar (Mobile) -->
    <?php include "include/mobilenav.php"?>


    <!-- bank method Modal -->
    <div id="paymentModal"
        class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm p-4">

        <div class="bg-white w-full max-w-2xl rounded-3xl shadow-2xl overflow-hidden">

            <!-- Header -->
            <div class="flex items-center justify-between px-6 py-5 border-b">
                <div>
                    <h2 class="text-xl font-semibold text-slate-900">
                        Add Payment Method
                    </h2>
                    <p class="text-sm text-slate-500 mt-1">
                        Add your UPI or Bank account details.
                    </p>
                </div>

                <button onclick="closePaymentModal()"
                    class="w-10 h-10 rounded-full hover:bg-slate-100 flex items-center justify-center">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <!-- Tabs -->
            <div class="p-6 pb-0">

                <div class="bg-slate-100 rounded-full p-1 flex w-fit">

                    <button id="upiTab"
                        onclick="changeTab('upi')"
                        class="px-6 py-2 rounded-full bg-primary text-white font-medium transition">
                        UPI
                    </button>

                    <button id="bankTab"
                        onclick="changeTab('bank')"
                        class="px-6 py-2 rounded-full text-slate-600 font-medium transition">
                        Bank
                    </button>

                </div>

            </div>

            <!-- Body -->
            <div class="p-6">

                <!-- ================= UPI ================= -->

                <div id="upiContent">

                    <div class="space-y-5">

                        <div>
                            <label class="block text-sm font-medium mb-2">
                                UPI App
                            </label>

                            <select
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">

                                <option>Google Pay</option>
                                <option>PhonePe</option>
                                <option>Paytm</option>
                                <option>BHIM</option>

                            </select>

                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">
                                Account Holder Name
                            </label>

                            <input type="text"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3"
                                placeholder="Enter Name">

                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">
                                UPI ID
                            </label>

                            <input type="text"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3"
                                placeholder="example@okhdfcbank">

                        </div>

                    </div>

                </div>

                <!-- ================= BANK ================= -->

                <div id="bankContent" class="hidden">

                    <div class="grid md:grid-cols-2 gap-5">

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium mb-2">
                                Account Holder Name
                            </label>

                            <input type="text"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3"
                                placeholder="Enter Name">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">
                                Bank Name
                            </label>

                            <input type="text"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3"
                                placeholder="State Bank of India">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">
                                Account Number
                            </label>

                            <input type="text"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3"
                                placeholder="XXXXXXXXXXXX">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">
                                IFSC Code
                            </label>

                            <input type="text"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 uppercase"
                                placeholder="SBIN0000001">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">
                                Branch Name
                            </label>

                            <input type="text"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3"
                                placeholder="Branch Name">
                        </div>

                    </div>

                </div>

            </div>

            <!-- Footer -->

            <div class="px-6 py-5 border-t flex justify-end gap-3">

                <button onclick="closePaymentModal()"
                    class="px-5 py-2.5 border rounded-full hover:bg-slate-100">
                    Cancel
                </button>

                <button
                    class="btn-gradient text-white px-6 py-2.5 rounded-full">
                    Save Payment Method
                </button>

            </div>

        </div>

    </div>
    <script>
    // Simple micro-interactions for active state in tables or hover effects
    document.querySelectorAll('tr').forEach(row => {
        row.addEventListener('mouseenter', () => {
            row.style.transform = "scale(1.002)";
            row.style.transition = "transform 0.2s ease-out";
        });
        row.addEventListener('mouseleave', () => {
            row.style.transform = "scale(1)";
        });
    });

    // Sticky button visibility logic (Optional enhancement)
    window.addEventListener('scroll', () => {
        const btn = document.querySelector('.lg\\:hidden.fixed.bottom-20');
        if (window.scrollY > 100) {
            btn.style.opacity = '1';
            btn.style.transform = 'translateY(0)';
        } else {
            // Keep it visible for this exercise
        }
    });
    </script>

<!-- bank method js  -->
 <script>
    function openPaymentModal() {
    document.getElementById("paymentModal").classList.remove("hidden");
    document.getElementById("paymentModal").classList.add("flex");
}

function closePaymentModal() {
    document.getElementById("paymentModal").classList.add("hidden");
    document.getElementById("paymentModal").classList.remove("flex");
}

function changeTab(tab) {

    const upi = document.getElementById("upiContent");
    const bank = document.getElementById("bankContent");

    const upiTab = document.getElementById("upiTab");
    const bankTab = document.getElementById("bankTab");

    if (tab === "upi") {

        upi.classList.remove("hidden");
        bank.classList.add("hidden");

        upiTab.classList.add("bg-primary", "text-white");
        upiTab.classList.remove("text-slate-600");

        bankTab.classList.remove("bg-primary", "text-white");
        bankTab.classList.add("text-slate-600");

    } else {

        bank.classList.remove("hidden");
        upi.classList.add("hidden");

        bankTab.classList.add("bg-primary", "text-white");
        bankTab.classList.remove("text-slate-600");

        upiTab.classList.remove("bg-primary", "text-white");
        upiTab.classList.add("text-slate-600");

    }
}
 </script>

 <!-- pass hide show button js -->
  <script>
    function togglePassword(inputId, button) {

    const input = document.getElementById(inputId);
    const icon = button.querySelector(".material-symbols-outlined");

    if (input.type === "password") {
        input.type = "text";
        icon.textContent = "visibility_off";
    } else {
        input.type = "password";
        icon.textContent = "visibility";
    }

}
  </script>

    <div class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4 bg-on-surface/40 backdrop-blur-sm"
        id="modal-add-income">
        <div class="glass-card w-full max-w-lg overflow-hidden flex flex-col animate-in fade-in zoom-in duration-200">
            <div class="p-6 border-b border-outline-variant/30 flex justify-between items-center">
                <h3 class="font-title-lg text-title-lg flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">add_circle</span> Add Income Category
                </h3>
                <button class="p-2 hover:bg-surface-container rounded-full transition-colors"
                    onclick="document.getElementById('modal-add-income').classList.add('hidden')">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <div class="p-6 flex flex-col gap-6 overflow-y-auto max-h-[70vh]">
                <div class="flex flex-col gap-2">
                    <label class="text-label-sm font-bold text-on-surface-variant">Category Name</label>
                    <input
                        class="w-full h-12 px-4 bg-surface-container-lowest border border-outline-variant rounded-xl input-focus font-body-md"
                        placeholder="e.g. Freelance" type="text" />
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col gap-2">
                        <label class="text-label-sm font-bold text-on-surface-variant">Icon</label>
                        <select
                            class="w-full h-12 px-4 bg-surface-container-lowest border border-outline-variant rounded-xl input-focus font-body-md appearance-none">
                            <option value="trending_up">Trending Up</option>
                            <option value="payments">Payments</option>
                            <option value="work">Work</option>
                            <option value="savings">Savings</option>
                            <option value="account_balance">Bank</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-label-sm font-bold text-on-surface-variant">Status</label>
                        <select
                            class="w-full h-12 px-4 bg-surface-container-lowest border border-outline-variant rounded-xl input-focus font-body-md appearance-none">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="text-label-sm font-bold text-on-surface-variant">Category Color</label>
                    <div class="flex flex-wrap gap-2">
                        <button class="w-8 h-8 rounded-full bg-emerald-500 ring-2 ring-offset-2 ring-primary"></button>
                        <button class="w-8 h-8 rounded-full bg-blue-500"></button>
                        <button class="w-8 h-8 rounded-full bg-purple-500"></button>
                        <button class="w-8 h-8 rounded-full bg-orange-400"></button>
                        <button class="w-8 h-8 rounded-full bg-red-500"></button>
                        <button class="w-8 h-8 rounded-full bg-yellow-400"></button>
                        <button class="w-8 h-8 rounded-full bg-pink-400"></button>
                        <button class="w-8 h-8 rounded-full bg-teal-500"></button>
                        <div class="relative w-8 h-8 rounded-full border border-outline-variant overflow-hidden">
                            <input class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" type="color"
                                value="#10b981" />
                            <span
                                class="material-symbols-outlined absolute inset-0 flex items-center justify-center text-xs">colorize</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-surface-container-low rounded-xl border border-outline-variant/20">
                    <p class="text-label-sm font-bold text-on-surface-variant mb-2">Live Preview</p>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-500 text-white w-fit">
                        <span class="material-symbols-outlined text-sm">trending_up</span>
                        <span class="text-xs font-bold">New Category</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-label-sm font-bold text-on-surface-variant">Description</label>
                    <textarea
                        class="w-full p-4 bg-surface-container-lowest border border-outline-variant rounded-xl input-focus font-body-md h-24 resize-none"
                        placeholder="Add notes..."></textarea>
                </div>
            </div>
            <div class="p-6 border-t border-outline-variant/30 flex gap-3 justify-end">
                <button
                    class="px-6 py-2 rounded-full font-label-md border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-colors"
                    onclick="document.getElementById('modal-add-income').classList.add('hidden')">Cancel</button>
                <button class="btn-gradient text-white px-6 py-2 rounded-full font-label-md">Add Category</button>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4 bg-on-surface/40 backdrop-blur-sm"
        id="modal-add-expense">
        <div class="glass-card w-full max-w-lg overflow-hidden flex flex-col animate-in fade-in zoom-in duration-200">
            <div class="p-6 border-b border-outline-variant/30 flex justify-between items-center">
                <h3 class="font-title-lg text-title-lg flex items-center gap-2">
                    <span class="material-symbols-outlined text-error">add_circle</span> Add Expense Category
                </h3>
                <button class="p-2 hover:bg-surface-container rounded-full transition-colors"
                    onclick="document.getElementById('modal-add-expense').classList.add('hidden')">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <div class="p-6 flex flex-col gap-6 overflow-y-auto max-h-[70vh]">
                <div class="flex flex-col gap-2">
                    <label class="text-label-sm font-bold text-on-surface-variant">Category Name</label>
                    <input
                        class="w-full h-12 px-4 bg-surface-container-lowest border border-outline-variant rounded-xl input-focus font-body-md"
                        placeholder="e.g. Groceries" type="text" />
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col gap-2">
                        <label class="text-label-sm font-bold text-on-surface-variant">Icon</label>
                        <select
                            class="w-full h-12 px-4 bg-surface-container-lowest border border-outline-variant rounded-xl input-focus font-body-md appearance-none">
                            <option value="restaurant">Restaurant</option>
                            <option value="shopping_cart">Shopping</option>
                            <option value="flight">Travel</option>
                            <option value="home">Home</option>
                            <option value="directions_car">Transport</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-label-sm font-bold text-on-surface-variant">Status</label>
                        <select
                            class="w-full h-12 px-4 bg-surface-container-lowest border border-outline-variant rounded-xl input-focus font-body-md appearance-none">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="text-label-sm font-bold text-on-surface-variant">Category Color</label>
                    <div class="flex flex-wrap gap-2">
                        <button class="w-8 h-8 rounded-full bg-orange-400 ring-2 ring-offset-2 ring-primary"></button>
                        <button class="w-8 h-8 rounded-full bg-red-500"></button>
                        <button class="w-8 h-8 rounded-full bg-pink-400"></button>
                        <button class="w-8 h-8 rounded-full bg-purple-500"></button>
                        <button class="w-8 h-8 rounded-full bg-blue-500"></button>
                        <button class="w-8 h-8 rounded-full bg-emerald-500"></button>
                        <button class="w-8 h-8 rounded-full bg-yellow-400"></button>
                        <button class="w-8 h-8 rounded-full bg-gray-500"></button>
                        <div class="relative w-8 h-8 rounded-full border border-outline-variant overflow-hidden">
                            <input class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" type="color"
                                value="#fb923c" />
                            <span
                                class="material-symbols-outlined absolute inset-0 flex items-center justify-center text-xs">colorize</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-surface-container-low rounded-xl border border-outline-variant/20">
                    <p class="text-label-sm font-bold text-on-surface-variant mb-2">Live Preview</p>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-orange-400 text-white w-fit">
                        <span class="material-symbols-outlined text-sm">restaurant</span>
                        <span class="text-xs font-bold">New Category</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-label-sm font-bold text-on-surface-variant">Description</label>
                    <textarea
                        class="w-full p-4 bg-surface-container-lowest border border-outline-variant rounded-xl input-focus font-body-md h-24 resize-none"
                        placeholder="Add notes..."></textarea>
                </div>
            </div>
            <div class="p-6 border-t border-outline-variant/30 flex gap-3 justify-end">
                <button
                    class="px-6 py-2 rounded-full font-label-md border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-colors"
                    onclick="document.getElementById('modal-add-expense').classList.add('hidden')">Cancel</button>
                <button class="btn-gradient text-white px-6 py-2 rounded-full font-label-md">Add Category</button>
            </div>
        </div>
    </div>
</body>

</html>