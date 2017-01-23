
/*
 * http://quiz.geeksforgeeks.org/delete-a-linked-list-node-at-a-given-position/
 */

public class DeletingNodeAtGivenPosition 
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

	void deleteNode(int position)
	{
		// If linked list is empty
		if(head==null)
		{
			return;
		}

		Node temp = head;

		// If head needs to be removed
		if(position == 1)
		{
			head = temp.next;
			return;
		}

		// Find previous node of the node to be deleted
		for(int i=0; temp!=null && i<position-1; i++)
		{
			temp = temp.next;
		}

		if(temp==null && temp.next==null)
		{
			return;
		}

		// Node temp->next is the node to be deleted
		// Store pointer to the next of node to be deleted
		Node next = temp.next.next;

		// Unlink the deleted node from list
		temp.next = next;	
	}

	public static void main(String[] args) 
	{
		DeletingNodeAtGivenPosition ob = new DeletingNodeAtGivenPosition();

		ob.push(7);
		ob.push(1);
		ob.push(3);
		ob.push(2);
		ob.push(8);

		System.out.println("\nCreated Linked list is:");
		ob.printList();

		ob.deleteNode(2); // Delete node at position 2

		System.out.println("\nLinked List after Deletion at position 2:");
		ob.printList();

	}

}
