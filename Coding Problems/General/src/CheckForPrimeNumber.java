//http://java2novice.com/java-interview-programs/is-prime-number/

public class CheckForPrimeNumber 
{
	public boolean isPrime(int num)
	{
		for(int i=2;i<=num/2;i++)
		{
			if(num%i==0)
			{
				return false;
			}
		}
		return true;
	}
	
	public static void main(String args[])
	{
		CheckForPrimeNumber ob = new CheckForPrimeNumber();
		System.out.println("Is 17 prime number? "+ob.isPrime(17));
	}
}