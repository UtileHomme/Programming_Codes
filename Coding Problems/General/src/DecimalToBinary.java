//http://java2novice.com/java-interview-programs/decimal-to-binary/

public class DecimalToBinary {

	public void printBinaryFormat(int num)
	{
		int binary[] = new int[25];
		int index = 0;
		while(num>0)
		{
			binary[index++]=num%2;
			num = num/2;
		}
		
		int i;
		for(i=index-1;i>=0;i--)
		{
			System.out.print(binary[i]);
		}
	}
	
	public static void main(String[] args)
	{
		// TODO Auto-generated method stub
		DecimalToBinary ob = new DecimalToBinary();
		ob.printBinaryFormat(25);

	}
	
	

}
