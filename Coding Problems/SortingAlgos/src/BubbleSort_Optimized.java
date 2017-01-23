/*
 * http://quiz.geeksforgeeks.org/bubble-sort/
 * 
 * The function always runs O(n^2) time even if the array is sorted. It can be optimized by stopping the algorithm if inner loop didn’t cause any swap.
 */

public class BubbleSort_Optimized {

	void BubSort(int a[])
	{
		int n=a.length;
		boolean swap = false;
		for(int i=0;i<n-1;i++)
		{
			for(int j=0;j<n-i-1;j++)
			{
				if(a[j]>a[j+1])		//check if present element is more than next element
				{
					//if yes , swap
					int temp = a[j];
					a[j] = a[j+1];
					a[j+1] = temp;
					swap = true;
				}
				//by the end of this loop, the largest element will be at the end
			}
			if(swap==false)
			{
				break;
			}
		}
	}
	
	void printArray(int a[])
	{
		System.out.println("The array is \n");
		for(int i=0;i<a.length;i++)
		{
			System.out.println(a[i]);
			System.out.println();
		}
	}

	public static void main(String[] args) 
	{
		// TODO Auto-generated method stub
		BubbleSort_Optimized ob = new BubbleSort_Optimized();
		int a[] = {9,2,88,22,11};
		ob.BubSort(a);
		
		ob.printArray(a);
	}

}
