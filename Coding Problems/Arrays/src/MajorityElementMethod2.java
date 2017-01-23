/*
 * http://www.geeksforgeeks.org/majority-element/
 * 
 * 1. Finding a Candidate:
The algorithm for first phase that works in O(n) is known as Moore’s Voting Algorithm. 
Basic idea of the algorithm is if we cancel out each occurrence of an element e with all the 
other elements that are different from e then e will exist till end if it is a majority element.

findCandidate(a[], size)
1.  Initialize index and count of majority element
     maj_index = 0, count = 1
2.  Loop for i = 1 to size – 1
    (a) If a[maj_index] == a[i]
          count++
    (b) Else
        count--;
    (c) If count == 0
          maj_index = i;
          count = 1
3.  Return a[maj_index]
Above algorithm loops through each element and maintains a count of a[maj_index], 
If next element is same then increments the count, if next element is not same then decrements the count, 
and if the count reaches 0 then changes the maj_index to the current element and sets count to 1.
First Phase algorithm gives us a candidate element. 
In second phase we need to check if the candidate is really a majority element.
 Second phase is simple and can be easily done in O(n).
  We just need to check if count of the candidate element is greater than n/2.
 * 
 * 
 * 2. Check if the element obtained in step 1 is majority

printMajority (a[], size)
1.  Find the candidate for majority
2.  If candidate is majority. i.e., appears more than n/2 times.
       Print the candidate
3.  Else
       Print "NONE"
       
Time Complexity: O(n)
Auxiliary Space : O(1)
 */

public class MajorityElementMethod2 {
	void printMajority(int a[], int n) {
		int cand = findCandidate(a, n);

		if (isMajority(a, n, cand)) {
			System.out.println("Majority element is " + cand);
		} else {
			System.out.println("No majority element");
		}
	}

	int findCandidate(int a[], int n) {
		int Maj_index = 0, cnt = 1;

		for (int i = 1; i < n; i++) {
			if (a[Maj_index] == a[i]) {
				cnt++;
			} else {
				cnt--;
			}
			if (cnt == 0) {
				Maj_index = i;
				cnt = 1;
			}
		}
		return a[Maj_index];
	}

	boolean isMajority(int a[], int n, int cand) {
		int cnt = 0;
		for (int i = 0; i < n; i++) {
			if (a[i] == cand) {
				cnt++;
			}
		}

		if (cnt > (n / 2)) {
			return true;
		} else {
			return false;
		}
	}

	public static void main(String args[]) {
		int a[] = { 2, 2, 3, 5, 2, 2, 6 };
		int n = a.length;

		MajorityElementMethod2 ob = new MajorityElementMethod2();
		ob.printMajority(a, n);
	}
}
