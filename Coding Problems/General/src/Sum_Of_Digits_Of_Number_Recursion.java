//http://java2novice.com/java-interview-programs/number-sum-recursive/

public class Sum_Of_Digits_Of_Number_Recursion 
{
	int sum=0;
	
	public int getSum(int num)
	{
		if(num==0)
		{
			return sum;
		}
		else
		{
			sum = sum+(num%10);
			getSum(num/10);
		}
		return sum;
	}
	public static void main(String[] args) 
	{
		// TODO Auto-generated method stub
		Sum_Of_Digits_Of_Number_Recursion ob = new Sum_Of_Digits_Of_Number_Recursion();
		System.out.println("Sum is: "+ob.getSum(223)); 
	}

}
