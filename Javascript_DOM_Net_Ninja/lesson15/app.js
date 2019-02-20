const list = document.querySelector('#book-list ul');

//hide books

const hideBox = document.querySelector('#hide');
hideBox.addEventListener('change',function(e)
{
    if(hideBox.checked)
    {
        list.style.display = "none";
    }
    else
    {
        list.style.display = "initial";
    }
}
);

const list = document.querySelector('#book-list ul');


