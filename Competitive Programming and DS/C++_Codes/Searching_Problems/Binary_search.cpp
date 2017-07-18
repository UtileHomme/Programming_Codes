//http://www.geeksforgeeks.org/binary-search/

#include <iostream>

using namespace std;

#define MAX 1111

int main()
{
  int x,n,a[MAX];

  //Enter size of array
  cout<<"Enter the size of the array"<<endl;
  cin>>n;

  //Enter the element to be searched
  cout<<"Enter the element to be searched"<<endl;
  cin>>x;

  //Enter the array
  cout<<"Enter the array"<<endl;

  for(int i=0;i<n;i++)
  {
    cin>>a[i];
  }

  int l = 0;
  int h = n-1;
  int flag = 0;
  int mid=0;

  while(l<=h)
  {
   mid = l + (h-l)/2;

    //element found
    if(x==a[mid])
    {
      flag = 1;
      break;
    }
    else if(x<a[mid])
    {
      h = mid -1;
    }
    else
    {
      l = mid + 1;
    }
  }

  //element found
  if(flag==1)
  {
    cout<<"Element found at position "<<mid+1;
  }
  //element not found
  else
  {
    cout<<"Element not found";
  }




}
