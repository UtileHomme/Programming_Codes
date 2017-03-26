//http://quiz.geeksforgeeks.org/stack-set-1/

import java.util.Scanner;

public class Stack_Arrays {

	private int top;
	private int item[];

	Stack_Arrays(int size)
	{
		top=-1;
		item = new int[size];
	}

	void pushItem(int data)
	{
		if(top==item.length-1)
		{
			System.out.println("Stack is full");
		}
		else
		{
			item[++top]=data;
			System.out.println("Pushed item is "+ item[top]);
		}
	}

	int popItem()
	{
		if(top<0)
		{
			System.out.println("Stack Underflow");
			return 0;
		}
		else
		{
			System.out.println("Pop item " + item[top]);
			return item[top--];
		}
	}

	int peekItem()
	{
		if(top<0)
		{
			System.out.println("Stack Underflow");
			return 0;
		}
		else
		{
			System.out.println("Top item is " + item[top]);
			return 1;
		}
	}

	public void display()
	{
		for(int i=0;i<=top;i++)
		{
			System.out.println(item[i]+" ");

		}
	}

	public static void main(String[] args) 
	{
		Stack_Arrays ob = new Stack_Arrays(5);
		boolean yes = true;
		int ch;

		Scanner in = new Scanner(System.in);

		do
		{
			System.out.println("1.Push \n 2. Pop \n 3. Peek \n 4. Display \n");
			System.out.println("Enter choice");
			ch = in.nextInt();

			switch(ch)
			{
			case 1: System.out.println("Enter push item");
			ob.pushItem(in.nextInt());
			break;

			case 2: ob.popItem();
			break;

			case 3: ob.peekItem();
			break;
			case 4: ob.display();
			break;
			case 5: yes = false;
			break;
			default: System.out.println("Invalid choice");
			break;
			}	
		}while(yes==true);

	}

}