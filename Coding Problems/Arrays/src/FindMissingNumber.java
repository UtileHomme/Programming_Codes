/*
 * http://www.geeksforgeeks.org/find-the-missing-number/
 */

public class FindMissingNumber {

	public int MissingNo(int a[], int n)
	{
		int sum = ((n+1)*(n+2))/2;
		
		for(int i=0;i<n;i++)
		{
			sum = sum - a[i];
		}
		return sum;
	}
	
	public static void main(String[] args)
	{
		FindMissingNumber ob = new FindMissingNumber();
		int a[] = {1,2,3,4,6};
		int n = a.length;
		
		int mnum = ob.MissingNo(a,n);
		
		System.out.println("Missing no is " + mnum);
			
	}

}
