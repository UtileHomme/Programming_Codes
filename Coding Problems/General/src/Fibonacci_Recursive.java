//http://www.javawithus.com/programs/fibonacci-series

public class Fibonacci_Recursive {

	public static int Fib(int n)
	{
		if(n==0)
		{
			return 0;
		}
		else if(n==1)
		{
			return 1;
		}
		else
		{
			return Fib(n-1)+Fib(n-2);
		}
	}
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int n=8;
		for(int i=0;i<=n;i++)
		{
			System.out.print(Fib(i)+" ");
		}
	}

}