/*
 * http://www.programmingsimplified.com/java/source-code/java-program-check-palindrome
 */

import java.util.Scanner;


public class CheckForPalindrome_WithoutFunction 
{
	public static void main(String args[])
	{
		String orig, rev="";
		Scanner in = new Scanner(System.in);
		
		System.out.println("Enter a string");
		orig = in.nextLine();
		
		int n = orig.length();
		
		int i,beg,end,mid;
		
		beg=0;
		end = n-1;
		mid = (beg+end)/2;
		
		for(i=beg; i<=mid;i++)
		{
			if(orig.charAt(beg)==orig.charAt(end))
			{
				beg++;
				end--;
			}
			else
			{
				break;
			}
		}
		
		if (i == mid + 1) {
		      System.out.println("Palindrome");
		    }
		    else {
		      System.out.println("Not a palindrome");
		    } 	
	}
}
