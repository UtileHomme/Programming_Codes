/*
 * http://quiz.geeksforgeeks.org/search-an-element-in-a-linked-list-iterative-and-recursive/
 */
	
public class SearchElement_Iterative {

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
		Node curr = head;

		while(curr!=null)
		{
			if(curr.data==x)			//if the element is found
			{
				return true;
			}
			curr = curr.next;
		}

		return false;			//if element is not found
	}


	public static void main(String[] args) 
	{
		SearchElement_Iterative ob = new SearchElement_Iterative();

		/*Use push() to construct below list
        14->21->11->30->10  */
		ob.push(10);
		ob.push(30);
		ob.push(11);
		ob.push(21);
		ob.push(14);

		if (ob.search(ob.head, 21))
			System.out.println("Element exists");
		else
			System.out.println("Element does not exist");
	}

}


