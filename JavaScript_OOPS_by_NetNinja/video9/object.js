function User(email, name)
{
   this.email = email;
   this.name = name;
   this.online = false;

   this.login = function()
   {
      console.log(this.email, 'has logged in');
   }
}

var userOne = new User('ryu@ninjas.com', 'Ryu');
var userTwo = new User('jatin@ninjas.com', 'Jatin');

console.log(userOne);
userTwo.login();