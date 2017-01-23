/*
 * http://www.geeksforgeeks.org/find-the-number-occurring-odd-number-of-times/
 */

public class NumberOccurringOddTimes 
{
	public static void main(String[] args) 
	{
		int cnt;
		int flag=0;
		int a[]={1,1,2,2,2,3,3,4,4,5,5,6,6,9,9};
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
			if(freq[i]!=0 && freq[i]%2!=0)
			{
				System.out.println("Element with odd occurrences is " + a[i]);
				flag = 1;
				break;
			}
			else
			{
				flag = 0;
			}
		}
		
		if(flag==0)
		{
			System.out.println("No element with odd occurrences");
		}
	}
}