// getting the value of price and cost by 1st function
function getPrice() {
    const cakeTotal = document.getElementById('cake-total').innerText;
    const cakeTotalFloat = parseFloat(cakeTotal);
    const flourCost = document.getElementById('extra-flour-cost').innerText;
    const flourCostFloat = parseFloat(flourCost);
    const sugerCost = document.getElementById('extra-suger-cost').innerText;
    const sugerCostFloat = parseFloat(sugerCost);
    const eggCostTotal = document.getElementById('egg-cost').innerText;
    const eggCostFloat = parseFloat(eggCostTotal);

    const oilCostTotal = document.getElementById('oil-cost').innerText;
    const oilCostFloat = parseFloat(oilCostTotal);
    const bakingCostTotal = document.getElementById('baking-cost').innerText;
    const bakingCostFloat = parseFloat(bakingCostTotal);
    const totalValue = cakeTotalFloat + flourCostFloat + sugerCostFloat + eggCostFloat + oilCostFloat + bakingCostFloat;
    return totalValue;
}

// calculating price by 2nd function 
function calculatePrice() {
    document.getElementById('total-price').innerText = getPrice();
    const calcPrice = document.getElementById('total-price').innerText;
    document.getElementById('total').innerText = calcPrice;
}

// handle flour update events 
document.getElementById('flour1').addEventListener('click', function () {
    document.getElementById('extra-flour-cost').innerText = parseFloat(0);
    calculatePrice();
});
document.getElementById('flour2').addEventListener('click', function () {
    document.getElementById('extra-flour-cost').innerText = parseFloat(180);
    calculatePrice();
});

// handle suger update events 
document.getElementById('good-suger').addEventListener('click', function () {
    document.getElementById('extra-suger-cost').innerText = parseFloat(0);
    calculatePrice();
});
document.getElementById('better-suger').addEventListener('click', function () {
    document.getElementById('extra-suger-cost').innerText = parseFloat(10);
    calculatePrice();
});
document.getElementById('best-suger').addEventListener('click', function () {
    document.getElementById('extra-suger-cost').innerText = parseFloat(15);
    calculatePrice();
});

// handle egg cost update events 
document.getElementById('free-egg').addEventListener('click', function () {
    document.getElementById('egg-cost').innerText = parseFloat(0);
    calculatePrice();
});
document.getElementById('charged-egg').addEventListener('click', function () {
    document.getElementById('egg-cost').innerText = parseFloat(30);
    calculatePrice();
});
// handle oil cost update events 
document.getElementById('oil1-delivery').addEventListener('click', function () {
    document.getElementById('oil-cost').innerText = parseFloat(0);
    calculatePrice();
});
document.getElementById('oil2-delivery').addEventListener('click', function () {
    document.getElementById('oil-cost').innerText = parseFloat(10);
    calculatePrice();
});
// handle baking-powder cost update events 
document.getElementById('baking1-delivery').addEventListener('click', function () {
    document.getElementById('baking-cost').innerText = parseFloat(0);
    calculatePrice();
});
document.getElementById('baking2-delivery').addEventListener('click', function () {
    document.getElementById('baking-cost').innerText = parseFloat(20);
    calculatePrice();
});

// Promo code using system
document.getElementById('login-submit').addEventListener('click', function () {
    // get user input 
    const promoCodeInput = document.getElementById('user-input');
    const userInput = promoCodeInput.value;
    // check exact value 
    if (userInput == 'Jaka') {
        const finalPrice = document.getElementById('total').innerText;
        const totalPercentage = finalPrice * 20 / 100;
        const applyCoupon = finalPrice - totalPercentage;
        document.getElementById('total').innerText = applyCoupon;
        document.getElementById('user-input').value = '';

    }
});