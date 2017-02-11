

//http://quiz.geeksforgeeks.org/stack-set-1/

import java.util.*;

public class Stack_LinkedLists {

	static Node head;

	static class Node
	{
		int data;
		Node next;

		Node(int d)
		{
			data = d;
			next = null;
		}
	}



	public void insert(int new_data)
	{
		Node new_node = new Node(new_data);
		new_node.next = head;
		head = new_node;
	}

	public void delete()
	{
		if(head!=null)
		{
			System.out.println("The popped element is " + head.data);
			head = head.next;
		}
	}

	void display()
	{
		System.out.println("The Linked List now is ");
		Node temp = head;
		while(temp!=null)
		{
			System.out.print(" " + temp.data);
			temp = temp.next;
		}
		System.out.println();
	}

	public void peek()
	{
		if(head!=null)
		{
			System.out.println("The topmost element is " + head.data);
		}
	}

	public static void main(String[] args) 
	{
		Stack_LinkedLists ob = new Stack_LinkedLists();
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
			ob.insert(in.nextInt());
			break;

			case 2: ob.delete();
			break;

			case 3: ob.peek();
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


