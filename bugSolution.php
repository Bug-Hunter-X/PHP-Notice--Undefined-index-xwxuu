function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    if (isset(numbers[i])) {
        sum += numbers[i];
    }
  }
  return sum;
}

const numbers = [1, 2, 3, 4, 5];
const sum = calculateSum(numbers);
console.log("Sum:", sum); // Output: Sum: 15

const numbers2 = [1,2,3,4,"5"];
const sum2 = calculateSum(numbers2);
console.log("Sum:", sum2); //Output:Sum: 155