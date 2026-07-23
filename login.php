<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login - MoneyManager</title>
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
                    "primary-container": "#14b8a6",
                    "surface-container-low": "#f2f3ff",
                    "on-tertiary-fixed": "#3a0b00",
                    "on-surface": "#131b2e",
                    "on-secondary": "#ffffff",
                    "on-background": "#131b2e",
                    "on-tertiary-container": "#6c2106",
                    "on-secondary-fixed-variant": "#00504a",
                    "on-error": "#ffffff",
                    "error": "#ba1a1a",
                    "surface-dim": "#d2d9f4",
                    "primary-fixed": "#71f8e4",
                    "secondary-fixed-dim": "#80d5cb",
                    "error-container": "#ffdad6",
                    "on-tertiary-fixed-variant": "#7c2d11",
                    "inverse-surface": "#283044",
                    "secondary-fixed": "#9cf2e8",
                    "on-secondary-fixed": "#00201d",
                    "surface-container-lowest": "#ffffff",
                    "surface-container": "#eaedff",
                    "surface-container-high": "#e2e7ff",
                    "tertiary": "#9b4426",
                    "tertiary-fixed": "#ffdbd0",
                    "secondary-container": "#99efe5",
                    "on-primary-container": "#00423b",
                    "on-surface-variant": "#3c4947",
                    "outline-variant": "#bbcac6",
                    "tertiary-container": "#f38764",
                    "surface-bright": "#faf8ff",
                    "secondary": "#006a63",
                    "on-primary": "#ffffff",
                    "primary": "#006b5f",
                    "on-primary-fixed": "#00201c",
                    "inverse-on-surface": "#eef0ff",
                    "surface-tint": "#006b5f",
                    "tertiary-fixed-dim": "#ffb59e",
                    "on-primary-fixed-variant": "#005048",
                    "on-tertiary": "#ffffff",
                    "surface-variant": "#dae2fd",
                    "surface": "#faf8ff",
                    "outline": "#6c7a77",
                    "background": "#faf8ff",
                    "surface-container-highest": "#dae2fd",
                    "on-secondary-container": "#006f67",
                    "on-error-container": "#93000a",
                    "primary-fixed-dim": "#4fdbc8",
                    "inverse-primary": "#4fdbc8"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "stack-sm": "8px",
                    "gutter": "24px",
                    "stack-md": "16px",
                    "section-gap": "64px",
                    "stack-lg": "32px",
                    "margin-desktop": "40px",
                    "margin-mobile": "16px",
                    "container-max": "1280px"
                },
                "fontFamily": {
                    "label-sm": [
                        "Inter"
                    ],
                    "display-lg-mobile": [
                        "Inter"
                    ],
                    "body-md": [
                        "Inter"
                    ],
                    "headline-sm": [
                        "Inter"
                    ],
                    "display-lg": [
                        "Inter"
                    ],
                    "body-lg": [
                        "Inter"
                    ],
                    "title-lg": [
                        "Inter"
                    ],
                    "label-md": [
                        "Inter"
                    ],
                    "headline-md": [
                        "Inter"
                    ]
                },
                "fontSize": {
                    "label-sm": [
                        "12px",
                        {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }
                    ],
                    "display-lg-mobile": [
                        "36px",
                        {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }
                    ],
                    "body-md": [
                        "16px",
                        {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }
                    ],
                    "headline-sm": [
                        "24px",
                        {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }
                    ],
                    "display-lg": [
                        "48px",
                        {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }
                    ],
                    "body-lg": [
                        "18px",
                        {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }
                    ],
                    "title-lg": [
                        "20px",
                        {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }
                    ],
                    "label-md": [
                        "14px",
                        {
                            "lineHeight": "20px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "500"
                        }
                    ],
                    "headline-md": [
                        "30px",
                        {
                            "lineHeight": "38px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }
                    ]
                }
            },
        },
    }
    </script>
    <style>
    .glass-panel {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        box-shadow: 0 8px 32px 0 rgba(15, 23, 42, 0.05);
    }

    .animate-fade-in {
        animation: fadeIn 0.8s ease-out forwards;
        opacity: 0;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .bg-abstract {
        background-image:
            radial-gradient(circle at 15% 50%, rgba(20, 184, 166, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 85% 30%, rgba(245, 158, 11, 0.05) 0%, transparent 50%);
    }
    </style>
</head>

<body class="bg-surface text-on-surface font-body-md min-h-screen flex antialiased bg-abstract">
    <!-- Suppressed Header and Footer as this is a transactional Login page -->
    <main class="w-full flex min-h-screen">
        <!-- Left Illustration Panel (Desktop Only) -->
        <div
            class="hidden lg:flex w-1/2 bg-surface-container-low flex-col justify-center items-center relative overflow-hidden p-margin-desktop">
            <div class="absolute inset-0 opacity-30 mix-blend-multiply"
                style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%2314b8a6\' fill-opacity=\'0.15\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
            </div>
            <div class="relative z-10 max-w-md w-full animate-fade-in" style="animation-delay: 0.2s;">
                <img class="w-full h-auto object-contain drop-shadow-2xl mb-stack-lg rounded-2xl"
                    data-alt="A sophisticated, minimalist 3D rendering of a stylized digital wallet and glowing gold coins floating gracefully above a modern, frosted glass pedestal. The scene is illuminated by soft, volumetric studio lighting, casting gentle shadows that emphasize depth and premium quality. The color palette features elegant emerald teals, crisp whites, and luxurious gold accents, creating an atmosphere of secure, modern wealth management and refined financial technology."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD05FTF4J3dAspViJLEFGK6Hvw8yIkydq_dFr9R_dQEZMq_-IoJvT4mLZrt55tTVduFAc6FiG0Tql7LfTh1iGS0w7mVnrqcyP8qO4rwOs5TAFvV3o45boTlnZ92VNJVKQmJOJvDXRN-1Z4Dy0ZVtUlAGPLo-4io2o0I4wTY-vXPu1bvBuYy7Xixw5A_nB9yaul5QzqNZs8_h-9QHadK_UG1pnFKkG6PrNr1F2GfvmtJCvOLAQb2YBZ0pc8-uOpaxVmkTtCmbeAmQug" />
                <h2 class="font-headline-md text-headline-md mb-stack-sm">Master Your Finances.</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">The smart way to track, budget, and grow
                    your wealth securely in one place.</p>
            </div>
        </div>
        <!-- Right Login Panel -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-margin-mobile md:p-margin-desktop relative">
            <!-- Login Card -->
            <div
                class="glass-panel w-full max-w-[480px] rounded-[24px] p-[32px] md:p-[48px] animate-fade-in flex flex-col">
                <!-- Brand Header -->
                <div class="flex items-center gap-2 mb-stack-lg justify-center">
                    <span class="material-symbols-outlined text-primary text-[32px]"
                        style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span>
                    <span
                        class="font-title-lg text-title-lg font-bold text-on-surface tracking-tight">MoneyManager</span>
                </div>
                <!-- Welcome Text -->
                <div class="text-center mb-stack-lg">
                    <h1 class="font-headline-md text-headline-md mb-2">Welcome Back</h1>
                    <p class="font-body-md text-body-md text-on-surface-variant">Sign in to manage your income,
                        expenses, budgets, savings, and financial goals securely.</p>
                </div>
                <!-- Form -->
                <form class="flex flex-col gap-stack-md"
                    onsubmit="event.preventDefault(); document.getElementById('login-btn').innerHTML = '&lt;span class=\'material-symbols-outlined animate-spin\'&gt;progress_activity&lt;/span&gt; Signing In...';">
                    <!-- Email/Mobile Input -->
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-outline">mail</span>
                        </div>
                        <input
                            class="w-full h-[56px] pl-12 pr-4 rounded-[24px] bg-surface border border-outline-variant focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all duration-200 outline-none font-body-md text-body-md placeholder-on-surface-variant/50"
                            id="username" placeholder="Email or Mobile Number" required="" type="text" />
                    </div>
                    <!-- Password Input -->
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-outline">lock</span>
                        </div>
                        <input
                            class="w-full h-[56px] pl-12 pr-12 rounded-[24px] bg-surface border border-outline-variant focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all duration-200 outline-none font-body-md text-body-md placeholder-on-surface-variant/50"
                            id="password" placeholder="Password" required="" type="password" />
                        <button
                            class="absolute inset-y-0 right-0 pr-4 flex items-center text-outline hover:text-primary transition-colors"
                            onclick="const p=document.getElementById('password'); const i=this.querySelector('.material-symbols-outlined'); if(p.type==='password'){p.type='text';i.textContent='visibility_off';}else{p.type='password';i.textContent='visibility';}"
                            type="button">
                            <span class="material-symbols-outlined">visibility</span>
                        </button>
                    </div>
                    <!-- Helpers -->
                    <div class="flex items-center justify-between mt-2 mb-2">
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input
                                class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary focus:ring-offset-surface cursor-pointer"
                                type="checkbox" />
                            <span
                                class="font-label-md text-label-md text-on-surface-variant group-hover:text-on-surface transition-colors">Remember
                                Me</span>
                        </label>
                        <a class="font-label-md text-label-md text-primary hover:text-primary-container transition-colors font-semibold"
                            href="#">Forgot Password?</a>
                    </div>
                    <!-- Primary Action -->
                    <a href="otpverify.php"
                        class="w-full h-[56px] rounded-full bg-gradient-to-r from-primary to-[#0f766e] text-white font-label-md text-label-md shadow-[0_4px_14px_0_rgba(20,184,166,0.39)] hover:shadow-[0_6px_20px_rgba(20,184,166,0.23)] hover:-translate-y-[2px] transition-all duration-200 flex items-center justify-center gap-2"
                        id="login-btn" type="submit">
                        Sign In
                    </a>

                    <!-- Footer Link -->
                <div class="text-center mt-auto pt-4">
                    <span class="font-body-md text-body-md text-on-surface-variant">Don't have an account?</span>
                    <a class="font-label-md text-label-md text-primary hover:text-primary-container transition-colors ml-1"
                        href="index.php">Create Account</a>
                </div>
                </form>
               
                
                
            </div>
        </div>
    </main>
</body>

</html>