/*
 * http://quiz.geeksforgeeks.org/search-an-element-in-a-linked-list-iterative-and-recursive/
 */


public class SearchElement_Recursive {

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

	public boolean search(Node head, int x)
	{
		if(head==null)
		{
			return false;
		}
		
		if(head.data == x)
		{
			return true;
		}
		
		return search(head.next,x);
	}


	public static void main(String[] args) 
	{
		SearchElement_Recursive ob = new SearchElement_Recursive();

		/*Use push() to construct below list
        14->21->11->30->10  */
		ob.push(10);
		ob.push(30);
		ob.push(11);
		ob.push(21);
		ob.push(14);

		if (ob.search(ob.head, 22))
			System.out.println("Element exists");
		else
			System.out.println("Element does not exist");
	}
}
