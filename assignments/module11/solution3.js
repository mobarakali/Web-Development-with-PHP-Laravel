function multiplicationTable(num) {
    let table = '';
    for (let i = 1; i <= 10; i++) {
      const product = num * i;
      table += `<tr><td>${num} x ${i}</td><td>=</td><td>${product}</td></tr>`;
    }
    return table;
  }
  
  const inputNum = prompt("Please Enter a number and this will print the Multiplication Table of your given number:");
  const num = parseInt(inputNum);
  
  const result = multiplicationTable(num);
  
  const tableContainer = document.getElementById('table-container');
  tableContainer.innerHTML = `<table>${result}</table>`;
  