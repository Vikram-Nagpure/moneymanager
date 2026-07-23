<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Verify Your Account - Money Manager</title>
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Config -->
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "inverse-on-surface": "#eef0ff",
                    "secondary-fixed": "#9cf2e8",
                    "surface-container-high": "#e2e7ff",
                    "surface-dim": "#d2d9f4",
                    "primary-fixed-dim": "#4fdbc8",
                    "secondary-container": "#99efe5",
                    "on-primary-fixed-variant": "#005048",
                    "inverse-primary": "#4fdbc8",
                    "surface-tint": "#006b5f",
                    "inverse-surface": "#283044",
                    "surface-variant": "#dae2fd",
                    "on-tertiary": "#ffffff",
                    "on-secondary-fixed": "#00201d",
                    "background": "#faf8ff",
                    "primary-fixed": "#71f8e4",
                    "surface-container-highest": "#dae2fd",
                    "secondary": "#006a63",
                    "outline-variant": "#bbcac6",
                    "on-secondary-container": "#006f67",
                    "on-secondary": "#ffffff",
                    "tertiary-fixed-dim": "#ffb59e",
                    "on-tertiary-container": "#6c2106",
                    "on-error": "#ffffff",
                    "outline": "#6c7a77",
                    "surface-container-lowest": "#ffffff",
                    "on-background": "#131b2e",
                    "surface-container-low": "#f2f3ff",
                    "on-tertiary-fixed-variant": "#7c2d11",
                    "on-surface-variant": "#3c4947",
                    "tertiary-fixed": "#ffdbd0",
                    "on-primary-fixed": "#00201c",
                    "primary": "#006b5f",
                    "surface": "#faf8ff",
                    "secondary-fixed-dim": "#80d5cb",
                    "on-primary-container": "#00423b",
                    "on-primary": "#ffffff",
                    "tertiary": "#9b4426",
                    "on-secondary-fixed-variant": "#00504a",
                    "on-surface": "#131b2e",
                    "surface-container": "#eaedff",
                    "tertiary-container": "#f38764",
                    "surface-bright": "#faf8ff",
                    "on-error-container": "#93000a",
                    "error-container": "#ffdad6",
                    "primary-container": "#14b8a6",
                    "error": "#ba1a1a",
                    "on-tertiary-fixed": "#3a0b00"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "gutter": "24px",
                    "margin-desktop": "40px",
                    "container-max": "1280px",
                    "stack-lg": "32px",
                    "section-gap": "64px",
                    "stack-sm": "8px",
                    "margin-mobile": "16px",
                    "stack-md": "16px"
                },
                "fontFamily": {
                    "display-lg-mobile": ["Inter", "sans-serif"],
                    "display-lg": ["Inter", "sans-serif"],
                    "headline-sm": ["Inter", "sans-serif"],
                    "title-lg": ["Inter", "sans-serif"],
                    "label-md": ["Inter", "sans-serif"],
                    "body-md": ["Inter", "sans-serif"],
                    "headline-md": ["Inter", "sans-serif"],
                    "label-sm": ["Inter", "sans-serif"],
                    "body-lg": ["Inter", "sans-serif"]
                },
                "fontSize": {
                    "display-lg-mobile": ["36px", {
                        "lineHeight": "44px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "display-lg": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
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
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "letterSpacing": "0.01em",
                        "fontWeight": "500"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "headline-md": ["30px", {
                        "lineHeight": "38px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "letterSpacing": "0.05em",
                        "fontWeight": "600"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }]
                },
                "animation": {
                    'float': 'float 15s ease-in-out infinite',
                    'float-delayed': 'float 15s ease-in-out 7.5s infinite',
                    'fade-in': 'fadeIn 0.5s ease-out forwards',
                    'scale-up': 'scaleUp 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards',
                },
                "keyframes": {
                    float: {
                        '0%, 100%': {
                            transform: 'translateY(0) scale(1)'
                        },
                        '50%': {
                            transform: 'translateY(-20px) scale(1.05)'
                        },
                    },
                    fadeIn: {
                        '0%': {
                            opacity: '0',
                            transform: 'translateY(10px)'
                        },
                        '100%': {
                            opacity: '1',
                            transform: 'translateY(0)'
                        },
                    },
                    scaleUp: {
                        '0%': {
                            transform: 'scale(0.8)',
                            opacity: '0'
                        },
                        '100%': {
                            transform: 'scale(1)',
                            opacity: '1'
                        },
                    }
                }
            }
        }
    }
    </script>
    <style>
    /* Custom utilities that map to standard inputs but fit design system */
    .otp-input::-webkit-outer-spin-button,
    .otp-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .otp-input {
        -moz-appearance: textfield;
        caret-color: #006b5f;
        /* primary color */
    }
    </style>
</head>

<body
    class="bg-background text-on-background min-h-screen flex items-center justify-center relative overflow-hidden font-body-md">
    <!-- Ambient Background Effects -->
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
        <div
            class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] rounded-full bg-primary-container/20 blur-[100px] animate-float">
        </div>
        <div
            class="absolute bottom-[-10%] right-[-5%] w-[600px] h-[600px] rounded-full bg-secondary-fixed-dim/20 blur-[120px] animate-float-delayed">
        </div>
        <div
            class="absolute top-[40%] left-[30%] w-[300px] h-[300px] rounded-full bg-surface-variant/40 blur-[80px] mix-blend-multiply">
        </div>
    </div>
    <!-- Main Layout Container (Split Screen Desktop, Single Column Mobile) -->
    <main
        class="relative z-10 w-full max-w-container-max mx-auto min-h-screen md:min-h-[auto] flex flex-col md:flex-row shadow-2xl shadow-primary-container/5 rounded-none md:rounded-[32px] overflow-hidden bg-surface/50 backdrop-blur-3xl border border-surface-container-highest/30">
        <!-- Left Pane: Verification Card -->
        <section
            class="w-full md:w-1/2 p-margin-mobile md:p-section-gap flex flex-col justify-center items-center md:items-start animate-fade-in relative z-20">
            <div
                class="w-full max-w-[480px] bg-surface-container-lowest/80 backdrop-blur-2xl rounded-[24px] p-stack-lg shadow-[0_8px_32px_rgba(15,23,42,0.04)] border border-outline-variant/20 relative">
                <!-- Brand / Logo -->
                <div class="flex items-center gap-2 mb-stack-lg">
                    <div
                        class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-on-primary shadow-sm shadow-primary/20">
                        <span class="material-symbols-outlined"
                            style="font-variation-settings: 'FILL' 1;">account_balance</span>
                    </div>
                    <span class="font-title-lg text-title-lg text-primary tracking-tight">Money Manager</span>
                </div>
                <div id="verification-form-container">
                    <header class="mb-stack-lg">
                        <h1
                            class="font-display-lg-mobile md:font-headline-md text-display-lg-mobile md:text-headline-md text-on-background mb-2">
                            Verify Your Account</h1>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Enter the 6-digit verification code sent to your registered mobile number or email to
                            continue.
                        </p>
                        <div
                            class="mt-4 inline-flex items-center gap-2 px-3 py-1.5 bg-surface-container-low rounded-full border border-outline-variant/30">
                            <span class="material-symbols-outlined text-[18px] text-primary">smartphone</span>
                            <span class="font-label-md text-label-md text-on-background font-medium">+91
                                ••••••4589</span>
                        </div>
                    </header>
                    <form class="flex flex-col gap-stack-lg" id="otp-form">
                        <!-- OTP Inputs Container -->
                        <div class="flex justify-between gap-2 md:gap-4 w-full" id="otp-inputs">
                            <input autofocus=""
                                class="otp-input w-12 h-14 md:w-14 md:h-16 text-center font-headline-md text-headline-md text-on-background bg-surface rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-4 focus:ring-primary-container/30 transition-all shadow-sm"
                                maxlength="1" required="" type="text" />
                            <input
                                class="otp-input w-12 h-14 md:w-14 md:h-16 text-center font-headline-md text-headline-md text-on-background bg-surface rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-4 focus:ring-primary-container/30 transition-all shadow-sm"
                                maxlength="1" required="" type="text" />
                            <input
                                class="otp-input w-12 h-14 md:w-14 md:h-16 text-center font-headline-md text-headline-md text-on-background bg-surface rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-4 focus:ring-primary-container/30 transition-all shadow-sm"
                                maxlength="1" required="" type="text" />
                            <input
                                class="otp-input w-12 h-14 md:w-14 md:h-16 text-center font-headline-md text-headline-md text-on-background bg-surface rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-4 focus:ring-primary-container/30 transition-all shadow-sm"
                                maxlength="1" required="" type="text" />
                            <input
                                class="otp-input w-12 h-14 md:w-14 md:h-16 text-center font-headline-md text-headline-md text-on-background bg-surface rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-4 focus:ring-primary-container/30 transition-all shadow-sm"
                                maxlength="1" required="" type="text" />
                            <input
                                class="otp-input w-12 h-14 md:w-14 md:h-16 text-center font-headline-md text-headline-md text-on-background bg-surface rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-4 focus:ring-primary-container/30 transition-all shadow-sm"
                                maxlength="1" required="" type="text" />
                        </div>
                        <!-- Timer & Resend -->
                        <div class="flex flex-col items-center gap-2">
                            <span class="font-label-md text-label-md text-on-surface-variant flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]">schedule</span>
                                Code expires in 01:59
                            </span>
                            <button
                                class="font-label-md text-label-md text-primary hover:text-secondary transition-colors cursor-pointer group"
                                type="button">
                                Didn't receive the code? <span
                                    class="font-semibold group-hover:underline decoration-2 underline-offset-4">Resend
                                    OTP</span>
                            </button>
                        </div>
                        <!-- Action Buttons -->
                        <div class="flex flex-col gap-4 mt-2">
                            <a href="incomeexpance.php"
                                class="w-full h-14 bg-gradient-to-r from-primary to-secondary text-on-primary font-label-md text-label-md rounded-full shadow-[0_4px_14px_rgba(0,107,95,0.25)] hover:shadow-[0_6px_20px_rgba(0,107,95,0.4)] hover:-translate-y-0.5 active:translate-y-0 active:scale-[0.98] transition-all duration-300 relative overflow-hidden flex items-center justify-center group"
                                id="verify-btn" type="submit">
                                <span class="relative z-10 flex items-center gap-2">
                                    Verify OTP
                                    <span
                                        class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                                </span>
                                <div
                                    class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out rounded-full">
                                </div>
                            </a>
                            <!-- <button
                                class="w-full h-12 bg-transparent text-on-surface-variant font-label-md text-label-md rounded-full hover:bg-surface-variant/50 transition-colors"
                                type="button">
                                Change Number / Email
                            </button> -->
                        </div>
                    </form>
                </div>
                <!-- Success State (Hidden initially) -->
                <div class="hidden flex-col items-center justify-center text-center py-8" id="success-state">
                    <div
                        class="w-20 h-20 bg-primary-container rounded-full flex items-center justify-center mb-6 animate-scale-up shadow-lg shadow-primary-container/40">
                        <span class="material-symbols-outlined text-on-primary-container text-[40px]"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    </div>
                    <h2 class="font-headline-sm text-headline-sm text-on-background mb-2">Verification Successful</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant animate-pulse">Redirecting you to your
                        dashboard...</p>
                </div>
                <!-- Security Note -->
                <div class="mt-stack-lg pt-stack-sm border-t border-outline-variant/20">
                    <div class="flex items-start gap-3 bg-surface-container-low p-4 rounded-2xl">
                        <span class="material-symbols-outlined text-primary mt-0.5"
                            style="font-variation-settings: 'FILL' 1;">lock</span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant leading-relaxed">
                            Your verification code is securely encrypted and processed to protect your account.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Right Pane: Illustration (Hidden on mobile) -->
        <section class="hidden md:block w-1/2 bg-surface-container relative overflow-hidden">
            <!-- Decorative overlay gradient -->
            <div
                class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent z-10 pointer-events-none mix-blend-overlay">
            </div>
            <div class="w-full h-full bg-cover bg-center absolute inset-0 transform hover:scale-105 transition-transform duration-1000 ease-out"
                data-alt="A highly detailed, sophisticated 3D illustration representing digital security and financial wealth. The central focus is an elegant, glowing emerald and teal geometric lock floating amidst subtle, soft-edged glassmorphic credit cards and abstract data streams. The lighting is bright, high-key, and luxurious, creating a pristine light-mode aesthetic. The color palette relies heavily on soft whites, crisp emerald greens, and deep teal shadows to communicate trust, high-end SaaS quality, and 'Quiet Confidence'."
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAYJHbZzqr0e_PyhxPTaE0I77NwN6B4NJ7eMuaOO0ej5N3G_6aZ6s-BN-JOz5tWMrIgi6Tz31dL6OkmRSy99hfVw4pn-wtDO-JMJ3ELV5vRsRzzZQc99FdkG-Mzd78c-sV8bApUM6Sl5HyDOxjUaFZZz5TY7u18NXsW5hUokekqtPW4e9HmyFlQA5wLemaPn_rJQz0pfrvlDFtMhUKMLHitTx8gySDR_PTVhe08l3GQWCnzc2ZInDqW16I7JJy5wUoMIeUdF7NfyO0')">
            </div>
            <!-- Abstract shapes overlaying the image for depth -->
            <div
                class="absolute bottom-10 right-10 w-64 h-64 bg-white/10 backdrop-blur-md border border-white/30 rounded-3xl z-20 shadow-2xl rotate-12 animate-float">
            </div>
            <div
                class="absolute top-20 right-20 w-32 h-32 bg-primary-container/20 backdrop-blur-xl border border-white/40 rounded-full z-20 shadow-xl -rotate-12 animate-float-delayed">
            </div>
        </section>
    </main>
    
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const inputs = document.querySelectorAll('.otp-input');
        const form = document.getElementById('otp-form');
        const verifyBtn = document.getElementById('verify-btn');
        const formContainer = document.getElementById('verification-form-container');
        const successState = document.getElementById('success-state');

        // Auto-focus logic for OTP inputs
        inputs.forEach((input, index) => {
            // Handle input
            input.addEventListener('input', (e) => {
                // Allow only numbers
                e.target.value = e.target.value.replace(/[^0-9]/g, '');

                if (e.target.value !== '') {
                    if (index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    } else {
                        input.blur(); // Remove focus from last input if filled
                        verifyBtn.classList.add('ring-4', 'ring-primary-container/50');
                        setTimeout(() => verifyBtn.classList.remove('ring-4',
                            'ring-primary-container/50'), 300);
                    }
                }
            });

            // Handle backspace
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && e.target.value === '') {
                    if (index > 0) {
                        inputs[index - 1].focus();
                        inputs[index - 1].value =
                        ''; // Clear previous input on backspace for better UX
                    }
                }
            });

            // Handle paste
            input.addEventListener('paste', (e) => {
                e.preventDefault();
                const pastedData = e.clipboardData.getData('text').replace(/[^0-9]/g, '').slice(
                    0, inputs.length);

                if (pastedData) {
                    for (let i = 0; i < pastedData.length; i++) {
                        if (inputs[i]) {
                            inputs[i].value = pastedData[i];
                        }
                    }
                    // Focus next empty or last input
                    const nextIndex = Math.min(pastedData.length, inputs.length - 1);
                    inputs[nextIndex].focus();
                }
            });
        });

        // Handle Form Submission / Success State Simulation
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            // Check if all inputs are filled
            const isComplete = Array.from(inputs).every(input => input.value.length === 1);

            if (isComplete) {
                // Add loading state to button
                const originalBtnContent = verifyBtn.innerHTML;
                verifyBtn.innerHTML =
                    `<span class="material-symbols-outlined animate-spin">refresh</span> Processing...`;
                verifyBtn.disabled = true;
                verifyBtn.classList.add('opacity-80', 'cursor-not-allowed');

                // Simulate API call delay
                setTimeout(() => {
                    // Hide form and show success
                    formContainer.classList.add('hidden');
                    successState.classList.remove('hidden');
                    successState.classList.add('flex');

                    // Optional: Reset button for demo purposes if they go back (not typical, but good for robust code)
                    verifyBtn.innerHTML = originalBtnContent;
                    verifyBtn.disabled = false;
                    verifyBtn.classList.remove('opacity-80', 'cursor-not-allowed');

                }, 1500);
            } else {
                // Shake animation for invalid state
                const otpContainer = document.getElementById('otp-inputs');
                otpContainer.style.transform = 'translateX(-5px)';
                setTimeout(() => otpContainer.style.transform = 'translateX(5px)', 50);
                setTimeout(() => otpContainer.style.transform = 'translateX(-5px)', 100);
                setTimeout(() => otpContainer.style.transform = 'translateX(5px)', 150);
                setTimeout(() => otpContainer.style.transform = 'translateX(0)', 200);

                // Highlight empty inputs
                inputs.forEach(input => {
                    if (input.value === '') {
                        input.classList.add('border-error');
                        setTimeout(() => input.classList.remove('border-error'), 1000);
                    }
                });
            }
        });
    });
    </script>
</body>

</html>