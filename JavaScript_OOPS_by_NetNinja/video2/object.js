var userOne = {
    email: 'ryu@ninjas.com',
    name: 'Ryu',

    login()
    {
       console.log(this.email, 'has logged in');
    },

    logout()
    {
       console.log(this.email, 'has logged out');
    }
};

var userTwo = {
    email: 'yoshi@ninjas.com',
    name: 'Ryu',

    login()
    {
       console.log(this.email, 'has logged in');
    },

    logout()
    {
       console.log(this.email, 'has logged out');
    }
};

userOne.name = "Jatin";
userOne['email'] = "jatinsharma@healthheal.in"
console.log(userOne.name, userOne.email);

//property of the UserOne object
var prop='name';

console.log(userOne[prop]);

