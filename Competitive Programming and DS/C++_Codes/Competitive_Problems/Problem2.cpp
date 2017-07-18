//http://practice.geeksforgeeks.org/problems/c-operators/0

#include <iostream>

using namespace std;

int main()
{
  int n,i=0,a,b;

  //enter test cases
  cin>>n;

  while(i<n)
  {
    int add=0,sub=0,div=0,prod=0;
    //enter the two numbers
    cin>>a>>b;

    add = a+b;

    //check which one is bigger and perform the operation
    if(a>b)
    {
      sub = a-b;
    }
    else
    {
      sub = b-a;
    }

    if(a>b)
    {
      div = int(a/b);
    }
    else
    {
      div = int(b/a);
    }

    prod = a*b;

    cout<<add<<endl<<sub<<endl<<div<<endl<<prod<<endl;
    i++;
  }
}
