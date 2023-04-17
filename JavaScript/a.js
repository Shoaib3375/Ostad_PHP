function multiplicationTable(num) {
    for (var i = 1; i <= 10; i++) {
        var product = num * i;
        console.log(num + " x " + i + " = " + product);
    }
}

// Test the function with different input numbers
multiplicationTable(5);
multiplicationTable(8);
multiplicationTable(3);
