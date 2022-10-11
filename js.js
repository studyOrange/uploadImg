class Stack {
  constructor() {
    this.stack = [];
    this.minStack = [];
    this.top = -1;
  }

  push(element) {
    if (this.minStack.length == 0 || this.minStack[this.top] > element) {
      this.top++;
      this.minStack[this.top] = element;
    } else {
      this.top++;
      this.minStack[this.top] = this.minStack[this.top - 1];
    }

    this.stack[this.top] = element;
  }

  pop() {
    if (this.isEmpty()) return console.log("Stack is Empty");
    let value = this.peek();
    this.top--;
    return value;
  }

  isEmpty() {
    if (this.top == -1) return true;
  }

  size() {
    return this.top + 1;
  }

  peek() {
    return this.isEmpty() ? undefined : this.stack[this.top];
  }

  printElements() {
    let elements = "";
    for (let i = 0; i < this.size(); i++) {
      elements += this.stack[i] + "  ";
    }
    console.log(elements);
  }
  getMinNumber() {
    if (this.isEmpty()) return console.log("Stack is Empty");
    return this.minStack[this.top];
  }
}

let numbers = new Stack();

numbers.push(2);

numbers.push(-1);
numbers.push(3);
numbers.push(0);

numbers.printElements();
console.log(numbers.minStack);

numbers.pop();
numbers.pop();

numbers.push(-100);
numbers.pop();
numbers.pop();
numbers.pop();
numbers.pop();

console.log("############number##########");
numbers.printElements();
console.log(numbers.minStack);

numbers.getMinNumber();

function repeatedNumber(array, number) {
  let result = [];
  array.forEach((ele, index) => {
    if (ele == number) {
      result.push(index);
    }
  });
  result.shift();
  console.log(result);
  return result;
} //  0  1  2  3  4  5
repeatedNumber([1, 3, 1, 3, 4, 3], 3); // [2,5]

function sumNumber(number) {
  let y = number;
  let result = 0;
  let singleNum;
  // while (y > 0) {
  //   singleNum = y % 10;
  //   result += singleNum;
  //   y = Math.floor(y / 10);
  // }
  console.log(number);
  console.log(y % 10);
  console.log((y = Math.floor(y / 10)));
  console.log(y % 10);
  console.log((y = Math.floor(y / 10)));
  console.log(y % 10);
  console.log((y = Math.floor(y / 10)));
  console.log(y % 10);
  console.log((y = Math.floor(y / 10)));
  console.log(y % 10);
  // console.log(result);
  return result;
}
sumNumber(1234);
