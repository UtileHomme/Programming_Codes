// const square = function(x)
// {
//     return x * x;
// };

//Arrow ES6 format
// const square = (x) => {
//     return x*x;
// };

//Arrow ES6 format - shorthand format
const square = (x) => x*x;

console.log(square(3));

// const event = {
//     name: 'Birthday Party',
//     printGuestList : function()
//     {
//         console.log('Guest List For ' + this.name);
//     }
// };


//Another way of creating the same
const event = {
    name: 'Birthday Party',
    guestList : ['Andrew', 'Jen', 'Mike'],
    printGuestList()
    {
        console.log('Guest List For ' + this.name);

        this.guestList.forEach((guest) =>
        {
            console.log(guest + ' is attending ' + this.name);
        }
        );
    }
};

event.printGuestList();

