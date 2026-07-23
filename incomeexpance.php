<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Income &amp; Expense Entry - Money Manager</title>
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
                    "surface-container-low": "#f2f3ff",
                    "on-primary": "#ffffff",
                    "secondary-container": "#99efe5",
                    "on-tertiary-fixed-variant": "#7c2d11",
                    "surface-bright": "#faf8ff",
                    "outline-variant": "#bbcac6",
                    "on-surface-variant": "#3c4947",
                    "on-secondary": "#ffffff",
                    "secondary-fixed": "#9cf2e8",
                    "on-error": "#ffffff",
                    "surface-dim": "#d2d9f4",
                    "on-tertiary": "#ffffff",
                    "error": "#ba1a1a",
                    "surface-container-highest": "#dae2fd",
                    "on-tertiary-fixed": "#3a0b00",
                    "error-container": "#ffdad6",
                    "on-primary-container": "#00423b",
                    "tertiary-fixed-dim": "#ffb59e",
                    "tertiary-fixed": "#ffdbd0",
                    "tertiary": "#9b4426",
                    "on-background": "#131b2e",
                    "on-secondary-container": "#006f67",
                    "tertiary-container": "#f38764",
                    "surface": "#faf8ff",
                    "primary-fixed-dim": "#4fdbc8",
                    "on-tertiary-container": "#6c2106",
                    "on-secondary-fixed": "#00201d",
                    "surface-variant": "#dae2fd",
                    "surface-container": "#eaedff",
                    "outline": "#6c7a77",
                    "primary-container": "#14b8a6",
                    "on-primary-fixed-variant": "#005048",
                    "on-surface": "#131b2e",
                    "on-primary-fixed": "#00201c",
                    "inverse-on-surface": "#eef0ff",
                    "secondary-fixed-dim": "#80d5cb",
                    "on-error-container": "#93000a",
                    "surface-tint": "#006b5f",
                    "inverse-primary": "#4fdbc8",
                    "secondary": "#006a63",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary-fixed-variant": "#00504a",
                    "primary-fixed": "#71f8e4",
                    "primary": "#006b5f",
                    "inverse-surface": "#283044",
                    "background": "#faf8ff",
                    "surface-container-high": "#e2e7ff"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "margin-mobile": "16px",
                    "section-gap": "64px",
                    "container-max": "1280px",
                    "stack-lg": "32px",
                    "margin-desktop": "40px",
                    "gutter": "24px",
                    "stack-sm": "8px",
                    "stack-md": "16px"
                },
                "fontFamily": {
                    "title-lg": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-sm": ["Inter"],
                    "display-lg": ["Inter"],
                    "label-sm": ["Inter"],
                    "headline-md": ["Inter"],
                    "body-md": ["Inter"],
                    "display-lg-mobile": ["Inter"]
                },
                "fontSize": {
                    "title-lg": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "letterSpacing": "0.01em",
                        "fontWeight": "500"
                    }],
                    "headline-sm": ["24px", {
                        "lineHeight": "32px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "display-lg": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
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
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
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
        font-family: 'Inter', sans-serif;
    }

    /* Glassmorphism Utilities */
    .glass-panel {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0px 10px 40px rgba(15, 23, 42, 0.05);
    }

    .glass-button {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border: 1px solid rgba(226, 232, 240, 0.8);
        transition: all 0.2s ease-out;
    }

    .glass-button:hover {
        background: rgba(255, 255, 255, 1);
        transform: translateY(-2px);
        box-shadow: 0px 4px 20px rgba(15, 23, 42, 0.08);
    }

    /* Custom Keypad Grid - 4 columns for calculator layout */
    .keypad-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 8px;
    }

    /* Ambient Background Gradients */
    .ambient-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: -1;
        background: #F8FAFC;
        overflow: hidden;
    }

    .ambient-blob-1 {
        position: absolute;
        top: -10%;
        left: -10%;
        width: 50vw;
        height: 50vw;
        background: radial-gradient(circle, rgba(20, 184, 166, 0.15) 0%, rgba(255, 255, 255, 0) 70%);
        filter: blur(60px);
        animation: float 15s ease-in-out infinite alternate;
    }

    .ambient-blob-2 {
        position: absolute;
        bottom: -10%;
        right: -10%;
        width: 60vw;
        height: 60vw;
        background: radial-gradient(circle, rgba(20, 184, 166, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
        filter: blur(60px);
        animation: float 20s ease-in-out infinite alternate-reverse;
    }

    @keyframes float {
        0% {
            transform: translate(0, 0) scale(1);
        }

        100% {
            transform: translate(5%, 5%) scale(1.1);
        }
    }

    /* Floating Geometrics */
    .geo-shape {
        position: absolute;
        opacity: 0.05;
        z-index: -1;
    }

    /* Segmented Control Toggle */
    .toggle-container {
        position: relative;
        background-color: #E2E8F0;
        border-radius: 9999px;
        padding: 4px;
        display: flex;
    }

    .toggle-option {
        flex: 1;
        text-align: center;
        padding: 8px 0;
        z-index: 10;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .toggle-slider {
        position: absolute;
        top: 4px;
        bottom: 4px;
        width: calc(50% - 4px);
        background-color: white;
        border-radius: 9999px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        z-index: 5;
    }

    .is-expense .toggle-slider {
        transform: translateX(100%);
    }

    .is-expense #label-income {
        color: #64748B;
    }

    .is-expense #label-expense {
        color: #EF4444;
        font-weight: 600;
    }

    .is-income #label-income {
        color: #22C55E;
        font-weight: 600;
    }

    .is-income #label-expense {
        color: #64748B;
    }

    /* Custom Scrollbar for Transactions */
    .custom-scroll::-webkit-scrollbar {
        width: 4px;
    }

    .custom-scroll::-webkit-scrollbar-track {
        background: transparent;
    }

    .custom-scroll::-webkit-scrollbar-thumb {
        background: #CBD5E1;
        border-radius: 4px;
    }

    /* Hide scrollbar on the amount display but keep it scrollable */
.amount-scroll {
    scrollbar-width: none;      /* Firefox */
    -ms-overflow-style: none;   /* IE/Edge */
}

.amount-scroll::-webkit-scrollbar {
    display: none;              /* Chrome/Safari */
}
    </style>
</head>

<body class="bg-background text-on-surface antialiased min-h-screen flex flex-col">
    <!-- Ambient Background -->
    <!-- <div class="ambient-bg">
        <div class="ambient-blob-1"></div>
        <div class="ambient-blob-2"></div>
        <svg class="geo-shape top-20 left-10 w-32 h-32 text-primary" fill="none" stroke="currentColor" stroke-width="2"
            viewbox="0 0 100 100">
            <circle cx="50" cy="50" r="40"></circle>
        </svg>
        <svg class="geo-shape bottom-20 right-20 w-48 h-48 text-primary" fill="none" stroke="currentColor"
            stroke-width="1" viewbox="0 0 100 100">
            <rect height="60" rx="10" transform="rotate(15 50 50)" width="60" x="20" y="20"></rect>
        </svg>
    </div> -->
    <!-- TopNavBar (From JSON) -->
    <?php include "include/header.php"?>
    <!-- Main Content Canvas -->
    <main
    class="flex-grow pt-24 pb-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full flex justify-center items-center">
        <!-- Left Column: Entry Form & Calculator -->
        <section class="w-full max-w-[380px] flex-shrink-0">
            <form id="entry-form" class="glass-panel rounded-[20px] p-4 flex flex-col gap-2">
                <!-- Transaction Type Toggle -->
                <div class="toggle-container is-expense text-label-md font-label-md" id="type-toggle">
                    <div class="toggle-slider"></div>
                    <div class="toggle-option" id="label-income" onclick="setTransactionType('income')">Income</div>
                    <div class="toggle-option" id="label-expense" onclick="setTransactionType('expense')">Expense</div>
                </div>
                <!-- Display -->
                <div class="bg-white/50 backdrop-blur-sm rounded-xl p-3 border border-outline-variant/30 text-right overflow-hidden">
                    <div class="text-on-surface-variant text-label-sm font-label-sm uppercase tracking-wider mb-1">
                        Amount</div>
                    <div class="amount-scroll text-[26px] font-display-lg font-bold text-on-surface tracking-tight whitespace-nowrap overflow-x-auto transition-colors" id="calc-display">₹ 0
                    </div>
                </div>
                <!-- Input Form -->
                <div class="flex flex-col gap-2">
                    <div class="flex gap-4">
                        <div class="flex-1 relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">category</span>
                            <select
                                class="w-full h-10 pl-12 pr-4 rounded-xl border border-outline-variant bg-white/50 focus:border-primary focus:ring-1 focus:ring-primary appearance-none text-body-md font-body-md text-on-surface transition-colors">
                                <option>Salary</option>
                                <option>Food</option>
                                <option>Bills</option>
                                <option>Transport</option>
                            </select>
                        </div>
                        <div class="flex-1 relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">account_balance_wallet</span>
                            <select
                                class="w-full h-10 pl-12 pr-4 rounded-xl border border-outline-variant bg-white/50 focus:border-primary focus:ring-1 focus:ring-primary appearance-none text-body-md font-body-md text-on-surface transition-colors">
                                <option>HDFC Bank</option>
                                <option>Cash</option>
                                <option>UPI</option>
                            </select>
                        </div>
                    </div>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">notes</span>
                        <input
                            class="w-full h-10 pl-12 pr-4 rounded-xl border border-outline-variant bg-white/50 focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface transition-colors placeholder:text-outline"
                            placeholder="Add a note (optional)" type="text" name="note" />
                    </div>
                </div>
                <!-- Calculator Keypad -->
                <div class="keypad-grid">
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('7')">7</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('8')">8</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('9')">9</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-primary" onclick="appendOperator('/')">÷</button>

                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('4')">4</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('5')">5</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('6')">6</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-primary" onclick="appendOperator('*')">×</button>

                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('1')">1</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('2')">2</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('3')">3</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-primary" onclick="appendOperator('-')">−</button>

                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('00')">00</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('0')">0</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-on-surface" onclick="appendNumber('.')">.</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-primary" onclick="appendOperator('+')">+</button>

                    <button type="button" class="glass-button h-11 rounded-xl text-headline-sm font-headline-sm text-error" onclick="clearDisplay()">C</button>
                    <button type="button" class="glass-button h-11 rounded-xl text-on-surface flex items-center justify-center" onclick="backspace()">
                        <span class="material-symbols-outlined">backspace</span>
                    </button>
                    <button type="button" class="col-span-2 h-11 rounded-xl text-headline-sm font-headline-sm text-white bg-gradient-to-r from-primary to-teal-600 hover:shadow-[0_0_20px_rgba(20,184,166,0.3)] transition-all duration-200 transform hover:-translate-y-[1px]" onclick="calculate()">=</button>
                </div>
                <div class="flex gap-4">
                    <button
                        type="button"
                        class="flex-[3] h-11 rounded-xl text-white text-label-md font-label-md bg-gradient-to-r from-red-500 to-rose-600 hover:shadow-[0_0_20px_rgba(239,68,68,0.3)] transition-all duration-200 transform hover:-translate-y-[1px]"
                        id="save-btn">
                        Save Expense
                    </button>
                </div>
                <!-- Hidden fields carrying the FINAL calculated amount + transaction type to your backend -->
                <input type="hidden" id="final-amount" name="amount">
                <input type="hidden" id="transaction-type" name="type" value="expense">
            </form>
            <!-- Quick Actions -->
           
        </section>
        <!-- Right Column: Context & Analytics -->

    </main>
    <!-- Footer (From JSON) -->

    <?php include "include/mobilenav.php"?>
    <script>
    /* ============================================================
       CALCULATOR STATE
       ============================================================ */
    let expression = "";        // raw expression string, e.g. "100+25*2"
    let justCalculated = false; // true right after "=" is pressed
    let currentTransactionType = "expense";
    let errorFlashActive = false;

    const displayElement = document.getElementById('calc-display');

    /* ============================================================
       DISPLAY HELPERS
       ============================================================ */

    // Converts internal operators (+, -, *, /) into calculator symbols for display,
    // while keeping unary minus (e.g. "-5" or "3*-2") tight against its number.
    function formatForDisplay(expr) {
        return expr.replace(/([+\-*/])/g, (match, op, offset, str) => {
            const isUnaryMinus = op === '-' && (offset === 0 || "+-*/".includes(str[offset - 1]));
            if (isUnaryMinus) return '-';
            const symbols = { '+': ' + ', '-': ' − ', '*': ' × ', '/': ' ÷ ' };
            return symbols[op];
        });
    }

    function formatIndianCurrency(num) {
        return num.toLocaleString('en-IN', { maximumFractionDigits: 2 });
    }

    function updateDisplay() {
    if (errorFlashActive) return;

    let text;
    if (expression === "") {
        text = "₹ 0";
    } else if (justCalculated) {
        text = "₹ " + formatIndianCurrency(parseFloat(expression));
    } else {
        text = "₹ " + formatForDisplay(expression);
    }

    displayElement.innerText = text;
    adjustFontSize(text);
}
// Shrinks the display font as the number gets longer, so it's readable
// before falling back to horizontal scroll for extreme values.
function adjustFontSize(text) {
    const length = text.replace(/[^0-9]/g, '').length; // count digits only
    if (length <= 7) {
        displayElement.style.fontSize = '';       // default (48px from Tailwind)
    } else if (length <= 10) {
        displayElement.style.fontSize = '36px';
    } else if (length <= 13) {
        displayElement.style.fontSize = '28px';
    } else {
        displayElement.style.fontSize = '22px';
    }
}

    // Briefly shows an error message in the display, then restores it
    function flashError(message) {
        errorFlashActive = true;
        displayElement.innerText = message;
        displayElement.classList.add('text-error');
        setTimeout(() => {
            displayElement.classList.remove('text-error');
            errorFlashActive = false;
            updateDisplay();
        }, 1200);
    }

    /* ============================================================
       VALIDATION
       ============================================================ */

    // A valid expression: optional leading "-", digits (with optional decimal),
    // followed by zero or more (operator, optional "-", digits) groups.
    // This rejects trailing operators and back-to-back operators like "5+*3".
    function validateExpression(expr) {
        if (!expr) return false;
        const pattern = /^-?\d+(\.\d+)?([+\-*/]-?\d+(\.\d+)?)*$/;
        return pattern.test(expr);
    }

    /* ============================================================
       INPUT HANDLERS
       ============================================================ */

    const MAX_EXPRESSION_LENGTH = 20;
    const MAX_NUMBER_LENGTH = 12;

    function appendNumber(num) {
        if (justCalculated) {
            expression = "";
            justCalculated = false;
        }

        if (expression.length >= MAX_EXPRESSION_LENGTH) return;

        // isolate the number currently being typed (after the last operator)
        const lastNumberMatch = expression.match(/(-?\d*\.?\d*)$/);
        const lastNumber = lastNumberMatch ? lastNumberMatch[0] : "";

        if (num === '.') {
            if (lastNumber.includes('.')) return; // no multiple decimals
            expression += lastNumber === "" || lastNumber === "-" ? "0." : ".";
        } else if (num === '00') {
            if (lastNumber === "" || lastNumber === "0" || lastNumber === "-") return; // no leading 00
            if (lastNumber.replace('-', '').length + 2 > MAX_NUMBER_LENGTH) return;
            expression += "00";
        } else {
            if (lastNumber.replace('-', '').length >= MAX_NUMBER_LENGTH) return;
            if (lastNumber === "0") {
                expression = expression.slice(0, -1) + num; // replace leading zero
            } else {
                expression += num;
            }
        }
        updateDisplay();
    }

    function appendOperator(op) {
        if (expression === "") {
            if (op === '-') {
                expression = '-'; // allow a negative first number
                updateDisplay();
            }
            return; // ignore +, *, / with nothing typed yet
        }

        if (justCalculated) {
            justCalculated = false; // continue the calculation from the previous result
        }

        const lastChar = expression.slice(-1);

        if ("+-*/".includes(lastChar)) {
            // Two operators in a row: allow "op then -" for a negative number (e.g. 5*-3),
            // otherwise replace the previous operator with the new one.
            if (op === '-' && lastChar !== '-') {
                expression += op;
            } else {
                expression = expression.slice(0, -1) + op;
            }
            updateDisplay();
            return;
        }

        expression += op;
        updateDisplay();
    }

    function backspace() {
        if (justCalculated) {
            clearDisplay();
            return;
        }
        expression = expression.slice(0, -1);
        updateDisplay();
    }

    function clearDisplay() {
        expression = "";
        justCalculated = false;
        updateDisplay();
    }

    /* ============================================================
       EXPRESSION EVALUATION (tokenizer -> shunting-yard -> RPN eval)
       No eval() is used anywhere.
       ============================================================ */

    function tokenize(expr) {
        const tokens = [];
        let i = 0;
        while (i < expr.length) {
            const char = expr[i];

            if (/\d|\./.test(char)) {
                let num = char;
                i++;
                while (i < expr.length && /\d|\./.test(expr[i])) {
                    num += expr[i];
                    i++;
                }
                tokens.push({ type: 'number', value: parseFloat(num) });
                continue;
            }

            if ("+-*/".includes(char)) {
                const isUnary = char === '-' && (tokens.length === 0 || tokens[tokens.length - 1].type === 'operator');
                if (isUnary) {
                    i++;
                    let num = '-';
                    while (i < expr.length && /\d|\./.test(expr[i])) {
                        num += expr[i];
                        i++;
                    }
                    tokens.push({ type: 'number', value: parseFloat(num) });
                    continue;
                }
                tokens.push({ type: 'operator', value: char });
                i++;
                continue;
            }

            i++; // skip anything unexpected
        }
        return tokens;
    }

    function toRPN(tokens) {
        const output = [];
        const opStack = [];
        const precedence = { '+': 1, '-': 1, '*': 2, '/': 2 };

        tokens.forEach(token => {
            if (token.type === 'number') {
                output.push(token);
            } else {
                while (
                    opStack.length &&
                    precedence[opStack[opStack.length - 1].value] >= precedence[token.value]
                ) {
                    output.push(opStack.pop());
                }
                opStack.push(token);
            }
        });

        while (opStack.length) output.push(opStack.pop());
        return output;
    }

    function evaluateRPN(rpn) {
        const stack = [];
        for (const token of rpn) {
            if (token.type === 'number') {
                stack.push(token.value);
                continue;
            }
            const b = stack.pop();
            const a = stack.pop();
            switch (token.value) {
                case '+': stack.push(a + b); break;
                case '-': stack.push(a - b); break;
                case '*': stack.push(a * b); break;
                case '/':
                    if (b === 0) throw new Error('DIV_ZERO');
                    stack.push(a / b);
                    break;
            }
        }
        return stack[0];
    }

    function evaluateExpression(expr) {
        const tokens = tokenize(expr);
        const rpn = toRPN(tokens);
        return evaluateRPN(rpn);
    }

    function calculate() {
        if (expression === "" || justCalculated) return;

        if (!validateExpression(expression)) {
            flashError("Invalid expression");
            return;
        }

        try {
            const result = evaluateExpression(expression);
            if (!isFinite(result)) throw new Error('DIV_ZERO');

            const rounded = Math.round(result * 100) / 100; // avoid float artifacts like 0.1+0.2
            expression = String(rounded);
            justCalculated = true;
            updateDisplay();
        } catch (err) {
            flashError(err.message === 'DIV_ZERO' ? "Can't divide by zero" : "Invalid expression");
            expression = "";
            justCalculated = false;
        }
    }

    /* ============================================================
       SAVE TRANSACTION — only the final numeric result is saved
       ============================================================ */

    function getFinalAmount() {
        if (expression === "") return null;
        if (!validateExpression(expression)) return null;

        try {
            const result = evaluateExpression(expression);
            return isFinite(result) ? Math.round(result * 100) / 100 : null;
        } catch (e) {
            return null;
        }
    }

    function handleSave() {
        const amount = getFinalAmount();

        if (amount === null || amount <= 0) {
            flashError("Enter a valid amount");
            return;
        }

        document.getElementById('final-amount').value = amount.toFixed(2);
        document.getElementById('transaction-type').value = currentTransactionType;

        // TODO: wire this into your actual save flow, e.g.:
        // document.getElementById('entry-form').submit();
        // or: fetch('save-transaction.php', { method: 'POST', body: new FormData(document.getElementById('entry-form')) })
        console.log(`Saving ${currentTransactionType}: ₹${amount.toFixed(2)}`);

        clearDisplay();
    }

    document.getElementById('save-btn').addEventListener('click', handleSave);

    /* ============================================================
       TRANSACTION TYPE TOGGLE (unchanged behavior, just tracks type)
       ============================================================ */

    function setTransactionType(type) {
        const toggleContainer = document.getElementById('type-toggle');
        const saveBtn = document.getElementById('save-btn');
        currentTransactionType = type;

        if (type === 'income') {
            toggleContainer.classList.remove('is-expense');
            toggleContainer.classList.add('is-income');
            saveBtn.innerText = "Save Income";
            saveBtn.className =
                "flex-[3] h-14 rounded-xl text-white text-label-md font-label-md bg-gradient-to-r from-emerald-500 to-teal-600 hover:shadow-[0_0_20px_rgba(20,184,166,0.3)] transition-all duration-200 transform hover:-translate-y-[1px]";
        } else {
            toggleContainer.classList.remove('is-income');
            toggleContainer.classList.add('is-expense');
            saveBtn.innerText = "Save Expense";
            saveBtn.className =
                "flex-[3] h-14 rounded-xl text-white text-label-md font-label-md bg-gradient-to-r from-red-500 to-rose-600 hover:shadow-[0_0_20px_rgba(239,68,68,0.3)] transition-all duration-200 transform hover:-translate-y-[1px]";
        }
    }

    /* ============================================================
       KEYBOARD SUPPORT
       ============================================================ */

    document.addEventListener('keydown', (e) => {
        // Don't hijack typing in the note field, selects, etc.
        const tag = document.activeElement.tagName;
        if (tag === 'INPUT' || tag === 'SELECT' || tag === 'TEXTAREA') return;

        if (/^[0-9]$/.test(e.key)) {
            appendNumber(e.key);
        } else if (e.key === '.') {
            appendNumber('.');
        } else if (['+', '-', '*', '/'].includes(e.key)) {
            appendOperator(e.key);
        } else if (e.key === 'Enter' || e.key === '=') {
            e.preventDefault();
            calculate();
        } else if (e.key === 'Backspace' || e.key === 'Delete') {
            backspace();
        } else if (e.key === 'Escape') {
            clearDisplay();
        }
    });
    </script>
</body>

</html>