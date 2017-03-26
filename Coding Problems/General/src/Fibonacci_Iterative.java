//http://www.javawithus.com/programs/fibonacci-series

public class Fibonacci_Iterative {

	public static void Fib(int n)
	{
		if(n==0)
		{
			System.out.println("0");
		}
		else if(n==1)
		{
			System.out.println("0 1");
		}
		else
		{
			System.out.print("0 1");
			int a = 0;
			int b = 1;
			for(int i=1;i<n;i++)
			{
				int c = a+b;
				a=b;
				b=c;
				System.out.print(" "+c+" ");
			}
		}
		
		}

		public static void main(String[] args) {
			// TODO Auto-generated method stub
			System.out.println("Enter the number of terms for which fibonnacci series is to be found");
			int n=8;
			Fib(n);
		}

	}