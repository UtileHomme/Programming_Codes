//Time complexity is O(n)

/*
 * http://quiz.geeksforgeeks.org/linear-search/
 */

import java.util.Scanner;


public class LinearSearch_usingLoops 
{
	public static void main(String args[])
	{
		int i = 0;
		System.out.println("Enter the size of the array");
		
		Scanner input = new Scanner(System.in);
		
		int n = input.nextInt();
		
		int a[] = new int[n];
		
		int flag = 0;
		System.out.println("Enter the elements of the array \n");
		
		for(i=0;i<n;i++)
		{
			a[i] = input.nextInt();
			System.out.println();
		}
		
		System.out.println("Enter the element to be searched");
		
		int k = input.nextInt();
		
		for(i=0;i<n;i++)
		{
			if(a[i]==k)
				
				//this checks for each element of the array
			{
				flag=1;
				break;
			}
			
		}
		
		if(flag==1)
		{
			System.out.println("Element exists at position " + (i+1));
		}
		else
		{
			System.out.println("Element not found");
		}
		
	}
}
