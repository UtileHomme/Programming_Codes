//http://www.java2novice.com/java-interview-programs/string-reverse-recursive/

public class ReverseString_Using_Recursion {

	String rev = "";

	public String revString(String str)
	{
		if(str.length()==1)
		{
			return str;
		}
		else
		{
			rev += str.charAt(str.length()-1)+revString(str.substring(0,str.length()-1));
			return rev;
		}
	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		ReverseString_Using_Recursion ob = new ReverseString_Using_Recursion();
		String r = ob.revString("Jatin");
		System.out.println("The reversed string is " + r);
	}

}