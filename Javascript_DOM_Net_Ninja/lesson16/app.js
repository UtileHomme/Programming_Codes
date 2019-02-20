
//filter books
const searchBar = document.forms['search-books'].querySelector('input');
searchBar.addEventListener('keup',function(e)
{
    const term = e.target.value.toLowerCase();
    const books = list.getElementsByTagName('li');

    Array.from(books).forEach(function(book)
    {
        const title = book.firstElementChild.textContent;
        if(title.toLowerCase().indexOf(term)!=-1)
        {
            book.style.display = "block";
        }
        else
        {
            book.style.display = "none";
        }
    }
    );
}
);








