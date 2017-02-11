//http://quiz.geeksforgeeks.org/merge-sort/


public class MergeSort_Asc {

	// Merges two subarrays of arr[].
    // First subarray is arr[l..m]
    // Second subarray is arr[m+1..r]
	void Merge(int a[], int l, int m, int h)
	{
		 // Find sizes of two subarrays to be merged
		int n1 = m-l+1;
		int n2 = h-m;

        /* Create temp arrays */
		int L[] = new int[n1];
		int R[] = new int[n2];

		/*Copy data to temp arrays*/
		for(int i=0;i<n1;i++)
		{
			L[i]=a[l+i];
		}

		for(int j=0;j<n2;j++)
		{
			R[j]=a[j+m+1];
		}

		/* Merge the temp arrays */
		 
        // Initial indexes of first and second subarrays
		int i=0,j=0;
		
		// Initial index of merged subarry array
		int k=l;

		while(i<n1 && j<n2)
		{
			if(L[i]<=R[j])
			{
				a[k]=L[i];
				i++;
			}
			else
			{
				a[k]=R[j];
				j++;
			}
			k++;
		}

		/* Copy remaining elements of L[] if any */
		while(i<n1)
		{
			a[k]=L[i];
			i++;
			k++;
		}

		/* Copy remaining elements of L[] if any */
		while(j<n2)
		{
			a[k]=R[j];
			j++;
			k++;
		}
	}

	// Main function that sorts arr[l..r] using
    // merge()
	void sort(int a[],int l,int h)
	{
		if(l<h)
		{
			// Find the middle point
			int mid = (l+h)/2;
			
            // Sort first and second halves
			sort(a,l,mid);
			sort(a,mid+1,h);

			// Merge the sorted halves
			Merge(a,l,mid,h);
		}
	}

    /* A utility function to print array of size n */
	static void printArray(int a[])
	{
		int n=a.length;
		for(int i=0;i<n;i++)
		{
			System.out.println(a[i]+" ");
		}
	}


	public static void main(String[] args) 
	{
		int a[]= {12,11,13,33,1,4,6};
		System.out.println("Given array");
		printArray(a);

		MergeSort_Asc ob = new MergeSort_Asc();
		ob.sort(a,0,a.length-1);

		System.out.println("\nSorted array");
		printArray(a);
	}
}
