//Time complexity is O(n)

/*
 * http://quiz.geeksforgeeks.org/linear-search/
 */

import java.util.Scanner;

public class LinearSearch_UsingFunctions 
{
	public static void main(String args[])
	{
		int a[] = {5,6,44,23,11};
		
		Scanner input = new Scanner(System.in);
		
		System.out.println("Enter the element to be searched");
		
		int k = input.nextInt();
		
		int l = LSearch(a,k);
		
		if(l!=-1)
		{
			System.out.println("Element found at position " +(l+1));
		}
		else
		{
			System.out.println("Element not found");
		}
	}

	static int LSearch(int a[], int k)
	{
		for(int i=0;i<a.length;i++)
		{
			if(a[i]==k)
				//this checks for each element of the array
			{
				return i;
				
				//if the element is found, return the position
			}
		}
		return -1;
	}
}
