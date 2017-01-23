/*
 * http://www.geeksforgeeks.org/write-a-function-to-reverse-the-nodes-of-a-linked-list/
 */

public class ReverseLinkedList_Recursive {

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

	Node reverseUtil(Node curr, Node prev)
	{
		if(curr.next==null)
		{
			head = curr;
			
			curr.next = prev;
			return null;
		}
		
		Node next1 = curr.next;
		curr.next = prev;
		
		reverseUtil(next1, curr);
		return head;
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
		ReverseLinkedList_Recursive ob = new ReverseLinkedList_Recursive();
		ob.push(20);
		ob.push(15);
		ob.push(45);
		ob.push(33);
 
        System.out.println("Original Linked list ");
        ob.printList(ob.head);
        Node res = ob.reverseUtil(ob.head, null);
        System.out.println("");
        System.out.println("");
        System.out.println("Reversed linked list ");
        ob.printList(res);
	}

}
