#include<stdio.h>

void Merge(int A[],int low,int mid,int high)
{
    int i,j,k;
    int B[100];

    i = low;
    j = mid + 1;
    k = low;

    while(i<=mid &&j<=high)
    {
       if(A[i]<=A[j])
       {
         B[k] =A[i];
         i++;
       }
       else
       {
         B[k] = A[j];
         j++;
       }
        k++;
    }

    while(j<=high)
    {
    B[k] = A[j];
    j++;
    k++;
    }

     for(i = low;i<=high;i++)
     {
        A[i] = B[i];
        j++;
        k++;
     }

     for(i low;i<=high;i++
     {
        A[i] = B[i];
     }
}
void MergeSort(intA[],int low,int high)
{
   int mid;

   if(low<high)
   {
       mid = (low + high) /2;

       MergeSort(A,low,mid);
       MergeSort(A,mid + 1,high};

       Merge(A,low,mid,high);
}
}

int main()
{

    int A[100];
    int n;
    int i;

    printf("Enter number of elements:");
    scanf("%d",&n);

    printf("Enter %d elements:\n",n);

    for(i=0;i<n;i++)
    {
      scanf("%d",&A[i]);
    }
    printf("\nBefore sorting:\n");

    for(i=0;i<n;i++)
    {
      printf("%d",A[i]);
    }

    MergeSort(A,0,n-1);

    printf("\n\nAfter sorting:\n");

    for(i=0;i<n;i++)
    {
        printf("%d",A[i]);
    }

    return 0;
    }
