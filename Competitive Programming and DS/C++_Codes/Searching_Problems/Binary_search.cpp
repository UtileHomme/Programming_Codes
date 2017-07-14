#include <iostream>

using namespace std;

int main()
{
  int size,a[10],i,x,pos;
  cout<<"enter the size of the array"<<endl;
  cin>>size;

  int flag = 0;

  cout<<"enter the number that you wish to search";
  cin>>x;

  cout<<"enter the array"<<endl;
  for(i=0;i<size;i++)
  {
    cin >> a[i];
    cout<<endl;
  }


  cout<<"show the aray"<<endl;
  for(i=0;i<size;i++)
  {
    cout<<a[i]<<endl;
  }

  for(i=0;i<size;i++)
  {
    if(x==a[i])
    {
      flag = 1;
      pos = i+1;
      break;
    }
  }

  if(flag==1)
  {
    cout<<"Number found at position "<<pos;
  }
  else
  {
    cout<<"Number not found";
  }

  return 0;
}
