function User(email, name)
{
   this.email = email;
   this.name = name;
   this.online = false;
}

User.prototype.login = function()
{
   this.online = true;

   console.log(this.email, 'has logged in');

}

User.prototype.logout = function()
{
   this.online = true;

   console.log(this.email, 'has logged out');

}

function Admin(...args)
{
   //runs all user functions
   User.apply();
}

var userOne = new User('ryu@ninjas.com', 'Ryu');
var userTwo = new User('jatin@ninjas.com', 'Jatin');
var admin = new Admin('df@gmail.com', 'df');



console.log(userOne);
userTwo.login();