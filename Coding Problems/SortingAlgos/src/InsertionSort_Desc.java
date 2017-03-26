/*
 * http://quiz.geeksforgeeks.org/insertion-sort/
 * 
 */
public class InsertionSort_Desc {

	void I_Sort(int a[])
	{
		int n = a.length;
		int j,key;
		for(int i=1;i<n;i++)
		{
			key = a[i];
			j = i-1;
			while(j>=0 && a[j]<key)
			{
				a[j+1] = a[j];
				j = j-1;
			}
			
			a[j+1] = key;
		}
	}
	
	void printArray(int a[])
	{
		int n = a.length;
		System.out.println("The array contents are ");
		for(int i=0;i<n;i++)
		{
			System.out.println(a[i]);
			
		}
		System.out.println();
	}
	public static void main(String[] args) 
	{
		int a[] = {12,11,13,5,6};
		InsertionSort_Desc ob = new InsertionSort_Desc();
		
		ob.I_Sort(a);
		ob.printArray(a);
	}

}