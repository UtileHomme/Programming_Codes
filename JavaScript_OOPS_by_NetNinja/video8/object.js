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
      return this;
   }

   logout()
   {
      console.log(this.email, "just logged out");
      return this;
   }

   updateScore()
   {
      this.score++;
      console.log(this.email, 'score is now', this.score);
      return this;
   }
}

class Admin extends User
{
   deleteUser(user)
   {
      users = users.filter(u => {
            return u.email != user.email;
         }
         )
   }
}

var userOne = new User('ryu@ninjas.com', 'Ryu');
var userTwo = new User('jatin@ninjas.com', 'Jatin');
var admin = new Admin('jj@ninjas.com','jiga');

admin.deleteUser(userTwo);

console.log(users);


userOne.login().updateScore().updateScore().logout();

var users = [userOne, userTwo];