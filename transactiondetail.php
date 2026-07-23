<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Transaction Details | Zenith Wealth</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Shared Style Guidance Tokens & Theme Configuration -->
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "on-surface": "#131b2e",
                    "tertiary-container": "#f38764",
                    "surface-container-lowest": "#ffffff",
                    "on-primary-fixed-variant": "#005048",
                    "on-primary-fixed": "#00201c",
                    "error": "#ba1a1a",
                    "primary-container": "#14b8a6",
                    "outline": "#6c7a77",
                    "on-secondary-fixed-variant": "#00504a",
                    "primary-fixed": "#71f8e4",
                    "surface-container-high": "#e2e7ff",
                    "on-secondary-container": "#006f67",
                    "on-primary": "#ffffff",
                    "secondary": "#006a63",
                    "on-secondary": "#ffffff",
                    "outline-variant": "#bbcac6",
                    "background": "#faf8ff",
                    "on-secondary-fixed": "#00201d",
                    "surface": "#faf8ff",
                    "surface-dim": "#d2d9f4",
                    "on-surface-variant": "#3c4947",
                    "on-tertiary-container": "#6c2106",
                    "error-container": "#ffdad6",
                    "primary-fixed-dim": "#4fdbc8",
                    "on-tertiary-fixed-variant": "#7c2d11",
                    "surface-tint": "#006b5f",
                    "surface-container-low": "#f2f3ff",
                    "secondary-fixed-dim": "#80d5cb",
                    "surface-container-highest": "#dae2fd",
                    "secondary-container": "#99efe5",
                    "on-error": "#ffffff",
                    "tertiary-fixed-dim": "#ffb59e",
                    "surface-container": "#eaedff",
                    "on-tertiary": "#ffffff",
                    "tertiary": "#9b4426",
                    "on-background": "#131b2e",
                    "on-error-container": "#93000a",
                    "inverse-primary": "#4fdbc8",
                    "inverse-surface": "#283044",
                    "on-primary-container": "#00423b",
                    "surface-bright": "#faf8ff",
                    "tertiary-fixed": "#ffdbd0",
                    "on-tertiary-fixed": "#3a0b00",
                    "inverse-on-surface": "#eef0ff",
                    "primary": "#006b5f",
                    "secondary-fixed": "#9cf2e8",
                    "surface-variant": "#dae2fd"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "2xl": "24px",
                    "full": "9999px"
                },
                "spacing": {
                    "stack-lg": "32px",
                    "stack-sm": "8px",
                    "stack-md": "16px",
                    "container-max": "1280px",
                    "section-gap": "64px",
                    "margin-desktop": "40px",
                    "margin-mobile": "16px",
                    "gutter": "24px"
                },
                "fontFamily": {
                    "display-lg": ["Inter"],
                    "title-lg": ["Inter"],
                    "headline-sm": ["Inter"],
                    "body-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "label-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-md": ["Inter"],
                    "display-lg-mobile": ["Inter"]
                },
                "fontSize": {
                    "display-lg": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "title-lg": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "headline-sm": ["24px", {
                        "lineHeight": "32px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
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
            }
        }
    }
    </script>
    <style>
    body {
        background-color: #F8FAFC;
        color: #131b2e;
        font-family: 'Inter', sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
        display: inline-block;
        vertical-align: middle;
    }

    .glass-header {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
    }

    .card-shadow {
        box-shadow: 0px 4px 20px rgba(15, 23, 42, 0.05);
    }

    .active-dot {
        position: relative;
    }

    .active-dot::after {
        content: '';
        position: absolute;
        left: -12px;
        top: 50%;
        transform: translateY(-50%);
        width: 6px;
        height: 6px;
        background: #006b5f;
        border-radius: 50%;
    }
    </style>
</head>

<body class="bg-background">
    <!-- Top Navigation Bar -->
    <?php include "include/header.php"?>
    <main class="pt-24 pb-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 mb-stack-lg text-label-md text-on-surface-variant">
            <a class="hover:text-primary" href="dashboard.php">Dashboard</a>
            <span class="material-symbols-outlined text-[16px]">chevron_right</span>
            <a class="hover:text-primary" href="transactions.php">Transactions</a>
            <span class="material-symbols-outlined text-[16px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Details</span>
        </nav>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
            <!-- Left Column: Summary & Main Info -->
            <div class="lg:col-span-8 flex flex-col gap-stack-lg">
                <!-- Hero Summary Card -->
                <div
                    class="bg-surface-container-lowest rounded-2xl p-stack-lg border border-outline-variant/30 card-shadow relative overflow-hidden">
                    <!-- Subtle background accent -->
                    <div class="absolute -top-12 -right-12 w-48 h-48 bg-primary/5 rounded-full blur-3xl"></div>
                    <div
                        class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 relative z-10">
                        <div>
                            <div class="flex items-center gap-3 mb-2">
                                <span
                                    class="px-3 py-1 bg-error-container text-on-error-container text-label-sm rounded-full flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px]">arrow_outward</span> Expense
                                </span>
                                <span
                                    class="px-3 py-1 bg-secondary-container text-on-secondary-container text-label-sm rounded-full">Shopping</span>
                            </div>
                            <h1 class="font-display-lg text-display-lg text-on-surface">₹12,500.00</h1>
                            <p class="text-body-md text-on-surface-variant mt-1 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Status: <span class="font-semibold text-primary">Completed</span>
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <button
                                class="px-6 h-12 bg-surface-container-low text-on-surface font-label-md rounded-full border border-outline-variant hover:bg-surface-container-high transition-all flex items-center gap-2">
                                <span class="material-symbols-outlined">edit</span> Edit
                            </button>
                            <button
                                class="px-6 h-12 bg-primary text-on-primary font-label-md rounded-full hover:shadow-[0_0_15px_rgba(0,107,95,0.3)] transition-all flex items-center gap-2 transform active:scale-95">
                                <span class="material-symbols-outlined">share</span> Share
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Details & Description Bento Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                    <!-- Transaction Info -->
                    <div
                        class="bg-surface-container-lowest rounded-2xl p-stack-md border border-outline-variant/30 card-shadow">
                        <h3 class="font-title-lg text-on-surface mb-4">Transaction Information</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-1">
                                <span class="text-label-md text-on-surface-variant">Transaction ID</span>
                                <span class="text-body-md font-medium text-on-surface font-mono">#TXN-94827103</span>
                            </div>
                            <div class="flex justify-between items-center py-1">
                                <span class="text-label-md text-on-surface-variant">Type</span>
                                <span class="text-body-md font-medium text-on-surface">Domestic Payment</span>
                            </div>
                            <div class="flex justify-between items-center py-1">
                                <span class="text-label-md text-on-surface-variant">Date</span>
                                <span class="text-body-md font-medium text-on-surface">Oct 24, 2024</span>
                            </div>
                            <div class="flex justify-between items-center py-1">
                                <span class="text-label-md text-on-surface-variant">Time</span>
                                <span class="text-body-md font-medium text-on-surface">02:45 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-1">
                                <span class="text-label-md text-on-surface-variant">Account</span>
                                <span class="text-body-md font-medium text-on-surface">HDFC Savings ****9021</span>
                            </div>
                        </div>
                    </div>
                    <!-- Payment & Description -->
                    <div class="flex flex-col gap-stack-md">
                        <!-- Payment Details -->
                        <div
                            class="bg-surface-container-lowest rounded-2xl p-stack-md border border-outline-variant/30 card-shadow">
                            <h3 class="font-title-lg text-on-surface mb-4">Payment Source</h3>
                            <div class="flex items-center gap-4 mb-4">
                                <div
                                    class="w-12 h-12 bg-surface-container-high rounded-xl flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">account_balance</span>
                                </div>
                                <div>
                                    <p class="font-title-lg text-on-surface leading-tight">HDFC Bank</p>
                                    <p class="text-label-md text-on-surface-variant">Payment Provider</p>
                                </div>
                            </div>
                            <div class="space-y-2 border-t border-outline-variant/30 pt-4">
                                <div class="flex justify-between">
                                    <span class="text-label-sm text-on-surface-variant">Reference No</span>
                                    <span class="text-label-sm font-semibold">REF8392019483</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-label-sm text-on-surface-variant">UPI ID</span>
                                    <span class="text-label-sm font-semibold">user@hdfcbank</span>
                                </div>
                            </div>
                        </div>
                        <!-- Description -->
                        <div
                            class="bg-surface-container-lowest rounded-2xl p-stack-md border border-outline-variant/30 card-shadow flex-grow">
                            <h3 class="font-title-lg text-on-surface mb-2">Description</h3>
                            <p class="text-body-md text-on-surface-variant leading-relaxed">
                                Purchased a new mechanical keyboard and mouse for the home office setup.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Activity Timeline -->
                <div
                    class="bg-surface-container-lowest rounded-2xl p-stack-lg border border-outline-variant/30 card-shadow">
                    <h3 class="font-title-lg text-on-surface mb-6">Activity Timeline</h3>
                    <div
                        class="relative pl-8 space-y-8 before:absolute before:left-3 before:top-2 before:bottom-2 before:w-[2px] before:bg-outline-variant/30">
                        <!-- Step 3 -->
                        <div class="relative">
                            <div
                                class="absolute -left-[26px] top-1 w-4 h-4 rounded-full bg-primary ring-4 ring-primary-container/20">
                            </div>
                            <div>
                                <p class="font-semibold text-on-surface">Verified</p>
                                <p class="text-label-md text-on-surface-variant">Transaction cleared by HDFC Gateway •
                                    Oct 24, 03:10 PM</p>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="relative">
                            <div class="absolute -left-[26px] top-1 w-4 h-4 rounded-full bg-outline-variant"></div>
                            <div>
                                <p class="font-semibold text-on-surface-variant">Edited</p>
                                <p class="text-label-md text-on-surface-variant">Category changed from Uncategorized to
                                    Shopping • Oct 24, 02:50 PM</p>
                            </div>
                        </div>
                        <!-- Step 1 -->
                        <div class="relative">
                            <div class="absolute -left-[26px] top-1 w-4 h-4 rounded-full bg-outline-variant"></div>
                            <div>
                                <p class="font-semibold text-on-surface-variant">Created</p>
                                <p class="text-label-md text-on-surface-variant">Transaction initiated via UPI • Oct 24,
                                    02:45 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column: Insights & Sidebar -->
            <div class="lg:col-span-4 flex flex-col gap-stack-lg">
                <!-- Category Insights -->
                <div
                    class="bg-surface-container-lowest rounded-2xl p-stack-md border border-outline-variant/30 card-shadow">
                    <h3 class="font-title-lg text-on-surface mb-4">Category Insights</h3>
                    <!-- Spending Metric -->
                    <div class="mb-6">
                        <div class="flex justify-between items-end mb-2">
                            <p class="text-label-md text-on-surface-variant">Monthly Shopping Spend</p>
                            <p class="text-title-lg text-on-surface">₹45,200.00</p>
                        </div>
                        <div class="h-2 w-full bg-surface-container-high rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-[65%] rounded-full"></div>
                        </div>
                        <p class="text-label-sm text-on-surface-variant mt-2 flex items-center gap-1">
                            <span class="material-symbols-outlined text-error text-[14px]">trending_up</span>
                            12% higher than last month
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-stack-sm">
                        <div class="bg-surface-container-low p-4 rounded-xl border border-outline-variant/10">
                            <p class="text-label-sm text-on-surface-variant">Total Txns</p>
                            <p class="text-headline-sm text-primary">14</p>
                        </div>
                        <div class="bg-surface-container-low p-4 rounded-xl border border-outline-variant/10">
                            <p class="text-label-sm text-on-surface-variant">Avg Ticket</p>
                            <p class="text-headline-sm text-on-surface">₹3.2k</p>
                        </div>
                    </div>
                </div>
                <!-- Security Message -->
                <div class="bg-primary/5 rounded-2xl p-stack-md border border-primary/20">
                    <div class="flex gap-4">
                        <span class="material-symbols-outlined text-primary"
                            style="font-variation-settings: 'FILL' 1;">security</span>
                        <div>
                            <p class="font-semibold text-on-primary-container text-label-md">Secure Transaction</p>
                            <p class="text-label-sm text-on-primary-fixed-variant leading-relaxed mt-1">This transaction
                                is encrypted with 256-bit SSL security and is verified by Zenith Fraud Protection.</p>
                        </div>
                    </div>
                </div>
                <!-- Quick Actions -->
                <div class="flex flex-col gap-3">
                    <button
                        class="w-full h-14 bg-surface-container-lowest text-on-surface font-semibold rounded-2xl border border-outline-variant/30 card-shadow hover:bg-surface-container-low transition-all flex items-center justify-between px-6">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-on-surface-variant">download</span>
                            <span>Export PDF Statement</span>
                        </div>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                    <button
                        class="w-full h-14 bg-surface-container-lowest text-on-surface font-semibold rounded-2xl border border-outline-variant/30 card-shadow hover:bg-surface-container-low transition-all flex items-center justify-between px-6">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-on-surface-variant">help_center</span>
                            <span>Report a Problem</span>
                        </div>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <?php include "include/mobilenav.php"?>
    <script>
    // Simple entry animations for cards
    document.addEventListener('DOMContentLoaded', () => {
        const cards = document.querySelectorAll('.card-shadow');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s cubic-bezier(0.16, 1, 0.3, 1)';

            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100 * index);
        });
    });

    // Hover lift effect for buttons
    const primaryButtons = document.querySelectorAll('button.bg-primary');
    primaryButtons.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            btn.style.transform = 'translateY(-2px)';
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translateY(0)';
        });
    });
    </script>
</body>

</html>