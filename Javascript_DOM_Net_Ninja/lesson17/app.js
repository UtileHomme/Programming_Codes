//tabbed content

const tabs = document.querySelector('.tabs');
const panels = document.querySelectorAll('.panel');

tabs.addEventListener('click',function()
{
    if(e.target.tagName == "li")
    {
        const targetPanel = document.querySelector(e.target.dataset.target);

        panels.forEach(function(panel)
           {
               if(panel == targetPanel)
               {
                   panel.classList.add('active');
               }
               else
               {
                   panel.classList.remove('active');
               }
           }
        );

    }
}
);