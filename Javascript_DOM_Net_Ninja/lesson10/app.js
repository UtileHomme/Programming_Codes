var btns = document.querySelectorAll('#book-list.delete');

Array.from(btns).forEach(function()
{
    btns.addEventListener('click',function(e)
    {
        const li = e.target.parentElement;

        li.parentNode.removeChild(li);
    }
    );
}
);

//How to prevent the default work of an element

const link = document.querySelector('#page-banner a');

link.addEventListener('click',function(e)
{
e.preventDefault();
console.log('navigation to', e.target.textContent,'was prevented');
}
);