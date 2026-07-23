<?php
include('../main/connection.php');
?>

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Register - Money Manager</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
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
                        "on-tertiary-fixed-variant": "#7c2d11",
                        "secondary": "#006a63",
                        "tertiary-container": "#f38764",
                        "surface-container-high": "#e2e7ff",
                        "inverse-primary": "#4fdbc8",
                        "surface-variant": "#dae2fd",
                        "error": "#ba1a1a",
                        "secondary-fixed-dim": "#80d5cb",
                        "on-tertiary": "#ffffff",
                        "outline": "#6c7a77",
                        "inverse-on-surface": "#eef0ff",
                        "inverse-surface": "#283044",
                        "surface-bright": "#faf8ff",
                        "secondary-container": "#99efe5",
                        "secondary-fixed": "#9cf2e8",
                        "surface-container-highest": "#dae2fd",
                        "primary-fixed": "#71f8e4",
                        "surface-container": "#eaedff",
                        "primary-fixed-dim": "#4fdbc8",
                        "surface-container-low": "#f2f3ff",
                        "on-primary-container": "#00423b",
                        "on-primary-fixed-variant": "#005048",
                        "on-surface-variant": "#3c4947",
                        "error-container": "#ffdad6",
                        "surface": "#faf8ff",
                        "tertiary-fixed-dim": "#ffb59e",
                        "on-background": "#131b2e",
                        "on-tertiary-fixed": "#3a0b00",
                        "on-surface": "#131b2e",
                        "background": "#faf8ff",
                        "on-primary-fixed": "#00201c",
                        "on-secondary": "#ffffff",
                        "tertiary": "#9b4426",
                        "on-secondary-fixed-variant": "#00504a",
                        "primary": "#006b5f",
                        "surface-dim": "#d2d9f4",
                        "outline-variant": "#bbcac6",
                        "on-tertiary-container": "#6c2106",
                        "tertiary-fixed": "#ffdbd0",
                        "on-secondary-fixed": "#00201d",
                        "surface-container-lowest": "#ffffff",
                        "surface-tint": "#006b5f",
                        "on-secondary-container": "#006f67",
                        "primary-container": "#14b8a6",
                        "on-error-container": "#93000a",
                        "on-error": "#ffffff",
                        "on-primary": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-sm": "8px",
                        "stack-md": "16px",
                        "gutter": "24px",
                        "stack-lg": "32px",
                        "margin-desktop": "40px",
                        "margin-mobile": "16px",
                        "section-gap": "64px",
                        "container-max": "1280px"
                    },
                    "fontFamily": {
                        "label-sm": ["Inter"],
                        "headline-sm": ["Inter"],
                        "title-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "label-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "display-lg": ["Inter"]
                    },
                    "fontSize": {
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
                        "title-lg": ["20px", {
                            "lineHeight": "28px",
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
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "label-md": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "500"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }],
                        "display-lg": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }]
                    }
                }
            }
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .bg-blob {
            position: absolute;
            filter: blur(80px);
            opacity: 0.5;
            z-index: -1;
            animation: float 20s infinite ease-in-out;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stagger-1 {
            animation-delay: 0.1s;
        }

        .stagger-2 {
            animation-delay: 0.2s;
        }

        .stagger-3 {
            animation-delay: 0.3s;
        }
    </style>
</head>

<body
    class="bg-background text-on-background font-body-md min-h-screen overflow-x-hidden relative flex flex-col md:flex-row">
    <!-- TopNavBar (Mobile Only for context) -->
    <header
        class="fixed top-0 w-full z-50 flex justify-between items-center px-margin-mobile h-20 bg-surface/70 backdrop-blur-md border-b border-outline-variant/30 shadow-sm md:hidden">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-primary text-3xl"
                style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span>
            <span
                class="font-headline-sm text-headline-sm font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">Money
                Manager</span>
        </div>
    </header>
    <!-- Background Blobs -->
    <div class="hidden md:block fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="bg-blob bg-primary-container w-[500px] h-[500px] rounded-full top-[-100px] left-[-100px]"></div>
        <div class="bg-blob bg-secondary-container w-[600px] h-[600px] rounded-full bottom-[-200px] right-[-100px]"
            style="animation-delay: -5s;"></div>
        <div class="bg-blob bg-tertiary-container w-[400px] h-[400px] rounded-full top-[30%] left-[40%]"
            style="animation-delay: -10s; opacity: 0.3;"></div>
    </div>
    <!-- Main Content Area -->
    <main class="flex-1 flex w-full relative z-10 pt-24 md:pt-0 pb-stack-lg md:pb-0 min-h-screen">
        <!-- Left Column: Form -->
        <div class="w-full md:w-1/2 flex items-center justify-center px-margin-mobile md:px-margin-desktop py-stack-lg">
            <div
                class="w-full max-w-[480px] glass-panel rounded-[24px] border border-outline-variant/30 shadow-[0_10px_40px_rgba(15,23,42,0.1)] p-stack-lg md:p-margin-desktop fade-in-up">
                <div class="hidden md:flex items-center gap-2 mb-stack-lg justify-center">
                    <span class="material-symbols-outlined text-primary text-4xl"
                        style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span>
                    <span class="font-headline-md text-headline-md font-bold text-primary">Money Manager</span>
                </div>
                <div class="text-center mb-stack-lg">
                    <h1 class="font-headline-md text-headline-md text-on-surface mb-stack-sm">Create Your Account</h1>
                    <p class="font-body-md text-body-md text-on-surface-variant">Manage your income, expenses with esay.</p>
                </div>
                <form class="space-y-stack-md" id="registrationForm" action="authform.php" method="post">
                    <!-- Full Name -->
                    <div class="relative fade-in-up stagger-1">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-secondary">person</span>
                        <input
                            class="w-full h-[56px] pl-[48px] pr-4 rounded-[24px] border border-outline-variant/50 bg-surface focus:border-primary focus:ring-4 focus:ring-primary/20 transition-all font-body-md text-body-md outline-none" name="mm_user_name"
                            placeholder="Full Name" required type="text" />
                    </div>
                    <!-- Email -->
                    <div class="relative fade-in-up stagger-1">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-secondary">mail</span>
                        <input
                            class="w-full h-[56px] pl-[48px] pr-4 rounded-[24px] border border-outline-variant/50 bg-surface focus:border-primary focus:ring-4 focus:ring-primary/20 transition-all font-body-md text-body-md outline-none" name="mm_user_email"
                            placeholder="Email Address" required="need this first" type="email" />
                    </div>
                    <!-- Password -->
                    <div class="relative fade-in-up stagger-2">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-secondary">lock</span>
                        <input
                            class="w-full h-[56px] pl-[48px] pr-[48px] rounded-[24px] border border-outline-variant/50 bg-surface focus:border-primary focus:ring-4 focus:ring-primary/20 transition-all font-body-md text-body-md outline-none" name="mm_user_password"
                            id="password" placeholder="Password" required type="password" />
                        <button
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-secondary hover:text-primary transition-colors"
                            onclick="togglePassword('password', 'pwdIcon')" type="button">
                            <span class="material-symbols-outlined" id="pwdIcon">visibility_off</span>
                        </button>
                    </div>
                    <!-- Terms -->
                    <div class="flex items-start gap-3 py-stack-sm fade-in-up stagger-3">
                        <input
                            class="mt-1 w-5 h-5 rounded-[4px] border-outline-variant text-primary focus:ring-primary/20 bg-surface"
                            id="terms" required="" type="checkbox" />
                        <label class="font-body-md text-body-md text-on-surface-variant cursor-pointer" for="terms">
                            I agree to the <a class="text-primary hover:underline" href="#">Terms &amp; Conditions</a>
                            and <a class="text-primary hover:underline" href="#">Privacy Policy</a>.
                        </label>
                    </div>
                    <!-- Submit Button -->
                    <button
                        class="w-full h-[56px] rounded-full bg-gradient-to-r from-[#10b981] to-[#0f766e] text-on-primary font-label-md text-label-md hover:-translate-y-[2px] hover:shadow-[0_4px_20px_rgba(15,118,110,0.4)] active:scale-[0.98] transition-all duration-200 mt-stack-md flex justify-center items-center gap-2 fade-in-up stagger-3"
                        type="submit" name="register">
                        Create Account
                        <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                    </button>
                </form>
                <div class="mt-stack-lg text-center fade-in-up stagger-3">
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Already have an account? <a class="text-primary font-semibold hover:underline" href="login.php">Sign
                            In</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Right Column: Illustration (Desktop Only) -->
        <div class="hidden md:flex w-1/2 items-center justify-center p-margin-desktop relative">
            <div class="w-full max-w-[500px] aspect-square bg-gradient-to-br from-surface-container-high to-surface-container rounded-full flex items-center justify-center shadow-lg relative fade-in-up"
                style="animation-delay: 0.4s;">
                <span class="material-symbols-outlined text-[200px] text-primary/80 absolute"
                    style="font-variation-settings: 'FILL' 1;">analytics</span>
                <!-- Floating Elements -->
                <div
                    class="absolute top-1/4 left-10 bg-surface p-4 rounded-[24px] shadow-[0_10px_40px_rgba(15,23,42,0.1)] flex items-center gap-3 animate-[float_6s_ease-in-out_infinite]">
                    <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-on-primary-container">trending_up</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm text-on-surface-variant">Income</div>
                        <div class="font-title-lg text-title-lg text-on-surface font-bold">+₹45,000</div>
                    </div>
                </div>
                <div
                    class="absolute bottom-1/4 right-10 bg-surface p-4 rounded-[24px] shadow-[0_10px_40px_rgba(15,23,42,0.1)] flex items-center gap-3 animate-[float_8s_ease-in-out_infinite_reverse]">
                    <div class="w-10 h-10 rounded-full bg-error-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-on-error-container">receipt_long</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm text-on-surface-variant">Expenses</div>
                        <div class="font-title-lg text-title-lg text-on-surface font-bold">-₹12,400</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === "password") {
                input.type = "text";
                icon.textContent = "visibility";
            } else {
                input.type = "password";
                icon.textContent = "visibility_off";
            }
        }
    </script>
</body>

</html>