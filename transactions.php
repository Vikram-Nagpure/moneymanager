<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    try {
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed": "#00201d",
                        "inverse-primary": "#4fdbc8",
                        "surface-bright": "#faf8ff",
                        "surface-variant": "#dae2fd",
                        "on-surface-variant": "#3c4947",
                        "on-secondary": "#ffffff",
                        "outline-variant": "#bbcac6",
                        "secondary-fixed": "#9cf2e8",
                        "on-surface": "#131b2e",
                        "on-tertiary-fixed-variant": "#7c2d11",
                        "tertiary-fixed-dim": "#ffb59e",
                        "tertiary": "#9b4426",
                        "outline": "#6c7a77",
                        "on-secondary-container": "#006f67",
                        "surface-container-low": "#f2f3ff",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#99efe5",
                        "on-primary": "#ffffff",
                        "on-secondary-fixed-variant": "#00504a",
                        "inverse-surface": "#283044",
                        "surface-container-high": "#e2e7ff",
                        "tertiary-container": "#f38764",
                        "secondary-fixed-dim": "#80d5cb",
                        "surface-container": "#eaedff",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#ffdbd0",
                        "primary-fixed": "#71f8e4",
                        "primary-fixed-dim": "#4fdbc8",
                        "inverse-on-surface": "#eef0ff",
                        "background": "#faf8ff",
                        "on-tertiary-fixed": "#3a0b00",
                        "primary-container": "#14b8a6",
                        "surface-container-highest": "#dae2fd",
                        "on-primary-container": "#00423b",
                        "secondary": "#006a63",
                        "primary": "#006b5f",
                        "error-container": "#ffdad6",
                        "on-background": "#131b2e",
                        "on-tertiary-container": "#6c2106",
                        "on-error": "#ffffff",
                        "surface-tint": "#006b5f",
                        "on-primary-fixed-variant": "#005048",
                        "on-error-container": "#93000a",
                        "surface-dim": "#d2d9f4",
                        "surface": "#faf8ff",
                        "on-primary-fixed": "#00201c",
                        "error": "#ba1a1a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "section-gap": "64px",
                        "margin-mobile": "16px",
                        "stack-lg": "32px",
                        "margin-desktop": "40px",
                        "gutter": "24px",
                        "stack-md": "16px",
                        "container-max": "1280px",
                        "stack-sm": "8px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "label-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "title-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-sm": ["Inter"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
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
                        "display-lg-mobile": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
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
                        "headline-sm": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    } catch (_e) {}
    </script>
    <style>
    .glass-card {
        background: rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.05);
    }
    /* --- Data table additions: filter panel + sort/page controls, no visual redesign --- */
    .filter-panel { max-height: 0; overflow: hidden; transition: max-height .25s ease; }
    .filter-panel.open { max-height: 260px; }
    th[data-sort] { cursor: pointer; user-select: none; }
    th[data-sort]:hover { color: theme('colors.primary'); }
    th[data-sort] .sort-arrow { opacity: .35; font-size: 10px; margin-left: 3px; }
    th[data-sort].sorted .sort-arrow { opacity: 1; }
    .filter-pill { display:inline-flex; align-items:center; gap:6px; padding:4px 10px 4px 12px; border-radius:9999px; font-size:12px; font-weight:600; }
    .filter-pill button { background:none; border:none; cursor:pointer; font-size:13px; line-height:1; }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen font-body-md relative">

<?php include "include/header.php"?>
    <main class="w-full px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto py-stack-lg relative z-10 mt-10">
        
        <!-- Summary Cards -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter mb-section-gap">
            <div class="glass-card rounded-[24px] p-6 flex flex-col justify-between h-36">
                <div class="flex justify-between items-start">
                    <span class="font-label-md text-label-md text-on-surface-variant">Total Balance</span>
                    <div class="p-2 rounded-xl bg-primary/10 text-primary">
                        <span class="material-symbols-outlined"
                            style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span>
                    </div>
                </div>
                <div>
                    <div class="font-headline-md text-headline-md text-on-background font-bold tracking-tight">₹128,540
                    </div>
                    <div class="flex items-center gap-1 text-primary-container mt-1">
                        <span class="material-symbols-outlined text-sm font-bold"
                            style="font-variation-settings: 'FILL' 0;">trending_up</span>
                        <span class="font-label-sm text-label-sm font-bold">+4.2%</span>
                        <span class="text-[10px] text-on-surface-variant/60 ml-1">vs last month</span>
                    </div>
                </div>
            </div>
            <div class="glass-card rounded-[24px] p-6 flex flex-col justify-between h-36">
                <div class="flex justify-between items-start">
                    <span class="font-label-md text-label-md text-on-surface-variant">Total Income</span>
                    <div class="p-2 rounded-xl bg-primary/10 text-primary">
                        <span class="material-symbols-outlined"
                            style="font-variation-settings: 'FILL' 1;">arrow_downward</span>
                    </div>
                </div>
                <div>
                    <div class="font-headline-md text-headline-md text-on-background font-bold tracking-tight">₹245,000
                    </div>
                    <div class="flex items-center gap-1 text-primary-container mt-1">
                        <span class="material-symbols-outlined text-sm font-bold"
                            style="font-variation-settings: 'FILL' 0;">trending_up</span>
                        <span class="font-label-sm text-label-sm font-bold">+12.5%</span>
                        <span class="text-[10px] text-on-surface-variant/60 ml-1">vs last month</span>
                    </div>
                </div>
            </div>
            <div class="glass-card rounded-[24px] p-6 flex flex-col justify-between h-36">
                <div class="flex justify-between items-start">
                    <span class="font-label-md text-label-md text-on-surface-variant">Total Expense</span>
                    <div class="p-2 rounded-xl bg-error/10 text-error">
                        <span class="material-symbols-outlined"
                            style="font-variation-settings: 'FILL' 1;">arrow_upward</span>
                    </div>
                </div>
                <div>
                    <div class="font-headline-md text-headline-md text-on-background font-bold tracking-tight">₹116,460
                    </div>
                    <div class="flex items-center gap-1 text-error mt-1">
                        <span class="material-symbols-outlined text-sm font-bold"
                            style="font-variation-settings: 'FILL' 0;">trending_down</span>
                        <span class="font-label-sm text-label-sm font-bold">-2.1%</span>
                        <span class="text-[10px] text-on-surface-variant/60 ml-1">vs last month</span>
                    </div>
                </div>
            </div>
            <div class="glass-card rounded-[24px] p-6 flex flex-col justify-between h-36">
                <div class="flex justify-between items-start">
                    <span class="font-label-md text-label-md text-on-surface-variant">Transactions</span>
                    <div class="p-2 rounded-xl bg-secondary/10 text-secondary">
                        <span class="material-symbols-outlined"
                            style="font-variation-settings: 'FILL' 1;">list_alt</span>
                    </div>
                </div>
                <div>
                    <div class="font-headline-md text-headline-md text-on-background font-bold tracking-tight">1,240
                    </div>
                    <div class="flex items-center gap-1 text-on-surface-variant mt-1">
                        <span class="font-label-sm text-label-sm font-medium">Monthly Active</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Transaction Table -->
        <section class="glass-card rounded-[24px] overflow-hidden">
            <div
                class="p-6 border-b border-outline-variant/30 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white/40">
                <h2 class="font-title-lg text-title-lg text-on-background">Recent History</h2>
                <div class="flex gap-2 w-full sm:w-auto">
                    <div class="relative flex-grow sm:flex-grow-0">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
                        <input id="txSearch"
                            class="pl-10 pr-4 py-2 bg-white/50 border-outline-variant/50 rounded-full text-sm focus:ring-primary focus:border-primary w-full"
                            placeholder="Search transactions..." type="text" />
                    </div>
                    <button id="txFilterToggle"
                        class="p-2 rounded-full hover:bg-surface-variant/50 transition-colors border border-outline-variant/30">
                        <span class="material-symbols-outlined text-on-surface-variant">filter_list</span>
                    </button>
                    <button id="txDownload"
                        class="p-2 rounded-full hover:bg-surface-variant/50 transition-colors border border-outline-variant/30">
                        <span class="material-symbols-outlined text-on-surface-variant">download</span>
                    </button>
                </div>
            </div>

            <!-- Filter panel: date, transaction type, category, payment method -->
            <div id="txFilterPanel" class="filter-panel border-b border-outline-variant/30 bg-white/30">
                <div class="p-5 flex flex-wrap gap-4 items-end">
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Date from</label>
                        <input type="date" id="txDateFrom"
                            class="px-3 py-2 bg-white/60 border border-outline-variant/50 rounded-xl text-sm focus:ring-primary focus:border-primary" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Date to</label>
                        <input type="date" id="txDateTo"
                            class="px-3 py-2 bg-white/60 border border-outline-variant/50 rounded-xl text-sm focus:ring-primary focus:border-primary" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Transaction type</label>
                        <select id="txTypeFilter"
                            class="px-3 py-2 bg-white/60 border border-outline-variant/50 rounded-xl text-sm focus:ring-primary focus:border-primary min-w-[150px]">
                            <option value="">All types</option>
                            <option value="income">Income</option>
                            <option value="expense">Expense</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Category</label>
                        <select id="txCategoryFilter"
                            class="px-3 py-2 bg-white/60 border border-outline-variant/50 rounded-xl text-sm focus:ring-primary focus:border-primary min-w-[150px]">
                            <option value="">All categories</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Payment method</label>
                        <select id="txMethodFilter"
                            class="px-3 py-2 bg-white/60 border border-outline-variant/50 rounded-xl text-sm focus:ring-primary focus:border-primary min-w-[150px]">
                            <option value="">All methods</option>
                        </select>
                    </div>
                    <button id="txClearFilters"
                        class="px-4 py-2 text-sm font-semibold rounded-full border border-outline-variant/50 text-on-surface-variant hover:bg-error/10 hover:text-error transition-colors">
                        Clear filters
                    </button>
                </div>
                <div id="txActivePills" class="px-5 pb-4 flex flex-wrap gap-2"></div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse" id="txTable">
                    <thead>
                        <tr
                            class="bg-surface-container-low/50 border-b border-outline-variant/30 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-bold">
                            <th class="p-5 font-semibold" data-sort="date">Date <span class="sort-arrow">▲</span></th>
                            <th class="p-5 font-semibold" data-sort="name">Transaction Name <span class="sort-arrow">▲</span></th>
                            <th class="p-5 font-semibold" data-sort="category">Category <span class="sort-arrow">▲</span></th>
                            <th class="p-5 font-semibold" data-sort="method">Method <span class="sort-arrow">▲</span></th>
                            <th class="p-5 font-semibold" data-sort="amount">Amount <span class="sort-arrow">▲</span></th>
                            <th class="p-5 font-semibold text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="font-body-md text-body-md divide-y divide-outline-variant/20" id="txTableBody">
                        <!-- Row 1 -->
                        <tr class="hover:bg-white/60 transition-colors group"
                            data-date="2023-10-24" data-name="Monthly Salary" data-category="Income" data-method="Bank Transfer" data-amount="145000">
                            <td class="p-5 text-on-surface-variant text-sm whitespace-nowrap">Oct 24, 2023</td>
                            <td class="p-5">
                                <div class="font-semibold text-on-background">Monthly Salary</div>
                                <div class="text-xs text-on-surface-variant">Tech Corp Private Ltd.</div>
                            </td>
                            <td class="p-5">
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-semibold bg-primary-container/10 text-primary">Income</span>
                            </td>
                            <td class="p-5 text-on-surface-variant text-sm flex items-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">account_balance</span>
                                Bank Transfer
                            </td>
                            <td class="p-5 font-bold text-primary-container text-lg">+₹1,45,000</td>
                            <td class="p-5 text-right">
                                <div class="flex justify-end gap-1">
                                    <a href="transactiondetail.php"
                                        class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">visibility</span>
                                    </a>
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-secondary hover:bg-secondary/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-error hover:bg-error/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-white/60 transition-colors group"
                            data-date="2023-10-22" data-name="Grocery Shopping" data-category="Shopping" data-method="UPI Payment" data-amount="-4250">
                            <td class="p-5 text-on-surface-variant text-sm">Oct 22, 2023</td>
                            <td class="p-5">
                                <div class="font-semibold text-on-background">Grocery Shopping</div>
                                <div class="text-xs text-on-surface-variant">Reliance Fresh Market</div>
                            </td>
                            <td class="p-5">
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-semibold bg-tertiary-container/10 text-tertiary">Shopping</span>
                            </td>
                            <td class="p-5 text-on-surface-variant text-sm flex items-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">qr_code_2</span>
                                UPI Payment
                            </td>
                            <td class="p-5 font-bold text-error text-lg">-₹4,250</td>
                            <td class="p-5 text-right">
                                <div class="flex justify-end gap-1">
                                    <a href="transactiondetail.php"
                                        class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">visibility</span>
                                    </a>
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-secondary hover:bg-secondary/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-error hover:bg-error/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-white/60 transition-colors group"
                            data-date="2023-10-21" data-name="Freelance Project" data-category="Services" data-method="Cash" data-amount="12000">
                            <td class="p-5 text-on-surface-variant text-sm">Oct 21, 2023</td>
                            <td class="p-5">
                                <div class="font-semibold text-on-background">Freelance Project</div>
                                <div class="text-xs text-on-surface-variant">UI/UX Design - Client X</div>
                            </td>
                            <td class="p-5">
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-semibold bg-secondary-container/20 text-secondary">Services</span>
                            </td>
                            <td class="p-5 text-on-surface-variant text-sm flex items-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">payments</span>
                                Cash
                            </td>
                            <td class="p-5 font-bold text-primary-container text-lg">+₹12,000</td>
                            <td class="p-5 text-right">
                                <div class="flex justify-end gap-1">
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">visibility</span>
                                    </button>
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-secondary hover:bg-secondary/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-error hover:bg-error/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-white/60 transition-colors group"
                            data-date="2023-10-18" data-name="Monthly Rent" data-category="Housing" data-method="Net Banking" data-amount="-35000">
                            <td class="p-5 text-on-surface-variant text-sm">Oct 18, 2023</td>
                            <td class="p-5">
                                <div class="font-semibold text-on-background">Monthly Rent</div>
                                <div class="text-xs text-on-surface-variant">Skyline Apartments #402</div>
                            </td>
                            <td class="p-5">
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-semibold bg-error/10 text-error">Housing</span>
                            </td>
                            <td class="p-5 text-on-surface-variant text-sm flex items-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">account_balance</span>
                                Net Banking
                            </td>
                            <td class="p-5 font-bold text-error text-lg">-₹35,000</td>
                            <td class="p-5 text-right">
                                <div class="flex justify-end gap-1">
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">visibility</span>
                                    </button>
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-secondary hover:bg-secondary/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-error hover:bg-error/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 5 -->
                        <tr class="hover:bg-white/60 transition-colors group"
                            data-date="2023-10-15" data-name="Netflix Subscription" data-category="Utilities" data-method="Credit Card" data-amount="-799">
                            <td class="p-5 text-on-surface-variant text-sm">Oct 15, 2023</td>
                            <td class="p-5">
                                <div class="font-semibold text-on-background">Netflix Subscription</div>
                                <div class="text-xs text-on-surface-variant">Entertainment Premium Plan</div>
                            </td>
                            <td class="p-5">
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-semibold bg-primary/10 text-primary">Utilities</span>
                            </td>
                            <td class="p-5 text-on-surface-variant text-sm flex items-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">credit_card</span>
                                Credit Card
                            </td>
                            <td class="p-5 font-bold text-error text-lg">-₹799</td>
                            <td class="p-5 text-right">
                                <div class="flex justify-end gap-1">
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">visibility</span>
                                    </button>
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-secondary hover:bg-secondary/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-on-surface-variant hover:text-error hover:bg-error/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div
                class="p-5 border-t border-outline-variant/30 flex flex-col sm:flex-row justify-between items-center gap-4 bg-white/20">
                <div class="flex items-center gap-3">
                    <span class="text-sm text-on-surface-variant font-medium" id="txShowingText">Showing <span
                            class="text-on-background">1-5</span> of 1,240 records</span>
                    <div class="flex items-center gap-2">
                        <label for="txPageSize" class="text-sm text-on-surface-variant font-medium whitespace-nowrap">Rows per page</label>
                        <select id="txPageSize"
                            class="px-5 py-1.5 bg-white/60 border border-outline-variant/50 rounded-full text-sm text-on-surface-variant focus:ring-primary focus:border-primary">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <button id="txPrevBtn"
                        class="px-4 py-2 text-sm font-semibold rounded-full bg-surface-variant/50 text-on-surface-variant hover:bg-surface-variant transition-colors disabled:opacity-50"
                        disabled="">Previous</button>
                    <div class="flex gap-1" id="txPageNums"></div>
                    <button id="txNextBtn"
                        class="px-4 py-2 text-sm font-semibold rounded-full bg-surface-variant/50 text-on-surface-variant hover:bg-surface-variant transition-colors">Next</button>
                </div>
            </div>
        </section>
    </main>
    <!-- BottomNavBar (Mobile) -->
    <?php include "include/mobilenav.php"?>

    <script>
    (function () {
        // Reads the transaction rows straight from the rendered table (PHP-output <tr> elements).
        // No transaction data is duplicated in this script — it operates on the DOM only.
        const tbody = document.getElementById('txTableBody');
        const getRows = () => Array.from(tbody.querySelectorAll('tr[data-date]'));

        const searchInput = document.getElementById('txSearch');
        const filterToggle = document.getElementById('txFilterToggle');
        const filterPanel = document.getElementById('txFilterPanel');
        const dateFrom = document.getElementById('txDateFrom');
        const dateTo = document.getElementById('txDateTo');
        const typeFilter = document.getElementById('txTypeFilter');
        const categoryFilter = document.getElementById('txCategoryFilter');
        const methodFilter = document.getElementById('txMethodFilter');
        const clearBtn = document.getElementById('txClearFilters');
        const pillsWrap = document.getElementById('txActivePills');
        const showingText = document.getElementById('txShowingText');
        const pageNums = document.getElementById('txPageNums');
        const prevBtn = document.getElementById('txPrevBtn');
        const nextBtn = document.getElementById('txNextBtn');
        const downloadBtn = document.getElementById('txDownload');
        const pageSizeSelect = document.getElementById('txPageSize');
        const table = document.getElementById('txTable');
        pageSizeSelect.value = String(10);

        const state = { search: '', type: '', category: '', method: '', from: '', to: '', sortKey: 'date', sortDir: 'desc', page: 1, pageSize: 10 };

        // Populate category/method dropdowns dynamically from whatever rows PHP rendered
        function populateSelect(select, values) {
            values.forEach(v => {
                const opt = document.createElement('option');
                opt.value = v; opt.textContent = v;
                select.appendChild(opt);
            });
        }
        const allRows = getRows();
        populateSelect(categoryFilter, [...new Set(allRows.map(r => r.dataset.category))].sort());
        populateSelect(methodFilter, [...new Set(allRows.map(r => r.dataset.method))].sort());

        function matchesFilters(row) {
            const name = row.dataset.name.toLowerCase();
            const sub = (row.querySelector('.text-xs.text-on-surface-variant')?.textContent || '').toLowerCase();
            const category = row.dataset.category;
            const method = row.dataset.method;
            const date = row.dataset.date;
            const amount = parseFloat(row.dataset.amount);

            if (state.search) {
                const q = state.search.toLowerCase();
                if (!(name.includes(q) || sub.includes(q) || category.toLowerCase().includes(q) || method.toLowerCase().includes(q))) return false;
            }
            if (state.type === 'income' && amount < 0) return false;
            if (state.type === 'expense' && amount >= 0) return false;
            if (state.category && category !== state.category) return false;
            if (state.method && method !== state.method) return false;
            if (state.from && date < state.from) return false;
            if (state.to && date > state.to) return false;
            return true;
        }

        function sortRows(rows) {
            const dir = state.sortDir === 'asc' ? 1 : -1;
            return rows.sort((a, b) => {
                let av, bv;
                if (state.sortKey === 'amount') { av = parseFloat(a.dataset.amount); bv = parseFloat(b.dataset.amount); }
                else if (state.sortKey === 'date') { av = a.dataset.date; bv = b.dataset.date; }
                else { av = a.dataset[state.sortKey].toLowerCase(); bv = b.dataset[state.sortKey].toLowerCase(); }
                if (av < bv) return -1 * dir;
                if (av > bv) return 1 * dir;
                return 0;
            });
        }

        function renderPills() {
            const pills = [];
            if (state.type) pills.push({ k: 'type', label: 'Type: ' + (state.type === 'income' ? 'Income' : 'Expense') });
            if (state.category) pills.push({ k: 'category', label: 'Category: ' + state.category });
            if (state.method) pills.push({ k: 'method', label: 'Method: ' + state.method });
            if (state.from) pills.push({ k: 'from', label: 'From: ' + state.from });
            if (state.to) pills.push({ k: 'to', label: 'To: ' + state.to });
            pillsWrap.innerHTML = pills.map(p =>
                `<span class="filter-pill bg-primary/10 text-primary">${p.label}<button data-k="${p.k}">✕</button></span>`
            ).join('');
            pillsWrap.querySelectorAll('button').forEach(b => b.addEventListener('click', () => {
                const k = b.dataset.k;
                state[k] = '';
                if (k === 'type') typeFilter.value = '';
                if (k === 'category') categoryFilter.value = '';
                if (k === 'method') methodFilter.value = '';
                if (k === 'from') dateFrom.value = '';
                if (k === 'to') dateTo.value = '';
                state.page = 1; render();
            }));
        }

        function render() {
            const rows = getRows();
            rows.forEach(r => r.style.display = 'none');

            const filtered = sortRows(rows.filter(matchesFilters));
            const total = filtered.length;
            const pages = Math.max(1, Math.ceil(total / state.pageSize));
            if (state.page > pages) state.page = pages;
            const start = (state.page - 1) * state.pageSize;
            const pageRows = filtered.slice(start, start + state.pageSize);

            // Reorder DOM to match current sort, then show only the current page's rows
            filtered.forEach(r => tbody.appendChild(r));
            pageRows.forEach(r => r.style.display = '');

            showingText.innerHTML = total === 0
                ? 'No records found'
                : `Showing <span class="text-on-background">${start + 1}-${Math.min(start + state.pageSize, total)}</span> of ${total} records`;

            let html = '';
            for (let i = 1; i <= pages; i++) {
                if (pages > 7 && i !== 1 && i !== pages && Math.abs(i - state.page) > 1) {
                    if (i === 2 || i === pages - 1) html += `<span class="w-8 h-8 flex items-center justify-center text-on-surface-variant text-xs">…</span>`;
                    continue;
                }
                html += `<button data-p="${i}" class="w-8 h-8 rounded-full ${i === state.page ? 'bg-primary text-white' : 'hover:bg-surface-variant/50 text-on-surface-variant'} text-xs font-bold flex items-center justify-center transition-colors">${i}</button>`;
            }
            pageNums.innerHTML = html;
            pageNums.querySelectorAll('button[data-p]').forEach(b => b.addEventListener('click', () => { state.page = +b.dataset.p; render(); }));

            prevBtn.disabled = state.page === 1;
            nextBtn.disabled = state.page === pages;

            table.querySelectorAll('th[data-sort]').forEach(th => {
                th.classList.toggle('sorted', th.dataset.sort === state.sortKey);
                const arrow = th.querySelector('.sort-arrow');
                arrow.textContent = th.dataset.sort === state.sortKey ? (state.sortDir === 'asc' ? '▲' : '▼') : '▲';
            });

            renderPills();
        }

        searchInput.addEventListener('input', e => { state.search = e.target.value; state.page = 1; render(); });
        typeFilter.addEventListener('change', e => { state.type = e.target.value; state.page = 1; render(); });
        categoryFilter.addEventListener('change', e => { state.category = e.target.value; state.page = 1; render(); });
        methodFilter.addEventListener('change', e => { state.method = e.target.value; state.page = 1; render(); });
        dateFrom.addEventListener('change', e => { state.from = e.target.value; state.page = 1; render(); });
        dateTo.addEventListener('change', e => { state.to = e.target.value; state.page = 1; render(); });
        clearBtn.addEventListener('click', () => {
            Object.assign(state, { search: '', type: '', category: '', method: '', from: '', to: '', page: 1 });
            searchInput.value = ''; typeFilter.value = ''; categoryFilter.value = ''; methodFilter.value = '';
            dateFrom.value = ''; dateTo.value = '';
            render();
        });
        pageSizeSelect.addEventListener('change', e => { state.pageSize = parseInt(e.target.value, 10); state.page = 1; render(); });
        prevBtn.addEventListener('click', () => { if (state.page > 1) { state.page--; render(); } });
        nextBtn.addEventListener('click', () => {
            const total = getRows().filter(matchesFilters).length;
            const pages = Math.max(1, Math.ceil(total / state.pageSize));
            if (state.page < pages) { state.page++; render(); }
        });
        table.querySelectorAll('th[data-sort]').forEach(th => {
            th.addEventListener('click', () => {
                const key = th.dataset.sort;
                if (state.sortKey === key) state.sortDir = state.sortDir === 'asc' ? 'desc' : 'asc';
                else { state.sortKey = key; state.sortDir = 'asc'; }
                render();
            });
        });
        filterToggle.addEventListener('click', () => filterPanel.classList.toggle('open'));
        downloadBtn.addEventListener('click', () => {
            const rows = sortRows(getRows().filter(matchesFilters));
            const header = ['Date', 'Transaction Name', 'Category', 'Method', 'Amount'];
            const csv = [header.join(',')].concat(rows.map(r =>
                [r.dataset.date, `"${r.dataset.name}"`, r.dataset.category, r.dataset.method, r.dataset.amount].join(',')
            )).join('\n');
            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url; a.download = 'transactions.csv'; a.click();
            URL.revokeObjectURL(url);
        });

        render();
    })();
    </script>
</body>

</html>