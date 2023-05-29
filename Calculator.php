<!DOCTYPE html>
<html>
  <head>
    <title>
      Calculator
    </title>
    <link rel="icon" href="img/cal-removebg-preview.png">
    <link rel="stylesheet" type="text/css" href="css/calculator.css">
  </head>
  <body>
    <div class="calculator">
      <input type="text" class="display" disabled />
      <div class="buttons">
        <button class="number">7</button>
        <button class="number">8</button>
        <button class="number">9</button>
        <button class="operator">/</button>
        <button class="number">4</button>
        <button class="number">5</button>
        <button class="number">6</button>
        <button class="operator">*</button>
        <button class="number">1</button>
        <button class="number">2</button>
        <button class="number">3</button>
        <button class="operator">-</button>
        <button class="number">0</button>
        <button class="decimal">.</button>
        <button class="equals">=</button>
        <button class="operator">+</button>
        <button class="scientific" data-operation="sqrt">&#8730;</button>
        <button class="scientific" data-operation="sin">sin</button>
        <button class="scientific" data-operation="cos">cos</button>
        <button class="scientific" data-operation="tan">tan</button>
        <button class="clear">Clear</button>
      </div>
    </div>

    <script>
      const display = document.querySelector(".display");
      const buttons = document.querySelectorAll(".buttons button");

      buttons.forEach(button => {
        button.addEventListener("click", function() {
          const buttonValue = this.innerHTML;
          const operation = this.getAttribute("data-operation");

          if (buttonValue === "Clear") {
            display.value = "";
          } else if (buttonValue === "=") {
            try {
              display.value = eval(display.value);
            } catch (error) {
              display.value = "Error";
            }
          } else if (operation) {
            const value = parseFloat(display.value);
            if (operation === "sqrt") {
              display.value = Math.sqrt(value);
            } else if (operation === "sin") {
              display.value = Math.sin(value * Math.PI / 180);
            } else if (operation === "cos") {
              display.value = Math.cos(value * Math.PI / 180);
            } else if (operation === "tan") {
              display.value = Math.tan(value * Math.PI / 180);
            }
          } else {
            display.value += buttonValue;
          }
        });
      });
    </script>
  </body>
</html>
