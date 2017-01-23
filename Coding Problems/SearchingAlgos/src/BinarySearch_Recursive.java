//Time complexity is O(log n)

/*
 * http://quiz.geeksforgeeks.org/binary-search/
 */

public class BinarySearch_Recursive {

		//binary search recursive function
	static int BSearch(int a[], int l, int h, int x)
	{
		int mid = l + ((h-l)/2);
		if(l<=h)
		{
			if(a[mid]==x)
			{
				return mid;
			}
			else if(a[mid]<x)
			{
				return BSearch(a,mid+1,h,x);		//element is in the upper half
			}
			else
			{
				return BSearch(a,l,mid-1,x);		//element is in the lower half
			}

		}
		return -1;
	}
	
	public static void main(String[] args) 
	{
		// TODO Auto-generated method stub
		int a[]= {5,6,99,103,144};		//should be sorted
		int n = a.length;
		int x = 345;
		int k = BSearch(a,0,n-1,x);
		
		if(k!=-1)
		{
			System.out.println("Element found at position " + (k+1));
		}
		else
		{
			System.out.println("Element not found");
		}

	}
}
