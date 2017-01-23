/*
 * http://www.geeksforgeeks.org/write-a-program-to-reverse-an-array-or-string/
 * 
 * Time Complexity: O(n)
 */

public class ReverseArray_Recursive
{
	void reverseArray(int arr[], int start , int end)
	{
		 int temp;
	        if (start >= end)
	            return;
	        temp = arr[start];
	        arr[start] = arr[end];
	        arr[end] = temp;
	        reverseArray(arr, start+1, end-1);
	}
	
	void printArray(int arr[], int size)
	{
		for (int i=0; i < size; i++)
			System.out.print(arr[i] + " ");
		System.out.println("");
	}


	public static void main(String[] args) 
	{
		ReverseArray_Recursive ob = new ReverseArray_Recursive();

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
