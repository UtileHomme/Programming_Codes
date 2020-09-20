/* If a customer has more than 100 points,
 they are a 'gold' customer, otherwise
 they are a 'silver' customer
*/

let points = 100;
let type = points > 100 ? 'gold' : 'silver';
console.log(type);