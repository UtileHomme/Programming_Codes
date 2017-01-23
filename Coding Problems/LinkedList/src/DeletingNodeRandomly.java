/*
 * http://quiz.geeksforgeeks.org/linked-list-set-3-deleting-node/
 */

public class DeletingNodeRandomly 
{

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

	public void printList()
	{
		Node temp = head;
		while(temp!=null)
		{
			System.out.print(temp.data + " ");
			temp = temp.next;

		}
	}

	void deleteNode(int key)
	{
		Node temp = head, prev=null;

		if(temp!=null && temp.data==key)
		{
			head = temp.next;
			return;
		}

		while(temp!=null && temp.data!=key)
		{
			prev = temp;
			temp = temp.next;
		}

		if(temp==null)
		{
			System.out.println("key is not present");
		}

		prev.next = temp.next;
	}

	public static void main(String[] args) 
	{
		DeletingNodeRandomly ob = new DeletingNodeRandomly();

		ob.push(7);
		ob.push(1);
		ob.push(3);
		ob.push(2);

		System.out.println("\nCreated Linked list is:");
		ob.printList();

		ob.deleteNode(1); // Delete node at position 3

		System.out.println("\nLinked List after Deletion at position 4:");
		ob.printList();

	}

}
