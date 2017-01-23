
/*
 * http://quiz.geeksforgeeks.org/find-length-of-a-linked-list-iterative-and-recursive/
 */

public class LengthofLinkedList_Recursive
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

	  /* Returns count of nodes in linked list */
    public int getCountRec(Node node)
    {
        // Base case
        if (node == null)
            return 0;
 
        // Count is this node plus rest of the list
        return 1 + getCountRec(node.next);
    }
 
    /* Wrapper over getCountRec() */
    public int getCount()
    {
        return getCountRec(head);
    }
    
	public static void main(String[] args) 
	{
		LengthofLinkedList_Recursive ob = new LengthofLinkedList_Recursive();

		ob.push(7);
		ob.push(1);
		ob.push(3);
		ob.push(2);
		ob.push(8);

		System.out.println("\nCreated Linked list is:");
		ob.printList();
		System.out.println();

		System.out.println("Count of nodes is " +
                ob.getCount());

	}

}
