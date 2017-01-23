
/*
 * http://quiz.geeksforgeeks.org/linked-list-set-1-introduction/
 */

class LinkedList_BasicProg 
{

	Node head;
	public static class Node
	{
		int data;
		Node next;

		Node(int d)
		{
			data = d;
			next = null;
		}
	}
	
	public void printList()
	{
		Node n = head;
		while(n!=null)
		{
			System.out.println(n.data+" ");
			n = n.next;
		}
	}


	public static void main(String[] args) 
	{
		LinkedList_BasicProg ob = new LinkedList_BasicProg();
		
		ob.head = new Node(1);
		Node second = new Node(2);
		Node third = new Node(3);

		ob.head.next = second;
		second.next = third;
		
		System.out.println("Linked List is ");
		ob.printList();
	}

}
