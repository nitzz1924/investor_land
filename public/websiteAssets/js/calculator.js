// Get input and range elements
const totalPriceInput = document.getElementById("totalPrice");
const totalPriceRange = document.getElementById("totalPriceRange");
const loanPeriodInput = document.getElementById("loanPeriod");
const loanPeriodRange = document.getElementById("loanPeriodRange");
const downPaymentInput = document.getElementById("downPayment");
const downPaymentRange = document.getElementById("downPaymentRange");
const interestRateInput = document.getElementById("interestRate");
const interestRateRange = document.getElementById("interestRateRange");

// Synchronize input and range values
totalPriceInput.addEventListener("input", () => {
    totalPriceRange.value = totalPriceInput.value;
    calculateMortgage();
});

totalPriceRange.addEventListener("input", () => {
    totalPriceInput.value = totalPriceRange.value;
    calculateMortgage();
});

loanPeriodInput.addEventListener("input", () => {
    loanPeriodRange.value = loanPeriodInput.value;
    calculateMortgage();
});

loanPeriodRange.addEventListener("input", () => {
    loanPeriodInput.value = loanPeriodRange.value;
    calculateMortgage();
});

downPaymentInput.addEventListener("input", () => {
    downPaymentRange.value = downPaymentInput.value;
    calculateMortgage();
});

downPaymentRange.addEventListener("input", () => {
    downPaymentInput.value = downPaymentRange.value;
    calculateMortgage();
});

interestRateInput.addEventListener("input", () => {
    interestRateRange.value = interestRateInput.value;
    calculateMortgage();
});

interestRateRange.addEventListener("input", () => {
    interestRateInput.value = interestRateRange.value;
    calculateMortgage();
});

function calculateMortgage() {
    const totalPrice = parseFloat(totalPriceInput.value);
    const loanPeriod = parseFloat(loanPeriodInput.value);
    const downPayment = parseFloat(downPaymentInput.value);
    const interestRate = parseFloat(interestRateInput.value);

    const loanAmount = totalPrice - downPayment;
    const monthlyInterestRate = interestRate / 100 / 12;
    const numberOfPayments = loanPeriod * 12;

    const monthlyPayment =
        (loanAmount * monthlyInterestRate) /
        (1 - Math.pow(1 + monthlyInterestRate, -numberOfPayments));

    const totalLoanAmount = monthlyPayment * numberOfPayments;

    document.getElementById("monthlyPayment").innerText =
        monthlyPayment.toLocaleString("en-IN", {
            maximumFractionDigits: 0,
        });
    document.getElementById("totalLoanAmount").innerText =
        totalLoanAmount.toLocaleString("en-IN", {
            maximumFractionDigits: 0,
        });

    updateChart(monthlyPayment * numberOfPayments - loanAmount, loanAmount);
}

function updateChart(interest, principal) {
    const ctx = document.getElementById("paymentChart").getContext("2d");
    if (window.myChart) {
        window.myChart.destroy();
    }
    window.myChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: ["Interest", "Principal"],
            datasets: [
                {
                    data: [interest, principal],
                    backgroundColor: ["#ED7D3A", "#726555"],
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        },
    });
}

// Initial calculation
calculateMortgage();
