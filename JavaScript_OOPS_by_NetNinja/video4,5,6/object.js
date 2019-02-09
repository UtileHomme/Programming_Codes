class User
{
   constructor(email, name)
   {
      this.email = email;
      this.name = name;
      this.score = 0;
   }

   login()
   {
      console.log(this.email, "just logged in");
   }

   logout()
   {
      console.log(this.email, "just logged out");
   }


}

var userOne = new User('ryu@ninjas.com', 'Ryu');
var userTwo = new User('jatin@ninjas.com', 'Jatin');

console.log(userOne.name);
userOne.login();
userTwo.logout();
userTwo.updateScore();


