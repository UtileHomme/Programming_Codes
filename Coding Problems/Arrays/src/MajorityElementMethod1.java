/*
 * http://www.geeksforgeeks.org/majority-element/
 * 
 * The basic solution is to have two loops and keep track of maximum count
 *  for all different elements. If maximum count becomes greater than n/2 
 *  then break the loops and return the element having maximum count. 
 *  If maximum count doesn’t become more than n/2 
 *  then majority element doesn’t exist.

	Time Complexity: O(n*n).
	Auxiliary Space : O(1).
 * 
 */
public class MajorityElementMethod1 {

	public static void main(String[] args) 
	{
		int cnt;
		int flag = 0;
		int a[]={1,2,2,3,3,2,2,2,2,9};
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

		for(int i=0;i<n;i++)
		{
			if(freq[i]!=0 && freq[i]>n/2)
			{
				System.out.println("Majority element is " + a[i]);
				flag=1;
				break;
			}
			else
			{
				flag=0;
			}
		}
		if(flag==0)
		{
			System.out.println("No majority element found");
		}
	}

}
