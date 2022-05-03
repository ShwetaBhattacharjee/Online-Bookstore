#include<stdio.h>
#include<math.h>
double func(double x);
int main()
{
    double x1,x2,x0,f1=1,f2=1,f0,E=0.001,root,Error;
    char F1,F2,F0;
    int itr=1,i;

    while(f1*f2>0)
    {
        printf("Enter the value of x1=");
        scanf("%lf",&x1);
        printf("Enter the value of x2=");
        scanf("%lf",&x2);
        f1=func(x1);
        f2=func(x2);
        if(f1*f2>0)
            printf("Invalid. Try again.\n");
    }
    for(i=0; i<80; i++)
        printf("-");
    printf("\n\t\t  x0\t  x1\t  x2\tf0\tf1\tf2\tError\n");
    for(i=0; i<80; i++)
        printf("-");
    while(fabs((x2-x1)/x2)>E)
    {
        printf("iteration %d\t",itr);
        Error=fabs((x2-x1)/x2);
        x0=x1-((f1*(x2-x1))/(f2-f1));
        if(f1>0)
            F1='+';
        else F1='-';
        if(f2>0)
            F2='+';
        else F2='-';
        if(f0>0)
            F0='+';
        else F0='-';
        printf("%.3f\t%.3f\t%.3f\t%c\t%c\t%c\t%.3f\t\n",x0,x1,x2,F0,F1,F2,Error);
        f0=func(x0);
        if(f0==0)
        {
            root=f0;
            break;
        }
        else
        {
            if(f1*f0<0)
                x2=x0;
            else x1=x0;
            root=(x1+x2)/2;
        }
        itr++;
    }

    for(i=0; i<80; i++)
        printf("-");
    printf("\n\nApproximate root:%.3f\n",root);
}
double func(double x)
{
    return x*x-4*x-10;
}
