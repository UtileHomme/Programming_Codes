  #include<iostream>

  using namespace std;
  #define MAX 1111

  int bsearch(int a[],int n,int x)
  {
    int i;
    for(i=0;i<n;i++)
    {
      //if found
      if(a[i]==x)
      {
        return i+1;
      }
    }
    return -1;
  }

  int main()
  {
    int n,x,a[MAX],pos;

    //enter the size of the array
    cout<<"Enter the size of the array"<<endl;
    cin>>n;

    //enter the element you wish to search
    cout<<"Enter the element you wish to search"<<endl;
    cin>>x;

    //Enter the array
    cout<<"Enter the array elements"<<endl;
    for(int i=0;i<n;i++)
    {
      cin>>a[i];
    }

    pos = bsearch(a,n,x);

    if(pos==-1)
    {
      cout<<"Element not found";
    }
    else
    {
      cout<<"Element found at position "<<pos;
    }
  }
