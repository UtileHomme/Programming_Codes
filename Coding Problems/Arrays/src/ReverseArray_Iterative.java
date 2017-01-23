/*
 * http://www.geeksforgeeks.org/write-a-program-to-reverse-an-array-or-string/
 * 
 * Time Complexity: O(n)
 */

public class ReverseArray_Iterative 
{
	void reverseArray(int a[], int start , int end)
	{
		int temp;
		while(start<end)
		{
			temp = a[start];
			a[start]=a[end];
			a[end]=temp;
			start++;
			end--;
		}
	}
	
	void printArray(int arr[], int size)
	{
		for (int i=0; i < size; i++)
			System.out.print(arr[i] + " ");
		System.out.println("");
	}


	public static void main(String[] args) 
	{
		ReverseArray_Iterative ob = new ReverseArray_Iterative();

		int flag=1;
		int a[]= {1,2,3,4,5,6};
		int n = a.length;
		int start = 0;
		int end = n-1;
		int b[] = a.clone(); 

		System.out.println("The initial array is ");
		ob.printArray(b,n);

		ob.reverseArray(a,start,end);

		System.out.println("The reversed array is");
		ob.printArray(a, n);	
		
	}

}
