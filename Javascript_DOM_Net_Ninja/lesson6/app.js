const bookList = document.querySelector('#book-list');

//grab the parent Node of an element
console.log('the parent is:', bookList.parentNode);

OR

//grab parent of parent
console.log('the parent is:', bookList.parentElement.parentElement);

console.log(bookList.childNodes);
