//add book-list

const addForm = document.forms['add-book'];

addForm.addEventListener("submit",function(e)
{
    e.preventDefault();
    const value = addForm.querySelector('input[type="text"]').value();

    //create elements

    const li = document.createElement('li');
    const bookName = document.createElement('span');
    const deleteBtn = document.createElement('span');

    // add content
    deleteBtn.textContent = "delete";

    bookName.textContent = value;

    // add classes

    bookName.classList.add('name');
    deleteBtn.classList.add('delete');

    //append to dom

    li.appendChild(bookName);
    li.appendChild(deleteBtn);

    list.appendChild(li);


}
);