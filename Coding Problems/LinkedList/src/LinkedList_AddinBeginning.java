/*
 * http://quiz.geeksforgeeks.org/linked-list-set-2-inserting-a-node/
 * 
 * Time complexity of push() is O(1) as it does constant amount of work.
 */
public class LinkedList_AddinBeginning 
{
	Node head;
	
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
	
	void printList()
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
	
	void push(int new_data)
	{
		
		Node new_node = new Node(new_data);
		new_node.next = head;
		head = new_node;
	}
	
	public static void main(String args[])
	{
		LinkedList_AddinBeginning ob = new LinkedList_AddinBeginning();
		
		ob.push(25);
	
		ob.printList();
		
		ob.push(20);

		ob.printList();
		
		ob.push(15);

		ob.printList();
		
		ob.push(10);
		
		ob.printList();
	}
}
