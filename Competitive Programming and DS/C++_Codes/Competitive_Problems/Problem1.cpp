// http://practice.geeksforgeeks.org/problems/searching-a-number/0

#include <iostream>

using namespace std;
#define MAX 1111

int main()
{
  //define the max size an array can hold


  //declaration of variables
  int testc,i=0,size,key,pos=0;
  int a[MAX];

  //input the number of test cases
  cin>>testc;

  while(i<testc)
  {
    //input the size of the array
    cin>>size;

    //input the number that you wish to search
    cin>>key;

    int k=0;
    //input the array
    for(k=0;k<size;k++)
    {
      cin>>a[k];
    }

    int j=0,flag=0;
    //logic of searching
    for(j=0;j<size;j++)
    {
      //if the key is found
      if(a[j]==key)
      {
        //make flag = 1
        flag=1;

        //get the appropriate position
        pos = j+1;
        break;
      }
    }
    int a =-1;
    //if found
    if(flag==1)
    {
      cout<<pos<<endl;
    }
    //if not found
    else
    {
      cout<<a<<endl;
    }

    i++;
  }
  return 0;
}
