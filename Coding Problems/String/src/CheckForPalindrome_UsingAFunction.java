/*
 * http://www.programmingsimplified.com/java/source-code/java-program-check-palindrome
 */

import java.util.Scanner;

public class CheckForPalindrome_UsingAFunction 
{
	public static void main(String args[])
	{
		String orig, rev="";
		Scanner in = new Scanner(System.in);
		
		System.out.println("Enter a string");
		orig = in.nextLine();
		
		int n = orig.length();
		
		for(int i=n-1; i>=0;i--)
		{
			rev = rev + orig.charAt(i);
		}
		
		
		if(orig.equals(rev))
		{
			System.out.println("Palindrome");
		}
		else
		{
			System.out.println("Not a Palindrome");
		}
	}
}
