/*To create a .txt file that will store some student names and obtained marks*/
#include <stdio.h>

int main()
{
   char name[50];
   int marks, i, num;

   printf("Enter number of students: ");
   scanf("%d", &num);

   FILE *fptr;
   fptr = (fopen("student.txt", "a"));
   if(fptr == NULL)
   {
       printf("Error!");
       exit(1);
   }

   for(i = 0; i < num; ++i)
   {
      printf("For student%d\nEnter name: ", i+1);
      scanf("%s", name);

      printf("Enter marks: ");
      scanf("%d", &marks);

      fprintf(fptr,"\nName: %s Marks: %d \n", name, marks);
   }

   fclose(fptr) ;
   /*now, read the student.txt file and show the information
   in the console(output screen)*/

    char data[500];

    printf( "Opening the file student.txt in read mode" ) ;
    fptr = fopen( "student.txt", "r" ) ;
    printf( "Reading the file student.txt\n" ) ;
    while( fgets ( data, 500, fptr ) != NULL )
    printf( "%s" , data ) ;

    fclose(fptr);
}
