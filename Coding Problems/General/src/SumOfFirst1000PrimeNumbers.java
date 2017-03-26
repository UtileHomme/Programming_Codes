//http://java2novice.com/java-interview-programs/prime-sum/

public class SumOfFirst1000PrimeNumbers {

	public static boolean isPrime(int num)
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
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int num=2;
		int count=0;
		long sum=0;
		while(count<1000)
		{
			if(isPrime(num))
			{
				sum = sum+num;
				count++;
			}
			num++;
		}
		System.out.println(sum);
	}

}