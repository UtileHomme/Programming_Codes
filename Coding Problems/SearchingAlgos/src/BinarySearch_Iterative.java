//Time complexity is O(1) - constant time

/*
 * http://quiz.geeksforgeeks.org/binary-search/
 */

public class BinarySearch_Iterative {

	int Bsearch(int a[], int x)
	{
		int l = 0;
		int n = a.length;
		int h = n-1;
		
		while(l<=h)
		{
			int mid = l + ((h-l)/2);
			if(a[mid]==x)
			{
				return mid;
			}
			else if (a[mid]<x)
			{
				l=mid+1;
			}
			else
			{
				h = mid-1;
			}
		}
		return -1;
	}
	
	public static void main(String[] args) 
	{
		BinarySearch_Iterative ob = new BinarySearch_Iterative();
		int a[] = {33,55,67,88,99,123};
		int x = 456;
		int k = ob.Bsearch(a,x);
		if(k!=-1)
		{
			System.out.println("Element is at position " + (k+1));
		}
		else
		{
			System.out.println("Element not found");
		}

	}

}
