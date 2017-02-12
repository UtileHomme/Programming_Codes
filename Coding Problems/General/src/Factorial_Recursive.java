//http://www.javawithus.com/programs/factorial

import java.util.Scanner;

public class Factorial_Recursive {

	public static int factorial(int n)
	{
		if(n==0)
		{
			return 1;
		}
		else
		{
			return n*factorial(n-1);
		}
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner in = new Scanner(System.in);
		
		System.out.println("Enter the number for which factorial is to be found");
		
		int n = in.nextInt();
		
		int k = factorial(n);
		
		System.out.println("The factorial is "+k);
	}

}
