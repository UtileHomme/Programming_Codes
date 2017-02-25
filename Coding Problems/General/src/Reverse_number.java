//http://www.java2novice.com/java-interview-programs/reverse-number/

public class Reverse_number {

	public int reverseNumber(int number)
	{
		int rev=0;
		while(number!=0)
		{
			rev = (rev*10)+(number%10);
			number = number/10;
		}
		return rev;
	}
	
	public static void main(String[] args) {
		Reverse_number ob = new Reverse_number();
		System.out.println("Reversed number "+ ob.reverseNumber(1934));

	}

}
