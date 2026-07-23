<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Transaction Report | Aurelius Reports</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "on-secondary-container": "#006f67",
                    "surface-variant": "#dae2fd",
                    "on-surface-variant": "#3c4947",
                    "on-primary": "#ffffff",
                    "outline-variant": "#bbcac6",
                    "surface-dim": "#d2d9f4",
                    "on-surface": "#131b2e",
                    "secondary-container": "#99efe5",
                    "on-tertiary-container": "#6c2106",
                    "error-container": "#ffdad6",
                    "surface-tint": "#006b5f",
                    "surface-container-high": "#e2e7ff",
                    "on-tertiary": "#ffffff",
                    "tertiary-fixed": "#ffdbd0",
                    "error": "#ba1a1a",
                    "background": "#faf8ff",
                    "tertiary-fixed-dim": "#ffb59e",
                    "on-tertiary-fixed": "#3a0b00",
                    "tertiary": "#9b4426",
                    "primary-fixed-dim": "#4fdbc8",
                    "on-secondary": "#ffffff",
                    "on-primary-fixed": "#00201c",
                    "on-primary-container": "#00423b",
                    "inverse-on-surface": "#eef0ff",
                    "on-error": "#ffffff",
                    "primary-fixed": "#71f8e4",
                    "primary-container": "#14b8a6",
                    "tertiary-container": "#f38764",
                    "secondary-fixed": "#9cf2e8",
                    "on-primary-fixed-variant": "#005048",
                    "surface-container-low": "#f2f3ff",
                    "surface": "#faf8ff",
                    "secondary-fixed-dim": "#80d5cb",
                    "inverse-surface": "#283044",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-highest": "#dae2fd",
                    "on-secondary-fixed-variant": "#00504a",
                    "outline": "#6c7a77",
                    "on-tertiary-fixed-variant": "#7c2d11",
                    "primary": "#006b5f",
                    "on-background": "#131b2e",
                    "inverse-primary": "#4fdbc8",
                    "surface-bright": "#faf8ff",
                    "surface-container": "#eaedff",
                    "secondary": "#006a63",
                    "on-secondary-fixed": "#00201d",
                    "on-error-container": "#93000a"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "stack-md": "16px",
                    "stack-lg": "32px",
                    "margin-mobile": "16px",
                    "margin-desktop": "40px",
                    "container-max": "1280px",
                    "section-gap": "64px",
                    "stack-sm": "8px",
                    "gutter": "24px"
                },
                "fontFamily": {
                    "headline-md": ["Inter"],
                    "display-lg-mobile": ["Inter"],
                    "body-lg": ["Inter"],
                    "display-lg": ["Inter"],
                    "title-lg": ["Inter"],
                    "label-md": ["Inter"],
                    "label-sm": ["Inter"],
                    "headline-sm": ["Inter"],
                    "body-md": ["Inter"]
                },
                "fontSize": {
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
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "display-lg": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "title-lg": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "letterSpacing": "0.01em",
                        "fontWeight": "500"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "letterSpacing": "0.05em",
                        "fontWeight": "600"
                    }],
                    "headline-sm": ["24px", {
                        "lineHeight": "32px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
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
        color: #131B2E;
    }

    .glass-nav {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
    }

    .card-shadow {
        box-shadow: 0px 4px 20px rgba(15, 23, 42, 0.05);
    }

    .primary-gradient {
        background: linear-gradient(135deg, #14B8A6 0%, #0F766E 100%);
    }

    .primary-glow:hover {
        box-shadow: 0 0 15px rgba(20, 184, 166, 0.4);
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }

    input,
    select {
        border-radius: 24px !important;
        height: 56px !important;
        border: 1px solid #E2E8F0 !important;
        padding-left: 54px !important;
    }

    input:focus,
    select:focus {
        border-color: #14B8A6 !important;
        ring: 4px rgba(20, 184, 166, 0.1) !important;
        outline: none;
    }

    .input-icon {
        position: absolute;
        left: 20px;
        top: 16px;
        color: #6C7A77;
        pointer-events: none;
    }
    </style>
</head>

<body class="bg-[#F8FAFC]">
    
    <!-- Top Navigation (Mobile & Tablet) -->
    <?php include "include/header.php"?>
    <!-- Main Content Area -->
    <main class="pt-24 pb-12 px-margin-mobile md:px-margin-desktop min-h-screen">
        <div class="max-w-[1100px] mx-auto">
            <!-- Page Header -->
            <div class="mb-stack-lg text-center md:text-left">
                <h2 class="font-headline-md text-headline-md text-on-surface mb-1">Transaction Report</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">Generate reports by selecting the required
                    filters.</p>
            </div>
            <!-- Filter Card -->
            <section class="bg-white rounded-[20px] p-8 border border-[#E2E8F0] card-shadow mb-section-gap">
                <form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="reportFilterForm">
                    
                    <div class="relative w-full sm:w-72">
                         <label class="block text-label-sm text-on-surface-variant mb-2 ml-4">Select Date   </label>
                        <span
                            class="material-symbols-outlined absolute left-5 top-1/2 -translate-y-1/2 mt-3 text-[18px] text-gray-500">
                            calendar_today
                        </span>
                        <input type="text" id="dateRange" placeholder="Select Date Range"
                            class="pl-10 pr-4 py-2 border border-outline-variant rounded-lg text-label-md bg-white w-full sm:w-72 focus:outline-none focus:ring-2 focus:ring-primary cursor-pointer"
                            readonly>
                    </div>
                    <!-- Transaction Type -->
                    <div class="relative">
                        <label class="block text-label-sm text-on-surface-variant mb-2 ml-4">Transaction Type</label>
                        <div class="relative">
                            <span class="material-symbols-outlined input-icon">swap_horiz</span>
                            <select class="w-full font-body-md text-on-surface appearance-none">
                                <option value="all">All Types</option>
                                <option value="income">Income</option>
                                <option value="expense">Expense</option>
                            </select>
                        </div>
                    </div>
                    <!-- Category -->
                    <div class="relative">
                        <label class="block text-label-sm text-on-surface-variant mb-2 ml-4">Category</label>
                        <div class="relative">
                            <span class="material-symbols-outlined input-icon">category</span>
                            <select class="w-full font-body-md text-on-surface appearance-none">
                                <option value="">All Categories</option>
                                <option value="food">Food &amp; Dining</option>
                                <option value="rent">Rent &amp; Utilities</option>
                                <option value="shopping">Shopping</option>
                                <option value="transport">Transportation</option>
                                <option value="health">Healthcare</option>
                                <option value="leisure">Entertainment</option>
                            </select>
                        </div>
                    </div>
                    <!-- Payment Method -->
                    <div class="relative">
                        <label class="block text-label-sm text-on-surface-variant mb-2 ml-4">Payment Method</label>
                        <div class="relative">
                            <span class="material-symbols-outlined input-icon">payments</span>
                            <select class="w-full font-body-md text-on-surface appearance-none">
                                <option value="all">All Methods</option>
                                <option value="cash">Cash</option>
                                <option value="upi">UPI</option>
                                <option value="bank">Bank Transfer</option>
                                <option value="wallet">Digital Wallet</option>
                                <option value="credit">Credit Card</option>
                                <option value="debit">Debit Card</option>
                            </select>
                        </div>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex items-end gap-3 lg:col-span-1">
                        <button
                            class="flex-1 h-[56px] primary-gradient text-white rounded-full font-label-md primary-glow transition-all hover:-translate-y-0.5 active:scale-95"
                            type="submit">
                            Generate Report
                        </button>
                        <button
                            class="px-6 h-[56px] border border-outline text-on-surface-variant rounded-full font-label-md hover:bg-surface-container transition-all active:scale-95"
                            type="reset">
                            Reset
                        </button>
                    </div>
                </form>
            </section>
            <!-- Results Section (Desktop Table) -->
            <!-- <section class="hidden md:block">
                <div class="bg-white rounded-[20px] border border-[#E2E8F0] card-shadow overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-surface-container-low border-b border-outline-variant">
                            <tr>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Date</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Category</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Type</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Payment Method</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Note</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant text-right">Amount</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#F1F5F9]">
                            <tr class="hover:bg-surface-container-lowest transition-colors">
                                <td class="px-6 py-4 font-body-md text-on-surface">Oct 24, 2023</td>
                                <td class="px-6 py-4 font-body-md text-on-surface">Client Retainer</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#E6F4F1] text-primary font-label-sm">
                                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                        Income
                                    </span>
                                </td>
                                <td class="px-6 py-4 font-body-md text-on-surface-variant">Bank Transfer</td>
                                <td class="px-6 py-4 font-body-md text-on-surface-variant text-sm">Monthly recurring
                                </td>
                                <td class="px-6 py-4 font-body-md text-primary font-bold text-right">+$4,250.00</td>
                            </tr>
                            <tr class="hover:bg-surface-container-lowest transition-colors">
                                <td class="px-6 py-4 font-body-md text-on-surface">Oct 22, 2023</td>
                                <td class="px-6 py-4 font-body-md text-on-surface">Office Rent</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-error-container text-error font-label-sm">
                                        <span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                                        Expense
                                    </span>
                                </td>
                                <td class="px-6 py-4 font-body-md text-on-surface-variant">Direct Debit</td>
                                <td class="px-6 py-4 font-body-md text-on-surface-variant text-sm">Workspace HQ</td>
                                <td class="px-6 py-4 font-body-md text-error font-bold text-right">-$1,800.00</td>
                            </tr>
                            <tr class="hover:bg-surface-container-lowest transition-colors">
                                <td class="px-6 py-4 font-body-md text-on-surface">Oct 20, 2023</td>
                                <td class="px-6 py-4 font-body-md text-on-surface">Software SaaS</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-error-container text-error font-label-sm">
                                        <span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                                        Expense
                                    </span>
                                </td>
                                <td class="px-6 py-4 font-body-md text-on-surface-variant">Credit Card</td>
                                <td class="px-6 py-4 font-body-md text-on-surface-variant text-sm">Annual Adobe
                                    Subscription</td>
                                <td class="px-6 py-4 font-body-md text-error font-bold text-right">-$599.88</td>
                            </tr>
                            <tr class="hover:bg-surface-container-lowest transition-colors">
                                <td class="px-6 py-4 font-body-md text-on-surface">Oct 15, 2023</td>
                                <td class="px-6 py-4 font-body-md text-on-surface">Dividends</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#E6F4F1] text-primary font-label-sm">
                                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                        Income
                                    </span>
                                </td>
                                <td class="px-6 py-4 font-body-md text-on-surface-variant">Portfolio A/C</td>
                                <td class="px-6 py-4 font-body-md text-on-surface-variant text-sm">Quarterly Payout</td>
                                <td class="px-6 py-4 font-body-md text-primary font-bold text-right">+$1,120.45</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section> -->
            <!-- Results Section (Mobile Cards) -->
            <!-- <section class="md:hidden space-y-4">
                <div class="bg-white rounded-[20px] p-5 border border-[#E2E8F0] card-shadow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <p class="font-label-sm text-on-surface-variant opacity-60">Oct 24, 2023</p>
                            <h4 class="font-title-lg text-on-surface">Client Retainer</h4>
                        </div>
                        <span class="font-title-lg font-bold text-primary">+$4,250.00</span>
                    </div>
                    <div class="flex flex-wrap gap-2 items-center">
                        <span
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#E6F4F1] text-primary font-label-sm">
                            Income
                        </span>
                        <span class="text-label-sm text-on-surface-variant bg-surface-container px-2 py-1 rounded">Bank
                            Transfer</span>
                    </div>
                    <p class="mt-3 text-body-md text-on-surface-variant text-sm">Monthly recurring</p>
                </div>
                <div class="bg-white rounded-[20px] p-5 border border-[#E2E8F0] card-shadow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <p class="font-label-sm text-on-surface-variant opacity-60">Oct 22, 2023</p>
                            <h4 class="font-title-lg text-on-surface">Office Rent</h4>
                        </div>
                        <span class="font-title-lg font-bold text-error">-$1,800.00</span>
                    </div>
                    <div class="flex flex-wrap gap-2 items-center">
                        <span
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-error-container text-error font-label-sm">
                            Expense
                        </span>
                        <span
                            class="text-label-sm text-on-surface-variant bg-surface-container px-2 py-1 rounded">Direct
                            Debit</span>
                    </div>
                    <p class="mt-3 text-body-md text-on-surface-variant text-sm">Workspace HQ</p>
                </div>
            </section> -->

            <div class="mb-stack-lg text-center md:text-left">
                <h2 class="font-headline-md text-headline-md text-on-surface mb-1">Income & Expence By Category</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">Understand where your money comes from and where it goes.</p>
            </div>
            <section class="mt-4 grid grid-cols-1 lg:grid-cols-2 gap-gutter max-w-6xl mx-auto">
                
                <!-- Spending Trends -->
                <div class="bg-white p-8 rounded-[24px] border border-outline-variant">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-title-lg text-title-lg" id="chart-title">Spending By Category</h3>
                        <div class="flex gap-2">
                            <button id="btn-expense" class="type-btn px-3 py-1 rounded-lg text-xs font-bold" onclick="setType('expense')">Expense</button>
                            <button id="btn-income" class="type-btn px-3 py-1 rounded-lg text-xs font-bold" onclick="setType('income')">Income</button>
                        </div>
                    </div>
                    <div class="h-64 flex items-end justify-between gap-4 px-4 border-b border-outline-variant pb-2" id="chart-bars">
                        <!-- bars injected by JS -->
                    </div>
                    <div class="flex justify-between mt-2 px-4 text-xs text-on-surface-variant">
                        <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
                    </div>
                </div>
            
                <!-- Budget / Income Allocation -->
                <div class="bg-white p-8 rounded-[24px] border border-outline-variant">
                    <h3 class="font-title-lg text-title-lg mb-6" id="alloc-title">Budget Allocation</h3>
                    <div class="space-y-6" id="alloc-list">
                        <!-- rows injected by JS -->
                    </div>
                    <div class="pt-4 mt-4 border-t border-outline-variant flex justify-between items-center">
                        <p class="text-sm text-on-surface-variant italic" id="alloc-summary"></p>
                        <button class="font-bold text-sm hover:underline" id="alloc-cta" style="color:#EF4444">View All</button>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Navigation Shadow Element (Desktop fixed side spacing) -->
    <div class="hidden md:block w-72 flex-shrink-0"></div>

    <!-- Mobile Bottom Navigation Bar -->
    <?php include "include/mobilenav.php"?>

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
    flatpickr("#dateRange", {
        mode: "range",
        dateFormat: "d M Y",
        allowInput: false,
        onChange: function (selectedDates) {
            state.dateRange = selectedDates;
            state.page = 1;
            render();
        }
    });
    </script>

    <script>
    // Simple Micro-interactions
    document.getElementById('reportFilterForm').addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = e.target.querySelector('button[type="submit"]');
        const originalText = btn.innerHTML;
        btn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> Generating...';
        btn.disabled = true;

        setTimeout(() => {
            btn.innerHTML = originalText;
            btn.disabled = false;
            // Transition effect for content
            const main = document.querySelector('main');
            main.style.opacity = '0.5';
            setTimeout(() => main.style.opacity = '1', 300);
        }, 1200);
    });

    // Hover lift effect for mobile cards
    const cards = document.querySelectorAll('.md\\:hidden > div');
    cards.forEach(card => {
        card.addEventListener('touchstart', () => {
            card.style.transform = 'scale(0.98)';
        });
        card.addEventListener('touchend', () => {
            card.style.transform = 'scale(1)';
        });
    });
    </script>



<script>
/* ============================================================
   DATA — swap these numbers for your real API data later
   ============================================================ */
const DATA = {
    expense: {
        chartTitle: "Spending By Category",
        color: { bar: "#EF4444", barLight: "rgba(239,68,68,0.2)", barHover: "rgba(239,68,68,0.4)" },
        week: [
            { day: "Mon", pct: 40, amount: 4200 },
            { day: "Tue", pct: 60, amount: 6100 },
            { day: "Wed", pct: 45, amount: 4700 },
            { day: "Thu", pct: 75, amount: 8300 },
            { day: "Fri", pct: 90, amount: 12400 },
            { day: "Sat", pct: 55, amount: 5600 },
            { day: "Sun", pct: 30, amount: 2900 }
        ],
        allocTitle: "Budget Allocation",
        allocations: [
            { label: "Food & Dining", used: 12400, total: 15000 },
            { label: "Shopping", used: 8000, total: 20000 },
            { label: "Travel & Transport", used: 4500, total: 10000 }
        ],
        summary: "You're on track to save ₹5,100 this month!"
    },
    income: {
        chartTitle: "Income By Source",
        color: { bar: "#14B8A6", barLight: "rgba(34, 197, 148, 0.2)", barHover: "rgba(33, 206, 177, 0.4)" },
        week: [
            { day: "Mon", pct: 30, amount: 2000 },
            { day: "Tue", pct: 35, amount: 2500 },
            { day: "Wed", pct: 40, amount: 3000 },
            { day: "Thu", pct: 50, amount: 4000 },
            { day: "Fri", pct: 95, amount: 45000 },
            { day: "Sat", pct: 25, amount: 1800 },
            { day: "Sun", pct: 20, amount: 1200 }
        ],
        allocTitle: "Income Allocation",
        allocations: [
            { label: "Salary", used: 45000, total: 45000 },
            { label: "Freelance", used: 12000, total: 15000 },
            { label: "Investments", used: 5000, total: 10000 }
        ],
        summary: "Total income this month: ₹62,000"
    }
};
 
let currentType = "expense";
 
/* ============================================================
   RENDER
   ============================================================ */
 
function renderChart(type) {
    const d = DATA[type];
    document.getElementById('chart-title').innerText = d.chartTitle;
 
    const container = document.getElementById('chart-bars');
    container.innerHTML = "";
 
    const maxIndex = d.week.reduce((maxI, item, i, arr) => item.pct > arr[maxI].pct ? i : maxI, 0);
 
    d.week.forEach((item, i) => {
        const wrap = document.createElement('div');
        wrap.className = "w-full rounded-t-lg relative group bar";
        wrap.style.height = item.pct + "%";
        wrap.style.backgroundColor = i === maxIndex ? d.color.bar : d.color.barLight;
 
        wrap.addEventListener('mouseenter', () => {
            if (i !== maxIndex) wrap.style.backgroundColor = d.color.barHover;
        });
        wrap.addEventListener('mouseleave', () => {
            if (i !== maxIndex) wrap.style.backgroundColor = d.color.barLight;
        });
 
        const tooltip = document.createElement('div');
        tooltip.className = "absolute -top-10 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded hidden group-hover:block whitespace-nowrap";
        tooltip.innerText = "₹" + item.amount.toLocaleString('en-IN');
        wrap.appendChild(tooltip);
 
        container.appendChild(wrap);
    });
}
 
function renderAllocations(type) {
    const d = DATA[type];
    document.getElementById('alloc-title').innerText = d.allocTitle;
    document.getElementById('alloc-summary').innerText = d.summary;
 
    const list = document.getElementById('alloc-list');
    list.innerHTML = "";
 
    d.allocations.forEach(item => {
        const pct = Math.min(100, Math.round((item.used / item.total) * 100));
        const row = document.createElement('div');
        row.innerHTML = `
            <div class="flex justify-between text-label-md mb-2">
                <span class="font-medium">${item.label}</span>
                <span class="font-bold">₹${item.used.toLocaleString('en-IN')} / ₹${item.total.toLocaleString('en-IN')}</span>
            </div>
            <div class="h-3 w-full bg-surface-container rounded-full overflow-hidden">
                <div class="h-full progress-fill rounded-full" style="width:${pct}%; background-color:${d.color.bar}"></div>
            </div>
        `;
        list.appendChild(row);
    });
 
    const cta = document.getElementById('alloc-cta');
    cta.style.color = d.color.bar;
}
 
function updateToggleButtons() {
    const expBtn = document.getElementById('btn-expense');
    const incBtn = document.getElementById('btn-income');
 
    if (currentType === 'expense') {
        expBtn.style.backgroundColor = '#EF4444';
        expBtn.style.color = '#ffffff';
        incBtn.style.backgroundColor = '#eaedff';
        incBtn.style.color = '#3c4947';
    } else {
        incBtn.style.backgroundColor = '#14B8A6';
        incBtn.style.color = '#ffffff';
        expBtn.style.backgroundColor = '#eaedff';
        expBtn.style.color = '#3c4947';
    }
}
 
function setType(type) {
    currentType = type;
    renderChart(type);
    renderAllocations(type);
    updateToggleButtons();
}
 
// Initial render — default view is Expense
setType('expense');
</script>
</body>

</html>