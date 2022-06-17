#include <stdio.h>
void main(){
  int fac=1, num;

  printf("Input the number : ");
  scanf("%d",&num);

  fac= fact(num);
  printf("The Factorial of %d is: %d\n",num,fac);

}

int fact(int n)
{
  int i, f=1;
  for(i=1;i<=n;i++)
      f=f*i;

    return f;
}
