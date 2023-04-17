/**
 * Create a JavaScript function called "multiplicationTable" that takes a single argument "num" (an integer) as input.
 * 
 * Inside the function, create a for loop that iterates from 1 to 10.
 * 
 * Inside the loop, multiply the current iteration number by the input "num" to generate the product.
 * 
 * Log the product to the console in the format "num x iteration = product".
 * 
 * Test the function with different input numbers to generate multiplication tables.
 */

function multiplicationTable(num) {
    for (let i = 1; i <= 10; i++) { 
      const product = num * i; 
      console.log(num + ' x ' + i + ' = ' + product); 
    }
  }
  
// Example usage
multiplicationTable(5); 
  
// Output   
// 5 x 1 = 5
// 5 x 2 = 10
// 5 x 3 = 15
// 5 x 4 = 20
// 5 x 5 = 25
// 5 x 6 = 30
// 5 x 7 = 35
// 5 x 8 = 40
// 5 x 9 = 45
// 5 x 10 = 50

  