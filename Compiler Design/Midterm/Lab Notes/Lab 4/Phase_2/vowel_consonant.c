#include <stdio.h>
#include <stdlib.h>

int main()
{
    FILE *fp;
    int vowel=0, consonant=0;
    char ch;
    char message[500];

    fp=fopen("input.txt","r");

    if(fp==NULL)
    {
        printf("Source can't be opened");
        exit(0);
    }
    while(!feof(fp))
    {
        fgets(message, 500, fp);
        printf("%s", message);
    }
    printf("\n\n");

    fseek(fp, 0, SEEK_SET);

    while(ch!=EOF)
    {
        ch=fgetc(fp);
        if((ch=='a')||(ch=='A')||(ch=='e')||(ch=='E')||(ch=='i')||(ch=='I')||(ch=='o') ||(ch=='O')||(ch=='u')||(ch=='U'))
        {
            vowel++;
            printf("(%c) ", ch);
        }
        else if((ch>=65&&ch<=90)||(ch>=97&&ch<=122))
        {
            consonant++;
            printf("%c ", ch);
        }
    }
    fclose(fp);
    printf("\n\nNumber of vowels are = %d\nNumber of consonants are = %d",vowel,consonant);
    return 0;
}
