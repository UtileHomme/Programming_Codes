//http://quiz.geeksforgeeks.org/quick-sort/

public class QuickSort_Desc {

	int partition(int a[], int low, int high)
	{
		int pivot = a[high];
		int i = (low-1);

		for(int j=low; j<=(high-1);j++)
		{
			if(a[j]>=pivot)
			{
				i++;
				int temp = a[i];
				a[i]=a[j];
				a[j]=temp;
			}
		}

		int temp = a[i+1];
		a[i+1]= a[high];
		a[high]=temp;

		return i+1;
	}

	void sort(int a[],int low,int high)
	{
		if(low<high)
		{
			int pi = partition(a,low,high);

			sort(a,low,pi-1);
			sort(a,pi+1,high);
		}
	}

	static void printArray(int arr[])
	{
		int n = arr.length;
		for (int i=0; i<n; ++i)
			System.out.print(arr[i]+" ");
		System.out.println();
	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int arr[] = {10, 7, 8, 9, 1, 5};
		int n = arr.length;

		QuickSort_Desc ob = new QuickSort_Desc();
		ob.sort(arr, 0, n-1);

		System.out.println("sorted array");
		printArray(arr);
	}

}
