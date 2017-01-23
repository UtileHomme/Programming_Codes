/*
 * http://quiz.geeksforgeeks.org/selection-sort/
 * 
 * Time Complexity: O(n2) as there are two nested loops.
   Auxiliary Space: O(1)
 */
public class SelectionSort_Asc {

	void SelSort(int a[])
	{
		int n=a.length;
		for(int i=0;i<n-1;i++)  //for traversing the elements from 1st pos to 2nd last pos
		{
			int min=i;
			for(int j=i+1;j<n;j++) //checks for all elements after Present min element and sorts them
			{
				if(a[j]<a[min])		//if the element next to the Present min. element is less than it
				{
					min = j;
				}
			}
			int t = a[min];
			a[min]=a[i];
			a[i]=t;
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
		SelectionSort_Asc ob = new SelectionSort_Asc();
		
		int a[] = {64,25,12,22,11};
		ob.SelSort(a);
		ob.printArray(a);
		
	}

}
