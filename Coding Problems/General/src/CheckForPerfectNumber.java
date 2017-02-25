//http://java2novice.com/java-interview-programs/perfect-number/

public class CheckForPerfectNumber 
{
	public boolean isPerfectNumber(int n)
	{
		int temp = 0;
		for(int i=1;i<=n/2;i++)
		{
			if(n%i==0)
			{
				temp = temp + i;
			}
		}
		
		if(temp==n)
		{
			System.out.println("Perfect number");
			return true;
		}
		else
		{
			System.out.println("Not a Perfect number");
			return false;
		}
	}
	
	public static void main(String args[])
	{
		CheckForPerfectNumber ob = new CheckForPerfectNumber();
		System.out.println(ob.isPerfectNumber(28));
	}
}
