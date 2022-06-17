/* Open, Read and close a file: reading string by string */

# include <stdio.h>
int main()
{
         FILE *fp ;
         char data[100] ;
         printf( "Opening the file test.txt in read mode" ) ;
         fp = fopen( "test.txt", "r" ) ;
         if ( fp == NULL )
         {
                 printf( "Could not open file test.txt" ) ;
                 return 1;
         }
         printf( "Reading the file test.txt\n" ) ;
         while( fgets ( data, 50, fp ) != NULL )
            printf( "%s" , data ) ;
         printf("Closing the file test.txt") ;
         fclose(fp) ;
         return 0;
}
