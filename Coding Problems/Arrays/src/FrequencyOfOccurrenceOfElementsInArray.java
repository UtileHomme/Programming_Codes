
public class FrequencyOfOccurrenceOfElementsInArray {

	public static void main(String[] args) 
	{
		int cnt;
		int a[]={1,2,2,3,3,4,5,6,9,9};
		int n = a.length;
		int freq[] = new int[n];

		for(int i=0;i<n;i++)
		{
			freq[i]=-1;
		}

		for(int i=0;i<n;i++)
		{
			cnt=1;
			for(int j=i+1;j<n;j++)
			{
				if(a[i]==a[j])
				{
					cnt++;
					freq[j]=0;				//set duplicates with freq. = 0
				}
			}

			if(freq[i]!=0)
			{
				freq[i]=cnt;		//for the original element, set it to count value
			}
		}

		System.out.println("The frequency of each element is" +
		"\n");
		for(int i=0;i<n;i++)
		{
			if(freq[i]!=0)
			{
				System.out.println(a[i] + " occurs " + freq[i] + " times ");
			}
		}

	}

}
