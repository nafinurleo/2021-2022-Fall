#include <stdio.h>

int main ()
{
   FILE *fp;

   fp = fopen("file.txt","w+");
   fputs("This is tutorialspoint.com", fp);

   fseek( fp, 0, SEEK_SET );
   fputs(" C Program", fp);
   fclose(fp);

   return(0);
}
