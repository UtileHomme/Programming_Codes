/*
 * http://www.geeksforgeeks.org/write-a-function-to-reverse-the-nodes-of-a-linked-list/
 */

public class ReverseLinkedList_Iterative {

	Node head;

	class Node
	{
		int data;
		Node next;

		Node(int d)
		{
			data = d;
			next = null;
		}
	}

	public void push(int new_data)
	{
		Node new_node = new Node(new_data);
		new_node.next = head;
		head = new_node;
	}

	Node reverse(Node node)
	{
		Node prev = null;
		Node curr = node;
		Node next = null;

		while(curr!=null)
		{
			next = curr.next;
			curr.next = prev;
			prev = curr;
			curr = next;
		}

		node = prev;
		return node;
	}

	void printList(Node head)
	{
		while(head!=null)
		{
			System.out.print(head.data + " ");
			head = head.next;
		}
	}
	public static void main(String[] args) 
	{
		ReverseLinkedList_Iterative ob = new ReverseLinkedList_Iterative();

		ob.push(20);
		ob.push(15);
		ob.push(45);
		ob.push(33);

		System.out.println("Given Linked list");
		ob.printList(ob.head);
		Node head1 = ob.reverse(ob.head);
		System.out.println("");
		System.out.println("Reversed linked list ");
		ob.printList(head1);
	}

}
